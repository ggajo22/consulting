<?php

  require("view/header.php");
  $studScore = $_SESSION['stud_score'];
  $wish = $_SESSION['wish'];

  var_dump($_SESSION['major']);
  var_dump($_SESSION['wish']);

  // 대학 정보 가져오기
  $sql = "SELECT * FROM university WHERE major_id = '".$_SESSION['major']."'";
  $result = mysqli_query($conn, $sql);
  $university = array();
  while($row = mysqli_fetch_assoc($result)){
    $university[] = $row;
  }

  // 시험 정보 가져오기
  $sql = "SELECT * FROM test";
  $result = mysqli_query($conn, $sql);
  $test = array();
  while($row = mysqli_fetch_assoc($result)){
    $test[] = $row;
  }

?>
<style>
  .ytable{position:relative; font-size:1.0em; border:1px solid #C00 !important;}
  .ytable th{padding:10px; text-align:center; background-color:#C00; color:#FFF;}
  .ytable tbody tr td{border-top:1px solid #C00; border-left:0.2px solid #EAEAEA; border-right:0.2px solid #EAEAEA; height:30px; vertical-align:middle;}
  .ref{background-color:#CC3D3D; color:#FFF;}

  .width800{width:800px;}
</style>

<div class="container-fluid">
  <h1>본 학생의 점수</h1>
  <table id="stud_info" class="table text-center ytable width800">
    <thead></thead>
    <tbody></tbody>
    <tfoot></tfoot>
  </table>
  <h1>Match Schhol</h1>
  <table id="match_uni" class="table table-hover text-center ytable width800">
    <thead>
      <th width="4%">Rank</th>
      <th>The name of School</th>
      <th width="4%">gpa_uw</th>
      <th width="4%">gpa_w</th>
      <th width="4%">SAT</th>
      <th width="4%">ACT</th>
      <th width="4%">TOEFL</th>
      <th width="4%">AP</th>
      <th width="4%">SAT2</th>
      <th width="4%" class="hidden uni_2">Eng</th>
      <th width="4%" class="hidden uni_2">Math</th>
      <th width="4%" class="hidden uni_2">Science</th>
      <th width="4%" class="hidden uni_2">Foreign</th>
      <th width="4%" class="hidden uni_2">Social</th>
      <th width="4%" class="hidden uni_2">History</th>
      <th width="4%" class="hidden uni_3">Valunteer</th>
      <th width="4%" class="hidden uni_3">Art</th>
      <th width="4%" class="hidden uni_3">Leadership</th>
      <th width="4%" class="hidden uni_3">Intern</th>
      <th width="4%" class="hidden uni_3">Other</th>
    </thead>
    <tbody></tbody>
    <tfoot></tfoot>
  </table>
  <div class="hidden">
    <table>
      <tbody>
        <tr class="match_uni_skeleton">
          <td><span name="uni_rank"></span></td>
          <td><span name="uni_name"></span></td>
          <td><span name="uni_gpa_uw"></span></td>
          <td><span name="uni_gpa_w"></span></td>
          <td><span name="uni_sat"></span></td>
          <td><span name="uni_act"></span></td>
          <td><span name="uni_toefl"></span></td>
          <td><span name="uni_ap"></span></td>
          <td><span name="uni_sat2"></span></td>
          <td class="hidden uni_2"><span name="uni_2_eng"></span></td>
          <td class="hidden uni_2"><span name="uni_2_math"></span></td>
          <td class="hidden uni_2"><span name="uni_2_science"></span></td>
          <td class="hidden uni_2"><span name="uni_2_foreign"></span></td>
          <td class="hidden uni_2"><span name="uni_2_social"></span></td>
          <td class="hidden uni_2"><span name="uni_2_history"></span></td>
          <td class="hidden uni_3"><span name="uni_3_valunteer"></span></td>
          <td class="hidden uni_3"><span name="uni_3_art"></span></td>
          <td class="hidden uni_3"><span name="uni_3_leadership"></span></td>
          <td class="hidden uni_3"><span name="uni_3_intern"></span></td>
          <td class="hidden uni_3"><span name="uni_3_other"></span></td>
        </tr>
      </tbody>
    </table>
  </div>

  <h1>Dream School</h1>
  <table id="dream_uni" class="table table-hover text-center ytable width800">
    <thead>
      <th width="4%">Rank</th>
      <th>The name of School</th>
      <th width="4%">gpa_uw</th>
      <th width="4%">gpa_w</th>
      <th width="4%">SAT</th>
      <th width="4%">ACT</th>
      <th width="4%">TOEFL</th>
      <th width="4%">AP</th>
      <th width="4%">SAT2</th>
      <th width="4%" class="hidden uni_2">Eng</th>
      <th width="4%" class="hidden uni_2">Math</th>
      <th width="4%" class="hidden uni_2">Science</th>
      <th width="4%" class="hidden uni_2">Foreign</th>
      <th width="4%" class="hidden uni_2">Social</th>
      <th width="4%" class="hidden uni_2">History</th>
      <th width="4%" class="hidden uni_3">Valunteer</th>
      <th width="4%" class="hidden uni_3">Art</th>
      <th width="4%" class="hidden uni_3">Leadership</th>
      <th width="4%" class="hidden uni_3">Intern</th>
      <th width="4%" class="hidden uni_3">Other</th>
    </thead>
    <tbody></tbody>
    <tfoot></tfoot>
  </table>

  <h1>Wish School</h1>
  <table id="wish_uni" class="table table-hover text-center ytable width800">
    <thead>
      <th width="4%">Rank</th>
      <th>The name of School</th>
      <th width="4%">gpa_uw</th>
      <th width="4%">gpa_w</th>
      <th width="4%">SAT</th>
      <th width="4%">ACT</th>
      <th width="4%">TOEFL</th>
      <th width="4%">AP</th>
      <th width="4%">SAT2</th>
      <th width="4%" class="hidden uni_2">Eng</th>
      <th width="4%" class="hidden uni_2">Math</th>
      <th width="4%" class="hidden uni_2">Science</th>
      <th width="4%" class="hidden uni_2">Foreign</th>
      <th width="4%" class="hidden uni_2">Social</th>
      <th width="4%" class="hidden uni_2">History</th>
      <th width="4%" class="hidden uni_3">Valunteer</th>
      <th width="4%" class="hidden uni_3">Art</th>
      <th width="4%" class="hidden uni_3">Leadership</th>
      <th width="4%" class="hidden uni_3">Intern</th>
      <th width="4%" class="hidden uni_3">Other</th>
    </thead>
    <tbody></tbody>
    <tfoot></tfoot>
  </table>

  <button type="button" name="button" class="btn btn-default" id="btn_next">인터프렙 도움받기</button>
</div>

<script>
  // 학생 정보 뿌리기
  var studScore = <?=json_encode($studScore);?>;
  var test = <?=json_encode($test);?>;
  var str='';
  $.each(studScore, function(index, info){
    $.each(test, function(index, t){
      if(info.test_id == t.test_id){
        info.test_subject = t.test_subject;
      }
    })
    if(info.test_sort){
      str += '<th width='+(100/studScore.length)+'%>'+info.test_sort+' '+info.test_subject+'</th>';
    } else {
      str += '<th width='+(100/studScore.length)+'%>'+info.test_subject+'</th>';
    }
  })
  $('#stud_info thead').append(str);

  str = '<tr>';
  $.each(studScore, function(index, info){
    str += '<td>'+info.test_score+'</td>';
  });
  str += '</tr>';
  $('#stud_info tbody').append(str);

  // 학생 점수 환산
  var studConv = 0;
  $.each(studScore, function(index, score){
    if(score.test_subject == 'SAT'){
      studConv += score.test_score*500/1600;
    } else if (score.test_subject == 'ACT'){
      studConv += score.test_score*500/36;
    } else if (score.test_subject == 'gpa_uw'){
      studConv += score.test_score*100/4.0;
    }
  })

  var uni = <?=json_encode($university);?>;
  var wish = <?=json_encode($wish);?>;
  var mus = $(".match_uni_skeleton");

  // 학교와 학생 conv 비교
  var conv = 0;
  var dif = new Array();
  $.each(uni, function(index, score){
    conv = ((score.uni_sat*500/1600) + (score.uni_act*500/36))/2 + (score.uni_gpa_uw*100/4.0);
    // 학교가 더 높아야함
    if(conv-studConv > 0){
      diff = {'idx':index, 'dix':conv-studConv};
      dif.push(diff);
    }
  })
  dif.sort(function(a,b){
    return a.dix - b.dix;
  });

  // 학생과 가장 비슷한 3개학교
  for(i=2; i>-1; i--){
    var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
    $('#match_uni').append(mashedObj);
  }

  // 학생 상태보다 9~12 단계 높은 학교
  if(dif.length < 9){
    for(i=dif.length-1; i>dif.length-4; i--){
      var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
      $('#dream_uni').append(mashedObj);
    }
  } else {
    for(i=8; i>5; i--){
      var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
      $('#dream_uni').append(mashedObj);
    }
  }


  // 처음에 선택한 Wish 학교 출력
  var wishUni = Array();
  $.each(uni, function(index, u){
    $.each(wish, function(index, w){
      if(w == u.uni_id){
        wishUni.push(u);
      }
    })
  })
  for(i=0; i<wishUni.length; i++){
    var mashedObj = mashSkeleton(mus, wishUni[i], true);
    $('#wish_uni').append(mashedObj);
  }

  $('#btn_next').click(function(){
    location.href = 'student.php';
  })
</script>
