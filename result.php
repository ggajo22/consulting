<?php
require("view/header.php");
  $stud_id = $_GET['stud_id'];
  // 학생 정보 가져오기
  $sql = "SELECT * FROM student WHERE stud_id='".$stud_id."'";
  //$sql = "SELECT * FROM student WHERE stud_id='133'";  $stud_id 가져와서 작업하다가, 일단 임의로 133으로 정함ㅇㅋ
  $result = mysqli_query($conn, $sql);
  $stud = mysqli_fetch_assoc($result);

  // 학생 점수 정보 가져오기
  //$sql = "SELECT * FROM stud_score as ss LEFT JOIN test as t ON ss.test_id = t.test_id WHERE stud_id='".$stud_id."'";
  $sql = "SELECT * FROM stud_score as ss LEFT JOIN test as t ON ss.test_id = t.test_id LEFT JOIN student as s ON ss.stud_id = s.stud_id WHERE ss.stud_id='".$stud_id."'";
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
  $sql = "SELECT * FROM stud_when WHERE stud_id='".$stud_id."'";
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

<div class="row">
  <div class="col-xs-8">
    <table id="timetable" class="table">
      <thead></thead>
      <tbody></tbody>
      <tfoot></tfoot>
    </table>
  </div>
  <div class="accordion_banner list-group col-xs-4">
      <div class="accordion_title list-group-item">Main</div>
      <div class="accordion_sub">
        <ul class="list-group">
          <li class="list-group-item testListBtn" data-tid="1" data-ampm="am">SAT 오전</li>
          <li class="list-group-item testListBtn" data-tid="1" data-ampm="pm">SAT 오후</li>
          <li class="list-group-item testListBtn" data-tid="2" data-ampm="am">ACT 오전</li>
          <li class="list-group-item testListBtn" data-tid="2" data-ampm="pm">ACT 오후</li>
        </ul>
      </div>
      <div class="accordion_title list-group-item">SAT2 subject</div>
      <div class="accordion_sub">
        <ul id="check" class="list-group">
          <?php
            foreach($sat2List as $sl){
              echo '<li data-tid="'.$sl['test_id'].'" data-rep="'.$sl['rep'].'" class="list-group-item testListBtn">'.$sl['rep'].'차 '.$sl['test_subject'].'</li>';
            }
          ?>
        </ul>
      </div>
      <div class="accordion_title list-group-item">AP</div>
      <div class="accordion_sub">
        <ul id="check" class="list-group">
          <?php
            foreach($apList as $al){
              echo '<li data-tid="'.$al['test_id'].'" data-rep="'.$al['rep'].'" class="list-group-item testListBtn">'.$al['rep'].'차 '.$al['test_subject'].'</li>';
            }
          ?>
        </ul>
      </div>
      <div class="accordion_title list-group-item">실력up</div>
      <div class="accordion_sub">
        <ul id="check" class="list-group">
          <li class="list-group-item testListBtn" data-tid="3" data-timeslot="3">3교시 TOEFL</li>
          <li class="list-group-item testListBtn" data-tid="3" data-timeslot="4">4교시 TOEFL</li>
        </ul>
      </div>
  </div>
</div>
<div>
  <table class='table' id='priceTable'>
    <thead></thead>
    <tbody></tbody>
  </table>
</div>

