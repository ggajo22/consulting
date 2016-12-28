<?php
require("view/header.php");

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

  // 학생 정보 가져오기
  $sql = "SELECT * FROM student WHERE stud_id='11'";
  $result = mysqli_query($conn, $sql);
  $stud = mysqli_fetch_assoc($result);

  // 학생 점수 정보 가져오기
  $sql = "SELECT * FROM stud_score as ss LEFT JOIN test as t ON ss.test_id = t.test_id WHERE stud_id='11'";
  $result = mysqli_query($conn, $sql);
  $studScore = array();
  while($row = mysqli_fetch_assoc($result)){
    $studScore[] = $row;
  }

  // 대학 정보 가져오기
  $sql = "SELECT * FROM university";
  $result = mysqli_query($conn, $sql);
  $university = array();
  while($row = mysqli_fetch_assoc($result)){
    $university[] = $row;
  }
?>


<h1><?=$stud['stud_name']?> 학생</h1>
<table id="stud_info" class="table">
  <thead><tr></tr></thead>
  <tbody><tr></tr></tbody>
  <tfoot></tfoot>
</table>

<table id="match_uni" class="table table-hover">
  <thead>
    <th>Rank</th>
    <th>The name of School</th>
    <th>gpa_uw</th>
    <th>gpa_w</th>
    <th>SAT</th>
    <th>ACT</th>
    <th>TOEFL</th>
    <th>AP</th>
    <th>SAT2</th>
    <th>Eng</th>
    <th>Math</th>
    <th>Science</th>
    <th>Foreign</th>
    <th>Social</th>
    <th>History</th>
    <th>Valunteer</th>
    <th>Art</th>
    <th>Leadership</th>
    <th>Intern</th>
    <th>Other</th>
  </thead>
  <tbody></tbody>
  <tfoot></tfoot>
</table>
<div class="hidden">
  <table>
    <tbody>
      <tr class="match_uni_skeleton">
        <td><span name="uni_id"></span></td>
        <td><span name="uni_name"></span></td>
        <td><span name="uni_gpa_uw"></span></td>
        <td><span name="uni_gpa_w"></span></td>
        <td><span name="uni_sat"></span></td>
        <td><span name="uni_act"></span></td>
        <td><span name="uni_toefl"></span></td>
        <td><span name="uni_ap"></span></td>
        <td><span name="uni_sat2"></span></td>
        <td><span name="uni_2_eng"></span></td>
        <td><span name="uni_2_math"></span></td>
        <td><span name="uni_2_science"></span></td>
        <td><span name="uni_2_foreign"></span></td>
        <td><span name="uni_2_social"></span></td>
        <td><span name="uni_2_history"></span></td>
        <td><span name="uni_3_valunteer"></span></td>
        <td><span name="uni_3_art"></span></td>
        <td><span name="uni_3_leadership"></span></td>
        <td><span name="uni_3_intern"></span></td>
        <td><span name="uni_3_other"></span></td>
      </tr>
    </tbody>
  </table>
</div>

<table id="dream_uni" class="table table-hover">
  <thead>
    <th>Rank</th>
    <th>The name of School</th>
    <th>gpa_uw</th>
    <th>gpa_w</th>
    <th>SAT</th>
    <th>ACT</th>
    <th>TOEFL</th>
    <th>AP</th>
    <th>SAT2</th>
    <th>Eng</th>
    <th>Math</th>
    <th>Science</th>
    <th>Foreign</th>
    <th>Social</th>
    <th>History</th>
    <th>Valunteer</th>
    <th>Art</th>
    <th>Leadership</th>
    <th>Intern</th>
    <th>Other</th>
  </thead>
  <tbody></tbody>
  <tfoot></tfoot>
</table>

<script>
  // 학생 정보 뿌리기
  var studScore = <?=json_encode($studScore);?>;
  var str='';
  $.each(studScore, function(index, info){
    str += '<th>'+info.test_subject+'</th>';
    console.log(info.test_score);
  })
  $('#stud_info thead tr').append(str);

  str='';
  $.each(studScore, function(index, info){
    str += '<td>'+info.test_score+'</td>';
  });
  $('#stud_info tbody tr').append(str);

  var uni = <?=json_encode($university);?>;
  var mus = $(".match_uni_skeleton");
  for(i=45; i<48; i++){
    var mashedObj = mashSkeleton(mus, uni[i], true);
    $('#match_uni').append(mashedObj);
  }

  for(i=20; i<23; i++){
    var mashedObj = mashSkeleton(mus, uni[i], true);
    $('#dream_uni').append(mashedObj);
  }
  console.log(uni);
</script>
