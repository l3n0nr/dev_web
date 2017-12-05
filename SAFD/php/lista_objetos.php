<?php

include "conexao.php";

// $sql = "SELECT id_objeto, nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto FROM objeto";

$sql = "SELECT nome_objeto FROM objeto";

$res = mysqli_query($con, $sql);

if(mysqli_num_rows($res) == 0)
{
	// echo "<p class=\"titulo\">Nenhum produto encontrado!</p>";
}
else
{	
	for($i=0; $i<mysqli_num_rows($res); $i++)
	{
		while ($objeto = mysqli_fetch_assoc($res))
		{
<<<<<<< HEAD
<<<<<<< HEAD
			//buscando valor
            $nome_objeto = 
            	"<option>" .$objeto['nome_objeto']. "</option>";              

=======
                  funcao_objeto()
                  {
                        //buscando valor
                        $nome_objeto = 
                              "<option>" .$objeto['nome_objeto']. "</option>";        

                        //mostrando valor
                        echo "$nome_objeto";  
                  }
=======
                  //buscando valor
                  $nome_objeto = 
                        "<option>" .$objeto['nome_objeto']. "</option>";        

                  //mostrando valor
                  echo "$nome_objeto";                    
>>>>>>> 2faea28fcce2840be079fa658158455aad7e2c9c
			
>>>>>>> 2d424081972c910141e8c6cd2b53826248a36dda
            // $especificacoestecnicas_objeto = 
            //       "<option>" .$objeto['especificacoestecnicas_objeto']. "</option>";  

            // $estrategiafornecimento_objeto = 
            // 	"<option>" .$objeto['estrategiafornecimento_objeto']. "</option>";             

            // $preco_objeto =
            // 	"<option>" .$objeto['preco_objeto']. "</option>";             

            // echo "$especificacoestecnicas_objeto";

            // echo "$estrategiafornecimento_objeto";

            // echo "$preco_objeto";

		}		
	}	
}             

?>