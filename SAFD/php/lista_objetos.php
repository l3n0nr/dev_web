<?php

include "conexao.php";

// if(isset($_GET["inicio"])) 
// {	
	// echo "<p class=\"titulo\">Destaques</p>";
	$sql = "SELECT id_objeto, nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto FROM objeto";
// }
// elseif(isset($_GET["categoria"])) 
// {	// lista por categoria
// 	$cat = $_GET["categoria"];
// 	$sql = "SELECT idProduto,nome,preco,precoPromocao FROM produto WHERE idCategoria=$cat";
// }
// else 
// {		// busca produto pela palavra digitada
// 	$palavra = $_GET["busca"];
// 	$palavra = utf8_decode($palavra); // use esta linha para evitar problemas de acentuação (caso seu BD esteja com outra codificação)
// 	$sql = "SELECT idProduto,nome,preco,precoPromocao FROM produto WHERE nome like '%$palavra%'";
// }

$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) == 0)
{
	echo "<p class=\"titulo\">Nenhum produto encontrado!</p>";
}
else
{
	// echo "teste";
	
}
	for($i=0; $i<mysqli_num_rows($res); $i++)
	{
		$dados = mysqli_fetch_row($res);
		echo $exibe['nome_objeto'] .'<br>';
	}
// 		$dados = mysqli_fetch_row($res);
// 		$id_objeto = $dados[0];
// 		$nome_objeto = $dados[1];
		// $preco_objeto = number_format($dados[2],2,",",".");
		// $promocao = number_format($dados[3],2,",",".");

		// echo "<p><img src=\"figuras/item.gif\" width=\"14\" height=\"14\"> $nome<br>";
		// if($promocao=="0,00")
		// {
		// 	echo "<span class=\"preco\">Preço: R\$ $preco</span><br>";
		// }
		// else
		// {
		// 	echo "<span class=\"preco\">Promoção: de <span class=\"promocao\">R\$ $preco</span> por R\$ $promocao </span><br>";		
		// echo " <a href=\"javascript:Loja('$nome_objeto');\"><img src=\"figuras/detalhes.gif\" border=\"0\"></a>";
			// echo " <a href=\"javascript:Loja('detalhes','$idProduto');\"><img src=\"figuras/detalhes.gif\" border=\"0\"></a>";
			// echo " <a href=\"javascript:Loja('carrinho','$idProduto');\"><img src=\"figuras/comprar.gif\" border=\"0\"></a></p>";
		// }
// 	}
// }
	
	// <label> Item </label>
	// <select class="form-control" required="">
	//     <option> option 1 </option>
	//     <option> option 2 </option>
	//     <option> option 3 </option>
	// </select>

?>