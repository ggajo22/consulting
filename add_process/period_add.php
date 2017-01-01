<?php
  require("../config/db_config.php");

  $sql = "INSERT INTO stud_when (stud_id, start_week, class_week) VALUES ('1', '".$_POST['start_week']."', '".$_POST['class_week']."')";
  $query = mysqli_query($conn, $sql);

  // 학생정보입력페이지로 가기
   header('Location: http://localhost/consulting/student.php');
?>
