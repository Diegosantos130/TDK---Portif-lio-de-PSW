<?php 
    session_start();
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
    <link rel="stylesheet" href="assets/css/cardapio.css?v=<?php echo time(); ?>">

</head>
<body>
    <?php require_once 'includes/header.php'; ?>


    <main>
        <section class="titulo-pratos">
                <h1>Pratos Principais</h1>
                <p>Nosso pratos principais</p>
        </section>

        <section class="cardapio-principal">

            <div class="prato">
                <h2>Pizza Napoletana</h2>
                <img src="assets/imagens/pratos/principal/Pizza napoletana.jpeg" alt="" class="foto-prato">
                <p>Símbolo da gastronomia italiana, a Pizza Napoletana destaca-se por sua massa leve, macia e de longa fermentação, assada em altas temperaturas para alcançar bordas aeradas e levemente tostadas. Coberta com ingredientes frescos e selecionados, oferece o equilíbrio perfeito entre simplicidade, aroma e sabor, traduzindo a essência da tradição napolitana.</p>
            </div>

            <div class="prato">
                <h2>Risotto alla Milanese</h2>
                <img src="assets/imagens/pratos/principal/Risotto alla Milanese.jpeg" alt="" class="foto-prato">
                <p>Elegante e irresistível, o Risotto alla Milanese é conhecido por sua textura cremosa e pela coloração dourada proporcionada pelo açafrão. Preparado lentamente para realçar cada ingrediente, apresenta um sabor delicado e refinado, harmonizando riqueza e suavidade em um prato que representa a excelência da culinária do norte da Itália.</p>
            </div>

            <div class="prato">
                <h2>Spaghetti alla Carbonara</h2>
                <img src="assets/imagens/pratos/principal/Spaghetti alla Carbonara.jpeg" alt="" class="foto-prato">
                <p>Um dos grandes clássicos da culinária italiana, o Spaghetti alla Carbonara combina massa al dente envolvida em um molho cremoso preparado com ovos, queijo e pimenta-do-reino, finalizado com pedaços crocantes de carne curada. Sua textura aveludada e sabor marcante proporcionam uma experiência autêntica e sofisticada, celebrando a tradição gastronômica de Roma em cada garfada.</p>
            </div>

            <div class="prato">
                <h2>Caprase</h2>
                <img src="assets/imagens/pratos/principal/Caprese.jpeg" alt="" class="foto-prato">
                <p>Símbolo da simplicidade e elegância da culinária italiana, a Caprese combina fatias de mozzarella fresca, tomates maduros e folhas de manjericão aromático em uma harmoniosa composição de sabores e cores. Finalizada com azeite de oliva e temperos selecionados, destaca a qualidade dos ingredientes em sua forma mais pura. Leve, refrescante e sofisticada, é uma entrada clássica que traduz a essência da gastronomia mediterrânea em cada garfada.</p>
            </div>

            <div class="prato">
                <h2>Pesto alla Genovese</h2>
                <img src="assets/imagens/pratos/principal/Pesto alla genovese.jpeg" alt="" class="foto-prato">
                <p>Originário da região da Ligúria, o Pesto alla Genovese é um molho aromático elaborado com manjericão fresco, azeite de oliva, queijo e ingredientes cuidadosamente selecionados. Seu sabor fresco e marcante transforma qualquer massa em uma experiência leve, equilibrada e repleta da essência da culinária italiana.</p>
            </div>

            <div class="prato">
                <h2>Cannoli</h2>
                <img src="assets/imagens/pratos/principal/Cannoli.jpeg" alt="" class="foto-prato">
                <p>Símbolo da confeitaria siciliana, o Cannoli consiste em uma massa fina e crocante recheada com um creme delicado e saboroso. Sua combinação única de texturas e sabores oferece uma experiência irresistível, tornando essa sobremesa uma das mais tradicionais e apreciadas da gastronomia italiana.</p>
            </div>

            <div class="prato">
                <h2>Carpaccio</h2>
                <img src="assets/imagens/pratos/principal/Carpaccio.jpeg" alt="" class="foto-prato">
                <p>Refinado e elegante, o Carpaccio é uma clássica entrada italiana preparada com finíssimas fatias de carne bovina, cuidadosamente temperadas e acompanhadas por queijo, folhas frescas e um toque de azeite de oliva. Sua leveza e delicadeza destacam a qualidade dos ingredientes, proporcionando uma experiência gastronômica sofisticada e cheia de sabor.</p>
            </div>

            <div class="prato">
                <h2>Gnocchi</h2>
                <img src="assets/imagens/pratos/principal/Gnocchi.jpeg" alt="" class="foto-prato">
                <p>Tradicional da culinária italiana, o Gnocchi é composto por delicados nhoques de batata que se destacam pela textura macia e sabor suave. Servido com molhos cuidadosamente preparados, absorve perfeitamente os aromas e temperos, criando uma combinação harmoniosa que transmite todo o conforto e a autenticidade da cozinha italiana.</p>
            </div>


        </section>

        <hr class="separacao">

        <section class="titulo-pratos">
                <h1>Acompanhamentos e Entradas</h1>
                <p>Os acompanhamentos e entradas perfeitos para completar sua refeição</p>
        </section>

        <section class="cardapio-acompanhamento">

            <div class="entrada">
                <h2>Bruschetta</h2>
                <img src="assets/imagens/pratos/entrada/Bruschetta.jpeg" alt="" class="foto-prato">
                <p>Tradicional entrada italiana, a Bruschetta combina fatias de pão artesanal levemente tostadas com ingredientes frescos e cuidadosamente selecionados. Coberta com tomates maduros, queijos cremosos, ervas aromáticas e outros acompanhamentos típicos, oferece uma perfeita harmonia entre crocância, leveza e sabor. Um prato simples, elegante e cheio de autenticidade, ideal para abrir qualquer refeição com estilo.</p>
            </div>
            
            <div class="entrada">
                <h2>Arancini</h2>
                <img src="assets/imagens/pratos/entrada/Arancini.jpeg" alt="" class="foto-prato">
                <p>Símbolo da culinária do norte da Itália, a Polenta destaca-se por sua textura cremosa e sabor delicado. Preparada lentamente para garantir maciez e consistência impecáveis, é enriquecida com queijos e temperos que realçam seu caráter reconfortante e acolhedor. Um prato clássico que une tradição, simplicidade e elegância em cada porção.</p>
            </div>

            <div class="entrada">
                <h2>Polenta</h2>
                <img src="assets/imagens/pratos/entrada/Polenta.jpeg" alt="" class="foto-prato">
                <p>Um dos grandes clássicos da culinária italiana, o Spaghetti alla Carbonara combina massa al dente envolvida em um molho cremoso preparado com ovos, queijo e pimenta-do-reino, finalizado com pedaços crocantes de carne curada. Sua textura aveludada e sabor marcante proporcionam uma experiência autêntica e sofisticada, celebrando a tradição gastronômica de Roma em cada garfada.</p>
            </div>

        </section>

        <hr class="separacao">
        
        <section class="titulo-pratos">
                <h1>Sobremesas</h1>
                <p>Finalize sua refeição com sobremesas preparadas para tornar cada momento ainda mais especial.</p>
            </section>

        <section class="cardapio-sobremesa">

            <div class="sobremesa">
                <h2>Gelato</h2>
                <img src="assets/imagens/pratos/sobremesas/Gelato.jpeg" alt="" class="foto-prato">
                <p>Clássica sobremesa italiana, o Gelato encanta pela textura extremamente cremosa e pelo sabor intenso, resultado de uma preparação artesanal que valoriza ingredientes selecionados. Nesta versão, é finalizado com avelãs crocantes e delicados fios de chocolate, criando um contraste perfeito entre suavidade e crocância. Refrescante, sofisticado e irresistível, é a escolha ideal para encerrar a refeição com um toque de autenticidade e elegância.</p>
            </div>

            <div class="sobremesa">
                <h2>Tiramisù</h2>
                <img src="assets/imagens/pratos/sobremesas/Tiramisù.jpeg" alt="" class="foto-prato">
                <p>Ícone da confeitaria italiana, o Tiramisù combina camadas delicadas de biscoitos levemente umedecidos em café com um creme suave e aveludado à base de mascarpone. Finalizado com uma generosa camada de cacau, oferece o equilíbrio perfeito entre doçura, cremosidade e notas marcantes de café. Uma sobremesa refinada e atemporal, que traduz toda a tradição e o requinte da gastronomia italiana em cada colherada.</p>
            </div>
            

        </section>


    </main>



    <?php require_once 'includes/footer.php'; ?>
</body>
</html>