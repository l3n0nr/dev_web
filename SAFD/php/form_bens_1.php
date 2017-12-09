<?php
    # incluindo arquivo de conexao
    include 'conexao.php';
    
    include 'form_bens_1_docente';
    include 'form_bens_1_tae';
    include 'adiciona_objeto';

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

        // echo $item;
        // echo $estrategia;
        // echo $especificacoes;
        // echo $preco;
        // echo $quantidade;

        # montando consulta SQL - ADICIONANDO OBJETO
        $sql = "
            SELECT id_objeto FROM objeto 
<<<<<<< HEAD
            WHERE nome_objeto='$item' ORDER BY `objeto`.`id_objeto`";
=======
            WHERE nome_objeto='$item';";
>>>>>>> c43034ed884b16ab9af4535a84a6963f8686d176

         // INSERT INTO objeto(nome_objeto)
                 // -- VALUES('$item') ORDER BY `objeto`.`id_objeto` limit 1";

        // echo $sql;

        // preparando variavel
        $result = mysqli_query($con, $sql);

        // capturando valor funcao usuario
        while($res = mysqli_fetch_assoc($result))
        {
            $objeto = $res['id_objeto'];
        }

        // echo "teste: " . $objeto;

        // realizando inserção da tabela objeto
        if ($objeto)
        {
            // echo "funcionou!";

            echo ("<script>alert('Objeto selecionado com sucesso!'); 
                    location.href='';</script>");

            // echo "funcionou";

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
