<?php

define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_DATABASE', 'honda');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

  class Conexao {

    private $connection;

    public static function getConnection() {

      $conexao = new PDO(DB_DRIVER . ':host=' . DB_HOSTNAME . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
      $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conexao;

    }

  }
