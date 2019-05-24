<?php

class Carro extends Veiculo {

  private $motor;
  private $cambio;

  function __construct ($modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $qtdeMin, $qtdeMax, $motor, $cambio) {
    parent::__construct ($modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $qtdeMin, $qtdeMax);
    $this->motor = $motor;
    $this->cambio = $cambio;
  }

  public function getMotor() {
    return $this->motor;
  }

  public function getCambio() {
    return $cambio;
  }

}
