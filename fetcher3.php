<?php
include 'dbh.php';


  $im = "SELECT * FROM series " ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0;

  echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){
      echo"<form action='series.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$result['imgpath']."' height='250' width='200' style='margin-top: 30px;margin-left:65px;margin-right:30px;position:relative;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:65px;margin-right:20px;' value='".ucwords($result['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";

      
    }
    echo"</div>";
    ?>
