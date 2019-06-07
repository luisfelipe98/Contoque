<?php

require '../req.php';
require 'motos.php';

$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$combustivel = $_POST['combustivel'];
$cor = $_POST['cor'];
$isNovo = $_POST['isNovo'];
$lugares = $_POST['lugares'];
$cambio = $_POST['cambio'];
$qtdeMin = $_POST['qtdeMin'];
$qtdeMax = $_POST['qtdeMax'];
$qtdeAtu = $_POST['qtdeAtu'];
$manutencao = $_POST['manutencao'];
$cilindradas = $_POST['cilindradas'];

if ($qtdeAtu < $qtdeMin) {
  header("Location: ../view/motos.php?msg=Quantidade atual menor do que a permitida");
  die();
}

$moto = new Moto("", $modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $cambio, $qtdeMin,
                    $qtdeMax, $qtdeAtu, $manutencao, $cilindradas);

$motos = new Motos();
$resultado = $motos->adicionarMoto($moto);

header("Location: ../view/motos.php?msg=" . $resultado);
die();

?>
