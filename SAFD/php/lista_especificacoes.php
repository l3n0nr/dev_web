<?php

include "conexao.php";

// $sql = "SELECT id_objeto, nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto FROM objeto";

$sql = "SELECT especificacoestecnicas_objeto FROM objeto";

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
                  $especificacoestecnicas_objeto = 
                  "<option>" .$objeto['especificacoestecnicas_objeto']. "</option>";           

                  echo "$especificacoestecnicas_objeto";
		}		
	}	
}             

?>