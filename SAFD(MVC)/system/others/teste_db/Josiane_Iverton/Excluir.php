<?php
include("menu.php");
include("config.php");

if (!empty($_GET['id'])) {
    $id= $_GET['id'];
	
	$sqlDeletePref = 'DELETE from pessoa_preferencias WHERE id_pessoa = :id';
	$deleteIdPref = $db->prepare($sqlDeletePref);
	$deleteIdPref->bindValue(':id',$id, PDO::PARAM_INT);
	
	if($deleteIdPref->execute())
	{
		echo "Executou";
	}
	if ($deleteIdPref->rowCount() > 0) {
        echo "Excluiu";
    } else
	{
		echo "Nenhum registro encontrado para excluir!";
	}
	
	$sqlDelete = 'DELETE from cadastro WHERE id = :id';
	$deleteId = $db->prepare($sqlDelete);
	$deleteId->bindValue(':id',$id, PDO::PARAM_INT);
	
	if($deleteId->execute())
	{
		echo "Executou";
	}
	if ($deleteId->rowCount() > 0) {
        echo "Excluiu";
    } else
	{
		echo "Nenhum registro encontrado para excluir!";
	}
}

// LEITURA TODOS
$sqlReadAll = 'SELECT * FROM cadastro';
$readAll = $db->prepare($sqlReadAll);
$readAll->execute();
if($readAll->rowCount() > 0)
{
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
    echo "<td><a href='excluir.php?id=$rs->id'>Excluir</a></td>";
}
echo "</table>";
}
else
{
    echo "Nenhum registro!";
}    
?>