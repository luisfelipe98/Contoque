<?php

require './Classes/Veiculo.class.php';
require './Classes/Carro.class.php';
require './Classes/Moto.class.php';

$carro = new Carro('Fit', 2015, 'F', 'Preto', true, 5, 10, 20, 1.4, 'A');

echo '<pre>';
  var_dump($carro);
echo '</pre>';

 ?>
