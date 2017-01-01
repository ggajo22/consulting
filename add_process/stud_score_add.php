<?php
  require("../config/db_config.php");

  $data = $_POST['data'];
  // stud_id = '1' 으로 임시로 아이디값 줌, 학생정보 입력할 때 업데이트
  foreach($data as $key => $value){
    $sql = "INSERT INTO stud_score (stud_id, test_id, test_score) VALUES ('1', '".$value['test_id']."', '".$value['test_score']."')";
    $query = mysqli_query($conn, $sql);
  }
 ?>
