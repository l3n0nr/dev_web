<?php
$nomes[1] = "PHP";
$nomes[2] = "Java";
$nomes[3] = "C";
$nomes[4] = "C#";
$nomes[5] = "Python";
$nomes[6] = "Javascript";

include('menu.php');
include("config.php");

if (!empty($_GET['alterou'])) {
    echo "clicou em alterar";
    $id = $_GET['id'];
    $novoNome = $_GET['nome'];
    $novoEmail = $_GET['email'];
    $novaData = $_GET['dtpref'];
    $novaHora = $_GET['usr_time'];
    $novaPub = $_GET['pub'];
    $sqlUpdate = 'UPDATE cadastro SET nome = :nome, 
	email = :email, data = :data, hora = :hora, receber_publicidade = :pub WHERE id=:id';
    $updateId = $db->prepare($sqlUpdate);
    $updateId->bindValue(':id', $id, PDO::PARAM_INT);
    $updateId->bindValue(':nome', $novoNome, PDO::PARAM_STR);
    $updateId->bindValue(':email', $novoEmail, PDO::PARAM_STR);
    $updateId->bindValue(':data', $novaData, PDO::PARAM_STR);
    $updateId->bindValue(':hora', $novaHora, PDO::PARAM_STR);
    $updateId->bindValue(':pub', $novaPub, PDO::PARAM_BOOL);

    if ($updateId->execute()) {
        echo "Executou";
    }
    if ($updateId->rowCount() > 0) {
        echo "Alteração realizada com sucesso!";
    } else {
        echo "Nenhuma linha foi alterada!";
    }
	if(!empty($_GET['pref']))
	{	
	$novasPref = $_GET['pref'];
	$sqlDelete = 'DELETE from pessoa_preferencias WHERE id_pessoa = :id';
	$deleteId = $db->prepare($sqlDelete);
	$deleteId->bindValue(':id',$id, PDO::PARAM_INT);
	
	if($deleteId->execute())
	{
		echo "Executou";
	}
	
	foreach($novasPref as $p)
	{
		$sql  = 'INSERT INTO pessoa_preferencias(id_pessoa, id_pref) ';
		$sql .= 'VALUES(:id_pe, :id_pr)';
		$create = $db->prepare($sql);
		$create->bindValue(':id_pe',$id, PDO::PARAM_INT);
		$create->bindValue(':id_pr',$p, PDO::PARAM_INT);

		if($create->execute())
		{
			echo "Registro efetuado com sucesso!";
		}
	}
	}
	else
	{
		$sqlDelete = 'DELETE from pessoa_preferencias WHERE id_pessoa = :id';
		$deleteId = $db->prepare($sqlDelete);
		$deleteId->bindValue(':id',$id, PDO::PARAM_INT);
	
		if($deleteId->execute())
		{
			echo "Executou";
		}
	}
}
?>
<?php

function listarTodos() {

    include("config.php");
    // LEITURA TODOS
    $sqlReadAll = 'SELECT * FROM cadastro';
    $readAll = $db->prepare($sqlReadAll);
    $readAll->execute();
	
    if ($readAll->rowCount() > 0) {
	echo "<table border=1>";
        while ($rs = $readAll->fetch(PDO::FETCH_OBJ)) {
            echo "<tr>";
			echo "<td> Id: " . $rs->id . "</td>";
			echo "<td> Nome: " . $rs->nome . "</td>";
			echo "<td> Email : " . $rs->email . "</td>";
			echo "<td> Data: " . date('d/m/y', strtotime($rs->data)) . "</td>";
			echo "<td> Hora: " . date('H:i:s', strtotime($rs->hora)) . "</td>";

			if ($rs->receber_publicidade) {
				echo "<td> Recebe publicidade </td>";
			} else {
				echo "<td> Não recebe publicidade </td>";
			}
			
			$sqlReadPref = 'SELECT id_pref, nome_pref FROM pessoa_preferencias, preferencias 
							WHERE id_pessoa = :id and pessoa_preferencias.id_pref = preferencias.id';
			$readPref = $db->prepare($sqlReadPref);
			$readPref->bindValue(':id',$rs->id,PDO::PARAM_INT);
			$readPref->execute();
			echo "<td>";
			while ($rs2 = $readPref->fetch(PDO::FETCH_OBJ)) {
				echo $rs2->nome_pref . " ";
			}
			echo "</td>";
			echo "<td><a href='editar.php?id=$rs->id'>Alterar</a></td>";
			echo "</tr>";
        }
    } else {
        echo "Nenhum resultado encontrado!";
    }
}
listarTodos();
?>   

