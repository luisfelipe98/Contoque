<?php

abstract class Veiculo {

  private $id;
  private $modelo;
  private $ano;
  private $combustivel;
  private $cor;
  private $isNovo;
  private $lugares;
  private $qtdeMin;
  private $qtdeMax;
  private $qtdeAtu;
  private $manutencao;

  function __construct ($id, $modelo, $ano, $combustivel, $cor, $isNovo, $lugares, $qtdeMin, $qtdeMax, $qtdeAtu, $manutencao) {
    $this->id = $id;
    $this->modelo = $modelo;
    $this->ano = $ano;
    $this->combustivel = $combustivel;
    $this->cor = $cor;
    $this->isNovo = $isNovo;
    $this->lugares = $lugares;
    $this->qtdeMin = $qtdeMin;
    $this->qtdeMax = $qtdeMax;
    $this->qtdeAtu = $qtdeAtu;
    $this->manutencao = $manutencao;
  }

  function getId() {
    return $this->id;
  }

  function getModelo() {
    return $this->modelo;
  }

  function getAno() {
    return $this->ano;
  }

  function getCombustivel() {
    return $this->combustivel;
  }

  function getCor() {
    return $this->cor;
  }

  function getIsNovo() {
    return $this->isNovo;
  }

  function getLugares() {
    return $this->lugares;
  }

  function getQtdeMin() {
    return $this->qtdeMin;
  }

  function getQtdeMax() {
    return $this->qtdeMax;
  }

  function getQtdeAtu() {
    return $this->qtdeAtu;
  }

  function getManutencao() {
    return $this->manutencao;
  }

  abstract public function calcManutencao();
}
