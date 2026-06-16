

<header>

    <img src="assets/imagens/TDK-logo-photoaidcom-cropped.jpeg" alt="" class="img-header">

    <h1>Olá, <?php echo $_SESSION['login']; ?>!</h1>

    <nav class="nav">
        <a href="index.php" class="nav-botao">Página Inicial</a>
        <a href="cardapio.php" class="nav-botao">Cardápio</a>
        <a href="sobrenos.php" class="nav-botao">Sobre nós</a>
        <a href="controllers/con_usuario.php?funcao=logout" class="nav-botao">Sair</a>
    </nav>

</header>