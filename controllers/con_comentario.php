<?php

    session_start();

    $CAMINHO_COMENTARIO = __DIR__ . '/../data/comentario.json';

    /*
 * Carrega os comentários
 */
    function carregar_arquivo_come(){
        global $CAMINHO_COMENTARIO;

        // Lê todo o conteúdo do arquivo JSON e o retorna como string.
        $arquivo = file_get_contents($CAMINHO_COMENTARIO);

        // Converte a string JSON para um array associativo PHP.
        // O parâmetro true força o retorno como array.
        $comentarios = json_decode($arquivo, true);

        return $comentarios;
    }

    /*
 * Salva os comentários no arquivo JSON
 */
    function salvar_arquivo_come($dados){
        global $CAMINHO_COMENTARIO;

        if(empty($dados)){
            return false;
        }

        file_put_contents(
            $CAMINHO_COMENTARIO,

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
    * Salva um novo comentário
    */
    function salvar_comentario($comentario){

        // Verifica se o campo de comentário foi preenchido.
        if(empty($comentario)){
            header('Location: ../index.php');
            exit;
        }

        // Cria um array contendo os dados do comentário.
        $comentario_novo = [
            "usuario" => $_SESSION['login'],
            "comentario" => $comentario
        ];

        // Carrega todos os comentários já cadastrados.
        $comentarios = carregar_arquivo_come();

        // Adiciona o novo comentário ao final do array.
        $comentarios[] = $comentario_novo;

        // Salva o array atualizado no arquivo JSON.
        if(!salvar_arquivo_come($comentarios)){

            // Envia um cabeçalho HTTP de redirecionamento.
            header('Location: ../index.php');

            // Interrompe a execução imediatamente.
            exit;

        }else{

            // Retorna para a página principal após salvar.
            header('Location: ../index.php');

            // Interrompe a execução imediatamente.
            exit;
        }
    }


    $funcao = $_GET['funcao'] ?? '';

    if($funcao == 'comentar'){

    salvar_comentario(
        $_POST['comentario']
    );
}







?>