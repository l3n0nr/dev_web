<?php

include "conexao.php";

$sql = "SELECT id_objeto, nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto FROM objeto";

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
			//buscando valor
            // $objeto = "<option>" .$objeto['nome_objeto']. "</option>";            

            $objeto = "<div class="col-xs-5">
                            <br>
                            <label>Objeto</label>
                            <select class="form-control" required=""> 
                                <option>".$objeto['nome_objeto']."</option>
                            </select>                            
                        </div>                                         

                        <div class="col-xs-4">
                            <br>
                            <select class="form-control" required=""> 
                                <option>".$objeto['especificacoestecnicas_objeto']."</option>
                            </select>                            
                        </div>";

            //mostrando valor
            echo "$objeto";                         
		}		
	}	
}

                              
                        

?>