<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 'On');

  if (isset($_POST['gamedelete'])) {
    if(isset($_GET['go'])){
      $Game_ID = $_POST['Game_ID'];

      include_once "dbconnect.php";

      $sql = "DELETE FROM GAME WHERE GAME.Game_ID = '".$Game_ID."'"
      or die ('Missing value');

      if ($db->query($sql) === TRUE) {
          $getnumofgame = "SELECT Num FROM numofgame";
          $q = mysqli_query($db, $getnumofgame);
          $row = mysqli_fetch_array($q);
          $count = $row['Num'];

          echo $count;
          echo "Record deleted successfully";
      } else {
          //echo "Error: " . $sql . "<br>" . $db->error;
      }

      $result=mysqli_query($db,$sql);
    };
  }

  else
  {
  if (isset($_POST['companydelete'])) {
    if(isset($_GET['go'])){
      $Company_ID = $_POST['Company_ID'];

      include_once "dbconnect.php";

      $sql = "DELETE FROM COMPANY WHERE COMPANY.Company_ID = '".$Company_ID."'" or die ('Missing value!');

      if ($db->query($sql) === TRUE) {
          echo "Record deleted successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $db->error;
      }

      $result=mysqli_query($db,$sql);
    };
  };
};

include_once "header.php";
include_once 'footer.php';
 ?>
