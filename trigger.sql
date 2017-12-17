SET SQL_SAFE_UPDATES = 0;



DROP TRIGGER IF EXISTS numgames;

delimiter ||
CREATE TRIGGER numgames 
	AFTER INSERT ON GAME
	FOR EACH ROW 
BEGIN
	UPDATE numofgame 
    SET Num = Num + 1 ;
END||

delimiter \\
CREATE TRIGGER subgames
	AFTER DELETE ON GAME
    FOR EACH ROW
BEGIN
	UPDATE numofgame
    SET Num = Num - 1;
END\\

delimiter ;