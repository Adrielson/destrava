
-- gatilho pra adicionar id à tabela usuarios :

-- DELIMITER $$
-- CREATE TRIGGER trg_usuarios_before_insert_id
-- BEFORE INSERT ON usuarios
-- FOR EACH ROW
-- BEGIN
--   SET NEW.id = COALESCE((SELECT MAX(id) + 1 FROM usuarios), 1);
-- END$$
-- DELIMITER ;




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





-- gatilho para adicionar id à tabela pacotes :

-- DELIMITER $$
-- CREATE TRIGGER trg_pacotes_before_insert_id
-- BEFORE INSERT ON pacotes
-- FOR EACH ROW
-- BEGIN
--   SET NEW.idPacote = COALESCE((SELECT MAX(idPacote) + 1 FROM pacotes), 1);
-- END$$
-- DELIMITER ;






-- gatilho para validar email da tabela usuarios :

DELIMITER $$
CREATE TRIGGER email_validacao_trigger
BEFORE INSERT ON usuarios
FOR EACH ROW
BEGIN
  DECLARE email_valid INT DEFAULT 0;

  SET email_valid = (SELECT 1 FROM dual
                     WHERE NOT EXISTS (SELECT 1
                                       FROM usuarios
                                       WHERE email = NEW.email)
                     AND NEW.email REGEXP '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}$');

  IF email_valid = 0 THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Endereço de e-mail inválido';
  END IF;
END$$
DELIMITER ;

