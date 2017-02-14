<?php

  require("view/header.php");
  $studScore = $_SESSION['stud_score'];
  $major = $_SESSION['major'];
  // $wish = $_SESSION['wish'];

  // 대학 정보 가져오기
  $sql = "SELECT * FROM university WHERE major_id = '".$major."'";
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

  .arrow_box {
    width:40px;
    height:800px;
    position: absolute;
    top: 7%;
    left: 18%;
    background: #f6f6f6;
    border: 4px solid #eaeaea;
    z-index:-1;
  }
  .arrow_box:after, .arrow_box:before {
    bottom: 100%;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }
  .arrow_box:after {
    border-color: rgba(204, 0, 0, 0);
    border-bottom-color: #f6f6f6;
    border-width: 30px;
    margin-left: -30px;
  }
  .arrow_box:before {
    border-color: rgba(234, 234, 234, 0);
    border-bottom-color: #eaeaea;
    border-width: 34px;
    margin-left: -34px;
  }

  .arrow_box2 {
    width:225px;
    height:220px;
    background: #c00000;
    border: 2px solid #800000;
  }
  .arrow_box2:after, .arrow_box2:before {
    right: 100%;
    top: 30%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
  }
  .arrow_box2:after {
    border-color: rgba(192, 0, 0, 0);
    border-right-color: #c00000;
    border-width: 30px;
    margin-top: -30px;
  }
  .arrow_box2:before {
    border-color: rgba(128, 0, 0, 0);
    border-right-color: #800000;
    border-width: 33px;
    margin-top: -33px;
  }
  .avg{
    color:#FFF;
    font-size:1.1em;
    font-weight:bold;
    position:relative;
    padding-top:70px;
  }
  p.uni_name{
    color:#C00;
    font-size:1.1em;
    font-weight:bold;
  }
  #arrow_up{width:22%; height:100px;}
  #sat_up{width:100px; height:100px; position:relative; left:20%; top:40%; background:url(res/img/arrow_l.png) no-repeat;}
  #sat_score{position:relative; left:0%; top:-30%; color:#C00; font-size:2.0em; font-weight:bold; text-align:center;}
  #act_up{width:100px; height:100px; position:relative; left:70%; top:-110%; background:url(res/img/arrow_r.png) no-repeat;}
  #act_score{position:relative; left:23%; top:-180%; color:#C00; font-size:2.0em; font-weight:bold; text-align:center;}

  #wagon{position:absolute; width:100px; height:100px; background:url(res/img/wagon.png) no-repeat; top:45%;}
  #satPlus{position:absolute; width:60px; height:30px; top:45%; left:10%; background:#C00; color:white; text-align:center;}
</style>

