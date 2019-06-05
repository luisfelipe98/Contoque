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

}

 ?>
