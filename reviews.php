<?php
 ini_set('error_reporting', E_ALL);
 ini_set('display_errors', 'On');  //On or Off

 include_once 'header.php';
 include_once 'dbconnect.php';
 //connect  to the database


 //-query  the database table
 $sql="SELECT GAME.Title, REVIEWS.Rating, REVIEWS.Text from GAME
     LEFT JOIN REVIEWS
  ON
  (GAME.Game_Id = REVIEWS.Game_ID)
  WHERE REVIEWS.Rating IS NOT NULL
  ORDER BY REVIEWS.Rating DESC";
//-run  the query against the mysql query function
 $result=mysqli_query($db,$sql);

 ?>

 <div class="container-fluid">

 <header class="services">
   <center> <h1> Top Games! </h1> </center>
</header>
      </div> <!-- #main-container -->

         <div class="container-fluid">

      <div class="row">
       <div class="col-lg-10 col-xs-offset-1">
       <table width="100%" border="solid 1px #000">
        <tr>
        <th> Title		</th>
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
