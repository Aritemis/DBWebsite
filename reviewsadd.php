<?php
  include_once "header.php";
  include_once "dbconnect.php";
 ?>

 <div class="container-fluid">

 <header class="services">
   <center> <h1> Insert A Review</h1></center>
 </header>

<center>
  <form method = "post" action="addtable.php?go">
  Reviewer_ID: <input type="text" name="Reviewer_ID" />
  Game_ID:  <input type="text" name="Game_ID" />
  Review Rating:  <input type="number" name="Game_Rating" />
  Review Text: <input type="text" name="Review_Text" />
  <div>
    <br />
      <input type="submit" value="Submit" name="reviewsadd" />
  </div>
</form></center>
