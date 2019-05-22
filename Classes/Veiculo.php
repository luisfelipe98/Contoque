<?php

abstract class Veiculo {

  private $modelo;
  private $ano;
  private $combustivel;
  private $cor;
  private $isNovo;
  private $lugares;
  private $qtdeMin;
  private $qtdeMax;

  function __construct ($modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $qtdeMin, $qtdeMax) {
    $this->modelo = $modelo;
    $this->ano = $ano;
    $this->combustivel = $combustivel;
    $this->cor = $cor;
    $this->isNovo = $isNovo;
    $this->lugares = $lugares;
    $this->qtdeMin = $qtdeMin;
    $this->qtdeMax = $qtdeMax;
  }

}

?>
