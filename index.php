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
<div class="container">
  <form action="add_process/stud_score_add.php" method="post" onsubmit="return makeArray(this);">
    <div id="gpa_uw_input" class="form-group test_object">
      <label for="gpa_uw">GPA</label>
      <input type="hidden" name="test_id" value="30">
      <input type="text" class="form-control" id="gpa_uw" name="test_score" placeholder="GPA를 입력하세요">
    </div>
    <div class="btn-group">
      <input id="sat_btn" type="button" name="SAT" value="SAT" class="btn btn-default btn-large">
      <input id="act_btn" type="button" name="ACT" value="ACT" class="btn btn-default btn-large">
    </div>
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
    <div id="sat2_no_input" class="form-group">
      <label for="sat2_no">개수</label>
      <input type="text" class="form-control" id="sat2_no" name="sat2_no" placeholder="SAT2 개수를 입력하세요">
    </div>
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
    <div id="ap_no_input" class="form-group">
      <label for="ap_no">개수</label>
      <input type="text" class="form-control" id="ap_no" name="ap_no" placeholder="AP 개수를 입력하세요">
    </div>
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
  </form>
</div>
<script type="text/javascript">
  function makeArray(form){
    var _posData = parseMacro($('.test_object',form),'[name]');
    alert(_posData);
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
    for(i=0; i<$('#sat2_no').val(); i++){
      $('[data-sat2-division="sat2_'+i+'"] .sat2_change').change(function(){
        alert('성공');
        $('[data-sat2-division="sat2_'+i+'"] .sat2_subject').val('1');
      })
    }
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
