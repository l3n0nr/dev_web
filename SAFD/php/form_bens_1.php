<?php
    # incluindo arquivo de conexao
    include 'conexao.php';
    
    include 'form_bens_1_docente';
    include 'form_bens_1_tae';

    # recebendo dados do formulario
    $item = $_POST['item'];
    $estrategia = $_POST['estrategia'];
    $especificacoes = $_POST['especificacoes'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    # verificando se variaveis estao vazias
    if (isset($item) 
        AND isset($estrategia) 
        AND isset($especificacoes) 
        AND isset($preco) 
        AND isset($quantidade)) 
    {

        # montando consulta SQL - ADICIONANDO OBJETO
        $sql = "INSERT INTO objeto(nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto, id_grupo)
                VALUES('$item', '$especificacoes', '$estrategia', '$preco', 1)";

        // realizando inserção da tabela objeto
        if(mysqli_query($con, $sql))
        {
            // echo "funcionou!";

            echo ("<script>alert('Objeto adicionado com sucesso!'); location.href='';</script>");

            // SEGUNDA INSERÇAO - ADICIONANDO AVALIACOES
            // $sql = "INSERT INTO avaliacao_dad(recursos_avaliacaodad, comentarios_avaliacaodad, valorestimadodespesa_avaliacaodad, id_status, id_tipodespesa)    
            //         VALUES("", "", 0, 1, 1)";

            // // realizando inserção na tabela - avaliacao dad 
            // if(mysqli_query($con, $sql))
            // {   
            //     echo "teste";
            // }
        }
        else
        {
            echo ("<script>alert('ERRO!'); location.href='';</script>");
        }
    }    
?>
