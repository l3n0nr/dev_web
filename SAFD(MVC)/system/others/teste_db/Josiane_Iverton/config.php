

<?php

/*
	script criação tabela cadastro no MySql
	
	CREATE TABLE cadastro(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome varchar(255),
	email varchar(255),
	data date NOT NULL,
	hora time NOT NULL,
	receber_publicidade BOOL);

	CREATE TABLE preferencias(
	id int(11) NOT NULL AUTO_INCREMENT,
	nome_pref varchar(20) NOT NULL,
	PRIMARY KEY (id));
	
	CREATE TABLE pessoa_preferencias (
    id_pessoa INT,
    id_pref INT,
    FOREIGN KEY (id_pessoa)
    REFERENCES cadastro(id),
    FOREIGN KEY (id_pref)
    REFERENCES preferencias(id));
	
	
*/

$conn = 'mysql:host=localhost;dbname=curso_pdo';
try
{
	$db = new PDO($conn, 'root','');
	echo "Conexão realizada!";
}
catch(PDOException $e)
{
	echo "erro";
	echo $e->getMessage();
}