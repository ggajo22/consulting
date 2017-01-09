<?php
  require("../config/db_config.php");

  var_dump($_POST);
  $data = $_POST['data'];
  foreach($data as $key){
    $sql = "INSERT INTO wish (stud_id, uni_id) VALUES('1', '".$key."')";
    $query = mysqli_query($conn, $sql);
  }
 ?>
