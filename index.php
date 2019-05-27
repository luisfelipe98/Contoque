<?php
require 'req.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="vendor/css/site.css">
  <link rel="stylesheet" href="vendor/css/login.css">

  <link href="https://fonts.googleapis.com/css?family=Signika:400,700&display=swap" rel="stylesheet">
  <title>Contoque</title>
</head>
<body>

  <div class="wrapper">
      <form action="controler/VerificaLogin.php" method="post" autocomplete="off" class="form-login">
        <img src="media/logo-honda.png" alt="Logo Honda" class="logo_login">
        <!--<h1 class="titulo_login">Login</h1>-->
        <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="off" required>
        <input type="password" name="senha" id="senha" placeholder="Senha" autocomplete="off" required>
        <input type="submit" value="Login" name="login" class="btn btn_enviar">
      </form>
  </div>
</body>
</html>
