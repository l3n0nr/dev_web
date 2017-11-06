-- -- EXCLUINDO DADOS ENTRELAÇADOS
DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = 1;
DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = 2;
DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = 3;
DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = 4;

-- -- EXCLUINDO DADOS - TABELAS INDIVIDUAIS
DELETE FROM `setor` WHERE `setor`.`id_setor` = 1;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 2;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 3;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 4;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 5;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 6;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 7;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 8;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 9;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 10;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 11;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 12;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 13;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 14;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 15;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 16;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 17;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 18;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 19;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 20;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 21;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 22;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 23;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 24;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 25;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 26;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 26;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 27;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 28;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 29;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 30;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 31;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 32;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 33;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 34;
DELETE FROM `setor` WHERE `setor`.`id_setor` = 35;

DELETE FROM `funcao` WHERE `funcao`.`id_funcao` = 1;
DELETE FROM `funcao` WHERE `funcao`.`id_funcao` = 2;
DELETE FROM `funcao` WHERE `funcao`.`id_funcao` = 3;
DELETE FROM `funcao` WHERE `funcao`.`id_funcao` = 4;
DELETE FROM `funcao` WHERE `funcao`.`id_funcao` = 5;

DELETE FROM `funcionario` WHERE `funcionario`.`id_funcionario` = 1;
DELETE FROM `funcionario` WHERE `funcionario`.`id_funcionario` = 2;
DELETE FROM `funcionario` WHERE `funcionario`.`id_funcionario` = 3;
DELETE FROM `funcionario` WHERE `funcionario`.`id_funcionario` = 4;

-- -- EXCLUINDO TABELAS
DROP TABLE objeto;
DROP TABLE tipo_despesa;
DROP TABLE avaliacao_dad;
DROP TABLE unidade_gestora;
DROP TABLE avaliacao_dpdi;
DROP TABLE status_solicitacao;
DROP TABLE status_licitacao;
DROP TABLE licitacao;
DROP TABLE solicitacao;
DROP TABLE usuario;
DROP TABLE setor;
DROP TABLE funcao;
DROP TABLE funcionario;