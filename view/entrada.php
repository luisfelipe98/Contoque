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

    <title>Contoque | Entrada</title>
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
                        <h2 class="titulo-painel-principal">ENTRADA</h2>
                        <h3 class="subtitulo-painel-principal">Entrada de Veículos</h3>
                    </div>
                </header>
                <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

                    <div class="campos-admin">
                        <div class="campo-admin">
                            <label for="modelo">Modelo</label>
                            <input type="text" name="modelo" id="modelo" required>
                        </div>

                        <div class="campo-admin">
                            <label for="ano">Ano</label>
                            <select name="ano" id="ano">
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                            </select>
                        </div>

                        <div class="campo-admin">
                            <label for="combustivel">Combustível</label>
                            <select name="combustivel" id="combustivel" required>
                                <option value="F">Flex</option>
                                <option value="G">Gasolina</option>
                                <option value="E">Elétrico</option>
                            </select>
                        </div>
                        <div class="campo-admin">
                            <label for="cor">Cor</label>
                            <select name="cor" id="cor">
                                <option value="Preto">Preto</option>
                                <option value="Prata">Prata</option>
                                <option value="Branco">Branco</option>
                                <option value="Vermelho">Vermelho</option>
                                <option value="Azul">Azul</option>
                            </select>
                        </div>
                        <div class="campo-admin">
                            <label for="novo">É Novo?</label>
                            <select name="novo" id="novo">
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                        </div>

                    </div>

                    <div class="campos-admin">

                        <div class="campo-admin">
                            <label for="portas">Portas</label>
                            <select name="portas" id="portas" required>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <div class="campo-admin">
                            <label for="motor">Motor</label>
                            <select name="motor" id="motor" required>
                                <option value="1.0">1.0</option>
                                <option value="1.4">1.4</option>
                                <option value="1.5">1.5</option>
                                <option value="1.6">1.6</option>
                                <option value="1.8">1.8</option>
                                <option value="2.0">2.0</option>
                                <option value="2.5">2.5</option>
                            </select>
                        </div>

                        <div class="campo-admin">
                            <label for="cambio">Cambio</label>
                            <select name="cambio" id="cambio" required>
                                <option value="M">Manual</option>
                                <option value="A">Automático</option>
                            </select>
                        </div>

                        <div class="campo-admin">
                            <label for="lugares">Lugares</label>
                            <select name="lugares" id="lugares" required>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="7">7</option>
                            </select>
                        </div>

                        <div class="campo-admin">
                            <label for="quantidade">Quantidade</label>
                            <input type="number" name="quantidade" id="quantidade" min="1" max="100" maxlength="3" required>
                        </div>
                    </div>
                    <button type="submit">Entrar</button>

                </form>
            </section>
        </section>

    </section>
</div>

</body>
</html>
