<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
  $name=$_POST['name'];
  //connect  to the database
  $db=mysql_connect  ("servername", "username",  "password") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("yourDatabase");
  //-query  the database table
  $sql="SELECT  * from GAME, REVIEWS, ESRB, GAMEVERSION 
  where 
  GAME.Game_Id = REVIEWS.Game_ID 
  AND 
  GAME.Game_ID = GAMEVERSION.Game_ID 
  AND 
  GAME.ESRB_Rtng = ESRB.ESRB_Rtng
  AND
  GAME.Game_ID LIKE '%" . $name .  "%' OR GAME.Title LIKE '%" . $name ."%'";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $Game_Title  =$row['GAME.Title'];
          $Rating=$row['REVIEWS.Rating'];
          $ESRB=$row['ESRB.Title'];
  //-display the result of the array
  echo "<ul>\n";
  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$Game_Title . " - " . $Rating ." - ". $ESRB . "</a></li>\n";
  echo "</ul>";
  }
  }
  else{
  echo  "<p>Please enter a search query</p>";
  }
  }
  }
?>