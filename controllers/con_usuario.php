<?php

// Inicia ou recupera a sessão atual do usuário.
// Sem isso, não é possível utilizar a variável $_SESSION.
session_start();

// __DIR__ retorna o diretório atual deste arquivo.
// Isso evita problemas caso o projeto seja movido de pasta.
$CAMINHO = __DIR__ . '/../data/users.json';

/*
 * Carrega os usuários cadastrados
 */
function carregar_arquivo(){
    global $CAMINHO;

    // Lê todo o conteúdo do arquivo JSON e o retorna como string.
    $arquivo = file_get_contents($CAMINHO);

    // Converte a string JSON para um array associativo PHP.
    // O parâmetro true força o retorno como array.
    $usuarios = json_decode($arquivo, true);

    return $usuarios;
}

/*
 * Salva os usuários no arquivo JSON
 */
function salvar_arquivo($dados){
    global $CAMINHO;

    if(empty($dados)){
        return false;
    }

    file_put_contents(
        $CAMINHO,

        // Converte o array PHP para JSON.
        // JSON_PRETTY_PRINT adiciona identação.
        // JSON_UNESCAPED_UNICODE mantém acentos legíveis.
        json_encode(
            $dados,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        )
    );

    return true;
}

/*
 * Cadastra um novo usuário
 */
function cadastrar_usuario($nome, $email, $senha){

    if(empty($nome) || empty($email) || empty($senha)){
        return false;
    }

    $usuario = [
        "nome" => $nome,
        "email" => $email,
        "senha" => $senha
    ];

    $usuarios = carregar_arquivo();

    // Adiciona o novo usuário ao final do array.
    $usuarios[] = $usuario;

    if(!salvar_arquivo($usuarios)){

        // Envia um cabeçalho HTTP de redirecionamento.
        header('Location: ../cadastrar.php');

        // Interrompe a execução imediatamente.
        exit;

    }else{

        header('Location: ../login.php');
        exit;
    }
}

/*
 * Realiza o login
 */
function logar_usuario($email, $senha){

    // Verifica se as credenciais pertencem ao administrador.
    if($email == "admin@gmail.tdk" && $senha == "123456"){

        // Gera um novo ID para a sessão do usuário, mantendo os dados já armazenados.
        // Isso aumenta a segurança do sistema e ajuda a evitar ataques de fixação de sessão.
        session_regenerate_id(true);

        // Armazena dados na sessão.
        $_SESSION['login'] = "Administrador";
        $_SESSION['tipo'] = "admin";

        header('Location: ../index.php');
        exit;
    }

    // Carrega todos os usuários cadastrados.
    $usuarios = carregar_arquivo();

    // Percorre cada posição do array.
    foreach($usuarios as $usuario){

        if(
            $usuario['email'] == $email &&
            $usuario['senha'] == $senha
        ){

            session_regenerate_id(true);

            $_SESSION['login'] = $usuario['nome'];
            $_SESSION['tipo'] = "usuario";

            header('Location: ../index.php');
            exit;
        }
    }

    // Cria uma mensagem de erro que poderá ser exibida
    // em outra página através da sessão.
    $_SESSION['erro'] = "E-mail ou senha inválidos";

    header('Location: ../login.php');
    exit;
}

/*
 * Realiza o logout
 */
function logout_usuario(){

    // Remove todas as variáveis armazenadas na sessão.
    $_SESSION = [];

    // Destrói a sessão armazenada no servidor.
    session_destroy();

    header('Location: ../login.php');
    exit;
}

/*
 * Define qual função será executada
 */

// Operador de coalescência nula (??).
// Se $_GET['funcao'] não existir, recebe uma string vazia.
$funcao = $_GET['funcao'] ?? '';

if($funcao == 'cadastrar'){

    cadastrar_usuario(
        $_POST['nome'],
        $_POST['email'],
        $_POST['senha']
    );
}

if($funcao == 'logar'){

    logar_usuario(
        $_POST['email'],
        $_POST['senha']
    );
}

if($funcao == 'logout'){

    logout_usuario();
}