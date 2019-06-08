<?php
require_once "../req.php";
require_once "../controler/carros.php";
require_once "../controler/motos.php";

$carros = new Carros();
$quantidadeCarros = $carros->quantosCarros();
$ultCarro = $carros->ultimoCarro();

$motos = new Motos();
$qntMotos = $motos->quantasMotos();


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#25568d">

    <!-- FONTES / ICONES -->
    <link href="https://fonts.googleapis.com/css?family=Signika:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../vendor/css/site.css">
    <link rel="stylesheet" href="../../ContoqueHonda/view/tema/css/dash.css">

    <title>Contoque | Dashboard</title>
</head>

<body>
<div class="wrapper">
    <?php require_once "aside.php"?>

    <section class="main-painel">

        <section class="conteudo-painel">
            <header class="header-painel">
                <div>Ultimo Acesso: <?php date_default_timezone_set('America/Sao_Paulo'); echo date("d/m/Y H:i");?></div>
                <div class="breadcrumbs">
                    <!-- <a href="{$PAG_HOME}">Início</a> • {$PAGINA}-->
                </div>
                <p>Versão Beta</p>
            </header>
            <section class="painel-principal">
                <header class="cabecalho-painel-principal">
                    <div class="titulos-painel-principal">
                        <h2 class="titulo-painel-principal">PAINEL</h2>
                        <!--<h3 class="subtitulo-painel-principal"></h3>-->
                    </div>
                </header>
                <div class="cards">
                    <div class="card">
                        <h2>CARROS</h2>
                        <img src="../media/civic.png" alt="civic">
                        <h3 class="subtitulo-card"><?php foreach ($quantidadeCarros as $qnt){
                                echo $qnt[0];
                            } ?></h3>
                    </div>

                    <div class="card">
                        <h2>MOTOS</h2>
                        <img src="../media/rr.png" alt="RR 1000">
                        <h3 class="subtitulo-card"><?php foreach ($quantidadeCarros as $qnt){
                                echo $qnt[0];
                            } ?></h3>
                    </div>

                </div>
            </section>

        </section>

    </section>
</div>

</body>
</html>
