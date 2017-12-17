<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

if(isset($_POST['submit'])){
if(isset($_GET['go'])){
if(preg_match("/^[  a-zA-Z]+/", $_POST['result'])){
$name=$_POST['result'];
//connect  to the database

// $servername = "35.184.88.178";
//   $username = "root";
//   $password = "nope";
//   $dbname = "project";
//
// $db=mysqli_connect  ($servername, $username, $password, $dbname) or die ('I cannot connect to the database  because: ' . mysqli_error());

include_once "dbconnect.php";

    //-query  the database table
$sql= "SELECT GAME.Game_ID, GAME.Title, GAME.ESRB_Rtng, GAME.Description, REVIEWS.Rating, REVIEWS.Text from GAME
LEFT JOIN REVIEWS
ON (GAME.Game_ID = REVIEWS.Game_ID)
LEFT JOIN ESRB
ON (GAME.ESRB_Rtng = ESRB.ESRB_Rtng)
  WHERE GAME.Title LIKE '%" . $name . "%'" or die ('Cannot connect');



/*"SELECT GAME.Game_ID, GAME.Title, GAME.ESRB_Rtng, GAME.Description, REVIEWS.Rating, REVIEWS.Text from GAME
    LEFT JOIN REVIEWS
  ON
  (GAME.Game_Id = REVIEWS.Game_ID)
  LEFT JOIN ESRB
  ON
  (GAME.ESRB_Rtng = ESRB.ESRB_Rtng)
  AND
    GAME.Title LIKE '%" . $name ."%'";*/

//-run  the query against the mysql query function
$result=mysqli_query($db,$sql) or die ('cannot connect because: ' . mysqli_error());

include_once 'header.php'; ?>

<div class="container-fluid">

<header class="services">
  <center> <h1> The Results Are In!</h1></center>
</header>
      </div> <!-- #main-container -->


      <div class="container-fluid">

      <div class="row">
      <div class="col-lg-10 col-xs-offset-1">
    <table width="100%" border="1px solid" cellpadding="5px" cellspacing="10px">
    <tr>
    <th>Title</th>
    <th>User Rating</th>
    <th>ESRB Rating</th>
    <th>Review Text</th>
    <th>Description</th>
<!--<th>Game ID -->
    </tr>
<?php

//-create  while loop and loop through result set
while($row=mysqli_fetch_array($result)){
        $Game_Title=$row['Title'];
        $Rating=$row['Rating'];
        $ESRB=$row['ESRB_Rtng'];
        $DESC=$row['Description'];
        $REV=$row['Text'];
    //    $Game_ID=$row['Game ID'];

  //-display the result of the array
echo "<tr>";
echo "<td>"   .$Game_Title . " </td><td> " . $Rating ." </td><td> ". $ESRB . "</td><td> ". $REV . "</td><td> ". $DESC . "</td>";
echo "</tr>";
} ?> </table></div></div></div> <?php
}
else{
echo  "<p>Please enter a search query</p>";
}
}
}


include_once 'footer.php'; ?>
