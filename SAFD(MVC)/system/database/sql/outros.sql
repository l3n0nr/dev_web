-- INSERINDO SOLICITACAO
INSERT INTO avaliacao_dpdi(comentarios_avaliacaodpdi, planejamentoexercicio_avaliacaodpdi, id_status, id_unidadegestora)
VALUES ("comentarios_avaliacaodpdi", "planejamento_avaliacaodpdi", 1, 1);

INSERT INTO avaliacao_dad()
VALUES ()

INSERT INTO solicitacao(numero_solicitacao, justificativa_solicitacao, consulta_estoque, criterio_aceitabilidade, id_usuario, id_status, id_avaliacaodpdi, id_avaliacaodad)
VALUES (000, "justificativa_solicitacao", "consulta_estoque", "criterio_aceitabilidade", 1, 1, 1, 1)

$sql = "INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario, n_portaria_funcionario) VALUES";
$sql.= "($siape, '$nome', '$email', '$portaria');";


CREATE TABLE IF NOT EXISTS funcionario(        
    id_funcionario int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        siape_funcionario int(10) NOT NULL,
        nome_funcionario VARCHAR(40) NOT NULL,		
        email_funcionario VARCHAR(40) NOT NULL);                     

CREATE TABLE IF NOT EXISTS funcao(    
    id_funcao int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,        
        descricao_funcao VARCHAR(40) NOT NULL); 
        
CREATE TABLE IF NOT EXISTS setor(
    id_setor int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome_setor VARCHAR(40) NOT NULL);	        
        
CREATE TABLE IF NOT EXISTS usuario_funcao(
    id_usuario_funcao int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,                
        numero_portaria int(10) NOT NULL,
        
        id_funcionario int(10) NOT NULL,
        id_usuario int(10) NOT NULL);        
        
CREATE TABLE IF NOT EXISTS usuario_setor(
    id_usuario_setor int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,        
        data_cadastro TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,       
        
        id_setor int(10) NOT NULL,
        id_usuario int(10) NOT NULL);        
        
CREATE TABLE IF NOT EXISTS usuario(        
    id_usuario int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,                               
        estado_usuario binary NOT NULL, 
        login_usuario VARCHAR(50) NOT NULL,
        senha_usuario VARCHAR(50) NOT NULL,
        
        id_usuario_setor int(10) NOT NULL,  
        id_usuario_funcao int(10) NOT NULL,  
        id_funcao int(10) NOT NULL);      

-- -- 	CRIANDO LIGAÇÕES ENTRE AS TABELAS	
    ALTER TABLE usuario_setor
        ADD CONSTRAINT id_setor 
        FOREIGN KEY (id_setor) 
        REFERENCES setor(id_setor);	
        
    ALTER TABLE usuario_setor
        ADD CONSTRAINT id_usuario 
        FOREIGN KEY (id_usuario) 
        REFERENCES usuario(id_usuario);	
    
    ALTER TABLE usuario_funcao
        ADD CONSTRAINT id_funcionario 
        FOREIGN KEY (id_funcionario) 
        REFERENCES funcionario(id_funcionario);	
        
    ALTER TABLE usuario_funcao
        ADD CONSTRAINT id_usuario 
        FOREIGN KEY (id_usuario) 
        REFERENCES usuario(id_usuario);	

        
-- -- ALTERACAO DIA 22/11

CREATE TABLE IF NOT EXISTS licitacao(
    id_licitacao int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	comentarios_licitacao VARCHAR(255) NOT NULL,
	data_licitacao TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	
	id_statuslicitacao int(10) NOT NULL);		

ALTER TABLE licitacao
    ADD CONSTRAINT id_statuslicitacao
    FOREIGN KEY (id_statuslicitacao)
    REFERENCES status_licitacao(id_statuslicitacao);

ALTER TABLE solicitacao
	ADD CONSTRAINT id_licitacao
	FOREIGN KEY (id_licitacao)
	REFERENCES licitacao(id_licitacao);   

-- -- VERIFICAR
ALTER TABLE solicitacao
	ADD CONSTRAINT id_statuslicitacao
	FOREIGN KEY (id_statuslicitacao)
	REFERENCES licitacao(id_statuslicitacao);

ALTER TABLE solicitacao
	ADD CONSTRAINT id_statussolicitacao
	FOREIGN KEY (id_statussolicitacao)
	REFERENCES statuslicitacao(id_statussolicitacao);      

-- -- ADICIONANDO STATUS_LICITACAO
INSERT INTO status_solicitacao(descricao_statussolicitacao)
    VALUES("pendente");
    
INSERT INTO status_solicitacao(descricao_statussolicitacao)
    VALUES("analise");
    
INSERT INTO status_solicitacao(descricao_statussolicitacao)
    VALUES("revisão");
    
INSERT INTO status_solicitacao(descricao_statussolicitacao)
    VALUES("aprovado");
    
INSERT INTO status_solicitacao(descricao_statussolicitacao)
    VALUES("reprovado");

-- VERIFICAR    
INSERT INTO `solicitacao`(`numeroprotocolo_solicitacao`, `justificativa_solicitacao`, `criterio_aceitabilidade`, `consulta_estoque`, `id_usuario`, `id_status`, `id_avaliacaodpdi`, `id_avaliacaodad`, `id_avaliacaocoord`, `id_avaliacaodg`) 
    VALUES ("000","justificativa","criterio","consulta", 1, 1, 1, 1, 1, 1)

INSERT INTO `solicitacao_itens`(`quantidade_objeto`, `prazoentrega_objeto`, `prazoexecucao_objeto`, `id_solicitacao`, `id_objeto`) 
    VALUES ("0","","", 1, 1)