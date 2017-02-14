<?php
  require("view/header.php");
  // SAT2 리스트 가져오기
  $sql = "SELECT * FROM test WHERE test_sort='SAT2'";
  $result = mysqli_query($conn, $sql);
  $sat2List = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $sat2List[] = $row;
  }

  // AP 리스트 가져오기
  $sql = "SELECT * FROM test WHERE test_sort='AP'";
  $result = mysqli_query($conn, $sql);
  $apList = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $apList[] = $row;
  }

?>
<style media="screen">
  .circle{width:200px;height:200px;border-radius:100%;border:5px #A50000 solid; text-align:center; float:left; background:#fff; color:#A50000; font-size:3rem; font-weight:bold;}
  .circle:hover{background:#C90000; color:#fff; font-weight:bold;}
  .circle p{vertical-align:middle; padding-top:40%;}
  .quiz{text-align:center; margin-top:5%; color:#A50000;}
  .quiz h1{font-size:8rem;}

  .circle51{margin-top:10%; margin-left:14%;}
  .circle52{margin-top:17%; margin-left:5%;}
  .circle53{margin-top:5%; margin-left:2%;}
  .circle54{margin-top:15%; margin-left:5%;}
  .circle55{margin-top:9%; margin-left:8%;}

  .circle31{margin-top:5%; margin-left:30%;}
  .circle32{margin-top:5%; margin-left:5%;}
  .circle33{margin-top:5%; margin-left:5%;}

  .circle61{margin-top:10%; margin-left:8%;}
  .circle62{margin-top:17%; margin-left:5%;}
  .circle63{margin-top:5%; margin-left:2%;}
  .circle64{margin-top:15%; margin-left:5%;}
  .circle65{margin-top:9%; margin-left:6%;}
  .circle66{margin-top:18%; margin-left:4%;}

  .test2List{margin-left:5%; margin-right:5%;}
  .accordion_title{background:#A50000; color:#fff; font-weight:bold;}
  .accordion_sub{background:#fff; color:#000; font-weight:bold; display:none;}

  .listSelect{background:#C90000; color:#fff; font-weight:bold;}
  .list-group-item:hover{background:#FFD9EC;}

  .talkbubble{
    border : none;
    width: 200px;
    height: 57px;
    background: url(res/img/q3_list.png) no-repeat;
    background-size:100%;
    color: #C00000;
    font-size: 1.5em;
    font-weight: bold;
    text-align: center;
    margin-top:2%;
  }

  .toefl_skeleton>.talkbubble{
    font-size: 2.2em;
  }

  @media screen and (max-width:1600px){
    .quiz h1{font-size:5rem;}
    .circle{width:150px; height:150px; font-size:2.5rem;}
    .circle51{margin-top:10%; margin-left:14%;}
    .circle52{margin-top:17%; margin-left:5%;}
    .circle53{margin-top:5%; margin-left:2%;}
    .circle54{margin-top:15%; margin-left:5%;}
    .circle55{margin-top:9%; margin-left:8%;}

    .circle31{margin-top:5%; margin-left:30%;}
    .circle32{margin-top:5%; margin-left:5%;}
    .circle33{margin-top:5%; margin-left:5%;}

    .circle61{margin-top:10%; margin-left:8%;}
    .circle62{margin-top:17%; margin-left:5%;}
    .circle63{margin-top:5%; margin-left:2%;}
    .circle64{margin-top:15%; margin-left:5%;}
    .circle65{margin-top:9%; margin-left:6%;}
    .circle66{margin-top:18%; margin-left:4%;}

    .talkbubble{width:200px; height:57px; font-size:1.5em;}
  }

  @media screen and (max-width:480px){
    .quiz h1{font-size:3rem;}
    .circle{width:80px; height:80px; font-size:1.2rem;}
    .circle51{margin-left:40%; margin-top:5%;}
    .circle52{margin-left:40%; margin-top:5%;}
    .circle53{margin-left:40%; margin-top:5%;}
    .circle54{margin-left:40%; margin-top:5%;}
    .circle55{margin-left:40%; margin-top:5%;}

    .circle31{margin-top:5%; margin-left:40%;}
    .circle32{margin-top:5%; margin-left:40%;}
    .circle33{margin-top:5%; margin-left:40%;}

    .circle61{margin-top:5%; margin-left:20%;}
    .circle62{margin-top:5%; margin-left:20%;}
    .circle63{margin-top:5%; margin-left:20%;}
    .circle64{margin-top:5%; margin-left:20%;}
    .circle65{margin-top:5%; margin-left:20%;}
    .circle66{margin-top:5%; margin-left:20%;}

    .talkbubble{width:100px; height:26px; font-size:1em;}
  }

  @media screen and (max-width:360px){
    .circle61{margin-top:5%; margin-left:18%;}
    .circle62{margin-top:5%; margin-left:18%;}
    .circle63{margin-top:5%; margin-left:18%;}
    .circle64{margin-top:5%; margin-left:18%;}
    .circle65{margin-top:5%; margin-left:18%;}
    .circle66{margin-top:5%; margin-left:18%;}
  }

  @media screen and (max-width:320px){
    .circle61{margin-top:5%; margin-left:17%;}
    .circle62{margin-top:5%; margin-left:17%;}
    .circle63{margin-top:5%; margin-left:17%;}
    .circle64{margin-top:5%; margin-left:17%;}
    .circle65{margin-top:5%; margin-left:17%;}
    .circle66{margin-top:5%; margin-left:17%;}
  }

</style>
  <div class="container-fluid demo-1">
    <form onsubmit="return makeArray(this);">
      <div id="slider" class="sl-slider-wrapper">
        <div class="sl-slider">
          <div class="sl-slide bg" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="deco">
                <div class="quiz"><h1>Step1. 몇 학년 인가요?</h1></div>
                <ul class="gradeList">
                  <li class="circle circle51" data-grade="8"><p>8th</p></li>
                  <li class="circle circle52" data-grade="9"><p>9th</p></li>
                  <li class="circle circle53" data-grade="10"><p>10th</p></li>
                  <li class="circle circle54" data-grade="11"><p>11th</p></li>
                  <li class="circle circle55" data-grade="12"><p>12th</p></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="sl-slide bg" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="deco">
                <div class="quiz"><h1>Step2. GPA를 선택하세요.</h1></div>
                <div class="hidden test_object">
                  <input type="hidden" name="test_id" value="1">
                  <input type="text" name="test_score" class="hidden" id="gpa_score">
                </div>
                <ul class="gpaList">
                  <li class="circle circle51" data-gpa="3.1"><p>3.0~</p></li>
                  <li class="circle circle52" data-gpa="3.3"><p>3.2~</p></li>
                  <li class="circle circle53" data-gpa="3.5"><p>3.4~</p></li>
                  <li class="circle circle54" data-gpa="3.7"><p>3.6~</p></li>
                  <li class="circle circle55" data-gpa="3.9"><p>3.8~</p></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="sl-slide bg" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="deco">
                <div class="quiz"><h1>Step3. 점수를 가지고 있는<br>시험을 선택하세요.</h1></div>
                <ul class="testList">
                  <li class="circle circle31" data-test="sat"><p>SAT</p></li>
                  <li class="circle circle32" data-test="act"><p>ACT</p></li>
                  <li class="circle circle33" data-test="noDecision"><p>없음</p></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="sl-slide bg" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="deco emptyDeco">
                <div class="quiz satList hidden"><h1>Step4. SAT점수를 선택하세요.</h1></div>
                <div class="hidden" id="satHidden">
                  <input type="hidden" name="test_id" value="2">
                  <input type="text" name="test_score" class="hidden" id="sat_score">
                </div>
                <ul class="satList hidden">
                  <li class="circle circle51" data-sat="1100"><p>1100~</p></li>
                  <li class="circle circle52" data-sat="1200"><p>1200~</p></li>
                  <li class="circle circle53" data-sat="1300"><p>1300~</p></li>
                  <li class="circle circle54" data-sat="1400"><p>1400~</p></li>
                  <li class="circle circle55" data-sat="1500"><p>1500~</p></li>
                </ul>

                <div class="quiz actList hidden"><h1>Step4. ACT점수를 선택하세요.</h1></div>
                <div class="hidden" id="actHidden">
                  <input type="hidden" name="test_id" value="3">
                  <input type="text" name="test_score" class="hidden" id="act_score">
                </div>
                <ul class="actList hidden">
                  <li class="circle circle51" data-act="26"><p>26~</p></li>
                  <li class="circle circle52" data-act="30"><p>30~</p></li>
                  <li class="circle circle53" data-act="31"><p>31~</p></li>
                  <li class="circle circle54" data-act="33"><p>33~</p></li>
                  <li class="circle circle55" data-act="35"><p>35~</p></li>
                </ul>

                <div class="quiz noDecisionList hidden"><h1>Step4. 가지고 있는 점수가 없네요.<br>Next를 클릭해주세요.</h1></div>
                <div class="hidden" id="noDecisionHidden">
                  <input type="hidden" name="test_id" value="4">
                  <input type="text" name="test_score" class="hidden" value="">
                </div>
              </div>
            </div>
          </div>

          <div class="sl-slide bg" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="deco">
                <div class="quiz"><h1>Step5. 도움이 필요한 과목을 선택하세요.</h1></div>
                <ul class="satHelpList helpList hidden">
                  <li class="circle circle51" data-help="reading"><p>리딩</p></li>
                  <li class="circle circle52" data-help="grammar"><p>문법</p></li>
                  <li class="circle circle53" data-help="essay"><p>에세이</p></li>
                  <li class="circle circle54" data-help="math"><p>수학</p></li>
                  <li class="circle circle55" data-help="noDecision"><p>없음</p></li>
                </ul>

                <ul class="actHelpList helpList hidden">
                  <li class="circle circle61" data-help="reading"><p>리딩</p></li>
                  <li class="circle circle62" data-help="grammar"><p>문법</p></li>
                  <li class="circle circle63" data-help="essay"><p>에세이</p></li>
                  <li class="circle circle64" data-help="math"><p>수학</p></li>
                  <li class="circle circle65" data-help="science"><p>과학</p></li>
                  <li class="circle circle66" data-help="noDecision"><p>없음</p></li>
                </ul>

                <ul class="noDecisionList helpList hidden">
                  <li class="circle circle61" data-help="reading"><p>리딩</p></li>
                  <li class="circle circle62" data-help="grammar"><p>문법</p></li>
                  <li class="circle circle63" data-help="essay"><p>에세이</p></li>
                  <li class="circle circle64" data-help="math"><p>수학</p></li>
                  <li class="circle circle65" data-help="science"><p>과학</p></li>
                  <li class="circle circle66" data-help="noDecision"><p>없음</p></li>
                </ul>
              </div>
            </div>
          </div>


          <div class="sl-slide bg" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="deco">
                <div class="quiz"><h1>Step6. 원하는 전공을 선택하세요.</h1></div>
                <ul class="majorList">
                  <li class="circle circle61" data-major="1"><p>문과</p></li>
                  <li class="circle circle62" data-major="1"><p>이과</p></li>
                  <li class="circle circle63" data-major="1"><p>사회과학</p></li>
                  <li class="circle circle64" data-major="2"><p>공대</p></li>
                  <li class="circle circle65 circleLong" data-major="3"><p>Liberal Arts</p></li>
                  <li class="circle circle66" data-major="1"><p>미정</p></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="sl-slide bg" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="deco">
                <div class="quiz"><h1>Step7. 가고싶은 대학을 선택하세요.</h1></div>
                <ul class="list-group wishList">
                  <li class="circle circle51 circleLong" data-wish="IVY"><p>IVY League</p></li>
                  <li class="circle circle52" data-wish="top25"><p>Top 25</p></li>
                  <li class="circle circle53" data-wish="top50"><p>Top 50</p></li>
                  <li class="circle circle54" data-wish="top100"><p>Top 100</p></li>
                  <li class="circle circle55" data-wish="noDecision"><p>미정</p></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="sl-slide bg" data-orientation="vertical" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="deco">
                <div class="quiz"><h1>Step8. 보유하고 있는 시험 점수를 선택하세요.</h1></div>
                <div class="list-group test2List row" style="padding-top:5%;">
                  <div class="accordion_banner list-group col-md-4">
                    <div class="accordion_title list-group-item">SAT II<span class="caret"></span></div>
                    <div class="accordion_sub">
                      <ul class="list-group sat2List">
                        <li class="list-group-item" data-no="1">1개</li>
                        <li class="list-group-item" data-no="2">2개</li>
                        <li class="list-group-item" data-no="3">3개</li>
                        <li class="list-group-item" data-no="4">4개</li>
                      </ul>
                    </div>
                    <!-- SAT2 input 창 들어갈 div -->
                    <div class="input_wrap">
                      <div id="sat2_score_input"></div>
                    </div>
                    <!-- SAT2 input 창 skeleton -->
                    <div class="form-group hidden sat2_skeleton input_wrap2">
                      <input type="hidden" name="test_sort" value="SAT2">
                      <select name="test_id" class="talkbubble">
                        <option value=''>&nbsp;과목 선택</option>
                        <?php
                          foreach($sat2List as $sl){
                            echo '<option value="'.$sl['test_id'].'">&nbsp;'.$sl['test_subject'].'</option>';
                          }
                        ?>
                      </select>
                      <select class="talkbubble test_score clsChk7" data-checked="true" name="test_score">
                        <option value="">&nbsp;점수 선택</option>
                        <?php
                          for($i=0; $i<7; $i++){
                            echo '<option value='.(800-($i*10)).'>&nbsp;'.(800-($i*10)).'</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="accordion_banner list-group col-md-4">
                    <div class="accordion_title list-group-item">AP<span class="caret"></span></div>
                    <div class="accordion_sub">
                      <ul class="list-group apList">
                        <li class="list-group-item" data-no="1">1개</li>
                        <li class="list-group-item" data-no="2">2개</li>
                        <li class="list-group-item" data-no="3">3개</li>
                        <li class="list-group-item" data-no="4">4개</li>
                      </ul>
                    </div>
                    <div class="input_wrap">
                      <div id="ap_score_input"></div>
                    </div>
                    <!-- AP input 창 skeleton -->
                    <div class="form-group hidden ap_skeleton input_wrap2">
                      <input type="hidden" name="test_sort" value="AP">
                      <select name="test_id" class="talkbubble">
                        <option value=''>&nbsp;과목 선택</option>
                        <?php
                          foreach($apList as $al){
                            echo '<option value="'.$al['test_id'].'">&nbsp;'.$al['test_subject'].'</option>';
                          }
                        ?>
                      </select>
                      <select class="talkbubble test_score clsChk7" data-checked="true" name="test_score">
                        <option value="">&nbsp;점수 선택</option>
                        <?php
                          for($i=0; $i<5; $i++){
                            echo '<option value='.(5-($i*1)).'>&nbsp;'.(5-($i*1)).'</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="accordion_banner list-group col-md-4">
                    <div class="hidden" id="toeflHidden">
                      <input type="hidden" name="test_id" value="7">
                      <input type="text" name="test_score" class="hidden" id="toefl_score">
                    </div>
                    <div class="accordion_title list-group-item">TOEFL<span class="caret"></span></div>
                    <div class="accordion_sub">
                      <ul class="list-group toeflList">
                        <li class="list-group-item" data-toefl="110">110~</li>
                        <li class="list-group-item" data-toefl="100">100~</li>
                        <li class="list-group-item" data-toefl="90">90~</li>
                        <li class="list-group-item" data-toefl="80">80~</li>
                        <li class="list-group-item" data-toefl="0">없음</li>
                      </ul>
                    </div>
                    <div class="input_wrap">
                      <div id="toefl_score_input"></div>
                    </div>
                    <div class="form-group hidden toefl_skeleton input_wrap2">
                      <div class="talkbubble"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!--sl-slider-->
        <nav id="nav-arrows" class="nav-arrows">
          <span class="nav-arrow-prev">Previous</span>
          <span class="nav-arrow-next">Next</span>
        </nav>
        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>
      </div> <!--sl-slider-wrapper -->
    </form>
  </div> <!-- container-fluid demo-1-->


<script>
var $selectedItem = null;
function radioSelect($item){
  // 선택된 것이 있으면 class를 지우고
  if($selectedItem) $selectedItem.removeClass('listSelect');
  // 새로 선택한 것에 class를 부여
  $selectedItem = $item;
  $selectedItem.addClass('listSelect');
}
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

var grade = null;
var $gradeList = $('.gradeList');
$gradeList.on('click', 'li', function(){
  radioSelect($(this));
  grade = $(this).data('grade');
})
function gradeSubmit(){
  $.post('session/grade.php', {data:grade}, function(data){
    console.log(data);
  })
}

var $gpa_score = $('#gpa_score');
var $gpaList = $('.gpaList');
var $selectedItem = null;

// GPA 선택
$gpaList.on('click', 'li', function(){
  setSelectItem($(this), $gpa_score, 'listSelect', 'gpa');
})

var $testList = $('.testList');
$testList.on('click', 'li', function(){
  radioSelect($(this));
  var $test = $(this).data('test');
  $('.'+$test+'List').removeClass('hidden');
  $('.'+$test+'HelpList').removeClass('hidden');
  $('#'+$test+'Hidden').addClass('test_object');
  if($test == 'sat'){
    $('#actHidden').removeClass('test_object');
    $('.actList').addClass('hidden');
    $('.actHelpList').addClass('hidden');
    $('.noDecisionList').addClass('hidden');
    $('.noDecisionHelpList').addClass('hidden');
  } else if ($test == 'act'){
    $('#satHidden').removeClass('test_object');
    $('.satList').addClass('hidden');
    $('.satHelpList').addClass('hidden');
    $('.noDecisionList').addClass('hidden');
    $('.noDecisionHelpList').addClass('hidden');
  } else if ($test == 'noDecision'){
    $('.actList').addClass('hidden');
    $('.actHelpList').addClass('hidden');
    $('.satList').addClass('hidden');
    $('.satHelpList').addClass('hidden');
  }
})

// SAT 점수 선택
var $sat_score = $('#sat_score');
var $satList = $('.satList');
$satList.on('click', 'li', function(){
  setSelectItem($(this), $sat_score, 'listSelect', 'sat');
})

// ACT 점수 선택
var $act_score = $('#act_score');
var $actList = $('.actList');
$actList.on('click', 'li', function(){
  setSelectItem($(this), $act_score, 'listSelect', 'act');
})

// helpList 선택
var help = null;
var $helpList = $('.helpList');
$helpList.on('click', 'li', function(){
  radioSelect($(this));
  $(this).attr('data-checked', true);
  help = $(this).data('help');
})
function helpSubmit(){
  $.post('session/help.php', {data:help}, function(data){
    console.log(data);
  })
}

// major 선택
var major = null;
var $majorList = $('.majorList');
$majorList.on('click', 'li', function(){
  radioSelect($(this));
  $(this).attr('data-checked', true);
  major = $(this).data('major');
})

// 반응형
var margin_top25 = '23%';
var margin_ivy = '5%';
$(document).ready(function(){
  $(window).resize(function(){
    var win_width = window.width;
    if(win_width <= 480){
      margin_top25 = '45%';
      margin_ivy = '45%';
    }
    if(win_width <= 1400){
      margin_top25 = '23%';
      margin_ivy = '5%';
    }
  })
})

function responsive(){

}

function majorSubmit(){
  $.post('session/major.php', {data:major}, function(data){
    console.log(data);
    // 이과 선택 시 아이비리그 안보이게
    if(data == '2'){
      $('.wishList [data-wish="IVY"]').addClass('hidden');
      $('.wishList [data-wish="top25"]').css('margin-left', margin_top25);
    } else {
      $('.wishList [data-wish="IVY"]').removeClass('hidden');
      $('.wishList [data-wish="top25"]').css('margin-left', margin_ivy);
    }
  })
}

// wish 선택
var wish = null;
var $wishList = $('.wishList');
$wishList.on('click', 'li', function(){
  radioSelect($(this));
  $(this).attr('data-checked', true);
  wish = $(this).data('wish');
})
function wishSubmit(){
  $.post('session/wish.php', {data:wish}, function(data){
    console.log(data);
  })
}

// SAT2 개수 선택 시 처리
var $sat2List = $('.sat2List');
var $sat2_score_input = $('#sat2_score_input');
$sat2List.on('click', 'li', function(){
  setSelectItem($(this), $sat2List, 'listSelect', 'no');
  $sat2_score_input.empty();
  for(i=0; i<$selectedItem.data('no'); i++){
    $sat2_score_input.append($('.sat2_skeleton:first').clone(true).removeClass('hidden').removeClass('sat2_skeleton').addClass('test_object').attr('data-sat2-division', 'sat2_'+i));
  }
  $(this).parent().parent().slideUp("fast");
})

// AP 개수 선택 시 처리
var $apList = $('.apList');
var $ap_score_input = $('#ap_score_input');
$apList.on('click', 'li', function(){
  setSelectItem($(this), $apList, 'listSelect', 'no');
  $ap_score_input.empty();
  for(i=0; i<$selectedItem.data('no'); i++){
    $ap_score_input.append($('.ap_skeleton:first').clone(true).removeClass('hidden').removeClass('ap_skeleton').addClass('test_object').attr('data-ap-division', 'ap_'+i));
  }
  $(this).parent().parent().slideUp("fast");
})

var $toefl_score = $('#toefl_score');
var $toeflList = $('.toeflList');
var $toefl_score_input = $('#toefl_score_input');
$toeflList.on('click', 'li', function(){
  setSelectItem($(this), $toefl_score, 'listSelect', 'toefl');
  $('#toeflHidden').addClass('test_object');
  var aaa = $('.toefl_skeleton').children('.talkbubble').empty().append($(this).data('toefl'));
  $toefl_score_input.append($('.toefl_skeleton').removeClass('hidden'));
  console.log(aaa.html());
  //$toefl_score_input.append($('.toefl_skeleton').removeClass('hidden').children('.talkbubble').append($(this).data('toefl')));
  $(this).parent().parent().slideUp("fast");
})


// 메뉴 아코디언
$(".accordion_banner .accordion_title").click(function(){
    if($(this).next("div").is(":visible")){
    $(this).next("div").slideUp("fast");
    } else {
        $(".accordion_banner .accordion_sub").slideUp("fast");
        $(this).next("div").slideToggle("fast");
    }
});

$(function() {

  var Page = (function() {

    var $navArrows = $( '#nav-arrows' ),
      $nav = $( '#nav-dots > span' ),
      slitslider = $( '#slider' ).slitslider( {
        onBeforeChange : function( slide, pos ) {
          $nav.removeClass( 'nav-dot-current' );
          $nav.eq( pos ).addClass( 'nav-dot-current' );
        }
      }),

      init = function() {
        initEvents();
      },

      initEvents = function() {

        // add navigation events
        $navArrows.children( ':last' ).on( 'click', function() {

////////
/*
var tFlag = false;
var tAlert = "";

$(".clsChk" + (slitslider.current + 1)).each(function() {
if ($(this).attr("data-checked")) {
  tFlag = true;
}
});

if (!tFlag) {
switch(slitslider.current) {
  case 0:
      tAlert = "원하는 전공을 선택해주세요."
      break;
  case 1:
      tAlert = "원하는 학교를 선택해주세요.";
      break;
  case 2:
      tAlert = "GPA를 선택해 주세요.";
      break;
  case 3:
      tAlert = "시험종류를 선택해 주세요.";
      break;
  case 4:
      tAlert = "시험점수를 선택해 주세요.";
      break;
  case 5:
      tAlert = "가지고 있는 SAT2 성적의 개수를 선택해 주세요.";
      break;
  case 7:
      tAlert = "가지고 있는 AP 성적의 개수를 선택해 주세요.";
      break;
  case 9:
      tAlert = "TOEFL 점수를 선택해 주세요."
      break;
}
alert(tAlert);
return;
}
*/
if(slitslider.current == 0){
gradeSubmit();
responsive();
}

if(slitslider.current == 4){
helpSubmit();
}

if(slitslider.current == 5){
majorSubmit();
}

if(slitslider.current == 6){
wishSubmit();
}

if( slitslider.current == slitslider.slidesCount-1 ) {
makeArray($(this).parents('nav').prev().parents('form'));
//$('#btn_submit').click();
return false;
}

slitslider.next();
//////////

          return false;
        });

        $navArrows.children( ':first' ).on( 'click', function() {
          // 0번슬라이드에서 뒤로가기 막기
          if(slitslider.current == 0){
            return false;
          }
          slitslider.previous();
          return false;
        });

        $nav.each( function( i ) {
          $( this ).on( 'click', function( event ) {
            var $dot = $( this );
            if( !slitslider.isActive() ) {
              $nav.removeClass( 'nav-dot-current' );
              $dot.addClass( 'nav-dot-current' );
            }
            slitslider.jump( i + 1 );
            return false;
          });
        });
      };
      return { init : init };
  })();

  Page.init();
});

// 데이터 배열로 변환하여 전달
function makeArray(form){
  var _posData = parseMacro($('.test_object',form),'[name]');

  $.post('session/stud_score.php', {data:_posData}, function(data){
    location.href = 'result.php';
  })
  return false;
}

</script>
