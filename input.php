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
  #btn_next{
    display: block;
    position: absolute;
    left: 890px;
    top: 740px;
  }
  .q1 .q_g{position: relative; left: 200px; top: 50px;}
  .q1 .q{position: relative; left: 200px; top: 50px;}
  label{display: none;}
  .gpa_wrap {width: 1100px; height: 118px;}
  .gpa_option {width:110px; height: 50px;}

  .gpa_uw1{position: absolute; left: 102px; top: 30px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}
  .gpa_uw2{position: absolute; left: 299px; top: 30px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}
  .gpa_uw3{position: absolute; left: 496px; top: 30px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}
  .gpa_uw4{position: absolute; left: 693px; top: 30px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}
  .gpa_uw5{position: absolute; left: 890px; top: 30px; background:url(res/img/nq1_a1.png) no-repeat; background-size:100%}

  .gpa_uw1:hover{background:url(res/img/nq1_a1_h.png) no-repeat; background-size:100%}
  .gpa_uw2:hover{background:url(res/img/nq1_a1_h.png) no-repeat; background-size:100%}
  .gpa_uw3:hover{background:url(res/img/nq1_a1_h.png) no-repeat; background-size:100%}
  .gpa_uw4:hover{background:url(res/img/nq1_a1_h.png) no-repeat; background-size:100%}
  .gpa_uw5:hover{background:url(res/img/nq1_a1_h.png) no-repeat; background-size:100%}

  .gpa_uw0{position: absolute; left: 11px; top: 430px; background:url(res/img/nq1_a.png) no-repeat; background-size:100%}

  .q2 .q_g{position: relative; left: 200px; top: 50px;}
  .q2 .q{position: relative; left: -20px; top: 50px;}

  .test_wrap{width:200px; height:200px;}
  .test_option{width:200px; height:200px;}

  .test_sat{position: relative; left: 100px; background:url(res/img/q2_a1.png) no-repeat; background-size:100%}
  .test_act{position: relative; left: 300px; background:url(res/img/q2_a2.png) no-repeat; background-size:100%}


</style>
<script>

</script>
<div class="container">
  <form action="add_process/stud_score_add.php" method="post" onsubmit="return makeArray(this);">
    <div id="qwrap">
      <div id="touchSlider">
        <ul class="image_container">
          <li class="q1">
            <p class="q_g"><img src="res/img/q1_g.png" alt=""></p>
            <p class="q"><img src="res/img/q1.png" /></p>
            <div id="gpa_uw_input" class="form-group test_object">
              <input type="hidden" name="test_id" value="30">
              <input type="text" class="form-control hidden" id="gpa_uw" name="test_score" placeholder="GPA를 입력하세요">
              <div class="gpa_wrap radio_wrap gpa_uw0" id="gpa_uw0">
                <div class="gpa_option gpa_uw1" id="gpa_uw1"></div>
                <div class="gpa_option gpa_uw2" id="gpa_uw2"></div>
                <div class="gpa_option gpa_uw3" id="gpa_uw3"></div>
                <div class="gpa_option gpa_uw4" id="gpa_uw4"></div>
                <div class="gpa_option gpa_uw5" id="gpa_uw5"></div>
              </div>
            </div>
          </li>
          <li class="q2">
            <p class="q_g"><img src="res/img/q2_g.png"></p>
            <p class="q"><img src="res/img/q2.png"></p>
            <div class="test_wrap">
              <div class="test_option test_sat" id="sat_btn"></div>
              <div class="test_option test_act" id="act_btn"></div>
            </div>
          </li>
          <li class="q3">
            <div id="sat_score_input" class="form-group hidden">
              <label for="sat_score">SAT</label>
              <input type="hidden" name="test_id" value="1">
              <input type="text" class="form-control" id="sat_score" name="test_score" placeholder="SAT점수를 입력하세요">
            </div>
            <div id="act_score_input" class="form-group hidden">
              <label for="act_score">ACT</label>
              <input type="hidden" name="test_id" value="2">
              <input type="text" class="form-control" id="act_score" name="test_score" placeholder="ACT점수를 입력하세요">
            </div>
          </li>
          <li class="q4">
            <div id="sat2_no_input" class="form-group">
              <label for="sat2_no">개수</label>
              <input type="text" class="form-control" id="sat2_no" name="sat2_no" placeholder="SAT2 개수를 입력하세요">
            </div>
          </li>
          <li class="q5">
            <!-- SAT2 input 창 들어갈 div -->
            <div id="sat2_score_input"></div>
            <!-- SAT2 input 창 skeleton -->
            <div class="form-group hidden sat2_skeleton">
              <select name="test_id">
                <option value=''>과목을 선택하세요</option>
                <?php
                  foreach($sat2List as $sl){
                    echo '<option value="'.$sl['test_id'].'">'.$sl['test_subject'].'</option>';
                  }
                ?>
              </select>
              <input type="text" class="form-control" name="test_score" placeholder="SAT2 점수를 입력하세요">
            </div>
          </li>
          <li class="q6">
            <div id="ap_no_input" class="form-group">
              <label for="ap_no">개수</label>
              <input type="text" class="form-control" id="ap_no" name="ap_no" placeholder="AP 개수를 입력하세요">
            </div>
          </li>
          <li class="q7">
            <!-- AP input 창 들어갈 div -->
            <div id="ap_score_input"></div>
            <!-- AP input 창 skeleton -->
            <div class="form-group hidden ap_subject ap_skeleton">
              <select name="test_id">
                <option>과목을 선택하세요</option>
                <?php
                  foreach($apList as $al){
                    echo '<option value="'.$al['test_id'].'">'.$al['test_subject'].'</option>';
                  }
                ?>
              </select>
              <input type="text" class="form-control col-xs-8" name="test_score" placeholder="AP 점수를 입력하세요">
            </div>
            <input type="submit" id="submit_btn" name="" value="제출" class="btn btn-success">
          </li>
        </ul>
        <div id="btn_next"><img src="res/img/btn_next.png"></div>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
  var $gpa_uw = $('#gpa_uw');
  for(i=0; i<6; i++){
    $('.gpa_uw'+(i+1)).click(function(){
      // checked 클래스 부여
      $(this).toggleClass('gpa_uw-checked');
      // 선택 값에 따라 설정
      var _gpa_uw = 0;
      switch($(this).index()){
        case 0:
          _gpa_uw = 3.8;
          break;
        case 1:
          _gpa_uw = 3.6;
          break;
        case 2:
          _gpa_uw = 3.4;
          break;
        case 3:
          _gpa_uw = 3.2;
          break;
        case 4:
          _gpa_uw = 3.0;
          break;
      }
      radioSet('.gpa_uw-checked', $gpa_uw, _gpa_uw, $(this), '자신의 점수 하나만 선택하세요.');
    })
  }

