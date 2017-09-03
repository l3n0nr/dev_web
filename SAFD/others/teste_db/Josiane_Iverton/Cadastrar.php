<?php include('menu.php'); ?>
<?php include('config.php'); ?>

<form action="cadastrar.php" method="GET">
    <br> Nome: <input type="text" name="nome">
	<br> E-mail: <input type="text" name="email">
	<br> Data: <input type="date" name="dtpref">
    <br> Hora: <input type="time" name="usr_time">
	<br> Receber publicidade 
	<input type="radio" name="pub" value="1">Sim
	<input type="radio" name="pub" value="0">Não
	<br> Linguagens que programa <br>
	<!--
	<input type=checkbox name="pref[]" value=1> PHP<br>
	<input type=checkbox name="pref[]" value=2> Java<br>
	<input type=checkbox name="pref[]" value=3> C<br>
	<input type=checkbox name="pref[]" value=4> C#<br>
	<input type=checkbox name="pref[]" value=5> Python<br>
	<input type=checkbox name="pref[]" value=6> Javascript<br>
	-->
	<?php
		$sqlReadPref = 'SELECT id, nome_pref FROM preferencias';
		$readPref = $db->prepare($sqlReadPref);
		
		$readPref->execute();
		
		while ($rs2 = $readPref->fetch(PDO::FETCH_OBJ)) {
			
			echo "<input type=checkbox name='pref[]' value=$rs2->id> $rs2->nome_pref<br>";
		}
?>
	
	<input type="submit" value="Enviar" />
</form>
		
<?php
include("config.php");
	if(!empty($_GET['dtpref']))
	{
	$nome= $_GET['nome'];
	$email= $_GET['email'];
	$data = $_GET['dtpref'];
	$hora = $_GET['usr_time'];	
	$publicidade = $_GET['pub'];
	
	
	/*
	// Formato do conteúdo
	$nome= 'Iverton';
	$email= 'iverton.santos@gmail.com';
	$data= "1986-10-29";
	$hora = "16:31:00";
	$publicidade = true; // (0 ou false ou "0") (1 ou true ou "1") qualquer coisa diferente disso será 0 (false)
	*/
	
	/*
	O método prepare foi utilizado no exemplo acima com a idéia apenas de iniciar a query e aguardar pela inclusão de valores posteriormente.
	*/
	
	// INSERÇÃO
	$sql  = 'INSERT INTO cadastro(nome, email,data,hora,receber_publicidade) ';
	$sql .= 'VALUES(:nome, :email,:data,:hora,:pub)';

	/*
	diferença entre query e prepare 
	prepare é com passagem de parametros,já o query não possibilita
	*/
	
	$create = $db->prepare($sql);
	/*
	bindValue() pode receber referências e valores como argumento.
	bindParam() não pode ser um tipo primitivo como uma string ou número solto, retorno de função/método 
	*/
	
	$create->bindValue(':nome',$nome, PDO::PARAM_STR);
	$create->bindValue(':email',$email, PDO::PARAM_STR);
	$create->bindValue(':data',$data,PDO::PARAM_STR);
	$create->bindValue(':hora',$hora,PDO::PARAM_STR);
	$create->bindValue(':pub',$publicidade,PDO::PARAM_BOOL);
		
	if($create->execute())
	{
		echo "Registro efetuado com sucesso!";
	}
	else
	{
		echo "erro";
	}

	$sqlRecuperaId  = 'SELECT * FROM cadastro where nome = :nome';
	$comRecId = $db->prepare($sqlRecuperaId);
		
	$comRecId->bindValue(':nome',$nome, PDO::PARAM_STR);
	$comRecId->execute();
	$rs = $comRecId->fetchObject();
	echo "Id cadastrado: " . $rs->id;
	$id = $rs->id;	
	
	foreach($_GET["pref"] as $pref)
    {
        $sql  = 'INSERT INTO pessoa_preferencias(id_pessoa, id_pref) ';
		$sql .= 'VALUES(:id_pe, :id_pr)';
		$create = $db->prepare($sql);
		$create->bindValue(':id_pe',$id, PDO::PARAM_STR);
		$create->bindValue(':id_pr',$pref, PDO::PARAM_STR);

		if($create->execute())
		{
			echo "Registro efetuado com sucesso!";
		}
		else
		{
			echo "erro";
		}
    }
}
  
?>        
	
        