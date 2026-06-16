
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

    <!-- Adiciona o horário atual à URL do CSS para impedir que o navegador utilize uma versão em cache. -->
    <link rel="stylesheet" href="assets/css/section-pratos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/geral.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/comentarios.css?v=<?php echo time(); ?>">


</head>
<body>
    <!-- Inclui o cabeçalho da página, evitando duplicidade caso já tenha sido carregado. -->
    <?php require_once 'includes/header.php'; ?>

    
    <main id="principal">

        <section class="titulo-pratos">
            <h1>Pratos em Destaque</h1>
            <p>Conheça algumas das especialidades da casa.</p>
        </section>

        <section class="pratos-principais" > <!-- Cards das principais comidas -->
            
            <div class="cards-pratos-principais">
                <h2>Pizza Napoletana</h2>
                <img src="assets/imagens/pratos/principal/Pizza napoletana.jpeg" alt="" class="foto-prato">
                <p>Símbolo da gastronomia italiana, a Pizza Napoletana destaca-se por sua massa leve, macia e de longa fermentação, assada em altas temperaturas para alcançar bordas aeradas e levemente tostadas. Coberta com ingredientes frescos e selecionados, oferece o equilíbrio perfeito entre simplicidade, aroma e sabor, traduzindo a essência da tradição napolitana.</p>
            </div>

            <div class="cards-pratos-principais">
                <h2>Cannoli</h2>
                <img src="assets/imagens/pratos/principal/Cannoli.jpeg" alt="" class="foto-prato">
                <p>Símbolo da confeitaria siciliana, o Cannoli consiste em uma massa fina e crocante recheada com um creme delicado e saboroso. Sua combinação única de texturas e sabores oferece uma experiência irresistível, tornando essa sobremesa uma das mais tradicionais e apreciadas da gastronomia italiana.</p>
            </div>

            <div class="cards-pratos-principais">
                <h2>Bruschetta</h2>
                <img src="assets/imagens/pratos/entrada/Bruschetta.jpeg" alt="" class="foto-prato">
                <p>Tradicional entrada italiana, a Bruschetta combina fatias de pão artesanal levemente tostadas com ingredientes frescos e cuidadosamente selecionados. Coberta com tomates maduros, queijos cremosos, ervas aromáticas e outros acompanhamentos típicos, oferece uma perfeita harmonia entre crocância, leveza e sabor. Um prato simples, elegante e cheio de autenticidade, ideal para abrir qualquer refeição com estilo.</p>
            </div>

            <div class="cards-pratos-principais">
                <h2>Tiramisù</h2>
                <img src="assets/imagens/pratos/sobremesas/Tiramisù.jpeg" alt="" class="foto-prato">
                <p>Ícone da confeitaria italiana, o Tiramisù combina camadas delicadas de biscoitos levemente umedecidos em café com um creme suave e aveludado à base de mascarpone. Finalizado com uma generosa camada de cacau, oferece o equilíbrio perfeito entre doçura, cremosidade e notas marcantes de café. Uma sobremesa refinada e atemporal, que traduz toda a tradição e o requinte da gastronomia italiana em cada colherada.</p>
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

