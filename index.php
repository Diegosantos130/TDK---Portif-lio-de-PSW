
<?php
    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: login.php');
        exit;
    }

   // Lê o arquivo JSON que contém os comentários.
    $comentarios = json_decode(
        file_get_contents('data/comentario.json'),
        true
    );

    // Caso o arquivo esteja vazio ou inválido,
    // cria um array vazio para evitar erros.
    if(!$comentarios){
        $comentarios = [];
    }

    $ultimos_comentarios = [];

    // Conta quantos comentários existem no total.
    $total = count($comentarios);

    // Percorre todos os comentários cadastrados.
    foreach($comentarios as $indice => $comentario){

        // Seleciona apenas os 6 últimos comentários.
        if($indice >= $total - 6){

            // Adiciona o comentário ao array de últimos comentários.
            $ultimos_comentarios[] = $comentario;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDK</title>

    <link rel="stylesheet" href="assets/css/section-pratos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/geral.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/comentarios.css?v=<?php echo time(); ?>">


</head>
<body>

    <?php require_once 'includes/header.php'; ?>

    
    <main id="principal">

        <section class="titulo-pratos">
            <h1>Pratos em Destaque</h1>
            <p>Conheça algumas das especialidades da casa.</p>
        </section>

        <section class="pratos-principais" > <!-- Cards das principais comidas -->
            
            <div class="cards-pratos-principais">
                <img src="https://img.magnific.com/fotos-gratis/composicao-de-comida-brasileira-deliciosa-de-alto-angulo_23-2148739223.jpg?semt=ais_hybrid&w=740&q=80" alt="Prato de comida deliciosa" width="400" class="foto-prato">
                <h2>Prato 01</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, hic nam! Accusamus, facilis ea! Delectus eligendi quo illum laboriosam debitis. Tenetur enim fugit impedit at nobis voluptate vitae voluptatem inventore.</p>
            </div>

            <div class="cards-pratos-principais">
                <img src="https://img.magnific.com/fotos-gratis/composicao-de-comida-brasileira-deliciosa-de-alto-angulo_23-2148739223.jpg?semt=ais_hybrid&w=740&q=80" alt="Prato de comida deliciosa" width="400" class="foto-prato">
                <h2>Prato 01</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, hic nam! Accusamus, facilis ea! Delectus eligendi quo illum laboriosam debitis. Tenetur enim fugit impedit at nobis voluptate vitae voluptatem inventore.</p>
            </div>

            <div class="cards-pratos-principais">
                <img src="https://img.magnific.com/fotos-gratis/composicao-de-comida-brasileira-deliciosa-de-alto-angulo_23-2148739223.jpg?semt=ais_hybrid&w=740&q=80" alt="Prato de comida deliciosa" width="400" class="foto-prato">
                <h2>Prato 01</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, hic nam! Accusamus, facilis ea! Delectus eligendi quo illum laboriosam debitis. Tenetur enim fugit impedit at nobis voluptate vitae voluptatem inventore.</p>
            </div>

            <div class="cards-pratos-principais">
                <img src="https://img.magnific.com/fotos-gratis/composicao-de-comida-brasileira-deliciosa-de-alto-angulo_23-2148739223.jpg?semt=ais_hybrid&w=740&q=80" alt="Prato de comida deliciosa" width="400" class="foto-prato">
                <h2>Prato 01</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, hic nam! Accusamus, facilis ea! Delectus eligendi quo illum laboriosam debitis. Tenetur enim fugit impedit at nobis voluptate vitae voluptatem inventore.</p>
            </div>

            

            

        </section>

        <hr class="separacao">

        <section class="titulo-comentario">
            <h2>Últimos Comentários</h2>
        </section>

        <section class="comentarios">

            

            <?php

            // Percorre os comentários selecionados.
            foreach($ultimos_comentarios as $comentario){

                ?>

                <div class="comentario">

                    <!-- Exibe o nome do usuário -->
                    <h4><?php echo $comentario['usuario']; ?></h4>

                    <!-- Exibe o comentário -->
                    <p><?php echo $comentario['comentario']; ?></p>

                </div>

                <?php
            }

            ?>

        </section>

        <section class="titulo-add-comentario">
            <h2>Adicione um Comentário</h2>
        </section>

        <section class="add-comentario">

            <form action="controllers/con_comentario.php?funcao=comentar" method="post"> 
                    <textarea name="comentario" required></textarea> 
                    <input type="submit" value="Enviar comentário" class="enviar-comentario"> 
                </form>

        </section>

    </main>

    

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>

