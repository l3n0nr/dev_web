<?php 
    // Connection data (server_address, database, name, poassword)
    $hostdb = 'localhost';
    $namedb = 'safd';
    $userdb = 'root';
    $passdb = 'lenonr';
    
     //recebendo dados do formulario
    $siape  = $_POST['siape_funcionario'];
    $nome   = $_POST['nome_funcionario'];
    $email  = $_POST['email_funcionario'];

    try 
    {
        // Connect and create the PDO object
        $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
        $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

        // Define an insert query
        $sql = "INSERT INTO `funcionario` (`siape_funcionario`, `nome_funcionario`, `email_funcionario`)
            VALUES
            ('666'),
            ('teste'),
            ('teste@teste.com')";
        $count = $conn->exec($sql);

        $conn = null;        // Disconnect
        
        echo "funcionou";
    }
    catch(PDOException $e) 
    {
        echo $e->getMessage();
        echo "nao funcionou";
    }

    // If data added ($count not false) displays the number of rows added
    if($count !== false) echo 'Number of rows added: '. $count;
?>