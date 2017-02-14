<?php
  require("view/header.php");

  $studScore = $_SESSION['stud_score'];
  $period = $_SESSION['period'];
  $stud = $_SESSION['student'];
  $help = $_SESSION['help'];

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
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_subject='toefl' GROUP BY timeslot";
  $result = mysqli_query($conn, $sql);
  $toeflInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $toeflInfo[] = $row;
  }

  // half 모의고사 정보 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_subject='Half 모의고사' GROUP BY timeslot";
  $result = mysqli_query($conn, $sql);
  $munjeInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $munjeInfo[] = $row;
  }

  // Essay 특강 정보 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_subject='Essay 특강' GROUP BY timeslot";
  $result = mysqli_query($conn, $sql);
  $essayInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $essayInfo[] = $row;
  }

  // 리딩트레이너 정보 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_subject='리딩트레이너' GROUP BY timeslot";
  $result = mysqli_query($conn, $sql);
  $readingInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $readingInfo[] = $row;
  }

  // 북클럽 정보 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_subject='북클럽' GROUP BY timeslot";
  $result = mysqli_query($conn, $sql);
  $bookclubInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $bookclubInfo[] = $row;
  }

  // vocabulary 정보 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_subject='Vocabulary' GROUP BY timeslot";
  $result = mysqli_query($conn, $sql);
  $vocabInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $vocabInfo[] = $row;
  }

  // SAT2 리스트 가져오기 (priority 순)
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_sort='SAT2' GROUP BY test_subject ORDER BY priority ASC";
  $result = mysqli_query($conn, $sql);
  $sat2List = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $sat2List[] = $row;
  }

  // SAT2 리스트 가져오기 (rep 순)
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_sort='SAT2' GROUP BY rep, test_subject";
  $result = mysqli_query($conn, $sql);
  $sat2List2 = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $sat2List2[] = $row;
  }

  // AP 리스트 가져오기 (priority 순)
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_sort='AP' GROUP BY test_subject ORDER BY priority ASC";
  $result = mysqli_query($conn, $sql);
  $apList = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $apList[] = $row;
  }

  // AP 리스트 가져오기 (rep 순)
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id WHERE test_sort='AP' GROUP BY rep, test_subject";
  $result = mysqli_query($conn, $sql);
  $apList2 = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $apList2[] = $row;
  }

  // test_info 가져오기
  $sql = "SELECT * FROM test_info as ti LEFT JOIN test as t ON ti.test_id = t.test_id";
  $result = mysqli_query($conn, $sql);
  $testInfo = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $testInfo[] = $row;
  }

  // 수강료 정보 불러오기
  $sql = "SELECT * FROM interprep as i LEFT JOIN test as t ON i.test_id = t.test_id";
  $result = mysqli_query($conn, $sql);
  $interPrice = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $interPrice[] = $row;
  }

 ?>
