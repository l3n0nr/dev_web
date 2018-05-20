<?php
include("menu.php");
include('config.php');
// LEITURA TODOS
$opvalida =false;

if(!empty($_GET['opbusca']))
{
	$opbusca = $_GET['opbusca'];
	if($opbusca == 1)
	{
	    $opvalida = true;
		if(!empty($_GET['dtinicial']) & !empty($_GET['dtfinal']))
		{
		$dtinicial  = $_GET['dtinicial'];
		$dtfinal  = $_GET['dtfinal'];
		$sqlReadData = 'SELECT * FROM cadastro where data between :dtini and :dtfim';
		$readData = $db->prepare($sqlReadData);
		$readData->bindValue(':dtini',$dtinicial,PDO::PARAM_STR);
		$readData->bindValue(':dtfim',$dtfinal,PDO::PARAM_STR);
		$readData->execute();
	}
}
else if($opbusca == 2)
{
		$opvalida = true;
		$oppub  = $_GET['pub'];
		$sqlReadData = 'SELECT * FROM cadastro where receber_publicidade = :publi';
		$readData = $db->prepare($sqlReadData);
		$readData->bindValue(':publi',$oppub,PDO::PARAM_STR);
		$readData->execute();
}
else if($opbusca == 3)
{
		$opvalida = true;
		$termo  = $_GET['termo'];
		echo $termo;
		$sqlReadData = 'SELECT * FROM cadastro where nome or email LIKE :term';
		$readData = $db->prepare($sqlReadData);
		$readData->bindValue(':term','%'.$termo.'%',PDO::PARAM_STR);
		$readData->execute();
}
if($opvalida == true)
{
if($readData->rowCount() > 0)
{
echo "<table border=1>";
while ($rs = $readData->fetch(PDO::FETCH_OBJ)) {
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
    echo "</tr>";
    
}
echo "</table>";
}
else
{
    echo "Nenhum registro!";
} 
}
else
{
	echo "Opção inválida!";
}
}
?>