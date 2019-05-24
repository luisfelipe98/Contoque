<?php

class Moto extends Veiculo {

  private $cilindradas;

  function __construct ($modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $qtdeMin, $qtdeMax, $cilindradas) {
    parent::__construct ($modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $qtdeMin, $qtdeMax);
    $this->cilindradas = $cilindradas;
  }

  public function getCilindradas() {
    return $this->cilindradas;
  }

}
