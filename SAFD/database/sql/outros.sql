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
