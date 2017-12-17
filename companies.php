<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

include_once 'header.php';
include_once 'dbconnect.php';
//connect  to the database


//-query  the database table
$drop = "DROP VIEW IF EXISTS fulldata";
$retval = mysqli_Query($db, $drop);

$sql="CREATE VIEW fulldata AS SELECT COMPANY.Company_ID, COMPANY.Name
FROM Company";
//-run  the query against the mysql query function

$query = "SELECT Company_ID, Name FROM COMPANY";

$result=mysqli_query($db,$query);

?>

<div class="container-fluid">

<header class="services">
  <center> <h1> Companies </h1> </center>
</header>
      </div> <!-- #main-container -->

        <div class="container-fluid">

      <div class="row">
      <div class="col-lg-10 col-xs-offset-1">
       <table width="100%" border="solid 1px #000">
       <tr>
       <th> Company_ID	</th>
       <th> Name	</th>

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
