<?php
  $_SESSION['period'] = $_POST;

  require("../config/db_config.php");

  // student 테이블
  $sql="INSERT INTO student (stud_name, stud_name_eng, stud_phone_number, stud_email, stud_school, stud_grade) VALUES('".$_SESSION['student']['stud_name']."', '".$_SESSION['student']['stud_name_eng']."', '".$_SESSION['student']['stud_phone_number']."', '".$_SESSION['student']['stud_email']."', '".$_SESSION['student']['stud_school']."', '".$_SESSION['student']['stud_grade']."')";
  $result = mysqli_query($conn, $sql);
  // 입력된 학생 ID 구하기
  $stud_id = mysqli_insert_id($conn);

  // 부모 정보 입력
  $sql = "INSERT INTO parent (stud_id, pare_phone_number, pare_email) VALUES('".$stud_id."', '".$_SESSION['student']['pare_phone_number']."', '".$_SESSION['student']['pare_email']."')";
  $result = mysqli_query($conn, $sql);

  // 학생 점수 입력
  $data = $_SESSION['stud_score'];
  foreach($data as $key => $value){
    $sql = "INSERT INTO stud_score (stud_id, test_id, test_score) VALUES ('".$stud_id."', '".$value['test_id']."', '".$value['test_score']."')";
    $query = mysqli_query($conn, $sql);
  }

  // 학생 wish 학교 리스트 입력
  $data = $_SESSION['wish'];
  foreach($data as $key){
    $sql = "INSERT INTO wish (stud_id, uni_id) VALUES('".$stud_id."', '".$key."')";
    $query = mysqli_query($conn, $sql);
  }

  // 학생 수강 기간 입력
  $sql = "INSERT INTO stud_when (stud_id, start_week, class_week) VALUES ('".$stud_id."', '".$_SESSION['period']['start_week']."', '".$_SESSION['period']['class_week']."')";
  $query = mysqli_query($conn, $sql);

?>
