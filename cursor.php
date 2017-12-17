<?php
if (isset($_GET["resetcursor"])) {
  header("Location: " . $_GET["resetcursor"] . ".php");
  exit();
}


  include_once "header.php";
  include_once "dbconnect.php";

  $exec = "CALL FindGame('des');";
  mysqli_query($db, $exec);


  $sql = "SELECT * FROM testest;";



  $result=mysqli_query($db,$sql) or die ('cannot connect because: ' . mysqli_error());
?>
  <div class="container-fluid">

  <header class="services">
	  <center> <h1> PREVIEW THE CURSOR!</h1></center>
	</header>
        </div> <!-- #main-container -->
        <div class="container-fluid">

        <form method = "get">
          <center><p> Reset </p></center>
          <center><select name="resetcursor"></center>
            <option value="cursorpreface">Reset</option>

          </select>
          <input type="submit" value="submit"/>
         </p>
       </form>
       </div>

       <div class="container-fluid">
<div class="row">
        <div class="col-lg-10 col-xs-offset-1">
         <table width="100%" border="solid 1px #000">
         <tr>
		     <th> Game Title		</th>

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
