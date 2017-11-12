CREATE TABLE IF NOT EXISTS usuario(
        id_usuario int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            estado_usuario binary NOT NULL, 
            login_usuario VARCHAR(50) NOT NULL,
            senha_usuario VARCHAR(50) NOT NULL,	

-- -- CHAVES ESTRANGEIRAS 
                id_funcao int(10) NOT NULL,
                id_setor int(10) NOT NULL,
                id_funcionario int(10) NOT NULL);  
		
CREATE TABLE IF NOT EXISTS funcionario(
        id_funcionario int (10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		siape_funcionario int(10) NOT NULL,
		nome_funcionario VARCHAR(40) NOT NULL,		
		email_funcionario VARCHAR(40) NOT NULL,
		data_cadastro_funcionario TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP);  

CREATE TABLE IF NOT EXISTS funcao(
    id_funcao int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	descricao_funcao VARCHAR(40) NOT NULL); 
        
CREATE TABLE IF NOT EXISTS setor(
    id_setor int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome_setor VARCHAR(40) NOT NULL);	
	
-- -- 	CRIANDO LIGAÇÕES ENTRE AS TABELAS	
	ALTER TABLE usuario
            ADD CONSTRAINT id_setor 
            FOREIGN KEY (id_setor) 
            REFERENCES setor (id_setor);	

        ALTER TABLE usuario 
            ADD CONSTRAINT id_funcao     
            FOREIGN KEY (id_funcao) 
            REFERENCES funcao (id_funcao);    
            
        ALTER TABLE usuario
            ADD CONSTRAINT id_funcionario
            FOREIGN KEY (id_funcionario)
            REFERENCES funcionario(id_funcionario);
	
-- -- TABELAS VOLTADAS PARA SOLICITACAO DOS DOCUMENTOS
CREATE TABLE IF NOT EXISTS solicitacao(
    id_solicitacao int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	justificativa_solicitacao VARCHAR(40) NOT NULL,
	data_solicitacao VARCHAR(40) NOT NULL,
	numeroprotocolo_solicitacao VARCHAR(40) NOT NULL);
	
CREATE TABLE IF NOT EXISTS licitacao(
    id_licitacao int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	comentarios_licitacao VARCHAR(40) NOT NULL);
		        
CREATE TABLE IF NOT EXISTS status_licitacao(
    id_statuslicitacao int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome_statuslicitacao VARCHAR(40) NOT NULL);

CREATE TABLE IF NOT EXISTS status_solicitacao(
    id_statussolicitacao int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome_statussolicitacao VARCHAR(40) NOT NULL);
	
CREATE TABLE IF NOT EXISTS avaliacao_dpdi(
    id_avaliacaodpdi int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	comentarios_avaliacaodpdi VARCHAR(40) NOT NULL,
	planejamentoexercicio_avaliacaodpdi VARCHAR(40) NOT NULL);
	
CREATE TABLE IF NOT EXISTS unidade_gestora(
    id_unidadegestora int(10) NOT NULL PRIMARY KEY,
	nome_unidadegestora VARCHAR(40) NOT NULL);
	
CREATE TABLE IF NOT EXISTS avaliacao_dad(
    id_avaliacaodad int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	recursos_avaliacaodad VARCHAR(400) NOT NULL,
	comentarios_avaliacaodad VARCHAR(400) NOT NULL,
	valorestimadodespesa_avaliacaodad int(40) NOT NULL);

CREATE TABLE IF NOT EXISTS tipo_despesa(
    id_tipodespesa int(10) NOT NULL PRIMARY KEY,
	nome_tipodespesa VARCHAR(40) NOT NULL);
	
CREATE TABLE IF NOT EXISTS objeto(
    id_objeto int(10) NOT NULL PRIMARY KEY,
	especificacoestecnicas_objeto VARCHAR(40) NOT NULL,
	prazoentrega_objeto VARCHAR(40) NOT NULL,
	prazoexecucao_objeto VARCHAR(40) NOT NULL,
	estrategiafornecimento_objeto VARCHAR(40) NOT NULL,
	nome_objeto VARCHAR(40) NOT NULL);
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
