########################################################################################
CREATE TABLE funcionario(
	siape_funcionario int(10) NOT NULL PRIMARY KEY,
	nome_funcionario varchar(40) NOT NULL,
        email_funcionario varchar(40) NOT NULL);

        ################################################################################
        
	INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)	
		VALUES("000", "root", "root@root.com");
		
	INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)		
		VALUES("001", "user", "user@user.com");
		
########################################################################################
CREATE TABLE usuario(
    id_setor int(10) NOT NULL,
	estado_usuario binary NOT NULL, 
	login_usuario varchar(50) NOT NULL,
	senha_usuario varchar(50) NOT NULL);
	
	ALTER TABLE `usuario` 
	ADD CONSTRAINT `siape_funcionario` 
	FOREIGN KEY (`siape_funcionario`) 
	REFERENCES `funcionario` (`siape_funcionario`);	
	
	ALTER TABLE `usuario` 
	ADD CONSTRAINT `id_setor` 
	FOREIGN KEY (`id_setor`) 
	REFERENCES `setor` (`id_setor`);	
	
	###############################################################################
	
	INSERT INTO usuario(id_setor, estado_usuario, login_usuario, senha_usuario, siape_funcionario)
		VALUES("00", 1, "lenonr", "lenonr", "666");
		
	INSERT INTO usuario(id_setor, estado_usuario, login_usuario, senha_usuario, siape_funcionario)		
		VALUES(1, "joao", "1234", "554");
		
########################################################################################

CREATE TABLE funcao(
	id_funcao int(5) NOT NULL auto_increment PRIMARY KEY,
	descricao_funcao varchar(40) NOT NULL);
	
	###############################################################################
	
	INSERT INTO funcao(id_funcao, descricao_funcao)
		VALUES("","administrador");
		
	INSERT INTO funcao(id_funcao, descricao_funcao)
		VALUES("","diretor");
		
	INSERT INTO funcao(id_funcao, descricao_funcao)
		VALUES("","coordenador");	
		
	INSERT INTO funcao(id_funcao, descricao_funcao)
		VALUES("","usuariocomum");	
		
########################################################################################
CREATE TABLE usuario_cadastrado(
	numero_portarioa int(5) NOT NULL,
	datainicio date NOT NULL,
	datafim date NOT NULL);	
		
########################################################################################
CREATE TABLE setor(
	id_setor int(10) NOT NULL PRIMARY KEY,
	nome_setor varchar(40) NOT NULL);
	
	INSERT INTO setor(nome_setor)
		VALUES("TI");
		
########################################################################################
CREATE TABLE funcao_funcionario
	nportaria_funcaofuncionario int(10) NOT NULL PRIMARY KEY,
	data_funcaofuncionario DATE);


########################################################################################
CREATE TABLE solicitacao(
	id_solicitacao int(10) NOT NULL PRIMARY KEY,
	justificativa_solicitacao varchar(40) NOT NULL,
	data_solicitacao varchar(40) NOT NULL,
	numeroprotocolo_solicitacao varchar(40) NOT NULL);

########################################################################################
CREATE TABLE status_solicitacao(
	id_statussolicitacao int(10) NOT NULL PRIMARY KEY,
	nome_statussolicitacao varchar(40) NOT NULL);
	
########################################################################################
CREATE TABLE unidade(
	id_unidade int(10) NOT NULL PRIMARY KEY,
	nome_unidade varchar(40) NOT NULL);

########################################################################################
CREATE TABLE objeto(
	id_objeto int(10) NOT NULL PRIMARY KEY,
	especificacoestecnicas_objeto varchar(40) NOT NULL,
	prazoentrega_objeto varchar(40) NOT NULL,
	prazoexecucao_objeto varchar(40) NOT NULL,
	estrategiafornecimento_objeto varchar(40) NOT NULL,
	nome_objeto varchar(40) NOT NULL);
	
########################################################################################	
CREATE TABLE avaliacao_dpdi(
	id_avaliacaodpdi int(10) NOT NULL PRIMARY KEY,
	comentarios_avaliacaodpdi varchar(40) NOT NULL,
	planejamentoexercicio_avaliacaodpdi varchar(40) NOT NULL,

########################################################################################
CREATE TABLE unidade_gestora(
	id_unidadegestora int(10) NOT NULL PRIMARY KEY,
	nome_unidadegestora varchar(40) NOT NULL);

########################################################################################
CREATE TABLE avaliacao_dad(
	id_avaliacaodad int(10) NOT NULL PRIMARY KEY,
	recursos_avaliacaodad varchar(400) NOT NULL,
	comentarios_avaliacaodad varchar(400) NOT NULL,
	valorestimadodespesa_avaliacaodad int(40) NOT NULL);

########################################################################################
CREATE TABLE tipo_despesa(
	id_tipodespesa int(10) NOT NULL PRIMARY KEY,
	nome_tipodespesa varchar(40) NOT NULL);

########################################################################################
CREATE TABLE licitacao(
	id_licitacao int(10) NOT NULL PRIMARY KEY,
	comentarios_licitacao VARCHAR(40) NOT NULL);

########################################################################################
CREATE TABLE status_licitacao(
	id_statuslicitacao int(10) NOT NULL PRIMARY KEY,
	nome_statuslicitacao varchar(40) NOT NULL);
	
########################################################################################