-- -- ADICIONANDO USUARIO        
INSERT INTO setor(nome_setor)
    VALUES("administrador");
    
-- INSERT INTO setor(nome_setor)
--     VALUES("padrao");
    
INSERT INTO funcao(descricao_funcao)        
    VALUES("Administrador");
    
    INSERT INTO funcao(descricao_funcao)        
        VALUES("Padrao");
    
-- -- ADICIONANDO FUNCOES
INSERT INTO funcao(descricao_funcao)
    VALUES("Diretor");
    
    INSERT INTO funcao(descricao_funcao)    
        VALUES("Coordenador");
    
        INSERT INTO funcao(descricao_funcao)    
            VALUES("Chefe");
    
            INSERT INTO funcao(descricao_funcao)    
                VALUES("Outro");
    
-- -- ADICIONANDO SETORES
INSERT INTO setor(nome_setor)    
    VALUES("dg");
    
    INSERT INTO setor(nome_setor)    
        VALUES("gabinete");
    
    INSERT INTO setor(nome_setor)    
        VALUES("assesorias");
        
INSERT INTO setor(nome_setor)    
    VALUES("dpdi");
    
    INSERT INTO setor(nome_setor)    
        VALUES("coordenacao_gestao_pessoas");

    INSERT INTO setor(nome_setor)    
        VALUES("coordenacao_tecnologia_informacao");

    INSERT INTO setor(nome_setor)    
        VALUES("unidade_gestao_documentos");

INSERT INTO setor(nome_setor)    
    VALUES("dad");
    
    INSERT INTO setor(nome_setor)    
        VALUES("coordenacao_almoxarifado_patrimonio");

        INSERT INTO setor(nome_setor)    
            VALUES("setor almoxarifado");

        INSERT INTO setor(nome_setor)    
            VALUES("setor patrimonio");

    INSERT INTO setor(nome_setor)    
        VALUES("coordenacao_infraestrutura");

        INSERT INTO setor(nome_setor)    
            VALUES("setor infraestrutura");
            
    INSERT INTO setor(nome_setor)    
        VALUES("coordenacao_licitacoes_contratos");

        INSERT INTO setor(nome_setor)    
            VALUES("setor licitacoes e contratos");

    INSERT INTO setor(nome_setor)    
        VALUES("coordenacao_orcamentos_financas");
        
        INSERT INTO setor(nome_setor)    
            VALUES("setor orcamento e financas");

    INSERT INTO setor(nome_setor)    
        VALUES("de");
    
            INSERT INTO setor(nome_setor)    
                VALUES("setor biblioteca");

        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao_acoes_inclusivas");
            
        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao_assistencia estudantil");        
        
            INSERT INTO setor(nome_setor)    
                VALUES("setor assistencia estudantil");        

        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao_geral_ensino");

        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao_cursos_superiores");
            
        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao_educacao_distancia");        

        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao_eixos_tecnologicos");

        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao_proeja");

            INSERT INTO setor(nome_setor)    
                VALUES("setor_assesoria_pedagogica");

        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao_registros_academicos");

    INSERT INTO setor(nome_setor)    
        VALUES("dpep");

        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao extensao");

            INSERT INTO setor(nome_setor)    
                VALUES("setor estagios");

        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao pesquisa"); 

        INSERT INTO setor(nome_setor)    
            VALUES("coordenacao producao");
            
            INSERT INTO setor(nome_setor)    
                VALUES("setor producao");        
            
-- INSERT INTO setor(nome_setor)    
-- VALUES("");

    INSERT INTO usuario(id_usuario, estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, siape_funcionario)
        VALUES(1, 1, "admin", "admin", 1, 4, 0000);
        
    INSERT INTO usuario(id_usuario, estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, siape_funcionario)
        VALUES(2, 1, "lenon", "lenon", 7, 2, 0001);
        
    INSERT INTO usuario(id_usuario, estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, siape_funcionario)
        VALUES(3, 1, "ricardo", "ricardo", 9, 1, 0002);
        
    INSERT INTO usuario(id_usuario, estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, siape_funcionario)
        VALUES(4, 0, "teste", "teste", 1, 3, 0003);
        
    INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)
        VALUES(0000, "administrador", "administrador@gmail.com");
        
    INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)
        VALUES(0001, "lenon", "lenon@gmail.com");
        
    INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)
        VALUES(0002, "ricardo", "ricardo@gmail.com");
        
    INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario)
        VALUES(0003, "teste", "teste@gmail.com");

-- -- -- -- -- -- -- --     