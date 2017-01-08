<?php
  require("view/header.php");

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

 ?>

<style media="screen">
  #qwrap{width:1120px; height:845px; margin:0 auto; background:url('res/img/index_bg.jpg'); no-repeat center top;}
  #touchSlider { width:1120px; height:912px; margin:0 auto; position:absolute; overflow:hidden; }
  #touchSlider ul { width:99999px; height:912px; position:absolute; top:0; left:0; overflow:hidden; }
  #touchSlider ul li { float:left; width:1120px; height:912px; font-size:14px; color:#fff; }
  #btn_next{width: 200px; height:74px; display: block; position: absolute; left: 890px; top: 740px; background:url(res/img/btn_next.png) no-repeat; background-size:100%}
  #btn_next:hover{background:url(res/img/btn_next_h.png) no-repeat; background-size:100%}
  #btn_prev{width: 200px; height:74px; display: block; position: absolute; left: 30px; top: 740px; background:url(res/img/btn_prev.png) no-repeat; background-size:100%}
  #btn_prev:hover{background:url(res/img/btn_prev_h.png) no-repeat; background-size:100%}

  .q_g{position: relative; left: 200px; top: 50px;}

  .q1 .q{position: relative; left: 200px; top: 50px;}
  label{display: none;}
  .gpa_wrap {width: 1100px; height: 118px; position: relative; left: -30px; top: 120px; background:url(res/img/nq1_a.png) no-repeat; background-size:100%}
  .t_option {width:110px; height: 50px;}
  .t_option:hover{background:url(res/img/nq1_a1_h.png) no-repeat; background-size:100%}

  .t1{position: relative; left: 102px; top: 30px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}
  .t2{position: relative; left: 299px; top: -20px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}
  .t3{position: relative; left: 496px; top: -70px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}
  .t4{position: relative; left: 693px; top: -120px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}
  .t5{position: relative; left: 890px; top: -170px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}

  .t-checked{background:url(res/img/nq1_a1_h.png) no-repeat; background-size:100%}

  .q2 .q{position: relative; left: -20px; top: 50px;}

  .test_wrap{width:200px; height:200px;}
  .test_option{width:200px; height:200px;}

  .test_sat{position: relative; left: 300px; top: 150px; background:url(res/img/q2_a1.png) no-repeat; background-size:100%}
  .test_act{position: relative; left: 600px; top: -50px; background:url(res/img/q2_a2.png) no-repeat; background-size:100%}

  .test_sat:hover{background:url(res/img/q2_a1_h.png) no-repeat; background-size:100%}
  .test_act:hover{background:url(res/img/q2_a2_h.png) no-repeat; background-size:100%}
  .test_sat-checked{background:url(res/img/q2_a1_h.png) no-repeat; background-size:100%}
  .test_act-checked{background:url(res/img/q2_a2_h.png) no-repeat; background-size:100%}

  .q2 .q2-1{position:relative; left: 120px; top:50px;}
  .sat_wrap{width: 1100px; height: 118px; position: relative; left: -30px; top: 120px; background:url(res/img/q2-1_a.png) no-repeat; background-size:100%}
  .act_wrap{width: 1100px; height: 118px; position: relative; left: -30px; top: 120px; background:url(res/img/q2-2_a.png) no-repeat; background-size:100%}

  .q3 .q{position: relative; left: 50px; top: 50px;}

  .sat2_wrap{width:120px; height:120px;}
  .ap_wrap{width:120px; height:120px;}
  .test2_option{width:120px; height:120px;}

  .test2_0{position:relative; left: 50px; top: 200px; background:url(res/img/q3_a0.png) no-repeat; background-size:100%}
  .test2_1{position:relative; left: 250px; top: -30px; background:url(res/img/q3_a1.png) no-repeat; background-size:100%}
  .test2_2{position:relative; left: 450px; top: -80px; background:url(res/img/q3_a2.png) no-repeat; background-size:100%}
  .test2_3{position:relative; left: 650px; top: -300px; background:url(res/img/q3_a3.png) no-repeat; background-size:100%}
  .test2_4{position:relative; left: 850px; top: -280px; background:url(res/img/q3_a4.png) no-repeat; background-size:100%}

  .test2_0:hover{background:url(res/img/q3_a0_h.png) no-repeat; background-size:100%}
  .test2_1:hover{background:url(res/img/q3_a1_h.png) no-repeat; background-size:100%}
  .test2_2:hover{background:url(res/img/q3_a2_h.png) no-repeat; background-size:100%}
  .test2_3:hover{background:url(res/img/q3_a3_h.png) no-repeat; background-size:100%}
  .test2_4:hover{background:url(res/img/q3_a4_h.png) no-repeat; background-size:100%}

  .test2_0.t2-checked{background:url(res/img/q3_a0_h.png) no-repeat; background-size:100%}
  .test2_1.t2-checked{background:url(res/img/q3_a1_h.png) no-repeat; background-size:100%}
  .test2_2.t2-checked{background:url(res/img/q3_a2_h.png) no-repeat; background-size:100%}
  .test2_3.t2-checked{background:url(res/img/q3_a3_h.png) no-repeat; background-size:100%}
  .test2_4.t2-checked{background:url(res/img/q3_a4_h.png) no-repeat; background-size:100%}

  .q3 .q3-1{position:relative; left:120px; top:50px;}
  .test_list{position:relative;}
  .test_score{position:relative; left:300px; top:-57px;}

  #sat2_score_input{position:relative; left:250px; top:52px; width: 600px; height:57px;}
  .temp{height:70px;}

  .q4 .q{position: relative; left: 80px; top: 50px;}
  .q4 .q4-1{position:relative; left:140px; top:50px;}

  #ap_score_input{position:relative; left:250px; top:52px; width: 600px; height:57px;}

  .talkbubble{
    border : none;
    width: 220px;
    height: 57px;
    background: url(res/img/q3_list.png) no-repeat;
    background-size:100%;
    color: #C00000;
    font-size: 1.5em;
    font-weight: bold;
    text-align: center;
  }

  .no-score{
    position: relative;
    top: 100px;
    color: #C00000;
    font-size: 2.0em;
    font-weight: bold;
  }
