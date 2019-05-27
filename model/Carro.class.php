<?php

class Carro extends Veiculo {

  private $portas;
  private $motor;
  private $cambio;

  function __construct ($id, $modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $qtdeMin, $qtdeMax, $qtdeAtu, $manutencao, $motor, $cambio, $portas) {
    parent::__construct ($id, $modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $qtdeMin, $qtdeMax, $qtdeAtu, $manutencao);
    $this->motor = $motor;
    $this->cambio = $cambio;
    $this->portas = $portas;
  }

  public function getMotor() {
    return $this->motor;
  }

  public function getCambio() {
    return $this->cambio;
  }

  public function getPortas() {
    return $this->portas;
  }

  public function calcManutencao() {
    return 300 + parent::getManutencao();
  }

}
