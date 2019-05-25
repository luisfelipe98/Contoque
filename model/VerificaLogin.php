<?php

require '../req.php';

$login = $_POST['email'];
$senha = $_POST['senha'];

$login = "luis@honda.com.br";
$senha = "honda123";

$query = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";

$conexao = Conexao::getConnection();
$stmt = $conexao->prepare($query);
$stmt->bindValue(":email", $login);
$stmt->bindValue(":senha", $senha);
$stmt->execute();
$lista = $stmt->fetch();

var_dump($lista);



?>
