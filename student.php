<?php
  require("view/header.php");
 ?>
 <div class="container">
   <form action="result.php" method="post" onsubmit="return insertStudentAndRedirectToResult(this)">
     <div id="stud_name_input" class="form-group">
       <label for="stud_name">학생이름</label>
       <input type="text" class="form-control" id="stud_name" name="stud_name" placeholder="학생이름을 입력하세요">
     </div>
     <div id="stud_name_eng_input" class="form-group">
       <label for="stud_name_eng">학생이름(영문)</label>
       <input type="text" class="form-control" id="stud_name_eng" name="stud_name_eng" placeholder="학생이름(영문)을 입력하세요">
     </div>
     <div id="stud_phone_number_input" class="form-group">
       <label for="stud_phone_number">학생연락처</label>
       <input type="text" class="form-control" id="stud_phone_number" name="stud_phone_number" placeholder="학생 연락처를 입력하세요">
     </div>
     <div id="stud_email_input" class="form-group">
       <label for="stud_email">학생이메일</label>
       <input type="email" class="form-control" id="stud_email" name="stud_email" placeholder="학생이메일을 입력하세요">
     </div>
     <div id="stud_school_input" class="form-group">
       <label for="stud_school">학생학교</label>
       <input type="text" class="form-control" id="stud_school" name="stud_school" placeholder="학교를 입력하세요">
     </div>
     <div id="stud_grade_input" class="form-group">
       <label for="stud_grade">학생학년</label>
       <input type="text" class="form-control" id="stud_grade" name="stud_grade" placeholder="학년을 입력하세요">
     </div>
     <div id="pare_name_input" class="form-group">
       <label for="pare_name">부모님이름</label>
       <input type="text" class="form-control" id="pare_name" name="pare_name" placeholder="부모님이름을 입력하세요">
     </div>
     <div id="pare_phone_number_input" class="form-group">
       <label for="pare_phone_number">부모님연락처</label>
       <input type="text" class="form-control" id="pare_phone_number" name="pare_phone_number" placeholder="부모님연락처를 입력하세요">
     </div>
     <div id="pare_email_input" class="form-group">
       <label for="pare_email">부모님이메일</label>
       <input type="email" class="form-control" id="pare_email" name="pare_email" placeholder="부모님이메일을 입력하세요">
     </div>
     <input type="submit" id="submit_btn" name="" value="제출" class="btn btn-success">
   </form>
 </div>

<script>
function insertStudentAndRedirectToResult(form){
  $.post('proc/dao_result.php',$(form).serialize(),function(jsonResult){ //jsonResult == proc/dao_result.php 에서 받아온 내용
    jsonResult = getJSON(jsonResult); // 결과를 json 파싱

    //파싱된 내용이 아마 이렇게 써지겟지
    // 아래 procJson은 내가만든함수,
    // 첫번째인자로 파싱된 제이슨오브젝트를 넣어주면
    // 두번째인자에 {}안에 msg가 ok인지, msg가 err인지 확인해서
    // 그에맞는 함수를 실행
    procJSON(jsonResult,{
      'ok':function(){ // 여기서는 이리로밖에 안들어가겟지

        location.href = form.action+"?stud_id="+jsonResult.content.lastStudId // 위에 내용보면 content.lastStudId 가 113이라고돼잇죠
        //그대로 쓴거고
        //location.href 는 그냥 리다이렉트하는거
        // ?stud_id = 113 이라고 뒤에 붙인거는
        // url에다가 데이터 담아서 준거에요. 이거를 GET방식이라고 부르죠
        //그렇다면 위에 한 명령문은 이렇게 되겟지.
        // locaion.href = 'result.php?stud_id=113'; ㅇㅋ?
        // 주소창에 그냥 붙여넣어도 잘 돼죠?

      },
      'err':function(){
          alert('학생 정보 입력에 실패했습니다!!!!');
      }
    });
  });
  return false;
}
</script>
