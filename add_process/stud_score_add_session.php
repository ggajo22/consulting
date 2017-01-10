<?php
  require("../config/db_config.php");
  $_SESSION['stud_score'] = $_POST['data'];

/*
  $data = $_session['stud_score'];

  foreach($data as $key => $value){
    $sql = "INSERT INTO stud_score (stud_id, test_id, test_score) VALUES ('1', '".$value['test_id']."', '".$value['test_score']."')";
    $query = mysqli_query($conn, $sql);
  }
*/
 ?>
