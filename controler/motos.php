<?php

class Motos {

  function getMotos() {
    try {
      $query = "SELECT * FROM moto";
      $conexao = Conexao::getConnection();
      $resultado = $conexao->query($query);
      $lista = $resultado->fetchAll();
      return $lista;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  function getMoto(Moto $moto) {
    try {
      $query = "SELECT * FROM moto WHERE id = :id";
      $conexao = Conexao::getConnection();
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(":id", $moto->getId());
      $stmt->execute();
        if ($stmt->rowCount() == 1) {
          $resultado = $stmt->fetch();
          return $resultado;
        } else {
          throw new PDOException("Moto não encontrada");
        }
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  function apagarMoto(Moto $moto) {
    try {
      $query = "DELETE FROM moto WHERE id = :id";
      $conexao = Conexao::getConnection();
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(":id", $moto->getId());
      $stmt->execute();
        if ($stmt->rowCount() == 1) {
          return "Moto apagada com sucesso";
        } else {
          throw new PDOException("Erro ao apagar a moto");
        }
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  function adicionarMoto(Moto $moto) {
    try {
      $query = "INSERT INTO moto (modelo, ano, combustivel, cor, isNovo,
                lugares, cilindradas, cambio, qtdeMin, qtdeMax, qtdeAtu, manutencao)
                VALUES (:modelo, :ano, :combustivel, :cor, :isNovo, :lugares,
                :clindradas, :cambio, :qtdeMin, :qtdeMax, :qtdeAtu, :manutencao)";
      $conexao = Conexao::getConnection();
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(":modelo", $moto->getModelo());
      $stmt->bindValue(":ano", $moto->getAno());
      $stmt->bindValue(":combustivel", $moto->getCombustivel());
      $stmt->bindValue(":cor", $moto->getCor());
      $stmt->bindValue(":isNovo", $moto->getIsNovo());
      $stmt->bindValue(":lugares", $moto->getLugares());
      $stmt->bindValue(":cilindradas", $moto->getCilindradas());
      $stmt->bindValue(":cambio", $moto->getCambio());
      $stmt->bindValue(":qtdeMin", $moto->getQtdeMin());
      $stmt->bindValue(":qtdeMax", $moto->getQtdeMax());
      $stmt->bindValue(":qtdeAtu", $moto->getQtdeAtu());
      $stmt->bindValue(":manutencao", $moto->getManutencao());
      $stmt->execute();
      if ($stmt->rowCount() == 1) {
        return "Moto adicionado com sucesso";
      } else {
        throw new PDOException("Erro ao adicionar a moto");
      }
    } catch (PDOException $e) {
      return $e->getMessage();
    }

    function atualizarMoto(Moto $moto) {
      try {
        $query = "UPDATE moto SET (
                  modelo = :modelo,
                  ano = :ano,
                  combustivel = :combustivel,
                  cor = :cor,
                  isNovo = :isNovo,
                  lugares = :lugares,
                  cilindradas = :cilindradas,
                  cambio = :cambio,
                  qtdeMin = :qtdeMin,
                  qtdeMax = :qtdeMax,
                  qtdeAtu = qtdeAtu,
                  manutencao = :manutencao) WHERE id = :id";
        $conexao = Conexao::getConnection();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":modelo", $moto->getModelo());
        $stmt->bindValue(":ano", $moto->getAno());
        $stmt->bindValue(":combustivel", $moto->getCombustivel());
        $stmt->bindValue(":cor", $moto->getCor());
        $stmt->bindValue(":isNovo", $moto->getIsNovo());
        $stmt->bindValue(":lugares", $moto->getLugares());
        $stmt->bindValue(":cilindradas", $moto->getCilindradas());
        $stmt->bindValue(":cambio", $moto->getCambio());
        $stmt->bindValue(":qtdeMin", $moto->getQtdeMin());
        $stmt->bindValue(":qtdeMax", $moto->getQtdeMax());
        $stmt->bindValue(":qtdeAtu", $moto->getQtdeAtu());
        $stmt->bindValue(":manutencao", $moto->getManutencao());
        $stmt->bindValue(":id", $moto->getId());
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
          return "Moto atualizado com sucesso";
        } else {
          throw new PDOException("Erro ao atualizar a moto");
        }
      } catch (PDOException $e) {
        return $e->getMessage();
      }
  }

  function quantasMotos() {
    try {
      $query = "SELECT COUNT(id) FROM moto";
      $conexao = Conexao::getConnection();
      $resultado = $conexao->query($query);
      $lista = $resultado->fetchAll();
      return $lista;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

}

?>
