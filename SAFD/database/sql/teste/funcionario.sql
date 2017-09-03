CREATE TABLE funcionario(
	siape_funcionario int(10) NOT NULL PRIMARY KEY,
	nome_funcionario varchar(40) NOT NULL,
        email_funcionario varchar(40) NOT NULL,
        
	INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)	
		VALUES("000", "root", "root@root.com"),
		
	INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)		
		VALUES("001", "user", "user@user.com");