<?php
include("menu.php");
?>
<script>
function myFunction() {
		var x = document.getElementById("opcoes").value;
		alert(x);
		if(x == 1)
		{
		document.getElementById("conteudoOp").innerHTML = 
		"<form action='relatorios-detalhes.php' method='get'><br> Data Inicial: <input type='date' name='dtinicial'><br> Data Final: <input type='date' name='dtfinal'><input type='hidden' name='opbusca' value='1'><input type=submit value=buscar></form>";
		}
		else if(x == 2)
		{
			document.getElementById("conteudoOp").innerHTML = "<form action='relatorios-detalhes.php' method='get'><B>Recebe publicidade?</B><br><input type=radio name=pub value='0'> Não	<input type=radio name=pub value='1'> Sim <input type='hidden' name='opbusca' value='2'><input type=submit value=buscar></form>";
		}
		else if(x == 3)
		{
		
		document.getElementById("conteudoOp").innerHTML = "<form action='relatorios-detalhes.php' method='get'><br> Termo de busca: <input type='text' name='termo'><input type='hidden' name='opbusca' value='3'>	<input type=submit value=buscar></form>";
		}
}
</script>

<form action="relatorios-menu.php" method="get">
	<B>Selecione o tipo de busca:</B><br>
	<select id='opcoes' name=opbusca onchange="myFunction()">
		<option value=1>Nascidos por intervalo de data</option>
		<option value=2>Opção de Publicidade</option>
		<option value=3>Nome/email</option>
	</select><BR><BR>
</form>

<div id="conteudoOp">
	<form action='relatorios-detalhes.php' method='get'><br> 
		Data Inicial: <input type='date' name='dtinicial'><br> 
		Data Final: <input type='date' name='dtfinal'>
		<input type='hidden' name='opbusca' value='1'>
		<input type=submit value=buscar>
	</form>
</div>