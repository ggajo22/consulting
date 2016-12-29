<?php
if($_POST){
  // 학생 정보 입력
  $sql="INSERT INTO student (stud_name, stud_name_eng, stud_phone_number, stud_email, stud_school, stud_grade) VALUES('".$_POST['stud_name']."', '".$_POST['stud_name_eng']."', '".$_POST['stud_phone_number']."', '".$_POST['stud_email']."', '".$_POST['stud_school']."', '".$_POST['stud_grade']."')";
  $result = mysqli_query($conn, $sql);
  // 입력된 학생 ID 구하기
  $stud_id = mysqli_insert_id($conn);
  // stud_score 테이블의 temp stud_id 변경
  $sql="UPDATE stud_score SET stud_id='".$stud_id."' WHERE stud_id='1'";
  $result = mysqli_query($conn, $sql);

  // 부모 정보 입력
  $sql = "INSERT INTO parent (stud_id, pare_name, pare_phone_number, pare_email) VALUES('".$stud_id."', '".$_POST['pare_name']."', '".$_POST['pare_phone_number']."', '".$_POST['pare_email']."')";
  $result = mysqli_query($conn, $sql);
}
  
  // 학생 정보 가져오기
  $sql = "SELECT * FROM student WHERE stud_id='".$stud_id."'";
  $result = mysqli_query($conn, $sql);
  $stud = mysqli_fetch_assoc($result);

  // 학생 점수 정보 가져오기
  $sql = "SELECT * FROM stud_score as ss LEFT JOIN test as t ON ss.test_id = t.test_id WHERE stud_id='".$stud_id."'";
  $result = mysqli_query($conn, $sql);
  $studScore = array();
  while($row = mysqli_fetch_assoc($result)){
    $studScore[] = $row;
  }

  // 대학 정보 가져오기
  $sql = "SELECT * FROM university WHERE uni_sort = 'top10' OR uni_sort = 'top25' OR uni_sort = 'top50'";
  $result = mysqli_query($conn, $sql);
  $university = array();
  while($row = mysqli_fetch_assoc($result)){
    $university[] = $row;
  }
?>