<style>
  .accordion_sub {
    display : none;
  }
  .accordion_sub2 {
    display : none;
  }
  .accordion_title {
    background-color : #FAF4C0;
  }
  .accordion_title2 {
    background-color : #D9D6FF;
  }
  .jungbok {
    background-color : #FF7E7E;
  }

  .ytable{position:relative; font-size:1.2em; border:1px solid #C00 !important;}
  .ytable th{padding:10px; text-align:center; background-color:#C00; color:#FFF;}
  .ytable tbody tr td{border-top:1px solid #C00; border-left:0.2px solid #EAEAEA; border-right:0.2px solid #EAEAEA; height:70px; vertical-align:middle;}
  .ref{background-color:#CC3D3D; color:#FFF;}

  #price_cal{position:relative; left:-30%;}
</style>


<div class="row padding30 container-fluid">
  <div class="col-xs-8">
   <table id="timetable" class="table text-center table-hover ytable">
     <thead></thead>
     <tbody></tbody>
   </table>
   <div class="row">
     <div class="col-xs-11"></div>
     <div class="col-xs-1"><button type="button" id="price_cal" class="btn btn-default">수강료 계산</button></div>
   </div>
  </div>
  <div class="accordion_banner list-group col-xs-4">
   <div class="accordion_title list-group-item">Main</div>
   <div class="accordion_sub">
     <ul class="list-group">
       <li class="list-group-item testListBtn" data-tid="2" data-ampm="am">SAT 오전</li>
       <li class="list-group-item testListBtn" data-tid="2" data-ampm="pm">SAT 오후</li>
       <li class="list-group-item testListBtn" data-tid="3" data-ampm="am">ACT 오전</li>
       <li class="list-group-item testListBtn" data-tid="3" data-ampm="pm">ACT 오후</li>
       <li class="list-group-item testListBtn" data-tid="4" data-ampm="am">SAT/ACT 오전</li>
       <li class="list-group-item testListBtn" data-tid="4" data-ampm="pm">SAt/ACT 오후</li>
     </ul>
   </div>
   <div class="accordion_title list-group-item">SAT2 subject</div>
   <div class="accordion_sub">
     <ul class="list-group">
       <?php
         foreach($sat2List2 as $sl){
         echo '<li data-tid="'.$sl['test_id'].'" data-rep="'.$sl['rep'].'" class="list-group-item testListBtn">'.$sl['rep'].'차 '.$sl['test_subject'].'</li>';
         }
       ?>
     </ul>
   </div>
   <div class="accordion_title list-group-item">AP</div>
   <div class="accordion_sub">
       <ul class="list-group">
         <?php
           foreach($apList2 as $al){
           echo '<li data-tid="'.$al['test_id'].'" data-rep="'.$al['rep'].'" class="list-group-item testListBtn">'.$al['rep'].'차 '.$al['test_subject'].'</li>';
           }
         ?>
       </ul>
     </div>
   <div class="accordion_title list-group-item">실력up</div>
   <div class="accordion_sub">
     <div class="list-group-item accordion_title2">Half 모의고사</div>
     <div class="accordion_sub2">
       <ul class="list-group">
         <?php
         foreach($munjeInfo as $mi){
           echo '<li class="list-group-item">'.$mi['timeslot'].'교시
                 <div class="btn-group">';
                 for($i=$period['start_week']; $i<$period['start_week']+$period['class_week']; $i++){
                   echo '<button type="button" class="btn btn-default testListBtn2" data-tid="'.$mi['test_id'].'" data-timeslot="'.$mi['timeslot'].'" data-weekslot="'.$i.'">'.$i.'주차</button>';
                 }
               echo '</div></li>';
         }
         ?>
       </ul>
     </div>
     <div class="list-group-item accordion_title2">Essay 특강</div>
     <div class="accordion_sub2">
       <ul class="list-group">
         <?php
         foreach($essayInfo as $mi){
           echo '<li class="list-group-item">'.$mi['timeslot'].'교시
                 <div class="btn-group">';
                 for($i=$period['start_week']; $i<$period['start_week']+$period['class_week']; $i++){
                   echo '<button type="button" class="btn btn-default testListBtn2" data-tid="'.$mi['test_id'].'" data-timeslot="'.$mi['timeslot'].'" data-weekslot="'.$i.'">'.$i.'주차</button>';
                 }
               echo '</div></li>';
         }
         ?>
       </ul>
     </div>
     <div class="list-group-item accordion_title2">TOEFL</div>
     <div class="accordion_sub2">
       <ul class="list-group">
         <?php
         foreach($toeflInfo as $ti){
           echo '<li class="list-group-item">'.$ti['timeslot'].'교시
                 <div class="btn-group">';
                 for($i=$period['start_week']; $i<$period['start_week']+$period['class_week']; $i++){
                   echo '<button type="button" class="btn btn-default testListBtn2" data-tid="'.$ti['test_id'].'" data-timeslot="'.$ti['timeslot'].'" data-weekslot="'.$i.'">'.$i.'주차</button>';
                 }
               echo '</div></li>';
         }
         ?>
       </ul>
     </div>
     <div class="list-group-item accordion_title2">리딩트레이너</div>
     <div class="accordion_sub2">
       <ul class="list-group">
         <?php
         foreach($readingInfo as $ti){
           echo '<li class="list-group-item">'.$ti['timeslot'].'교시
                 <div class="btn-group">';
                 for($i=$period['start_week']; $i<$period['start_week']+$period['class_week']; $i++){
                   echo '<button type="button" class="btn btn-default testListBtn2" data-tid="'.$ti['test_id'].'" data-timeslot="'.$ti['timeslot'].'" data-weekslot="'.$i.'">'.$i.'주차</button>';
                 }
               echo '</div></li>';
         }
         ?>
       </ul>
     </div>
     <div class="list-group-item accordion_title2">북클럽</div>
     <div class="accordion_sub2">
       <ul class="list-group">
         <?php
         foreach($bookclubInfo as $ti){
           echo '<li class="list-group-item">'.$ti['timeslot'].'교시
                 <div class="btn-group">';
                 for($i=$period['start_week']; $i<$period['start_week']+$period['class_week']; $i++){
                   echo '<button type="button" class="btn btn-default testListBtn2" data-tid="'.$ti['test_id'].'" data-timeslot="'.$ti['timeslot'].'" data-weekslot="'.$i.'">'.$i.'주차</button>';
                 }
               echo '</div></li>';
         }
         ?>
       </ul>
     </div>
     <div class="list-group-item accordion_title2">Vocabulary</div>
     <div class="accordion_sub2">
       <ul class="list-group">
         <?php
         foreach($vocabInfo as $ti){
           echo '<li class="list-group-item">'.$ti['timeslot'].'교시
                 <div class="btn-group">';
                 for($i=$period['start_week']; $i<$period['start_week']+$period['class_week']; $i++){
                   echo '<button type="button" class="btn btn-default testListBtn2" data-tid="'.$ti['test_id'].'" data-timeslot="'.$ti['timeslot'].'" data-weekslot="'.$i.'">'.$i.'주차</button>';
                 }
               echo '</div></li>';
         }
         ?>
       </ul>
     </div>
   </div>
  </div>
</div>
<div class="container-fluid" style="padding-top:50px;">
  <table class='table text-center ytable' id='priceTable'>
   <thead></thead>
   <tbody></tbody>
  </table>
  <h1 class="ref hidden jarang" style="width:1020px;">
    <span class="jarang1" style="display:none;">하지만!!!</span>
    <span class="jarang2" style="display:none;">인터프렙에는
    <span style="color:yellow; font-weight:bold;">All Pass <span class="allpassPrice"></span></span> 시스템이 있습니다!!!!</span></h1>
</div>

<script>
//테이블 만들기
var peri = <?=json_encode($period);?>;
// $period 가져와서 테이블 사이즈 조절
var periStr = '<th width="5%">교시</th>';
for(i=peri.start_week; i<parseInt(peri.start_week)+parseInt(peri.class_week); i++){
  periStr +='<th width="'+(95/parseInt(peri.class_week))+'%">'+i+'주차</th>';
}
$('#timetable thead').append(periStr);

var tbStr = '';
for(i=0; i<5; i++){
  tbStr += '<tr class="slotRow" data-timeslot="'+(i+1)+'"><td class="ref">'+(i+1)+'교시</td>';
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
  abc = '<div class="hidden" data-tid="'+info.test_id+'" data-timeslot="'+info.timeslot+'" data-weekslot="'+info.weekslot+'" data-rep="'+info.rep+'" data-ampm="'+info.ampm+'">'+info.test_subject+'</div>';
  if(info.test_sort == 'SAT2' || info.test_sort == 'AP'){ //  test_sort 추가
    abc = '<div class="hidden" data-tid="'+info.test_id+'" data-timeslot="'+info.timeslot+'" data-weekslot="'+info.weekslot+'" data-rep="'+info.rep+'" data-ampm="'+info.ampm+'">'+info.test_sort+' '+info.test_subject+'</div>';
  } else if(info.test_subject == 'SAT' || info.test_subject == 'ACT'){
    abc = '<div class="hidden" data-tid="'+info.test_id+'" data-timeslot="'+info.timeslot+'" data-weekslot="'+info.weekslot+'" data-rep="'+info.rep+'" data-ampm="'+info.ampm+'">'+info.test_subject+'</div>';
  }
  $('td.slot[data-timeslot="'+info.timeslot+'"][data-weekslot="'+info.weekslot+'"]').append(abc);
})

// 히든 끄집어 내기
$('[data-tid].testListBtn').click(function(){
  var tid = $(this).attr('data-tid');
  var trep = $(this).attr('data-rep');
  var tampm = $(this).attr('data-ampm');
  // SAT2, AP data-tid, data-rep 가 같은것
  var $tslot = $('td.slot [data-tid="'+tid+'"][data-rep="'+trep+'"]');
  // SAT, ACT data-tid, data-ampm 이 같은것
  var $tslot2 = $('td.slot [data-tid="'+tid+'"][data-ampm="'+tampm+'"]');

  toggleNoIsHidden($tslot);
  toggleNoIsHidden($tslot2);
  $(this).toggleClass('active');
  jungbok();
});

// 버튼용 히든 끄집어 내기
$('[data-tid].testListBtn2').click(function(){
  var tid = $(this).attr('data-tid');
  var ttimeslot = $(this).attr('data-timeslot');
  var tweekslot = $(this).attr('data-weekslot');
  // TOEFL, 기타수업 data-tid, data-timeslo, data-weekslot 이 같은것
  var $tslot3 = $('td.slot [data-tid="'+tid+'"][data-timeslot="'+ttimeslot+'"][data-weekslot="'+tweekslot+'"]');
  toggleNoIsHidden($tslot3);
  $(this).toggleClass('btn-primary');
  $(this).toggleClass('btn-default');
  jungbok();
});

// 중복 검사
function jungbok(){
  $.each(testInfo, function(index, info){
    $tparent = $('td.slot[data-timeslot="'+info.timeslot+'"][data-weekslot="'+info.weekslot+'"]')
    if($tparent.children('.nohidden').length>1){
      $tparent.addClass('jungbok');
    } else {
      $tparent.removeClass('jungbok');
    }
  })
  $.each(testInfo, function(index, info){
    $tparent = $('td.slot[data-timeslot="'+info.timeslot+'"][data-weekslot="'+info.weekslot+'"]')
    if($tparent.children('.nohidden').length>1){
      alert('중복 수강 선택하였습니다.');
      return false;
    }
  })
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

// Sub메뉴 아코디언
$(".accordion_title2").click(function(){
    if($(this).next("div").is(":visible")){
    $(this).next("div").slideUp("fast");
    } else {
        $(".accordion_sub2").slideUp("fast");
        $(this).next("div").slideToggle("fast");
    }
});

// 자동 시간표 설정
// 일정으로 차수 구분
var stud = <?=json_encode($stud);?>;
var studScore = <?=json_encode($studScore);?>;
var rep = new Array();
// 1차 : 4주차~6주차
if(parseInt(peri['start_week'])<=4 && parseInt(peri['start_week'])+parseInt(peri['class_week'])-1>=6){
  rep.push('1');
}
// 2차 : 7주차~9주차
if(parseInt(peri['start_week'])<=7 && parseInt(peri['start_week'])+parseInt(peri['class_week'])-1>=9){
  rep.push('2');
}
// 3차 : 10주차~12주차
if(parseInt(peri['start_week'])<=10 && parseInt(peri['start_week'])+parseInt(peri['class_week'])-1>=12){
  rep.push('3');
}

// SAT2 우선순위로 배정하기
var sat2List = <?=json_encode($sat2List);?>;
// sat2List test_id 배열에 넣기
var _sat2 = new Array();
// 배열에서 학생이 들었던 수업은 splice
$.each(sat2List, function(index, sat2){
  _sat2.push(sat2.test_id);
});
$.each(studScore, function(index, score){
  var _index = _sat2.indexOf(score.test_id);
  if(_index >= 0){
    _sat2.splice(_index, 1);
  }
});

// AP 우선순위로 배정하기
// SAT2 우선순위로 배정하기
var apList = <?=json_encode($apList);?>;
// sat2List test_id 배열에 넣기
var _ap = new Array();
// 배열에서 학생이 들었던 수업은 splice
$.each(apList, function(index, ap){
  _ap.push(ap.test_id);
});
$.each(studScore, function(index, score){
  var _index = _ap.indexOf(score.test_id);
  if(_index >= 0){
    _ap.splice(_index, 1);
  }
});

var help = <?=json_encode($help);?>
// 학생 학년에 따라서 어떻게 할지
if(stud.stud_grade == 8){
  bookclub();
} else if(stud.stud_grade == 9){
  if(help == 'reading'){
    bookclub();
  } else {
    mainTest();
    otherClass();
  }
} else if(stud.stud_grade == 10 || stud.stud_grade == 11 || stud.stud_grade == 12) {
  mainTest();
  if(rep.length == 3){
    whatClass(_sat2, 0, 0);
    whatClass(_ap, 0, 1);
  } else if(rep.length == 2 && rep[0] == 1) {
    whatClass(_sat2, 0, 0);
    whatClass(_ap, 0, 1);
  } else if(rep.length == 2 && rep[0] == 2) {
    whatClass(_sat2, 0, 1);
    whatClass(_ap, 0, 0);
  } else if(rep.length == 1) {
    whatClass(_sat2, 0, 0);
  }
  otherClass();
}
/*
    else {
      $('td.slot [data-tid="7"][data-timeslot="3"]').removeClass('hidden').addClass('nohidden');
      $('.testListBtn2[data-tid="7"][data-timeslot="3"]').addClass('btn-primary').removeClass('btn-default');
    }
    */

function bookclub(){
  $('td.slot [data-tid="9"][data-timeslot="1"]').removeClass('hidden').addClass('nohidden');
  $('.testListBtn2[data-tid="9"][data-timeslot="1"]').addClass('btn-primary').removeClass('btn-default');
  $('td.slot [data-tid="7"][data-timeslot="2"]').removeClass('hidden').addClass('nohidden');
  $('.testListBtn2[data-tid="7"][data-timeslot="2"]').addClass('btn-primary').removeClass('btn-default');
}

function mainTest(){
  // 학생이 SAT or ACT 어떤거 선택했는지
    $.each(studScore, function(index, score){
      if(score.test_id == 2){
          $('td.slot [data-tid="2"][data-ampm="am"]').removeClass('hidden').addClass('nohidden');
          $('.testListBtn[data-tid="2"][data-ampm="am"]').addClass('active');
        } else if(score.test_id == 3){
          $('td.slot [data-tid="3"][data-ampm="am"]').removeClass('hidden').addClass('nohidden');
          $('.testListBtn[data-tid="3"][data-ampm="am"]').addClass('active');
        } else if(score.test_id == 4){
          $('td.slot [data-tid="4"][data-ampm="am"]').removeClass('hidden').addClass('nohidden');
          $('.testListBtn[data-tid="4"][data-ampm="am"]').addClass('active');
        }
    });
}

function whatClass(arr, cIndex, rIndex){
  var $temp = $('td.slot [data-tid="'+arr[cIndex]+'"][data-rep="'+rep[rIndex]+'"]');
  $temp.parent().children('.nohidden').addClass('hidden').removeClass('nohidden');
  $temp.removeClass('hidden').addClass('nohidden');
  $('.testListBtn[data-tid="'+arr[cIndex]+'"][data-rep="'+rep[rIndex]+'"]').addClass('active');
}
/*
  // 빈칸에 수업 넣기
  for(i=0; i<4; i++){
    for(j=peri.start_week; j<parseInt(peri.start_week)+parseInt(peri.class_week); j++){
      var $slot = $('tr.slotRow[data-timeslot="'+(i+1)+'"]');
      var childLength = $slot.children('td.slot').children('.nohidden').length
      if(childLength == 0){
        for(j=peri.start_week; j<parseInt(peri.start_week)+parseInt(peri.class_week); j++){
          $('tr.slotRow[data-timeslot="'+(i+1)+'"] td.slot [data-tid="5"][data-timeslot="'+(i+1)+'"][data-weekslot="'+j+'"]').removeClass('hidden').addClass('nohidden');
          $('.testListBtn2[data-tid="5"][data-timeslot="'+(i+1)+'"][data-weekslot="'+j+'"]').addClass('btn-primary').removeClass('btn-default');
        }
      }
      $slot = $('tr.slotRow[data-timeslot="'+(i+1)+'"] td.slot[data-timeslot="'+(i+1)+'"][data-weekslot="'+j+'"]');
      childLength = $slot.children('.nohidden').length
      if(childLength == 0){
        $('tr.slotRow[data-timeslot="'+(i+1)+'"] td.slot [data-tid="7"][data-timeslot="'+(i+1)+'"][data-weekslot="'+j+'"]').removeClass('hidden').addClass('nohidden');
        $('.testListBtn2[data-tid="7"][data-timeslot="'+(i+1)+'"][data-weekslot="'+j+'"]').addClass('btn-primary').removeClass('btn-default');
      }
    }
  }
*/

function otherClass(){
  // 기본 7(toefl)로 설정
  var helpId = 7;
  if(help == 'essay'){
    helpId = 6;
  } else if(help == 'reading'){
    helpId = 8;
  } else if(studScore[studScore.length-1].test_score >= 100) {
    helpId = 8;
  }
  // help 가 필요한 과목 먼저 배정, 4교시에 SAT2가 깔려 있다면 패스
  for(j=peri.start_week; j<parseInt(peri.start_week)+parseInt(peri.class_week); j++){
    var $timeslot4 = $('td.slot[data-timeslot="4"][data-weekslot="'+j+'"]').children('.nohidden').length;
    console.log($timeslot4);
    if($timeslot4 == 1){
      $('td.slot[data-timeslot="3"][data-weekslot="'+j+'"] [data-tid="5"]').removeClass('hidden').addClass('nohidden');
      $('.testListBtn2[data-timeslot="3"][data-weekslot="'+j+'"][data-tid="5"]').addClass('btn-primary').removeClass('btn-default');
    } else {
      $('td.slot[data-timeslot="3"][data-weekslot="'+j+'"] [data-tid="'+helpId+'"]').removeClass('hidden').addClass('nohidden');
      $('.testListBtn2[data-timeslot="3"][data-weekslot="'+j+'"][data-tid="'+helpId+'"]').addClass('btn-primary').removeClass('btn-default');
    }
  }

  // 빈칸에 half모의고사 배정
  for(j=peri.start_week; j<parseInt(peri.start_week)+parseInt(peri.class_week); j++){
    var $timeslot3 = $('td.slot[data-timeslot="3"][data-weekslot="'+j+'"]').children('.nohidden').length;
    $timeslot4 = $('td.slot[data-timeslot="4"][data-weekslot="'+j+'"]').children('.nohidden').length;
    if($timeslot3 == 1 && $timeslot4 == 0){
      $('td.slot[data-timeslot="4"][data-weekslot="'+j+'"] [data-tid="5"]').removeClass('hidden').addClass('nohidden');
      $('.testListBtn2[data-timeslot="4"][data-weekslot="'+j+'"][data-tid="5"]').addClass('btn-primary').removeClass('btn-default');
    }
    jungbok();
  }
}

// 시간표대로 수강료 계산하기
var interPrice = <?=json_encode($interPrice);?>;
$('#price_cal').click(function(){
  if(!$('#timetable').find('.jungbok').length){
    $('#priceTable thead').empty();
    $('#priceTable tbody').empty();
    var totalPrice = 0;
    var eachTestInfo = new Object(); // test_id 별로 통계를 구하기 위한 obj 생성
    for(i=0; i<5; i++){
      for(j=peri.start_week; j<parseInt(peri.start_week)+parseInt(peri.class_week); j++){
        var $slot = $('tr.slotRow[data-timeslot="'+(i+1)+'"] td.slot[data-timeslot="'+(i+1)+'"][data-weekslot="'+j+'"]');
        var tia = $slot.children('.nohidden').attr('data-tid');
          $.each(interPrice, function(index, inter){
            if(inter.test_id == 2 || inter.test_id == 3 || inter.test_id == 4){
              if(tia == inter.test_id){
                // test_id 별 object로 계산
                if(!eachTestInfo[inter.test_id]) eachTestInfo[inter.test_id] = {};
                if(!eachTestInfo[inter.test_id]["totalPrice"]) eachTestInfo[inter.test_id]["totalPrice"] = 0;
                if(!eachTestInfo[inter.test_id]["count"]) eachTestInfo[inter.test_id]["count"] = 0;
                eachTestInfo[inter.test_id]["totalPrice"] += parseInt(inter.inter_price) / 2;
                eachTestInfo[inter.test_id]["count"] += 1 / 2;
                eachTestInfo[inter.test_id]["test_subject"] = inter.test_subject;
                eachTestInfo[inter.test_id]["test_sort"] = inter.test_sort;
                // 총합 계산
                totalPrice += parseInt(inter.inter_price) / 2;
              }
            } else {
              if(tia == inter.test_id){
                if(!eachTestInfo[inter.test_id]) eachTestInfo[inter.test_id] = {};
                if(!eachTestInfo[inter.test_id]["totalPrice"]) eachTestInfo[inter.test_id]["totalPrice"] = 0;
                if(!eachTestInfo[inter.test_id]["count"]) eachTestInfo[inter.test_id]["count"] = 0;
                eachTestInfo[inter.test_id]["totalPrice"] += parseInt(inter.inter_price);
                eachTestInfo[inter.test_id]["count"] += 1;
                eachTestInfo[inter.test_id]["test_subject"] = inter.test_subject;
                eachTestInfo[inter.test_id]["test_sort"] = inter.test_sort;
                totalPrice += parseInt(inter.inter_price);
              }
            }
          });
      }
    }
    var testStr = '<tr>'; // thead에 들어갈 string
    var priceStr = '<tr>'; // tbody에 들어갈 string

    $.each(eachTestInfo, function(index, testInfo){
      console.log(testInfo);
      var testSort = '';
      if(testInfo.test_sort == 'SAT2' || testInfo.test_sort == 'AP'){
        testSort = testInfo.test_sort
      }
      testStr += '<th>'+testSort+'&nbsp;&nbsp;'+testInfo.test_subject+'('+testInfo.count+'주)</th>';
      priceStr += '<td>'+number_format(testInfo.totalPrice)+'</td>';
    })
    testStr += '<th>합계</th></tr>';
    priceStr += '<td class="ref">'+number_format(totalPrice)+'</td></tr>';
    $('#priceTable thead').append(testStr);
    $('#priceTable tbody').append(priceStr);
  } else {
    alert('중복수강되어 수강료 계산을 할 수가 없습니다');
  }
  if(parseInt(peri.class_week) <= 6){

    $('.allpassPrice').append('(500만원)');
    if(totalPrice > 5000000){
      $('.jarang').removeClass('hidden');
      $('.jarang1').delay(2000).fadeIn(1000);
      $('.jarang2').delay(3000).fadeIn(1000);
    }
  } else {
    $('.allpassPrice').append('(600만원)');
    if(totalPrice > 6000000){
      $('.jarang').removeClass('hidden');
      $('.jarang1').delay(2000).fadeIn(1000);
      $('.jarang2').delay(3000).fadeIn(1000);
    }
  }
})

// 과목 선택시 시간표에 보이게 안보이게
function toggleNoIsHidden($target){
  if($target.is('.hidden')){
    $target.addClass('nohidden').toggleClass('hidden');
  } else if($target.is('.nohidden')){
    $target.removeClass('nohidden').toggleClass('hidden');
  }
}


// 숫자 형식 변형
function number_format(data){
 var tmp = '';
 var number = '';
 var cutlen = 3;
 var comma = ',';
 var i;
 var data = String(data);
 len = data.length;
 mod = (len % cutlen);
 k = cutlen - mod;
 for (i=0; i<data.length; i++)
 {
     number = number + data.charAt(i);
     if (i < data.length - 1)
     {
         k++;
         if ((k % cutlen) == 0)
         {
             number = number + comma;
             k = 0;
         }
     }
 }
 return number;
}
</script>
