<?php
  require("view/header.php");
 ?>
<style media="screen">
  #qwrap{width:1120px; height:845px; margin:0 auto; background:url('res/img/index_bg.jpg'); no-repeat center top;}
</style>


 <div class="container" style="width:500px; padding-top:50px;">
   <form action="add_process/period_add.php" method="post" onsubmit="return insertAndRedirectToResult(this)">
       <!-- 시작 주, 몇 주 수강 입력 -->
       <div id="start_week_input" class="form-group test_object">
         <label for="start_week">시작 가능일</label>
         <input type="text" class="form-control datepicker" id="start_week" name="consumer_start_week" placeholder="시작 가능일을 입력하세요">
         <input type="hidden" name="start_week" value="" id="real_start_week">
       </div>
       <div id="class_week_input" class="form-group test_object">
         <label for="class_week">수강 종료일</label>
         <input type="text" class="form-control datepicker" id="class_week" name="consumer_class_week" placeholder="수강 기간을 입력하세요">
         <input type="hidden" name="class_week" value="" id="real_class_week">
       </div>
       <input type="submit" id="submit_btn" name="" value="제출" class="btn btn-success">
   </form>
 </div>

<script>
  function insertAndRedirectToResult(form){
    $.post('session/period.php',$(form).serialize(),function(jsonResult){
    })
    return false;
  }

  $('#submit_btn').click(function(){
    location.href = 'timetable.php';
  })

  $('.datepicker').datepicker({
    dateFormat:'yy-mm-dd'
  });
  $("#start_week").datepicker();
  $("#start_week").datepicker("option", "minDate", new Date(2017, 5-1, 22));
  $("#start_week").datepicker("option", "maxDate", new Date(2017, 9-1, 1));
  $("#start_week").datepicker("option", "onClose", function (selectedDate){
    $("#class_week").datepicker("option", "minDate", selectedDate);
  });

  $("#class_week").datepicker();
  $("#class_week").datepicker("option", "minDate", $("#start_week").val());
  $("#class_week").datepicker("option", "maxDate", new Date(2017, 9-1, 1));
  $("#class_week").datepicker("option", "onClose", function (selectedDate){
    $("#start_week").datepicker("option", "maxDate", selectedDate);
  });

  $('#start_week').change(function(){
    var _start_week = $('#start_week').val();
    if(_start_week >= '2017-05-22' && _start_week < '2017-05-29'){
      $('#real_start_week').val(1);
    } else if (_start_week >= '2017-05-29' && _start_week < '2017-06-05'){
      $('#real_start_week').val(2);
    } else if (_start_week >= '2017-06-05' && _start_week < '2017-06-12'){
      $('#real_start_week').val(3);
    } else if (_start_week >= '2017-06-12' && _start_week < '2017-06-19'){
      $('#real_start_week').val(4);
    } else if (_start_week >= '2017-06-19' && _start_week < '2017-06-26'){
      $('#real_start_week').val(5);
    } else if (_start_week >= '2017-06-26' && _start_week < '2017-07-03'){
      $('#real_start_week').val(6);
    } else if (_start_week >= '2017-07-03' && _start_week < '2017-07-10'){
      $('#real_start_week').val(7);
    } else if (_start_week >= '2017-07-10' && _start_week < '2017-07-17'){
      $('#real_start_week').val(8);
    } else if (_start_week >= '2017-07-17' && _start_week < '2017-07-24'){
      $('#real_start_week').val(9);
    } else if (_start_week >= '2017-07-24' && _start_week < '2017-07-31'){
      $('#real_start_week').val(10);
    } else if (_start_week >= '2017-07-31' && _start_week < '2017-08-07'){
      $('#real_start_week').val(11);
    } else if (_start_week >= '2017-08-07' && _start_week < '2017-08-14'){
      $('#real_start_week').val(12);
    } else if (_start_week >= '2017-08-14' && _start_week < '2017-08-21'){
      $('#real_start_week').val(13);
    } else if (_start_week >= '2017-08-21' && _start_week < '2017-08-28'){
      $('#real_start_week').val(14);
    } else if (_start_week >= '2017-08-28' && _start_week < '2017-09-04'){
      $('#real_start_week').val(15);
    }
  })

  $('#class_week').change(function(){
    var _start_week = $('#start_week').val();
    var _class_week = $('#class_week').val();
    var arr1 = _start_week.split('-');
    var arr2 = _class_week.split('-');
    var dat1 = new Date(arr1[0], arr1[1], arr1[2]);
    var dat2 = new Date(arr2[0], arr2[1], arr2[2]);
    var diff = dat2 - dat1;
    var currDay = 24 * 60 * 60 * 1000;
    var diffWeek = diff/currDay/7;
    $('#real_class_week').val(Math.ceil(diffWeek));
    console.log(Math.ceil(diffWeek));
  })

</script>
