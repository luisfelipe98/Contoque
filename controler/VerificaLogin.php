<?php

require '../req.php';

$login = $_POST['email'];
$senha = $_POST['senha'];

try {

  $query = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";

  $conexao = Conexao::getConnection();
  $stmt = $conexao->prepare($query);
  $stmt->bindValue(":email", $login);
  $stmt->bindValue(":senha", $senha);
  $stmt->execute();

  if ($stmt->rowCount() == 1) {
    $lista = $stmt->fetch();
    session_start();
    $_SESSION["logado"] = 1;
    $_SESSION["nome"] = $lista["nome"];
    header("Location: ../view/dash.php");
  } else {
    throw new PDOException("Usuário inexistente");
  }

} catch (PDOException $e) {
  header("Location: ../index.php?msg=". $e->getMessage());
}

?>
