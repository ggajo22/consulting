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

  // stue_when 테이블의 temp stud_id 변경
  $sql = "UPDATE stud_when SET stud_id='".$stud_id."' WHERE stud_id='1'";
  $result = mysqli_query($conn, $sql);
}

  // 학생 정보 가져오기
  //$sql = "SELECT * FROM student WHERE stud_id='".$stud_id."'";
  $sql = "SELECT * FROM student WHERE stud_id='133'";
  $result = mysqli_query($conn, $sql);
  $stud = mysqli_fetch_assoc($result);

  // 학생 점수 정보 가져오기
  //$sql = "SELECT * FROM stud_score as ss LEFT JOIN test as t ON ss.test_id = t.test_id WHERE stud_id='".$stud_id."'";
  $sql = "SELECT * FROM stud_score as ss LEFT JOIN test as t ON ss.test_id = t.test_id LEFT JOIN student as s ON ss.stud_id = s.stud_id WHERE ss.stud_id='133'";
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


// 여기서 부터는 시간표용
  // 학생 수강 기간 정보 가져오기
  // $sql = "SELECT * FROM stud_when WHERE stud_id='".$stud_id."'";
  $sql = "SELECT * FROM stud_when WHERE stud_id='133'";
  $result = mysqli_query($conn, $sql);
  $period = mysqli_fetch_assoc($result);

  // SAT 정보 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_subject='SAT'";
  $result = mysqli_query($conn, $sql);
  $satInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $satInfo[] = $row;
  }

  // ACT 정보 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_subject='ACT'";
  $result = mysqli_query($conn, $sql);
  $actInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $actInfo[] = $row;
  }

  // TOEFL 정보 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_subject='TOEFL'";
  $result = mysqli_query($conn, $sql);
  $toeflInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $toeflInfo[] = $row;
  }

  // SAT2 리스트 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_sort='SAT2' GROUP BY rep, test_subject;";
  $result = mysqli_query($conn, $sql);
  $sat2List = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $sat2List[] = $row;
  }

  // AP 리스트 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_sort='AP' GROUP BY rep, test_subject;";
  $result = mysqli_query($conn, $sql);
  $apList = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $apList[] = $row;
  }

  // test_info 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id";
  $result = mysqli_query($conn, $sql);
  $testInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $testInfo[] = $row;
  }
?>
