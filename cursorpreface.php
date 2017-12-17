<?php include_once 'header.php';
include_once "dbconnect.php";

// $safeoff = "SET SQL_SAFE_UPDATES = 0";
// mysqli_query($db,$safeoff);

$drop = "DROP TABLE IF EXISTS testest";
$create = "CREATE TABLE testest (GameTitle VARCHAR(50))";
mysqli_query($db,$drop);
mysqli_query($db,$create);

$sql = "DELETE FROM testest";
mysqli_query($db, $sql);

if ($db->query($sql) == true) {
  echo "Deleted!";
} else {
  echo "nono";
}
?>

<div class="container-fluid">

<header class="services">
  <center> <h1> Cursor Reset!</h1></center>
</header>


    </div> <!-- #main-container -->
