<?php
  include_once "header.php";
  include_once "dbconnect.php";
 ?>

 <div class="container-fluid">

 <header class="services">
   <center> <h1> Insert A Company</h1></center>
 </header>

<center>
  <form method = "post" action="addtable.php?go">
  Company_ID:  <input type="text" name="Company_ID"/>
  Name:  <input type="text" name="Name"/>
  <div>
    <br />
      <input type="submit" value="Submit" name="companyadd" />
  </div>
</form></center>
