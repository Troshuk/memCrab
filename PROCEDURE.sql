DELIMITER //
CREATE PROCEDURE `p2` ()  
LANGUAGE SQL  
DETERMINISTIC  
SQL SECURITY DEFINER  
COMMENT 'A procedure'  
BEGIN  
    SELECT 'Hello World !';  
END//  

CALL stored_procedure_name (param1, param2, ....)
CALL procedure1(10 , 'string parameter' , @parameter_var);

DROP PROCEDURE IF EXISTS p2;

DELIMITER //
CREATE PROCEDURE `proc_IN` (IN var1 INT)  
BEGIN  
    SELECT var1 + 2 AS result;  
END//  

DELIMITER //
CREATE PROCEDURE `proc_OUT` (OUT var1 VARCHAR(100))  
BEGIN  
    SET var1 = 'This is a test';  
END//  

DELIMITER //
CREATE PROCEDURE `proc_INOUT` (OUT var1 INT)  
BEGIN  
    SET var1 = var1 * 2;  
END//

DECLARE varname DATA-TYPE DEFAULT defaultvalue; -- додавання змінної
DECLARE a, b INT DEFAULT 5;  
DECLARE str VARCHAR(50);  
DECLARE today TIMESTAMP DEFAULT CURRENT_DATE;  
DECLARE v1, v2, v3 TINYINT;

DELIMITER //
CREATE PROCEDURE `var_proc` (IN paramstr VARCHAR(20))  
BEGIN  
    DECLARE a, b INT DEFAULT 5;  
    DECLARE str VARCHAR(50);  
    DECLARE today TIMESTAMP DEFAULT CURRENT_DATE;  
    DECLARE v1, v2, v3 TINYINT;      
    INSERT INTO table1 VALUES (a);  
    SET str = 'I am a string';  
    SELECT CONCAT(str,paramstr), today FROM table2 WHERE b >=5;  
END //  

DELIMITER //  
CREATE PROCEDURE `proc_IF` (IN param1 INT)  
BEGIN  
    DECLARE variable1 INT;  
    SET variable1 = param1 + 1;  
  
    IF variable1 = 0 THEN  
        SELECT variable1;  
    END IF;  
  
    IF param1 = 0 THEN  
        SELECT 'Parameter value = 0';  
    ELSE  
        SELECT 'Parameter value <> 0';  
    END IF;  
END //  

DELIMITER //  
CREATE PROCEDURE `proc_CASE` (IN param1 INT)  
BEGIN  
    DECLARE variable1 INT;  
    SET variable1 = param1 + 1;  
  
    CASE variable1  
        WHEN 0 THEN  
            INSERT INTO table1 VALUES (param1);  
        WHEN 1 THEN  
            INSERT INTO table1 VALUES (variable1);  
        ELSE  
            INSERT INTO table1 VALUES (99);  
    END CASE;  
END //  

DELIMITER //  
CREATE PROCEDURE `proc_CASE` (IN param1 INT)  
BEGIN  
    DECLARE variable1 INT;  
    SET variable1 = param1 + 1;  
  
    CASE  
        WHEN variable1 = 0 THEN  
            INSERT INTO table1 VALUES (param1);  
        WHEN variable1 = 1 THEN  
            INSERT INTO table1 VALUES (variable1);  
        ELSE  
            INSERT INTO table1 VALUES (99);  
    END CASE;  
END // 

DELIMITER //  
CREATE PROCEDURE `proc_WHILE` (IN param1 INT)  
BEGIN  
    DECLARE variable1, variable2 INT;  
    SET variable1 = 0;  
  
    WHILE variable1 < param1 DO  
        INSERT INTO table1 VALUES (param1);  
        SELECT COUNT(*) INTO variable2 FROM table1;  
        SET variable1 = variable1 + 1;  
    END WHILE;  
END //  

DECLARE cursor-name CURSOR FOR SELECT ...;       /*Объявление курсора и его заполнение */  
DECLARE  CONTINUE HANDLER FOR NOT FOUND          /*Что делать, когда больше нет записей*/  
OPEN cursor-name;                                /*Открыть курсор*/  
FETCH cursor-name INTO variable [, variable];    /*Назначить значение переменной, равной текущему значению столбца*/  
CLOSE cursor-name;                               /*Закрыть курсор*/  

DELIMITER //  
CREATE PROCEDURE `proc_CURSOR` (OUT param1 INT)  
BEGIN  
    DECLARE a, b, c INT;  
    DECLARE cur1 CURSOR FOR SELECT col1 FROM table1;  
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET b = 1;  
    OPEN cur1;  
  
    SET b = 0;  
    SET c = 0;  
  
    WHILE b = 0 DO  
        FETCH cur1 INTO a;  
        IF b = 0 THEN  
            SET c = c + a;  
    END IF;  
    END WHILE;  
  
    CLOSE cur1;  
    SET param1 = c;  
END //  




CREATE TABLE `threads` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` VARCHAR(255) NOT NULL,
`tag` VARCHAR(255) NOT NULL,
PRIMARY KEY ( `id` )
) ENGINE = MYISAM;

CREATE TABLE `variables` (
 `id` INT NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(255) NOT NULL,
 `value` INT NOT NULL DEFAULT 0,
 PRIMARY KEY ( `id` )
 ) ENGINE = MYISAM;

DELIMITER //  
CREATE PROCEDURE `procedure2`(IN sTitle VARCHAR(255))
BEGIN
INSERT INTO `threads` (`title`, `tag`) VALUES (sTitle, 'zzz');
UPDATE `variables` SET `value` = `value` + 1 WHERE `name` = 'threads';
END //

CALL procedure2('My new thread');


CREATE TABLE `tags` (
`id` INT NOT NULL AUTO_INCREMENT ,
`tag` VARCHAR(255) NOT NULL ,
PRIMARY KEY ( `id` )
) ENGINE = MYISAM

DELIMITER //  
CREATE PROCEDURE `procedure3`()
BEGIN
 DECLARE done INT DEFAULT 0;
 DECLARE sTag VARCHAR(255);
 DECLARE iCount INT DEFAULT 0;
 
 DECLARE rCursor CURSOR FOR
 SELECT `tag` FROM `threads` WHERE 1;
 DECLARE CONTINUE HANDLER FOR SQLSTATE '02000' SET done=1;
 
 OPEN rCursor;
 FETCH rCursor INTO sTag;
 
 WHILE done = 0 DO
 SELECT COUNT(*) INTO iCount FROM `tags` WHERE `tag` = sTag;
 IF iCount = 0 THEN
 INSERT INTO `tags` (`tag`) VALUES (sTag);
 END IF;
 
 FETCH rCursor INTO sTag;
 END WHILE;
 
 CLOSE rCursor;
END //

DELIMITER //  
CREATE PROCEDURE `procedure4`()
BEGIN
 DECLARE iTags INT DEFAULT 0;
 DECLARE iThreads INT DEFAULT 0;
 
 SELECT COUNT(*) FROM `tags` INTO iTags;
 SELECT COUNT(*) FROM `threads` INTO iThreads;
 
 SET @tags = iTags, @threads = iThreads;
END //

CALL procedure3();
CALL procedure4();

SELECT @tags, @threads;