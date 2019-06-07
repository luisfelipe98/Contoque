<?php

class Moto extends Veiculo {

  private $cilindradas;

  function __construct ($id, $modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $cambio, $qtdeMin, $qtdeMax, $qtdeAtu, $manutencao, $cilindradas) {
    parent::__construct ($id, $modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $cambio, $qtdeMin, $qtdeMax, $qtdeAtu, $manutencao);
    $this->cilindradas = $cilindradas;
  }

  public function getCilindradas() {
    return $this->cilindradas;
  }

  public function calcManutencao() {
    return 300 + parent::getManutencao();
  }

}