</style>

<div class="container">
  <form action="add_process/stud_score_add.php" method="post" onsubmit="return makeArray(this);" name='mainForm'>
    <div id="qwrap">
      <div id="touchSlider">
        <ul class="image_container">
          <li class="q1">
            <p class="q_g"><img src="res/img/q1_g.png" alt=""></p>
            <p class="q"><img src="res/img/q1.png" /></p>
            <div id="gpa_uw_input" class="form-group test_object">
              <input type="hidden" name="test_id" value="30">
              <input type="text" class="form-control hidden" id="gpa_uw_score" name="test_score">
              <div class="gpa_wrap">
                <div class="t_option t1 clsChk1" data-gpa="3.8"></div>
                <div class="t_option t2 clsChk1" data-gpa="3.6"></div>
                <div class="t_option t3 clsChk1" data-gpa="3.4"></div>
                <div class="t_option t4 clsChk1" data-gpa="3.2"></div>
                <div class="t_option t5 clsChk1" data-gpa="3.0"></div>
              </div>
            </div>
          </li>
          <li class="q2">
            <p class="q_g"><img src="res/img/q2_g.png"></p>
            <p class="q"><img src="res/img/q2.png"></p>
            <div class="test_wrap">
              <div class="test_option test_sat clsChk2" id="sat_btn"></div>
              <div class="test_option test_act clsChk2" id="act_btn"></div>
            </div>
          </li>
          <li class="q2">
            <p class="q_g"><img src="res/img/q2_g.png"></p>
            <div id="sat_score_input" class="form-group hidden">
              <p class="q2-1"><img src="res/img/q2-1.png"></p>
              <input type="hidden" name="test_id" value="1">
              <input type="text" class="form-control hidden" id="sat_score" name="test_score">
              <div class="sat_wrap">
                <div class="t_option t1 clsChk3" data-sat="1500"></div>
                <div class="t_option t2 clsChk3" data-sat="1400"></div>
                <div class="t_option t3 clsChk3" data-sat="1300"></div>
                <div class="t_option t4 clsChk3" data-sat="1200"></div>
                <div class="t_option t5 clsChk3" data-sat="1100"></div>
              </div>
            </div>
            <div id="act_score_input" class="form-group hidden">
              <p class="q2-1"><img src="res/img/q2-2.png"></p>
              <input type="hidden" name="test_id" value="2">
              <input type="text" class="form-control hidden" id="act_score" name="test_score">
              <div class="act_wrap">
                <div class="t_option t1 clsChk3" data-act="33"></div>
                <div class="t_option t2 clsChk3" data-act="30"></div>
                <div class="t_option t3 clsChk3" data-act="28"></div>
                <div class="t_option t4 clsChk3" data-act="26"></div>
                <div class="t_option t5 clsChk3" data-act="24"></div>
              </div>
            </div>
          </li>
          <li class="q3">
            <p class="q_g"><img src="res/img/q3_g.png"></p>
            <p class="q"><img src="res/img/q3.png"></p>
            <div class="sat2_wrap">
              <div class="test2_option test2_0 clsChk4" data-no="0"></div>
              <div class="test2_option test2_1 clsChk4" data-no="1"></div>
              <div class="test2_option test2_2 clsChk4" data-no="2"></div>
              <div class="test2_option test2_3 clsChk4" data-no="3"></div>
              <div class="test2_option test2_4 clsChk4" data-no="4"></div>
            </div>
          </li>
          <li class="q3">
            <p class="q_g"><img src="res/img/q3_g.png"></p>
            <p class="q3-1"><img src="res/img/q3-1.png"></p>
            <!-- SAT2 input 창 들어갈 div -->
            <div id="sat2_score_input"></div>
            <!-- SAT2 input 창 skeleton -->
            <div class="form-group sat2_skeleton hidden temp">
              <select name="test_id" class="talkbubble">
                <option value=''>&nbsp;과목 선택</option>
                <?php
                  foreach($sat2List as $sl){
                    echo '<option value="'.$sl['test_id'].'">&nbsp;'.$sl['test_subject'].'</option>';
                  }
                ?>
              </select>
              <input type="text" class="form-control talkbubble test_score clsChk5" data-checked="true" name="test_score" placeholder="SAT2 점수 입력">
            </div>
          </li>
          <li class="q4">
            <p class="q_g"><img src="res/img/q4_g.png"></p>
            <p class="q"><img src="res/img/q4.png"></p>
            <input type="text" class="form-control hidden" id="ap_no">
            <div class="ap_wrap">
              <div class="test2_option test2_0 clsChk6" data-no="0"></div>
              <div class="test2_option test2_1 clsChk6" data-no="1"></div>
              <div class="test2_option test2_2 clsChk6" data-no="2"></div>
              <div class="test2_option test2_3 clsChk6" data-no="3"></div>
              <div class="test2_option test2_4 clsChk6" data-no="4"></div>
            </div>
          </li>
          <li class="q4">
            <p class="q_g"><img src="res/img/q4_g.png"></p>
            <p class="q4-1"><img src="res/img/q4-1.png"></p>
            <!-- AP input 창 들어갈 div -->
            <div id="ap_score_input"></div>
            <!-- AP input 창 skeleton -->
            <div class="form-group ap_skeleton hidden temp">
              <select name="test_id" class="talkbubble">
                <option value=''>&nbsp;과목 선택</option>
                <?php
                  foreach($apList as $al){
                    echo '<option value="'.$al['test_id'].'">&nbsp;'.$al['test_subject'].'</option>';
                  }
                ?>
              </select>
              <input type="text" class="form-control talkbubble test_score clsChk7" data-checked="true" name="test_score" placeholder="AP 점수 입력">
            </div>
          </li>
        </ul>
        <!--<input type='submit' id='btn_submit' class='hidden'/>-->
        <div id="btn_next"></div>
        <div id="btn_prev"></div>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
  var $gpa_uw_score = $('#gpa_uw_score');
  var $gpa_wrap = $('.gpa_wrap');
  var $selectedItem = null;

  // GPA 선택
  $gpa_wrap.on('click', '.t_option', function(){
    setSelectItem($(this), $gpa_uw_score, 't-checked', 'gpa');
  })
  // TEST 선택
  testSelect();

  // SAT 점수 선택
  var $sat_score = $('#sat_score');
  var $sat_wrap = $('.sat_wrap');
  $sat_wrap.on('click', '.t_option', function(){
    setSelectItem($(this), $sat_score, 't-checked', 'sat');
  })

  // ACT 점수 선택
  var $act_score = $('#act_score');
  var $act_wrap = $('.act_wrap');
  $act_wrap.on('click', '.t_option', function(){
    setSelectItem($(this), $act_score, 't-checked', 'act');
  })

  // SAT2 개수 선택 시 처리
  var $sat2_no = $('#sat2_no');
  var $sat2_wrap = $('.sat2_wrap');
  var $sat2_score_input = $('#sat2_score_input');
  $sat2_wrap.on('click', '.test2_option', function(){
    setSelectItem($(this), $sat2_no, 't2-checked', 'no');
    $sat2_score_input.empty();
    if($selectedItem.data('no') == 0){
      $sat2_score_input.append('<div class="text-center no-score">가지고 있는 SAT2 점수가 없습니다.</br>Next 버튼을 클릭하세요</div>');
    } else {
      for(i=0; i<$selectedItem.data('no'); i++){
        $sat2_score_input.append($('.sat2_skeleton:first').clone(true).removeClass('hidden').removeClass('sat2_skeleton').addClass('test_object').attr('data-sat2-division', 'sat2_'+i));
      }
    }

  })

  var $ap_no = $('#ap_no');
  var $ap_wrap = $('.ap_wrap');
  var $ap_score_input = $('#ap_score_input');
  $ap_wrap.on('click', '.test2_option', function(){
    setSelectItem($(this), $ap_no, 't2-checked', 'no');
    $ap_score_input.empty();
    if($selectedItem.data('no') == 0){
      $ap_score_input.append('<div class="text-center no-score">가지고 있는 AP 점수가 없습니다.</br>Next 버튼을 클릭하세요</div>');
    } else {
      for(i=0; i<$selectedItem.data('no'); i++){
        $ap_score_input.append($('.ap_skeleton:first').clone(true).removeClass('hidden').removeClass('ap_skeleton').addClass('test_object').attr('data-ap-division', 'ap_'+i));
      }
    }
  })

  // 점수 선택 시 처리
  function setSelectItem($item, $valueSelector, className, dataName){
    // 기존 선택 아이템이 있는 경우 선택 효과 제거
    if($selectedItem!=null) {$selectedItem.removeClass(className);}
    var _data = null;

    //신규 선택 아이템 처리
    $selectedItem = $item;
    $selectedItem.addClass(className);
    $selectedItem.attr('data-checked', true);
    _data = $selectedItem.data(dataName);
    $valueSelector.attr('value', _data);
  }


