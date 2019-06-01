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

  } else {
    throw new PDOException("Usuário inexistente");
  }


  echo "<pre>";
  var_dump($lista);
  echo "</pre>";

} catch (PDOException $e) {
  echo  $e->getMessage();
}
echo "<pre>";
var_dump($stmt->rowCount());
echo "</pre>";


?>
