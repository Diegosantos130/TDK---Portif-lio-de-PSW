<?php
    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDK</title>
    <link rel="stylesheet" href="assets/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/geral.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/sobrenos.css?v=<?php echo time(); ?>">
</head>
<body>

    <?php require_once 'includes/header.php'; ?>

    <main>
            
        <div class="titulo-sobrenos">
            <h2>Sobre Nós</h2>
            <p>Conheça um pouco da nossa história</p>
        </div>

        <div class="sobrenos">

            <div class="fundador"></div>

            <div class="fundador">
                <div class="texto">
                    <h2>Diego</h2>
                    <p>
                        Diego é um dos fundadores da TDK e tem como principal característica a busca contínua pela inovação. Apaixonado por tecnologia, organização e desenvolvimento de soluções, trabalha para que a empresa esteja sempre evoluindo e oferecendo serviços modernos aos clientes. Sua atuação envolve o planejamento estratégico, a melhoria dos processos internos e a implementação de novas ideias que tornam a experiência dos consumidores mais prática e eficiente.
                    </p>
                    <p>
                        Além da gestão administrativa, Diego acredita que tecnologia e gastronomia podem caminhar juntas para oferecer um atendimento de excelência. Seu objetivo é fazer da TDK uma referência em qualidade, inovação e confiança, mantendo sempre o compromisso com a satisfação dos clientes e com o crescimento sustentável da empresa
                    </p>
                </div>

                <img src="assets/imagens/diego.png" alt="">
            </div>
                    
                

            <div class="fundador">

                <img src="assets/imagens/kelvin.png" alt="">
                <div class="texto">
                    <h2>Kellvin</h2>
                    <p>
                        Kelvin é um dos fundadores da TDK e contribui de forma decisiva para o fortalecimento da marca e para o desenvolvimento da empresa. Com criatividade, responsabilidade e visão empreendedora, participa ativamente das decisões que impulsionam o crescimento da rede de restaurantes. Seu foco é encontrar novas oportunidades, aprimorar os serviços oferecidos e garantir que a TDK continue se destacando pela qualidade de seus produtos e pelo excelente atendimento.
                    </p>
                    <p>
                        Acreditando que o sucesso é resultado do trabalho em equipe, Kelvin busca constantemente aperfeiçoar os processos da empresa e incentivar um ambiente colaborativo entre todos os colaboradores. Sua dedicação e comprometimento ajudam a transformar a TDK em um lugar onde tradição, inovação e paixão pela boa gastronomia caminham lado a lado.
                    </p>
                </div>
            </div>

        </div>

        <hr class="separacao">

        <div class="fundador">
                

                <div class="texto">
                    <h2>Sobre a TDK</h2>
                    <p>A TDK é uma rede de restaurantes criada com o objetivo de oferecer uma experiência gastronômica de qualidade, unindo sabor, conforto e excelência no atendimento. O nome TDK representa as iniciais de seus fundadores: Taemy, Diego e Kelvin, três empreendedores que transformaram uma ideia em um projeto voltado para a satisfação de seus clientes.





                    <p>
                    Desde o início, a empresa tem como compromisso preparar pratos com ingredientes selecionados, prezando pela qualidade, pelo sabor e pelo cuidado em cada detalhe. Além da boa gastronomia, a TDK busca proporcionar um ambiente acolhedor, onde famílias, amigos e clientes possam compartilhar momentos especiais.
                    </p>

                    <p>
                    Mais do que servir refeições, a TDK acredita na importância de oferecer um atendimento atencioso e uma experiência marcante a cada visita. Com dedicação, inovação e respeito aos seus clientes, a rede continua crescendo sem abrir mão dos valores que inspiraram sua criação: qualidade, compromisso e paixão pela gastronomia.</p>
                    </p>
                    
                </div>

                <img src="assets/imagens/TDK-logo-photoaidcom-cropped.jpeg" alt="">
            </div>
    </main>

    

    <?php require_once 'includes/footer.php'; ?>

</body>
</html>