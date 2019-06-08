<?php
require_once "../req.php";
require_once "../controler/motos.php";
$motos = new Motos();
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

    <title>Contoque | Motos</title>
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
                        <h2 class="titulo-painel-principal">MOTOS</h2>
                        <h3 class="subtitulo-painel-principal">Listagem de Motos</h3>
                    </div>
                </header>
                <table class="tabela">
                    <thead class="tabela-cabecalho">
                    <tr class="tabela-titulo">
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Combustível</th>
                        <th>Cor</th>
                        <th>Novo?</th>
                        <th>Lugares</th>
                        <th>Cilindradas</th>
                        <th>Cambio</th>
                        <th>Qntd Mínima</th>
                        <th>Qntd Máxima</th>
                        <th>Qntd Atual</th>
                        <th>Manutenção</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $resultado = $motos->getMotos();
                    foreach( $resultado as $item) :
                        ?>
                        <tr class="linha-tabela">
                            <td><?php echo $item['modelo'];?></td>
                            <td><?php echo $item['ano'];?></td>
                            <td><?php echo $item['combustivel'];?></td>
                            <td><?php echo $item['cor'];?></td>
                            <td><?php
                                if ($item['isNovo'] == 1){
                                    echo "Sim";
                                }else{
                                    echo "Não";
                                };?></td>
                            <td><?php echo $item['lugares'];?></td>
                            <td><?php echo $item['cilindradas'];?></td>
                            <td><?php echo $item['cambio'];?></td>
                            <td><?php echo $item['qtdeMin'];?></td>
                            <td><?php echo $item['qtdeMax'];?></td>
                            <td><?php echo $item['qtdeAtu'];?></td>
                            <td>R$ <?php echo number_format($item['manutencao'],2, ",", ".");?></td>
                        </tr>

                    <?php endforeach;?>
                    </tbody>
                </table>
            </section>
        </section>

    </section>
</div>

</body>
</html>
