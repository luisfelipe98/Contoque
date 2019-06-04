<?php

session_start();

//Validando se não tem alguém logado na aplicação
if ($_SESSION["logado"] != 1) {
  header("Location: ../index.php");
}


?>
