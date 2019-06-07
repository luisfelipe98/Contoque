<?php

class Carro extends Veiculo {

  private $portas;
  private $motor;

  function __construct ($id, $modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $cambio, $qtdeMin, $qtdeMax, $qtdeAtu, $manutencao, $motor, $portas) {
    parent::__construct ($id, $modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $cambio, $qtdeMin, $qtdeMax, $qtdeAtu, $manutencao);
    $this->motor = $motor;
    $this->cambio = $cambio;
    $this->portas = $portas;
  }

  public function getMotor() {
    return $this->motor;
  }

  public function getPortas() {
    return $this->portas;
  }

  public function calcManutencao() {
    return 300 + parent::getManutencao();
  }

}
