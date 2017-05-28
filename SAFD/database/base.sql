CREATE TABLE IF NOT EXISTS funcao  (
    id_funcao int(5) NOT NULL PRIMARY KEY,
	descricao_funcao VARCHAR(40) NOT NULL); 

CREATE TABLE IF NOT EXISTS funcionario(
	siape_funcionario int(10) NOT NULL PRIMARY KEY,
	nome_funcionario VARCHAR(40) NOT NULL,
        email_funcionario VARCHAR(40) NOT NULL);      	

CREATE TABLE IF NOT EXISTS usuario(
    id_setor int(10) NOT NULL,
	estado_usuario binary NOT NULL, 
	login_usuario VARCHAR(50) NOT NULL,
	senha_usuario VARCHAR(50) NOT NULL);		

CREATE TABLE IF NOT EXISTS usuario_cadastrado(
    numero_portaria int(5) NOT NULL,
	datainicio date NOT NULL,
	datafim date NOT NULL);
		
CREATE TABLE IF NOT EXISTS setor(
    id_setor int(10) NOT NULL PRIMARY KEY,
	nome_setor VARCHAR(40) NOT NULL);
		
CREATE TABLE IF NOT EXISTS funcao_funcionario(
    nportaria_funcaofuncionario int(10) NOT NULL PRIMARY KEY,
	data_funcaofuncionario DATE);

CREATE TABLE IF NOT EXISTS solicitacao(
    id_solicitacao int(10) NOT NULL PRIMARY KEY,
	justificativa_solicitacao VARCHAR(40) NOT NULL,
	data_solicitacao VARCHAR(40) NOT NULL,
	numeroprotocolo_solicitacao VARCHAR(40) NOT NULL);

CREATE TABLE IF NOT EXISTS status_solicitacao(
    id_statussolicitacao int(10) NOT NULL PRIMARY KEY,
	nome_statussolicitacao VARCHAR(40) NOT NULL);

CREATE TABLE IF NOT EXISTS unidade(
    id_unidade int(10) NOT NULL PRIMARY KEY,
	nome_unidade VARCHAR(40) NOT NULL);

CREATE TABLE IF NOT EXISTS objeto(
    id_objeto int(10) NOT NULL PRIMARY KEY,
	especificacoestecnicas_objeto VARCHAR(40) NOT NULL,
	prazoentrega_objeto VARCHAR(40) NOT NULL,
	prazoexecucao_objeto VARCHAR(40) NOT NULL,
	estrategiafornecimento_objeto VARCHAR(40) NOT NULL,
	nome_objeto VARCHAR(40) NOT NULL);

CREATE TABLE IF NOT EXISTS avaliacao_dpdi(
    id_avaliacaodpdi int(10) NOT NULL PRIMARY KEY,
	comentarios_avaliacaodpdi VARCHAR(40) NOT NULL,
	planejamentoexercicio_avaliacaodpdi VARCHAR(40) NOT NULL);

CREATE TABLE IF NOT EXISTS unidade_gestora(
    id_unidadegestora int(10) NOT NULL PRIMARY KEY,
	nome_unidadegestora VARCHAR(40) NOT NULL);

CREATE TABLE IF NOT EXISTS avaliacao_dad(
    id_avaliacaodad int(10) NOT NULL PRIMARY KEY,
	recursos_avaliacaodad VARCHAR(400) NOT NULL,
	comentarios_avaliacaodad VARCHAR(400) NOT NULL,
	valorestimadodespesa_avaliacaodad int(40) NOT NULL);

CREATE TABLE IF NOT EXISTS tipo_despesa(
    id_tipodespesa int(10) NOT NULL PRIMARY KEY,
	nome_tipodespesa VARCHAR(40) NOT NULL);

CREATE TABLE IF NOT EXISTS licitacao(
    id_licitacao int(10) NOT NULL PRIMARY KEY,
	comentarios_licitacao VARCHAR(40) NOT NULL);

CREATE TABLE IF NOT EXISTS status_licitacao(
    id_statuslicitacao int(10) NOT NULL PRIMARY KEY,
	nome_statuslicitacao VARCHAR(40) NOT NULL);