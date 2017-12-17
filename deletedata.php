<?php
  if (isset($_GET["tabledelete"])) {
    header("Location: " . $_GET["tabledelete"] . ".php");
    exit();
  }

    include_once "header.php";

 ?>

 <div class="container-fluid">

 <header class="services">
   <center> <h1> Delete A Table</h1></center>
 </header>
 <form method = "get">
   <center><p> What would you like to delete? </p></center>
   <center><select name="tabledelete"></center>
     <option value="">Select...</option>
     <option value="gamedelete">Game</option>
     <option value="companydelete">Company</option>
   </select>
   <input type="submit" value="submit"/>
  </p>
</form>
</div>
