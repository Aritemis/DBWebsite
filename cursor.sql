use project;

SET SQL_SAFE_UPDATES = 0;

DROP PROCEDURE IF EXISTS FindGame;
DROP TABLE IF EXISTS testest;

CREATE TABLE testest (GameTitle VARCHAR(50));
DELIMITER ||

CREATE PROCEDURE FindGame (G_ID VARCHAR(4))
BEGIN


	DECLARE done INT DEFAULT FALSE;
    DECLARE GnameFetch VARCHAR (50) DEFAULT ' ' ;
    
    DECLARE mainCursor CURSOR FOR
		SELECT Title
        FROM GAME WHERE Game_ID = G_ID;
        
        DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
        
        OPEN mainCursor;
        
        read_loop: LOOP
        FETCH mainCursor INTO GnameFetch;
        IF done THEN
			LEAVE read_loop;
		END IF;
        
        INSERT INTO testest VALUES(GnameFetch);
        
        END LOOP;
        
        CLOSE mainCursor;
        
END ||

DELIMITER ;

CALL FindGame('sc');

SELECT * FROM testest;

#DELETE FROM testest;

