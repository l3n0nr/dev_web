ALTER TABLE `usuario` 
    ADD CONSTRAINT `siape_funcionario` 
    FOREIGN KEY (`siape_funcionario`) 
    REFERENCES `funcionario` (`siape_funcionario`);

ALTER TABLE `usuario` 
    ADD CONSTRAINT `id_setor` 
    FOREIGN KEY (`id_setor`) 
    REFERENCES `setor` (`id_setor`);	

INSERT INTO funcao(id_funcao, descricao_funcao)
        VALUES("","administrador");
	
INSERT INTO funcao(id_funcao, descricao_funcao)
	VALUES("","diretor");
	
INSERT INTO funcao(id_funcao, descricao_funcao)
	VALUES("","coordenador");	
	
INSERT INTO funcao(id_funcao, descricao_funcao)
	VALUES("","usuariocomum");
	
INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)	
	VALUES("000", "root", "root@root.com");
	
INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)		
	VALUES("001", "user", "user@user.com");
	
INSERT INTO setor(nome_setor)
	VALUES("TI")

INSERT INTO usuario(id_setor, estado_usuario, login_usuario, senha_usuario, siape_funcionario)
	VALUES("00", 1, "lenonr", "lenonr", "666");
	
INSERT INTO usuario(id_setor, estado_usuario, login_usuario, senha_usuario, siape_funcionario)		
	VALUES(1, "joao", "1234", "554");


-- -- OUTRAS [VERIFICAR NECESSIDADE]

CREATE TABLE IF NOT EXISTS usuario_cadastrado(
    numero_portaria int(5) NOT NULL ,
	datainicio date NOT NULL,
	datafim date NOT NULL);	                
		
CREATE TABLE IF NOT EXISTS funcao_funcionario(
    nportaria_funcaofuncionario int(10) NOT NULL PRIMARY KEY,
	data_funcaofuncionario DATE);

CREATE TABLE IF NOT EXISTS unidade(
    id_unidade int(10) NOT NULL PRIMARY KEY,
	nome_unidade VARCHAR(40) NOT NULL);
	
CREATE TABLE IF NOT EXISTS administrador(
    id_administrador int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome_administrador VARCHAR(40) NOT NULL,
        senha_administrador VARCHAR(40) NOT NULL,
        habilitado_administrador BINARY NOT NULL);