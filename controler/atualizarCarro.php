<?php

require '../req.php';
require 'carros.php';

$id = $_POST['id'];
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
$motor = $_POST['motor'];
$portas = $_POST['portas'];

if ($qtdeAtu < $qtdeMin) {
  header("Location: ../view/carros.php?msg=Quantidade atual menor do que a permitida");
  die();
}

$carro = new Carro($id, $modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $cambio, $qtdeMin,
                    $qtdeMax, $qtdeAtu, $manutencao, $motor, $portas);

$carros = new Carros();
$resultado = $carros->atualizarCarro($carro);

header("Location: ../view/carros.php?msg=" . $resultado);
die();

?>