// 슬라이더를 위한것

  var _slideIndex = 0;
  function slide(){
      $('.image_container').stop().animate( { left: -1120 * _slideIndex}, 1000 );
  }

  $('#btn_next').click(function(e){

    var tFlag = false;
    var tAlert = "";
    console.log(_slideIndex);

/*
    $('.gpa_wrap').each(function(){
      if($(this).children('.t-checked').length == 0){
        tFlag = true;
        tIndex = 0;
        return
      }
    })
    $('.test_wrap').each(function(){
      if($(this).children('.test_sat-checked').length == 0 && $('.test_wrap').children('.test_act-checked').length == 0){
        tFlag = true;
        tIndex = 1;
        return
      }
    })
*/
/*
    if($('.gpa_wrap').children('.t-checked').length == 0){
      alert('GPA를 선택해주세요');
      return;
    } else if ($('.test_wrap').children('.test_sat-checked').length == 0 && $('.test_wrap').children('.test_act-checked').length == 0){
      alert('시험을 선택해주세요');
      return;
    }
*/


      $(".clsChk" + (_slideIndex + 1)).each(function() {
          if ($(this).attr("data-checked")) {
              tFlag = true;
          }
      });

      if (!tFlag) {
          switch(_slideIndex) {
              case 0:
                  tAlert = "GPA를 선택해 주세요.";
                  break;
              case 1:
                  tAlert = "시험종류를 선택해 주세요.";
                  break;
              case 2:
                  tAlert = "시험점수를 선택해 주세요.";
                  break;
              case 3:
                  tAlert = "가지고 있는 SAT2 성적의 개수를 선택해 주세요.";
                  break;
              case 5:
                  tAlert = "가지고 있는 AP 성적의 개수를 선택해 주세요.";
                  break;
          }

          alert(tAlert);
          return;
      }

      if( _slideIndex == $('.image_container li').length-1 ) {
          makeArray($(this).parents('form'));
          //$('#btn_submit').click();
          return false;
      }

      _slideIndex++;
      slide();
      return false;
  });

  $('#btn_prev').click(function(e){
    _slideIndex--;
    slide();
    return false;
  })
// 슬라이더를 위한것


  function makeArray(form){
    var _posData = parseMacro($('.test_object',form),'[name]');
    $.post('add_process/stud_score_add.php', {data:_posData}, function(){
      location.href = 'period.php';
    })
    return false;
  }

  // 기능 구분을 위해 함수화
  function testSelect(){
    $('#sat_btn').click(function(){
      $(this).addClass('test_sat-checked').attr('data-checked', true);
      $('#sat_score_input').removeClass('hidden').addClass('test_object');
      $('#act_btn').removeClass('test_act-checked');
      $('#act_score_input').addClass('hidden').removeClass('test_object');
    });
    $('#act_btn').click(function(){
      $(this).addClass('test_act-checked').attr('data-checked', true);
      $('#act_score_input').removeClass('hidden').addClass('test_object');
      $('#sat_btn').removeClass('test_sat-checked');
      $('#sat_score_input').addClass('hidden').removeClass('test_object');
    });
  }

</script>
 </body>
</html>
