<?php
  include_once "header.php";
  include_once "dbconnect.php";
 ?>

 <div class="container-fluid">

 <header class="services">
   <center> <h1> Insert A Game</h1></center>
 </header>

<center>
  <form method = "post" action="addtable.php?go">
  Game_ID:  <input type="text" name="Game_ID"/>
  Title:  <input type="text" name="Title"/>
  ESRB_Rtng: <input type="text" name="ESRB_Rtng"/>
  Company_ID: <input type="text" name="Company_ID"/>
  Description:  <input type="text" name="Description"/>
  DVP: <input type="number" name ="DVP">/
  <div>
    <br />
      <input type="submit" value="Submit" name="gameadd" />
  </div>
</form></center>
