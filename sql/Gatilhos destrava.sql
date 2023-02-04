-- gatilho pra adicionar id à tabela dos professores para deixar vinculado à tabela usuario caso um novo professor seja cadastrado :

DELIMITER $$
CREATE TRIGGER tr_usuariosprofessor_insert
AFTER INSERT ON usuarios
FOR EACH ROW
BEGIN
  IF NEW.tipo = 'professor' THEN
    INSERT INTO usuariosprofessor (id)
    VALUES (NEW.id);
  END IF;
END$$
DELIMITER ;



-- gatilho pra adicionar id à tabela dos alunos para deixar vinculado à tabela usuario caso um novo aluno seja cadastro :

DELIMITER $$
CREATE TRIGGER tr_usuariosaluno_insert
AFTER INSERT ON usuarios
FOR EACH ROW
BEGIN
  IF NEW.tipo = 'aluno' THEN
    INSERT INTO usuariosaluno (id)
    VALUES (NEW.id);
  END IF;
END$$
DELIMITER ;

-- gatilho pra adicionar id à tabela dos enderecos para deixar vinculado à tabela usuario caso um novo usuario seja cadastro :

DELIMITER $$
CREATE TRIGGER tr_endereco_insert
AFTER INSERT ON usuarios
FOR EACH ROW
BEGIN
    INSERT INTO enderecos (id)
    VALUES (NEW.id);
END$$
DELIMITER ;

