<?php
  include_once "header.php";
  include_once "dbconnect.php";
 ?>

 <div class="container-fluid">

 <header class="services">
   <center> <h1> Delete A Company</h1></center>
 </header>

<center>
  <form method = "post" action="deletetable.php?go">
  Company_ID:  <input type="text" name="Company_ID"/>
  <div>
    <br />
      <input type="submit" value="Submit" name="companydelete" />
  </div>
</form></center>
