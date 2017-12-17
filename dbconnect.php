<?php

/* USE FOR CLOUD CONNECTION */
$servername = "35.184.88.178";
$username = "root";
$password = "nope";
$dbname = "project";
//*/

/* USE FOR LOCAL CONNECTION
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project";
// */
$db = mysqli_connect ($servername, $username, $password, $dbname) or die ('I cannot connect to the database  because: ' . mysqli_error());
 ?>
