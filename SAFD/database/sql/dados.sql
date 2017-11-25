-- -- ADICIONANDO FUNCOES
INSERT INTO funcao(descricao_funcao)
    VALUES("Admin");

INSERT INTO funcao(descricao_funcao)
    VALUES("Diretor");

INSERT INTO funcao(descricao_funcao)    
    VALUES("Coordenador");

INSERT INTO funcao(descricao_funcao)    
    VALUES("Chefe");

INSERT INTO funcao(descricao_funcao)    
    VALUES("Professor");
    
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
    
INSERT INTO setor(nome_setor)    
    VALUES("sistema");    

-- -- ADICIONANDO STATUS_SOLICITACAO
INSERT INTO status(descricao_status)
    VALUES("pendente");
    
INSERT INTO status(descricao_status)
    VALUES("analise");
    
INSERT INTO status(descricao_status)
    VALUES("revisão");
    
INSERT INTO status(descricao_status)
    VALUES("aprovado");
    
INSERT INTO status(descricao_status)
    VALUES("reprovado");

-- -- ADICIONANDO DADOS TABELA GRUPO
INSERT INTO grupo(nome_grupo)
    VALUES("tipo 1");

-- -- ADICIONANDO DADOS TIPO DESPESA 
INSERT INTO tipo_despesa(nome_tipodespesa)
    VALUES("tipo 1");
    
-- -- ADICIONANDO DADOS TABELA UNIDADE GESTORA
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155245, "gabinete");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155246, "administração");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155247, "desenvolvimento institucional");

INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155248, "ensino");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155249, "pesquisa");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155250, "extensao");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155251, "producao");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155252, "ead");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155253, "assistencia estudantil");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155254, "pronatec");  

    
-- -- ADICIONANDO FUNCIONARIOS
INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario, n_portaria_funcionario)
    VALUES(0000, "administrador", "administrador@gmail.com", 000000);

INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario, n_portaria_funcionario)
    VALUES(0001, "Pedro Martins", "pedromartins@gmail.com", 000001);

INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario, n_portaria_funcionario)
    VALUES(0002, "Joao da Silva", "joaosilva@gmail.com", 000002);

INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario, n_portaria_funcionario)
    VALUES(0003, "Bruna Pires", "brunapires@gmail.com", 000003);

INSERT INTO funcionario(siape_funcionario, nome_funcionario, email_funcionario, n_portaria_funcionario)
    VALUES(0004, "Camila Freitas", "camilafreitas@gmail.com", 000003);

-- -- ADICIONANDO USUARIOS
INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "admin", "admin", 1, 1, 1);

INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "diretor", "diretor", 7, 2, 2);

INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "coordenador", "coordenador", 9, 3, 3);

INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "chefe", "chefe", 1, 4, 4);      

INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "professor", "professor", 1, 5, 5);      
    
-- -- ADICIONANDO DADOS TABELA OBJETOS
INSERT INTO objeto(nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto, id_grupo)
    VALUES("caneta", "canetas esferografica", "licitaçao", "0,50", 1);
    
-- -- ADICIONANDO DADOS TABELA OBJETOS
INSERT INTO objeto(nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto, id_grupo)
    VALUES("cadeira", "Cadeira com acento inclinavel", "licitaçao", "100", 2);

-- -- ADICIONANDO CAMPOS TABELA OBJETO
INSERT INTO objeto(nome_objeto, especificacoestecnicas_objeto, estrategiafornecimento_objeto, preco_objeto, id_grupo)
    VALUES("caneta", "canetas esferografica", "licitaçao", "0,50", 1);

-- ADICIONANDO SOLICITACAO 1
INSERT INTO avaliacao_dad(recursos_avaliacaodad, comentarios_avaliacaodad, valorestimadodespesa_avaliacaodad, id_status, id_tipodespesa)	
    VALUES("", "", 0, 1, 1);

INSERT INTO avaliacao_dpdi(comentarios_avaliacaodpdi, planejamentoexercicio_avaliacaodpdi, id_status, id_unidadegestora)
    VALUES("", "", 1, 1);

INSERT INTO avaliacao_coord(resposta_avaliacaocoord, observacao_avaliacaocoord, id_status)	    	
    VALUES("", "", 1);

INSERT INTO avaliacao_dg(resposta_avaliacaodg, observacao_avaliacaodg, id_status)            
    VALUES("", "", 1);
    
INSERT INTO `solicitacao`(`numeroprotocolo_solicitacao`, `justificativa_solicitacao`, `criterio_aceitabilidade`, `consulta_estoque`, `id_usuario`, `id_status`, `id_avaliacaodpdi`, `id_avaliacaodad`, `id_avaliacaocoord`, `id_avaliacaodg`) 
    VALUES ("000","justificativa","criterio","consulta", 1, 1, 1, 1, 1, 1);

INSERT INTO `solicitacao_itens`(`quantidade_objeto`, `prazoentrega_objeto`, `prazoexecucao_objeto`, `id_solicitacao`, `id_objeto`) 
    VALUES ("0","","", 1, 1);  

-- ADICIONANDO SOLICITACAO 2

INSERT INTO avaliacao_dad(recursos_avaliacaodad, comentarios_avaliacaodad, valorestimadodespesa_avaliacaodad, id_status, id_tipodespesa)    
    VALUES("", "", 0, 4, 1);

INSERT INTO avaliacao_dpdi(comentarios_avaliacaodpdi, planejamentoexercicio_avaliacaodpdi, id_status, id_unidadegestora)
    VALUES("", "", 4, 1);

INSERT INTO avaliacao_coord(resposta_avaliacaocoord, observacao_avaliacaocoord, id_status)          
    VALUES("", "", 4);

INSERT INTO avaliacao_dg(resposta_avaliacaodg, observacao_avaliacaodg, id_status)            
    VALUES("", "", 4);
    
INSERT INTO `solicitacao`(`numeroprotocolo_solicitacao`, `justificativa_solicitacao`, `criterio_aceitabilidade`, `consulta_estoque`, `id_usuario`, `id_status`, `id_avaliacaodpdi`, `id_avaliacaodad`, `id_avaliacaocoord`, `id_avaliacaodg`) 
    VALUES ("000","justificativa","criterio","consulta", 3, 4, 2, 2, 2, 2);

INSERT INTO `solicitacao_itens`(`quantidade_objeto`, `prazoentrega_objeto`, `prazoexecucao_objeto`, `id_solicitacao`, `id_objeto`) 
    VALUES ("0","","", 2, 2);  
-- -- -- -- -- -- -- --     