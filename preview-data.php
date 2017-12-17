  <?php
  //connect  to the database
error_reporting(E_ALL);
	include_once "dbconnect.php";

  //-query  the database table
  $sql="SELECT GAME.Game_ID, GAME.Title, ESRB.ESRB_Rtng, GAME.Description, GAMEPLAY.Name from GAME
    JOIN GAMEPLAYTAG
    ON
    (GAME.Game_ID = GAMEPLAYTAG.Game_ID)
    JOIN GAMEPLAY
    ON
    (GAMEPLAY.Gameplay_ID = GAMEPLAYTAG.Gameplay_ID)
		LEFT JOIN ESRB
		ON
		(GAME.ESRB_Rtng = ESRB.ESRB_Rtng)";
  //-run  the query against the mysql query function
  $result=mysqli_query($db,$sql);

  $totalnum = "SELECT Num FROM GAMENUMBER";
  $q = mysqli_query($db, $totalnum);
  $row = mysqli_fetch_array($q);
  $count = $row['Num'];



  include_once 'header.php'; ?>



  <div class="container-fluid">

  <header class="services">
	  <center> <h1> PREVIEW THE DATA!</h1></center>
	</header>
        </div> <!-- #main-container -->

       <div class="container-fluid">
<div class="row">
        <div class="col-lg-10 col-xs-offset-1">
         <table width="100%" border="solid 1px #000">
         <tr>
		     <th> Game ID		</th>
		     <th> Title		</th>
		     <th> ESRB Rating		</th>
             <th> Description		</th>
             <th> Game Tag </th>

			 </tr>
<?php

  //-create  while loop and loop through result set
while ($row = mysqli_fetch_assoc($result)) {
?> <tr> <?php
foreach($row as $key => $var)
{
    echo '<td>' . $var . ' </td> ';
}
			?> </tr> <?php
}
?>
  <center><h3>Total number of games:
  <?php echo $count?>
</h3>
  </center>
  <br/>
			</table> </div></div></div>

      <?php
  include_once 'footer.php'; ?>
