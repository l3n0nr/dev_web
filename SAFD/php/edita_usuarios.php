<?php

	//incluindo arquivo conexao
	include 'conexao.php';

	$id = $_GET['id'];

	$busca = mysql_query("SELECT * FROM usuarios"); 
	$row = mysql_fetch_arrow($busca);

	$teste = "
		<input type="text" value="<?php echo $row['campo']; ?>" name="campo" />
		<input type="hidden" value="<?php echo $id; ?>" name="id" />";

	echo $teste;
?>