<div class="container-fluid">
      <div class="arrow_box"></div>
      <div class="row" style="padding-top:50px;">
        <h1>Dream School&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="button" id="btn_dream" class="btn btn-default btn-sm">상세정보보기</button></h1>
        <div class="dream_name col-xs-2" style="display:none;"></div>
        <div class="dream_avg arrow_box2 col-xs-2 col-xs-offset-1" style="display:none;">
          <div class="row text-center avg">
            <div class="col-xs-6">Mean GPA</div>
            <div class="col-xs-6" id="dream_avg_gpa_uw"></div>
            <div class="col-xs-6">Mean SAT</div>
            <div class="col-xs-6" id="dream_avg_sat"></div>
            <div class="col-xs-6">Mean ACT</div>
            <div class="col-xs-6" id="dream_avg_act"></div>
          </div>
        </div>
        <div class="dream_div col-xs-7">
          <table id="dream_uni" class="table table-hover text-center ytable" style="display:none;">
            <thead>
              <th width="3%">Rank</th>
              <th>Name</th>
              <th width="6%">gpa_uw</th>
              <th width="6%">gpa_w</th>
              <th width="6%">SAT</th>
              <th width="6%">ACT</th>
              <th width="6%">TOEFL</th>
              <th width="4%">AP</th>
              <th width="4%">SAT2</th>
              <th width="4%" class="hidden">Eng</th>
              <th width="4%" class="hidden">Math</th>
              <th width="4%" class="hidden">Science</th>
              <th width="4%" class="hidden">Foreign</th>
              <th width="4%" class="hidden">Social</th>
              <th width="4%" class="hidden">History</th>
              <th width="7%">Valunteer</th>
              <th width="5.5%">Art</th>
              <th width="8%">Leadership</th>
              <th width="5.5%">Intern</th>
              <th width="5.5%">Other</th>
            </thead>
            <tbody></tbody>
            <tfoot></tfoot>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-2">
        <div>&nbsp;</div>
        <button type="button" name="button" class="btn btn-lg btn-success" id="btn_next" style="display:none;">CLICK HERE<br>To make your Dreams<br>Come True(by 성은)&nbsp;<span class="glyphicon glyphicon-education" aria-hidden="true"></span></button>
        </div>
        <div id="arrow_up" class="col-xs-3">
          <div id="sat_up" style="display:none;"></div>
          <div id="sat_score" style="display:none;"></div>
          <div id="act_up" style="display:none;"></div>
          <div id="act_score" style="display:none;"></div>
        </div>
        <div class="col-xs-7 stud_info" style="display:none;">
          <h1>본 학생의 점수</h1>
            <table id="stud_info" class="table text-center ytable">
            <thead></thead>
            <tbody></tbody>
            <tfoot></tfoot>
          </table>
        </div>
      </div>

      <div class="row">
        <h1 style="margin-top:0px;">Match School&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="button" id="btn_match" class="btn btn-default btn-sm">상세정보보기</button></h1>
        <div class="match_name col-xs-2" style="display:none;"></div>
        <div class="match_avg arrow_box2 col-xs-2 col-xs-offset-1" style="display:none;">
          <div class="row text-center avg">
            <div class="col-xs-6">Mean GPA</div>
            <div class="col-xs-6" id="match_avg_gpa_uw"></div>
            <div class="col-xs-6">Mean SAT</div>
            <div class="col-xs-6" id="match_avg_sat"></div>
            <div class="col-xs-6">Mean ACT</div>
            <div class="col-xs-6" id="match_avg_act"></div>
          </div>
        </div>
        <div class="match_div col-xs-7">
          <table id="match_uni" class="table table-hover text-center ytable" style="display:none;">
            <thead>
              <th width="3%">Rank</th>
              <th>Name</th>
              <th width="6%">gpa_uw</th>
              <th width="6%">gpa_w</th>
              <th width="6%">SAT</th>
              <th width="6%">ACT</th>
              <th width="6%">TOEFL</th>
              <th width="4%">AP</th>
              <th width="4%">SAT2</th>
              <th width="4%" class="hidden">Eng</th>
              <th width="4%" class="hidden">Math</th>
              <th width="4%" class="hidden">Science</th>
              <th width="4%" class="hidden">Foreign</th>
              <th width="4%" class="hidden">Social</th>
              <th width="4%" class="hidden">History</th>
              <th width="7%">Valunteer</th>
              <th width="5.5%">Art</th>
              <th width="8%">Leadership</th>
              <th width="5.5%">Intern</th>
              <th width="5.5%">Other</th>
            </thead>
            <tbody></tbody>
            <tfoot></tfoot>
          </table>
        </div>
      </div>



      <h1 class="hidden">Wish School</h1>
      <table id="wish_uni" class="table table-hover text-center hidden ytable width800">
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


      <!-- 대학리스트 들어갈 스켈레톤 -->
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
              <td class="hidden"><span name="uni_2_eng"></span></td>
              <td class="hidden"><span name="uni_2_math"></span></td>
              <td class="hidden"><span name="uni_2_science"></span></td>
              <td class="hidden"><span name="uni_2_foreign"></span></td>
              <td class="hidden"><span name="uni_2_social"></span></td>
              <td class="hidden"><span name="uni_2_history"></span></td>
              <td><span name="uni_3_valunteer"></span></td>
              <td><span name="uni_3_art"></span></td>
              <td><span name="uni_3_leadership"></span></td>
              <td><span name="uni_3_intern"></span></td>
              <td><span name="uni_3_other"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="wagon" style="display:none;"></div>
      <div id="satPlus" style="display:none;">100</div>
</div>
<script>
  // $('#wagon').animate({left:600}, 10000);
  // $('#satPlus').fadeIn(4000).animate({left:630}, 8000);

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
      studConv += (score.test_score-50)*500/1600;
    } else if (score.test_subject == 'ACT'){
      studConv += (score.test_score-2.0)*500/36;
    } else if (score.test_subject == 'gpa_uw'){
      studConv += (score.test_score-0.1)*500/4.0;
    }
  })

  var uni = <?=json_encode($university);?>;
  var mus = $(".match_uni_skeleton");

  // 학교와 학생 conv 비교
  var conv = 0;
  var dif = new Array();
  $.each(uni, function(index, score){
    conv = ((score.uni_sat*500/1600) + (score.uni_act*500/36))/2 + (score.uni_gpa_uw*500/4.0);
    if(conv-studConv > 0){
      console.log(conv-studConv);
    }

    // 학교가 더 높아야함
    if(conv-studConv > 0){
      diff = {'idx':index, 'dix':conv-studConv, '_gpa_uw':score.uni_gpa_uw, '_sat':score.uni_sat, '_act':score.uni_act, '_name':score.uni_name, '_rank':score.uni_rank};
      dif.push(diff);

    }
  })
  dif.sort(function(a,b){
    return a.dix - b.dix;
  });
