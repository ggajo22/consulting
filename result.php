<?php
require("view/header.php");
require_once("proc/dao_result.php");

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

  var conv = 0;
  var dif = new Array();
  $.each(uni, function(index, score){
    conv = ((score.uni_sat*500/1600) + (score.uni_act*500/36))/2 + (score.uni_gpa_uw*100/4.0);
    if(conv-studConv > 0){
      diff = {'idx':index, 'dix':conv-studConv};
      dif.push(diff);
    }
  })
  dif.sort(function(a,b){
    return a.dix - b.dix;
  });
  console.log(dif);

  for(i=0; i<3; i++){
    var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
    $('#match_uni').append(mashedObj);
  }

  for(i=9; i<12; i++){
    var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
    $('#dream_uni').append(mashedObj);
  }

  $.post()
</script>
