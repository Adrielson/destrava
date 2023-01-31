-- gatilho pra adicionar id à tabela alunos :


DELIMITER $$
CREATE TRIGGER trg_alunos_before_insert_id
BEFORE INSERT ON alunos
FOR EACH ROW
BEGIN
  SET NEW.id = COALESCE((SELECT MAX(id) + 1 FROM alunos), 1);
END$$
DELIMITER ;



-- gatilho para adicionar id à tabela professores :

DELIMITER $$
CREATE TRIGGER trg_professores_before_insert_id
BEFORE INSERT ON professores
FOR EACH ROW
BEGIN
  SET NEW.id = COALESCE((SELECT MAX(id) + 1 FROM professores), 1);
END$$
DELIMITER ;



-- gatilho para validar email da tabela a professores :

DELIMITER $$
CREATE TRIGGER email_validacao_trigger_professor
BEFORE INSERT ON professores
FOR EACH ROW
BEGIN
  DECLARE email_valid INT DEFAULT 0;
  
  SET email_valid = (SELECT 1 FROM dual
                     WHERE NOT EXISTS (SELECT 1 
                                       FROM professores 
                                       WHERE email = NEW.email) 
                     AND NEW.email REGEXP '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}$');
  
  IF email_valid = 0 THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Endereço de e-mail inválido';
  END IF;
END$$
DELIMITER ;



-- gatilho para validar email da tabela alunos :

DELIMITER $$
CREATE TRIGGER email_validation_trigger_aluno
BEFORE INSERT ON alunos
FOR EACH ROW
BEGIN
  DECLARE email_valid INT DEFAULT 0;
  
  SET email_valid = (SELECT 1 FROM dual
                     WHERE NOT EXISTS (SELECT 1 
                                       FROM alunos
                                       WHERE email = NEW.email) 
                     AND NEW.email REGEXP '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}$');
  
  IF email_valid = 0 THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Endereço de e-mail inválido';
  END IF;
END$$
DELIMITER ;