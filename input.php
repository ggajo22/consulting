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
  #qwrap{min-width:964px; height:845px; margin:0 auto;background:url(res/img/index_bg.jpg); no-repeat center top;}
  #touchSlider { width:1120px; height:912px; margin:0 auto; position:absolute; overflow:hidden; }
  #touchSlider ul { width:99999px; height:912px; position:absolute; top:0; left:0; overflow:hidden; }
  #touchSlider ul li { float:left; width:1120px; height:912px; font-size:14px; color:#fff; }
  #btn_next{
    display: block;
    position: absolute;
    left: 890px;
    top: 740px;
  }
  .q_g{
    position: relative;
    left: 200px;
    top: 50px;
  }
  .q{
    position: relative;
    left: 200px;
    top: 50px;
  }
  label{
    display: none;
  }
  #gpa_uw_input img{
    width : 120px;
    height : 120px;
  }
  #gpa_uw1{position: absolute; left: 130px; top: 430px;}
  #gpa_uw2{position: absolute; left: 250px; top: 310px;}
  #gpa_uw3{position: absolute; left: 370px; top: 430px;}
  #gpa_uw4{position: absolute; left: 490px; top: 550px;}
  #gpa_uw5{position: absolute; left: 610px; top: 670px;}
  #gpa_uw6{position: absolute; left: 730px; top: 550px;}
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
              <label for="gpa_uw">GPA</label>
              <input type="hidden" name="test_id" value="30">
              <input type="text" class="form-control hidden" id="gpa_uw" name="test_score" placeholder="GPA를 입력하세요">
              <div class="radioBtn" id="gpa_uw1"><img src="res/img/q1_a1.png" alt="above 3.8"></div>
              <div class="radioBtn" id="gpa_uw2"><img src="res/img/q1_a2.png" alt="above 3.8"></div>
              <div class="radioBtn" id="gpa_uw3"><img src="res/img/q1_a3.png" alt="above 3.8"></div>
              <div class="radioBtn" id="gpa_uw4"><img src="res/img/q1_a4.png" alt="above 3.8"></div>
              <div class="radioBtn" id="gpa_uw5"><img src="res/img/q1_a5.png" alt="above 3.8"></div>
              <div class="radioBtn" id="gpa_uw6"><img src="res/img/q1_a6.png" alt="above 3.8"></div>
            </div>
          </li>
          <li class="q2">
            <div class="btn-group">
              <input id="sat_btn" type="button" name="SAT" value="SAT" class="btn btn-default btn-large">
              <input id="act_btn" type="button" name="ACT" value="ACT" class="btn btn-default btn-large">
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
for(i=0; i<6; i++){
  $('#gpa_uw'+i).hover(function(){
    $('#gpa_uw'+i+' img').attr('src', 'res/img/q1_a'+i+'_h.png');
  }, function(){
    $('#gpa_uw'+i+' img').attr('src', 'res/img/q1_a'+i+'.png');
  });
}

// 슬라이더를 위한것
  var _slideIndex = 0;
  function slide(){
      $('.image_container').stop().animate( { left: -1120 * _slideIndex}, 1000 );
  }

  $('#btn_next').hover(function(){
    $('#btn_next img').attr('src', 'res/img/btn_next_h.png');
  }, function(){
    $('#btn_next img').attr('src', 'res/img/btn_next.png');
  })
  $('#btn_next').click(function(e){
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
