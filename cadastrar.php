<?php ///include_once 'includes/header.php'; ?>


<link rel="stylesheet" href="assets/css/loguin.css?v=<?php echo time(); ?>">

<body>
    <div class="div-form">
    
        <form action="controllers/con_usuario.php?funcao=cadastrar" method="post" class="form">

            <img src="assets/imagens/TDK-logo-photoaidcom-cropped.jpeg" alt="">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Email" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Cadastrar" class="logar">

            <a href="login.php">Logar</a>
        </form>
    
    </div>
</body>

<?php ///include_once 'includes/footer.php'; ?>
