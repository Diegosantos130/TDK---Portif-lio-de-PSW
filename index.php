
<?php
session_start();

if(!isset($_SESSION['login'])){
    header('Location: login.php');
    exit;
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

            

            

        </section>

    </main>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>