<script>
  // 학생 정보 뿌리기
  var studScore = <?=json_encode($studScore);?>;
  var str='';
  $.each(studScore, function(index, info){
    str += '<th>'+info.test_subject+'</th>';
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
  var peri = <?=json_encode($period);?>;
  // $period 가져와서 테이블 사이즈 조절
  var periStr = '<th width="5%">교시</th>';
  for(i=peri.start_week; i<parseInt(peri.start_week)+parseInt(peri.class_week); i++){
    periStr +='<th width="'+(90/parseInt(peri.class_week))+'%">'+i+'주차</th>';
  }
  $('#timetable thead').append(periStr);

  var tbStr = '';
  for(i=0; i<4; i++){
    tbStr += '<tr><td>'+(i+1)+'교시</td>';
    for(j=peri.start_week; j<parseInt(peri.start_week)+parseInt(peri.class_week); j++){
      tbStr +='<td class="slot" data-timeslot="'+(i+1)+'" data-weekslot="'+j+'"></td>';
    }
    tbStr += '</tr>'
  }
  $('#timetable tbody').append(tbStr);


  // 테이블에 각 과목들 hidden 으로 넣어놓기
  var abc = '';
  var subject = '';
  var testInfo = <?=json_encode($testInfo);?>;

  // 히든으로 집어 넣기
  $.each(testInfo, function(index, info){
    abc = '<div class="hidden" data-tid="'+info.test_id+'" data-timeslot="'+info.timeslot+'" data-weekslot="'+info.weekslot+'" data-rep="'+info.rep+'" data-ampm="'+info.ampm+'" onclick="bye();">'+info.test_subject+'</div>';
    if(info.test_sort == 'SAT2' || info.test_sort == 'AP'){
      abc = '<div class="hidden" data-tid="'+info.test_id+'" data-timeslot="'+info.timeslot+'" data-weekslot="'+info.weekslot+'" data-rep="'+info.rep+'" data-ampm="'+info.ampm+'" onclick="bye();">'+info.test_sort+' '+info.test_subject+'</div>';
    }
    $('td.slot[data-timeslot="'+info.timeslot+'"][data-weekslot="'+info.weekslot+'"]').append(abc);
  })

  // 히든 끄집어 내기
  $('[data-tid].testListBtn').click(function(){
    var tid = $(this).attr('data-tid');
    var trep = $(this).attr('data-rep');
    var tampm = $(this).attr('data-ampm');
    var ttimeslot = $(this).attr('data-timeslot');
    var tweekslot = $(this).attr('data-weekslot');
    // SAT2, AP data-tid, data-rep 가 같은것
    var $tslot = $('td.slot [data-tid="'+tid+'"][data-rep="'+trep+'"]');
    // SAT, ACT data-tid, data-ampm 이 같은것
    var $tslot2 = $('td.slot [data-tid="'+tid+'"][data-ampm="'+tampm+'"]');
    // TOEFL, 기타수업 data-tid, data-timeslot 이 같은것
    var $tslot3 = $('td.slot [data-tid="'+tid+'"][data-timeslot="'+ttimeslot+'"]');

    // 과목 선택시 시간표에 보이게 안보이게
    function toggleNoIsHidden($target){
      if($target.is('.hidden')){
        $target.addClass('nohidden').toggleClass('hidden')
      } else {
        $target.removeClass('nohidden').toggleClass('hidden')
      }
    }
    toggleNoIsHidden($tslot);
    toggleNoIsHidden($tslot2);
    toggleNoIsHidden($tslot3);
    $(this).toggleClass('active');

    jungbok();
  });

  // 중복 검사
  function jungbok(){
    $.each(testInfo, function(index, info){
      $tparent = $('td.slot[data-timeslot="'+info.timeslot+'"][data-weekslot="'+info.weekslot+'"]')
      if($tparent.children('.nohidden').length>1){
        $tparent.css('background-color', '#F00');
      } else {
        $tparent.css('background-color', '#FFF');
      }
    })
  }

  // 하루치 수업 빼기
  function bye(){
    $('td.slot div.nohidden').click(function(){
      $(this).addClass('hidden').removeClass('nohidden');
    });
    jungbok();
  }

  // 메뉴 아코디언
  $(".accordion_banner .accordion_title").click(function(){
      if($(this).next("div").is(":visible")){
      $(this).next("div").slideUp("fast");
      } else {
          $(".accordion_banner .accordion_sub").slideUp("fast");
          $(this).next("div").slideToggle("fast");
      }
  });

  // 자동 시간표 설정
  $.each(studScore, function(index, score){
    if(score.test_id == 1){
      $('td.slot [data-tid="1"][data-ampm="am"]').removeClass('hidden').addClass('nohidden');
      $('.testListBtn[data-tid="1"][data-ampm="am"]').addClass('active');
    }
    if(score.test_id == 2){
      $('td.slot [data-tid="2"][data-ampm="am"]').removeClass('hidden').addClass('nohidden');
      $('.testListBtn[data-tid="2"][data-ampm="am"]').addClass('active');
    }
    if(score.stud_grade == 9){
      $('td.slot [data-tid="3"][data-timeslot="3"]').removeClass('hidden').addClass('nohidden');
      $('.testListBtn[data-tid="3"][data-timeslot="3"]').addClass('active');
      $('td.slot [data-tid="31"][data-timeslot="4"]').removeClass('hidden').addClass('nohidden');
      $('.testListBtn[data-tid="31"][data-timeslot="4"]').addClass('active');
    }
    if(score.stud_grade == 10){
      function sat2recommend(test_id){
        $('td.slot [data-tid="'+test_id+'"][data-rep="1"]').removeClass('hidden').addClass('nohidden');
        $('.testListBtn[data-tid="'+test_id+'"][data-rep="1"]').addClass('active');
      }
      if(score.test_id !== 7){
        sat2recommend(7);
      } else if(score.test_id !== 4){
        sat2recommend(4);
      } else if(score.test_id !== 8){
        sat2recommend(8);
      }
    }
  });

  for(i=0; i<4; i++){
    for(j=peri.start_week; j<parseInt(peri.start_week)+parseInt(peri.class_week); j++){
      var $slot = $('td.slot[data-timeslot="'+(i+1)+'"][data-weekslot="'+j+'"]');
      var tia = $slot.children('.nohidden').attr('data-tid');
      console.log(tia);
/*
      var childLength = $slot.children('.nohidden').length
      console.log(childLength);
      if(childLength == 0){
        $('td.slot [data-tid="31"][data-timeslot="'+(i+1)+'"][data-weekslot="'+j+'"]').removeClass('hidden').addClass('nohidden');
        $('td.slot [data-tid="3"][data-timeslot="'+(i+1)+'"][data-weekslot="'+j+'"]').removeClass('hidden').addClass('nohidden');
      }
*/
    }
  }


</script>
