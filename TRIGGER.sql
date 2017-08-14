— таблица, за которой мы будем следить
CREATE TABLE `test` (
`id` INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`content` TEXT NOT NULL 
) ENGINE = MYISAM
— лог
CREATE TABLE `log` (
`id` INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`msg` VARCHAR( 255 ) NOT NULL,
`time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`row_id` INT( 11 ) NOT NULL 
) ENGINE = MYISAM
— триггер
DELIMITER |
CREATE TRIGGER `update_test` AFTER INSERT ON `test`
FOR EACH ROW BEGIN
   INSERT INTO log Set msg = 'insert', row_id = NEW.id;
END;* This source code was highlighted with Source Code Highlighter.

— Удаляем триггер
DROP TRIGGER `update_test`;
— Cоздадим еще одну таблицу,
— в которой будут храниться резервные копии строк из таблицы test
CREATE TABLE `backup` (
`id` INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`row_id` INT( 11 ) UNSIGNED NOT NULL,
`content` TEXT NOT NULL 
) ENGINE = MYISAM
— триггеры
DELIMITER |
CREATE TRIGGER `update_test` before update ON `test`
FOR EACH ROW BEGIN
  INSERT INTO backup Set row_id = OLD.id, content = OLD.content;
END;

CREATE TRIGGER `delete_test` before delete ON `test`
FOR EACH ROW BEGIN
  INSERT INTO backup Set row_id = OLD.id, content = OLD.content;
END* This source code was highlighted with Source Code Highlighter.


CREATE TRIGGER ins_sum BEFORE INSERT ON account FOR EACH ROW SET @sum = @sum + NEW.amount;
DROP TRIGGER test.ins_sum;
CREATE TRIGGER ins_transaction BEFORE INSERT ON account
       FOR EACH ROW PRECEDES ins_sum
       SET
       @deposits = @deposits + IF(NEW.amount>0,NEW.amount,0),
       @withdrawals = @withdrawals + IF(NEW.amount<0,-NEW.amount,0);


CREATE TABLE test1(a1 INT);
CREATE TABLE test2(a2 INT);
CREATE TABLE test3(a3 INT NOT NULL AUTO_INCREMENT PRIMARY KEY);
CREATE TABLE test4(
  a4 INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  b4 INT DEFAULT 0
);

delimiter |

CREATE TRIGGER testref BEFORE INSERT ON test1
  FOR EACH ROW
  BEGIN
    INSERT INTO test2 SET a2 = NEW.a1;
    DELETE FROM test3 WHERE a3 = NEW.a1;
    UPDATE test4 SET b4 = b4 + 1 WHERE a4 = NEW.a1;
  END;
|

delimiter ;

INSERT INTO test3 (a3) VALUES
  (NULL), (NULL), (NULL), (NULL), (NULL),
  (NULL), (NULL), (NULL), (NULL), (NULL);

INSERT INTO test4 (a4) VALUES
  (0), (0), (0), (0), (0), (0), (0), (0), (0), (0);
INSERT INTO test1 VALUES 
   (1), (3), (1), (7), (1), (8), (4), (4);