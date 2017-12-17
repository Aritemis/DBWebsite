DROP PROCEDURE IF EXISTS getAllReviews;


delimiter $$
use project $$
CREATE PROCEDURE getAllReviews()
	BEGIN
		SELECT REVIEWS.Game_ID, REVIEWS.Rating, REVIEWS.Text FROM REVIEWS;
END $$
delimiter ;

CALL getAllReviews();
