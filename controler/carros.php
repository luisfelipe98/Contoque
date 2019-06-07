<?php

class Carros {

  function getCarros() {
    try {
      $query = "SELECT * FROM carro";
      $conexao = Conexao::getConnection();
      $resultado = $conexao->query($query);
      $lista = $resultado->fetchAll();
      return $lista;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  function getCarro(Carro $car) {
    try {
      $query = "SELECT * FROM carro WHERE id = :id";
      $conexao = Conexao::getConnection();
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(":id", $car->getId());
      $stmt->execute();
        if ($stmt->rowCount() == 1) {
          $resultado = $stmt->fetch();
          return $resultado;
        } else {
          throw new PDOException("Carro não encontrado");
        }
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  function apagarCarro(Carro $car) {
    try {
      $query = "DELETE FROM carro WHERE id = :id";
      $conexao = Conexao::getConnection();
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(":id", $car->getId());
      $stmt->execute();
        if ($stmt->rowCount() == 1) {
          return "Carro apagado com sucesso";
        } else {
          throw new PDOException("Erro ao apagar o carro");
        }
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  function adicionarCarro(Carro $car) {
    try {
      $query = "INSERT INTO carro (modelo, ano, combustivel, cor, isNovo, portas,
                motor, cambio, lugares, qtdeMin, qtdeMax, qtdeAtu, manutencao)
                VALUES (:modelo, :ano, :combustivel, :cor, :isNovo, :portas,
                :motor, :cambio, :lugares, :qtdeMin, :qtdeMax, :qtdeAtu, :manutencao)";
      $conexao = Conexao::getConnection();
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(":modelo", $car->getModelo());
      $stmt->bindValue(":ano", $car->getAno());
      $stmt->bindValue(":combustivel", $car->getCombustivel());
      $stmt->bindValue(":cor", $car->getCor());
      $stmt->bindValue(":isNovo", $car->getIsNovo());
      $stmt->bindValue(":portas", $car->getPortas());
      $stmt->bindValue(":motor", $car->getMotor());
      $stmt->bindValue(":cambio", $car->getCambio());
      $stmt->bindValue(":lugares", $car->getLugares());
      $stmt->bindValue(":qtdeMin", $car->getQtdeMin());
      $stmt->bindValue(":qtdeMax", $car->getQtdeMax());
      $stmt->bindValue(":qtdeAtu", $car->getQtdeAtu());
      $stmt->bindValue(":manutencao", $car->getManutencao());
      $stmt->execute();
      if ($stmt->rowCount() == 1) {
        return "Carro adicionado com sucesso";
      } else {
        throw new PDOException("Erro ao adicionar o carro");
      }
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  function atualizarCarro(Carro $car) {
    try {
      $query = "UPDATE carro SET(
                modelo = :modelo,
                ano = :ano,
                combustivel = :combustivel,
                cor = :cor,
                isNovo = :isNovo,
                portas = :portas,
                motor = :motor,
                cambio = :cambio,
                lugares = :lugares,
                qtdeMin = :qtdeMin,
                qtdeMax = :qtdeMax,
                qtdeAtu = :qtdeAtu,
                manutencao = :manutencao) WHERE id = :id";
      $conexao = Conexao::getConnection();
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(":modelo", $car->getModelo());
      $stmt->bindValue(":ano", $car->getAno());
      $stmt->bindValue(":combustivel", $car->getCombustivel());
      $stmt->bindValue(":cor", $car->getCor());
      $stmt->bindValue(":isNovo", $car->getIsNovo());
      $stmt->bindValue(":portas", $car->getPortas());
      $stmt->bindValue(":motor", $car->getMotor());
      $stmt->bindValue(":cambio", $car->getCambio());
      $stmt->bindValue(":lugares", $car->getLugares());
      $stmt->bindValue(":qtdeMin", $car->getQtdeMin());
      $stmt->bindValue(":qtdeMax", $car->getQtdeMax());
      $stmt->bindValue(":qtdeAtu", $car->getQtdeAtu());
      $stmt->bindValue(":manutencao", $car->getManutencao());
      $stmt->bindValue(":id", $car->getId());
      $stmt->execute();
      if ($stmt->rowCount() == 1) {
        return "Carro atualizado com sucesso";
      } else {
        throw new PDOException("Erro ao atualizar o carro");
      }
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  function quantosCarros() {
    try {
      $query = "SELECT COUNT(id) FROM carro";
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
