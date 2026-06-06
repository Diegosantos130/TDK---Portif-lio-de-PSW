<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/loguin.css?v=<?php echo time(); ?>">

</head>
<body>

    <div class="div-form">

        <form action="controllers/con_usuario.php?funcao=logar" method="post" class="form">

            <img src="assets/imagens/TDK-logo-photoaidcom-cropped.jpeg" alt="">

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <input type="submit" value="Logar" class="logar">

            <?php

            if(isset($_SESSION['erro'])){

                echo "<p>" . $_SESSION['erro'] . "</p>";

                unset($_SESSION['erro']);
            }

            ?>

            <a href="cadastrar.php">Cadastrar-se</a>

        </form>

    </div>

</body>
</html>