<?php
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlReadId = 'SELECT * FROM cadastro WHERE id=:id';
    $readId = $db->prepare($sqlReadId);
    $readId->bindValue(':id', $id, PDO::PARAM_INT);
    $readId->execute();

    if ($readId->rowCount() > 0) { //permite ver se teve algum resultado retornado
        $rs = $readId->fetch(PDO::FETCH_OBJ);
        $nome = $rs->nome;
        $email = $rs->email;
        $data = $rs->data;
        $hora = $rs->hora;
        $publicidade = $rs->receber_publicidade;
		
		$sqlReadPref = 'SELECT id_pref, nome_pref FROM pessoa_preferencias, preferencias 
							WHERE id_pessoa = :id and pessoa_preferencias.id_pref = preferencias.id';
		$readPref = $db->prepare($sqlReadPref);
		$readPref->bindValue(':id',$rs->id,PDO::PARAM_INT);
		$readPref->execute();
		
		while ($rs2 = $readPref->fetch(PDO::FETCH_OBJ)) {
			echo $rs2->nome_pref . " ";
			$ids[] = $rs2->id_pref;
		}
		
		
    } else {
        echo "Nenhum resultado encontrado";
    }
    ?>        
    <form action="editar.php" method="GET">
        <br> Nome: <input type="text" name="nome" value="<?php echo $nome ?>">
        <br> E-mail: <input type="text" name="email" value="<?php echo $email ?>">
        <br> Data: <input type="date" name="dtpref" value="<?php echo $data ?>">
        <br> Hora: <input type="time" name="usr_time" value="<?php echo $hora ?>">
        <br> Recebe publicidade: 
    <?php
    if ($publicidade == 1) {
        echo "<input type='radio' name='pub' value='1' checked='true'> Sim";
        echo "<input type='radio' name='pub' value='0'> Não";
    } else {
        echo "<input type='radio' name='pub' value='1'> Sim";
        echo "<input type='radio' name='pub' value='0' checked='true'>Não";
    }
	
	$sqlReadPref = 'SELECT id, nome_pref FROM preferencias';
	$readPref = $db->prepare($sqlReadPref);
		
	$readPref->execute();
		
	while ($rs2 = $readPref->fetch(PDO::FETCH_OBJ)) {
		if(empty($ids))
		{
			echo "<input type=checkbox name='pref[]' value=$rs2->id> $rs2->nome_pref<br> ";
		}
		else
		{
		    if (in_array($rs2->id, $ids)) { 
			echo "<input type=checkbox name='pref[]' value=$rs2->id checked> $rs2->nome_pref<br> ";
		  }
		   else
		   {
			echo "<input type=checkbox name='pref[]' value=$rs2->id> $rs2->nome_pref<br> ";
		 }
		 }
	}
	/*
	for($i = 1; $i<=6; $i++)
	{
		if (in_array($i, $ids)) { 
			echo "<input type=checkbox name='pref[]' value=$i checked> $nomes[$i]<br> ";
		}
		else
		{
			echo "<input type=checkbox name='pref[]' value=$i> $nomes[$i]<br> ";
		}
	}
	*/
    ?>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="alterou" value="true">
        <input type="submit" value="Alterar"/>
    </form>
        <?php
    }
    ?>
