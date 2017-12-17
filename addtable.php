<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 'On');

  if (isset($_POST['gameadd'])) {
    if(isset($_GET['go'])){
      $Game_ID = $_POST['Game_ID'];
      $Title = $_POST['Title'];
      $ESRB_Rtng = $_POST['ESRB_Rtng'];
      $Company_ID = $_POST['Company_ID'];
      $Description = $_POST['Description'];
      $DVP = $_POST['DVP'];

      include_once "dbconnect.php";

      $sql = "INSERT INTO GAME(Game_ID, Title, ESRB_Rtng, Company_ID, Description, DVP) VALUES ('".$Game_ID."', '".$Title."', '".$ESRB_Rtng."', '".$Company_ID."', '".$Description."', '".$DVP."')"
      or die ('Missing value');

      if ($db->query($sql) === TRUE) {
        $getnumofgame = "SELECT Num FROM numofgame";
        $q = mysqli_query($db, $getnumofgame);
        $row = mysqli_fetch_array($q);
        $count = $row['Num'];

        echo $count;
        echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $db->error;
      }

      $result=mysqli_query($db,$sql);
    };
  }

  elseif (isset($_POST['companyadd'])) {
    if(isset($_GET['go'])){
      $Company_ID = $_POST['Company_ID'];
      $Name = $_POST['Name'];

      include_once "dbconnect.php";

      $sql = "INSERT INTO COMPANY(Company_ID, Name) VALUES ('".$Company_ID."', '".$Name."')" or die ('Missing value!');

      if ($db->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $db->error;
      }

      $result=mysqli_query($db,$sql);
    };
  }
  elseif (isset($_POST['reviewsadd'])) {
      if(isset($_GET['go'])){
        $Game_ID = $_POST['Game_ID'];
        $Reviewer_ID = $_POST['Reviewer_ID'];
        $Rating = $_POST['Game_Rating'];
        $Text = $_POST['Review_Text'];

        include_once "dbconnect.php";

        $sql = "INSERT INTO REVIEWS(Reviewer_ID, Game_ID, Rating, Text) VALUES ('".$Reviewer_ID."', '".$Game_ID."', '".$Rating."', '".$Text."')" or die ('Missing value!');

        if ($db->query($sql) === TRUE) {
            echo "Rating created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }

        $result=mysqli_query($db,$sql);
      };
    }


include_once "header.php";
include_once 'footer.php';
 ?>