function radioSet(child, $selector, value, $click, msg){
  if($('.radio_wrap').children(child).length>1){
    alert(msg);
    console.log($click);
    $click.removeClass(child.replace('.',''));
    console.log($click);
  } else if($('.radio_wrap').children(child).length=1){
    $selector.empty().append(value);
  }
}

// 슬라이더를 위한것
  var _slideIndex = 0;
  function slide(){
      $('.image_container').stop().animate( { left: -1120 * _slideIndex}, 1000 );
  }

  $('#btn_next img').hover(function(){
    $(this).attr('src', 'res/img/btn_next_h.png');
  }, function(){
    $(this).attr('src', 'res/img/btn_next.png');
  })
  $('#btn_next').click(function(e){
    /*
      var tFlag = false;
      var tAlert = "";

      $(".clsChk" + (_slideIndex + 1)).each(function() {
          if ($(this).is(":checked")) {
              tFlag = true;
          }
      });

      if (!tFlag) {
          switch(_slideIndex) {
              case 0:
                  tAlert = "연령을 선택해 주세요.";
                  break;
              case 1:
                  tAlert = "신장을 선택해 주세요.";
                  break;
              case 2:
                  tAlert = "학력을 선택해 주세요.";
                  break;
              case 3:
                  tAlert = "직업을 선택해 주세요.";
                  break;
          }

          alert(tAlert);
          return;
      }
*/
      if( _slideIndex == $('.image_container li').length-1 ) {
          //location.replace("ending_1.asp");
          IfSend();
          return false;
      }

      _slideIndex++;
      slide();
      return false;
  });
// 슬라이더를 위한것


  function makeArray(form){
    var _posData = parseMacro($('.test_object',form),'[name]');
    $.post('add_process/stud_score_add.php', {data:_posData}, function(){
    })
    return false;
  }

  $('#submit_btn').click(function(){
    $(location).attr('href', 'http://localhost/consulting/period.php');
  });

  $('#sat_btn').click(function(){
    $('#sat_score_input').removeClass('hidden').addClass('test_object');
  });
  $('#act_btn').click(function(){
    $('#act_score_input').removeClass('hidden').addClass('test_object');
  });

  $('#sat2_no').change(function(){
    $('#sat2_score_input').empty();
    for(i=0; i<$('#sat2_no').val(); i++){
      $('#sat2_score_input').append($('.sat2_skeleton:first').clone(true).removeClass('hidden').removeClass('sat2_skeleton').addClass('test_object').attr('data-sat2-division', 'sat2_'+i));
    }
    /*
    for(i=0; i<$('#sat2_no').val(); i++){
      $('[data-sat2-division="sat2_'+i+'"] .sat2_change').change(function(){
        alert('성공');
        $('[data-sat2-division="sat2_'+i+'"] .sat2_subject').val('1');
      })
    }
    */
  });

  $('#ap_no').change(function(){
    $('#ap_score_input').empty();
    for(i=0; i<$('#ap_no').val(); i++){
      $('#ap_score_input').append($('.ap_skeleton:first').clone(true).removeClass('hidden').removeClass('ap_skeleton').addClass('test_object').attr('data-ap-division', 'ap_'+i));
    }
  });

</script>
 </body>
</html>
