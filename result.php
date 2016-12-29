<?php
require("view/header.php");
require_once("proc/dao_result.php");

// SAT2 리스트 가져오기
$sql = "SELECT test_id, test_sort, test_subject FROM test WHERE test_sort='SAT2' GROUP BY test_subject";
$result = mysqli_query($conn, $sql);
$sat2List = array();
while($row = mysqli_fetch_assoc($result))
{
  $sat2List[] = $row;
}

// AP 리스트 가져오기
$sql = "SELECT test_id, test_sort, test_subject FROM test WHERE test_sort='AP' GROUP BY test_subject";
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


<h1><?=$stud['stud_name']?> 학생</h1>
<table id="stud_info" class="table">
  <thead></thead>
  <tbody><tr></tr></tbody>
  <tfoot></tfoot>
</table>
<h1>Match Schhol</h1>
<table id="match_uni" class="table table-hover">
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
    <th width="4%">Eng</th>
    <th width="4%">Math</th>
    <th width="4%">Science</th>
    <th width="4%">Foreign</th>
    <th width="4%">Social</th>
    <th width="4%">History</th>
    <th width="4%">Valunteer</th>
    <th width="4%">Art</th>
    <th width="4%">Leadership</th>
    <th width="4%">Intern</th>
    <th width="4%">Other</th>
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

<h1>Dream School</h1>
<table id="dream_uni" class="table table-hover">
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
    <th width="4%">Eng</th>
    <th width="4%">Math</th>
    <th width="4%">Science</th>
    <th width="4%">Foreign</th>
    <th width="4%">Social</th>
    <th width="4%">History</th>
    <th width="4%">Valunteer</th>
    <th width="4%">Art</th>
    <th width="4%">Leadership</th>
    <th width="4%">Intern</th>
    <th width="4%">Other</th>
  </thead>
  <tbody></tbody>
  <tfoot></tfoot>
</table>

<input type="button" value="시간표 보러가기" class="btn btn-success btn-lg">

<table id="timetable" class="table table-hover">
  <thead>
    <th>1주차</th>
    <th>2주차</th>
    <th>3주차</th>
    <th>4주차</th>
  </thead>
  <tbody></tbody>
  <tfoot></tfoot>
</table>

<ul id="check" class="list-group">
  <?php
    foreach($sat2List as $sl){
      echo '<li id="test_'.$sl['test_id'].'" class="list-group-item" onclick="select_subject();">'.$sl['test_subject'].'</li>';
    }
  ?>
</ul>

<script>
  // 학생 정보 뿌리기
  var studScore = <?=json_encode($studScore);?>;
  var str='';
  $.each(studScore, function(index, info){
    str += '<th width="20px">'+info.test_subject+'</th>';
  })
  $('#stud_info thead').append(str);

  str='';
  $.each(studScore, function(index, info){
    str += '<td>'+info.test_score+'</td>';
  });
  $('#stud_info tbody tr').append(str);

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
  for(i=0; i<3; i++){
    var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
    $('#match_uni').append(mashedObj);
  }

  // 학생 상태보다 9~12 단계 높은 학교
  for(i=9; i<12; i++){
    var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
    $('#dream_uni').append(mashedObj);
  }

// 시간표 작성

  //테이블 만들기
  var tbStr = '';
  for(i=0; i<4; i++){
    tbStr += '<tr>'
    for(j=0; j<4; j++){
      tbStr +='<td id="'+i+'_'+j+'">1</td>';
    }
    tbStr += '</tr>'
  }
  $('#timetable tbody').append(tbStr);

  // 테이블에 각 과목들 hidden 으로 넣어놓기
  var abc = '';
  var subject = '';
  var testInfo = <?=json_encode($testInfo);?>;
  console.log(testInfo);
  $.each(testInfo, function(index, info){
    abc = '<div class="hidden" id="'+info.test_id+'_'+info.timeslot+'_'+info.weekslot+'">'+info.test_subject+'</div>';
    $('#'+info.timeslot+'_'+info.weekslot).append(abc);
  })

  console.log(abc);

  // 해당 버튼 눌렀을 때, 과목들 hidden 된 것 해지
  function select_subject(){
    $.each(testInfo, function(index, info){
      $('#test_'+info.test_id).click(function(){
        $('#'+info.test_id+'_'+info.timeslot+'_'+info.weekslot).toggleClass('hidden');
        $('#test_'+info.test_id).toggleClass('active');
      })
    })
  }

</script>
