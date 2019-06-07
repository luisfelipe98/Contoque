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

}

?>
