-- -- NÃO É NECESSÁRIO, REMOVER!
INSERT INTO administrador(nome_administrador, senha_administrador, habilitado_administrador)
        VALUES("admin", "admin", "0");
        
-- -- NÃO É NECESSÁRIO, REMOVER!        
INSERT INTO administrador(nome_administrador, senha_administrador, habilitado_administrador)
        VALUES("lenonr", "lenonr", "1"); 

-- -- ADICIONANDO USUARIO        
INSERT INTO setor(nome_setor)
    VALUES("administração");
    
INSERT INTO usuario(id_setor, estado_usuario, login_usuario, senha_usuario)
    VALUES(1, 1, "admin", "admin");
    
INSERT INTO usuario(id_setor, estado_usuario, login_usuario, senha_usuario)
    VALUES(1, 1, "lenonr", "lenonr");
    
INSERT INTO usuario(id_setor, estado_usuario, login_usuario, senha_usuario)
    VALUES(1, 0, "teste", "teste");
        
INSERT INTO funcao(descricao_funcao)        
    VALUES("Administrador");
    
INSERT INTO funcao(descricao_funcao)        
    VALUES("Padrao");
    
-- -- -- -- -- -- -- --     
    
    
    


        
        