console.log(dif);
  // 평균도 같이 구하기
  var sum_gpa_uw = 0;
  var sum_sat = 0;
  var sum_act = 0;
  var avg_gpa_uw = 0;
  var avg_sat = 0;
  var avg_act = 0;
  var __match = '';
  var numberOfSchool = 3;
  // 학생과 가장 비슷한 3개학교
  for(i=3; i>0; i--){
    var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
    $('#match_uni').append(mashedObj);
    sum_gpa_uw += parseFloat(dif[i]._gpa_uw);
    sum_sat += parseFloat(dif[i]._sat);
    sum_act += parseFloat(dif[i]._act);
    __match += '<p class="uni_name" style="opacity:'+(i/numberOfSchool)+'">'+dif[i]._name+'</p>'
  }
  avg_gpa_uw = (sum_gpa_uw / numberOfSchool).toFixed(2);
  avg_sat = (sum_sat / numberOfSchool).toFixed(0);
  avg_act = (sum_act / numberOfSchool).toFixed(0);
  $("#match_avg_gpa_uw").append(avg_gpa_uw);
  $("#match_avg_sat").append(avg_sat);
  $("#match_avg_act").append(avg_act);
  $(".match_name").append(__match);

  // 학생 상태보다 20 단계 높은 학교
  // 초기화
  sum_gpa_uw = 0;
  sum_sat = 0;
  sum_act = 0;
  var avg_gpa_uw2 = 0;
  var avg_sat2 = 0;
  var avg_act2 = 0;
  var __dream = '';
  console.log(dif.length);
  if(dif.length < 21){
    for(i=dif.length-1; i>dif.length-4; i--){
      var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
      $('#dream_uni').append(mashedObj);
      sum_gpa_uw += parseFloat(dif[i]._gpa_uw);
      sum_sat += parseFloat(dif[i]._sat);
      sum_act += parseFloat(dif[i]._act);
      __dream += '<p class="uni_name" style="opacity:">'+dif[i]._name+'</p>'
      console.log(i);
    }
  } else {
    for(i=21; i>18; i--){
      var mashedObj = mashSkeleton(mus, uni[dif[i].idx], true);
      $('#dream_uni').append(mashedObj);
      sum_gpa_uw += parseFloat(dif[i]._gpa_uw);
      sum_sat += parseFloat(dif[i]._sat);
      sum_act += parseFloat(dif[i]._act);
      __dream += '<p class="uni_name" style="opacity:'+((i-17)/numberOfSchool)+'">'+dif[i]._name+'</p>'
    }
  }
  avg_gpa_uw2 = (sum_gpa_uw / numberOfSchool).toFixed(2);
  avg_sat2 = (sum_sat / numberOfSchool).toFixed(0);
  avg_act2 = (sum_act / numberOfSchool).toFixed(0);
  $("#dream_avg_gpa_uw").append(avg_gpa_uw2);
  $("#dream_avg_sat").append(avg_sat2);
  $("#dream_avg_act").append(avg_act2);
  $(".dream_name").append(__dream);

  $("#sat_score").append('SAT<br>'+(avg_sat2-avg_sat));
  $("#act_score").append('ACT<br>'+(avg_act2-avg_act));

/*  // 처음에 선택한 Wish 학교 출력
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
  */

  $('#btn_next').click(function(){
    location.href = 'student.php';
  })

  // 상세정보보기
  $('#btn_dream').click(function(){
    $('#dream_uni').fadeToggle();
  })
  $('#btn_match').click(function(){
    $('#match_uni').fadeToggle();
  })

  // 페이드인 효과
  $('.dream_name').fadeIn(1000);
  $('.match_name').fadeIn(1000);
  $('.dream_avg').fadeIn(1500);
  $('.match_avg').fadeIn(1500);
  $('.stud_info').fadeIn(1500);
  $('#sat_up').delay(1000).fadeIn(1000);
  $('#sat_score').delay(1500).fadeIn(1000);
  $('#act_up').delay(2000).fadeIn(1000);
  $('#act_score').delay(2500).fadeIn(1000);
  $('#btn_next').delay(5000).fadeIn(1000);

  $('.avg div').css('padding-top', '30');

</script>
