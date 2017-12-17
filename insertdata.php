<?php
  if (isset($_GET["tableinsert"])) {
    header("Location: " . $_GET["tableinsert"] . ".php");
    exit();
  }

    include_once "header.php";

 ?>

 <div class="container-fluid">

 <header class="services">
   <center> <h1> Insert A Table</h1></center>
 </header>
 <form method = "get">
   <center><p> What would you like to add? </p></center>
   <center><select name="tableinsert"></center>
     <option value="">Select...</option>
     <option value="gameadd">Game</option>
     <option value="companyadd">Company</option>
     <option value="reviewsadd">Reviews</option>
   </select>
   <input type="submit" value="submit"/>
  </p>
</form>
</div>
