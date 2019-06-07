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

}

 ?>
