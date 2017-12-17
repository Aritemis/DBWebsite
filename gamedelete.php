<?php
  include_once "header.php";
  include_once "dbconnect.php";
 ?>

 <div class="container-fluid">

 <header class="services">
   <center> <h1> Delete A Game</h1></center>
 </header>

<center>
  <form method = "post" action="deletetable.php?go">
  Game_ID:  <input type="text" name="Game_ID"/>
  <div>
    <br />
      <input type="submit" value="Submit" name="gamedelete" />
  </div>
</form></center>
