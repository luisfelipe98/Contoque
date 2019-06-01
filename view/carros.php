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
    <link rel="stylesheet" href="../vendor/css/dash.css">

    <title>Contoque | Carros</title>
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
                        <h2 class="titulo-painel-principal">Carros</h2>
                        <h3 class="subtitulo-painel-principal">Listagem dos Carros</h3>
                    </div>
                </header>
            </section>
        </section>

    </section>
</div>

</body>
</html>
