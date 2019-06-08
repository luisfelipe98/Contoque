
<?php //require '../req.php'; ?>
<aside class="sidebar">

    <header class="logo-menu">
        <img src="../media/logo-honda-branco.png" alt="Logo SeC SP">
    </header>

    <div class="usuario-logado">
        <?php //echo $_SESSION["nome"]; ?>
    </div>

    <nav class="menu-sidebar">
        <ul class="menu-sidebar__lista">
            <li class="menu-sidebar__item">
                <a class="menu-sidebar__link" href="../view/dash.php">Painel</a>
            </li>
            <li class="menu-sidebar__item">
                <a class="menu-sidebar__link" href="../view/carros.php">Carros</a>
            </li>
            <li class="menu-sidebar__item">
                <a class="menu-sidebar__link" href="../view/motos.php">Motos</a>
            </li>
            <li class="menu-sidebar__item">
                <a class="menu-sidebar__link" href="../view/entrada.php">Entrada</a>
            </li>
            <li class="menu-sidebar__item">
                <a class="menu-sidebar__link" href="../view/saida.php">Saída</a>
            </li>
            <li class="menu-sidebar__item">
                <a class="menu-sidebar__link" href="../controler/logout.php">Sair</a>
            </li>
        </ul>
    </nav>

</aside>
