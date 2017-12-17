<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

include_once 'header.php';
include_once 'dbconnect.php';
//connect  to the database


//-query  the database table
$dropview = "DROP VIEW IF EXISTS developerspick";
mysqli_query($db,$dropview);

$create = "CREATE VIEW developerspick AS
SELECT GAME.Title, GAME.ESRB_Rtng, REVIEWS.Rating, REVIEWS.Text FROM GAME
LEFT JOIN REVIEWS
ON
(GAME.Game_Id = REVIEWS.Game_ID)
LEFT JOIN ESRB
ON
(GAME.ESRB_Rtng = ESRB.ESRB_Rtng)
WHERE (GAME.DVP = 1)
ORDER BY REVIEWS.Rating DESC";
mysqli_query($db, $create);

$sql = "SELECT * FROM developerspick";
//-run  the query against the mysql query function
$result=mysqli_query($db,$sql);

?>

<div class="container-fluid">

<header class="services">
  <center> <h1> Developer's Top Picks! </h1> </center>
</header>
      </div> <!-- #main-container -->

        <div class="container-fluid">

      <div class="row">
      <div class="col-lg-10 col-xs-offset-1">
       <table width="100%" border="solid 1px #000">
       <tr>
       <th> Title		</th>
     <th> ESRB Rating		</th>
     <th> Review Rating		</th>
     <th> Review Text	</th>

     </tr>
<?php

//-create  while loop and loop through result set
while ($row = mysqli_fetch_assoc($result)) {
?> <tr> <?php
foreach($row as $key => $var)
{
  echo '<td>'  . $var . ' </td> ';
}
    ?> </tr> <?php
}
?>
    </table></div></div></div> <?php
include_once 'footer.php'; ?>
