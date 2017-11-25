-- -- ADICIONANDO FUNCOES
INSERT INTO funcao(descricao_funcao)
    VALUES("Admin");

INSERT INTO funcao(descricao_funcao)
    VALUES("Diretor");

INSERT INTO funcao(descricao_funcao)    
    VALUES("Coordenador");

INSERT INTO funcao(descricao_funcao)    
    VALUES("TAE");

INSERT INTO funcao(descricao_funcao)    
    VALUES("Docente");
    
-- -- ADICIONANDO SETORES
INSERT INTO setor(nome_setor)    
    VALUES("Direção Geral");

INSERT INTO setor(nome_setor)    
    VALUES("Gabinete");

INSERT INTO setor(nome_setor)    
    VALUES("Assesorias");

INSERT INTO setor(nome_setor)    
    VALUES("Diretoria de Planejamento e Desenvolvimento Institucional");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenação de Gestão de Pessoas");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenação de Tecnologia da Informação");

INSERT INTO setor(nome_setor)    
    VALUES("Unidade de Gestão de Documentos");

INSERT INTO setor(nome_setor)    
    VALUES("Direção de Administração");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Almoxarifado e Patrimonio");

INSERT INTO setor(nome_setor)    
    VALUES("Setor de Almoxarifado");

INSERT INTO setor(nome_setor)    
    VALUES("Setor de Patrimonio");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Infraestrutura");

INSERT INTO setor(nome_setor)    
    VALUES("Setor de Infraestrutura");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Licitacoes e Contratos");

INSERT INTO setor(nome_setor)    
    VALUES("Setor Licitacoes e Contratos");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Orcamentos e Financas");

INSERT INTO setor(nome_setor)    
    VALUES("Setor Orcamento e Financas");

INSERT INTO setor(nome_setor)    
    VALUES("Direção de Ensino");

INSERT INTO setor(nome_setor)    
    VALUES("Setor de Biblioteca");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Acoes Inclusivas");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Assistencia Estudantil");        

INSERT INTO setor(nome_setor)    
    VALUES("Setor de Assistencia Estudantil");        

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao Geral de Ensino");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao dos Cursos Superiores");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Educacao a Distancia");        

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao dos Eixos Tecnologicos");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao do Proeja");

INSERT INTO setor(nome_setor)    
    VALUES("Setor de Assesoria Pedagogica");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Registros Academicos");

INSERT INTO setor(nome_setor)    
    VALUES("Direcao de Pesquisa, Ensino e Produção");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Extensao");

INSERT INTO setor(nome_setor)    
    VALUES("Setor de Estagios");

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Pesquisa"); 

INSERT INTO setor(nome_setor)    
    VALUES("Coordenacao de Producao");

INSERT INTO setor(nome_setor)    
    VALUES("Setor de Producao");    
    
INSERT INTO setor(nome_setor)    
    VALUES("Sistema");    

-- -- ADICIONANDO STATUS_SOLICITACAO
INSERT INTO status(descricao_status)
    VALUES("Pendente");
    
INSERT INTO status(descricao_status)
    VALUES("Analise");
    
INSERT INTO status(descricao_status)
    VALUES("Revisão");
    
INSERT INTO status(descricao_status)
    VALUES("Aprovado");
    
INSERT INTO status(descricao_status)
    VALUES("Reprovado");

-- -- ADICIONANDO DADOS TABELA GRUPO
INSERT INTO grupo(nome_grupo)
    VALUES("Tipo 1");

-- -- ADICIONANDO DADOS TIPO DESPESA 
INSERT INTO tipo_despesa(nome_tipodespesa)
    VALUES("Tipo 2");
    
-- -- ADICIONANDO DADOS TABELA UNIDADE GESTORA
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155245, "Gabinete");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155246, "Administração");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155247, "Desenvolvimento Institucional");

INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155248, "Ensino");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155249, "Pesquisa");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155250, "Extensao");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155251, "Producao");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155252, "Ead");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155253, "Assistencia Estudantil");
    
INSERT INTO unidade_gestora(codigo_unidadegestora, nome_unidadegestora)
    VALUES(155254, "Pronatec");  

    
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
INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, verificado_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "admin", "admin", 1, 36, 1, 1);

INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, verificado_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "diretor", "diretor", 1, 4, 2, 2);

INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, verificado_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "coordenador", "coordenador", 1, 26, 3, 3);

INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, verificado_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "tae", "tae", 1, 11, 4, 4);      

INSERT INTO usuario(estado_usuario, login_usuario, senha_usuario, verificado_usuario, id_setor, id_funcao, id_funcionario)
    VALUES(1, "docente", "docente", 1, 18, 5, 5);      
    
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
    VALUES ("000","justificativa","criterio","consulta", 4, 1, 1, 1, 1, 1);

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