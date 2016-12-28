<head>
  <script type="text/javascript" src="res/js/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="res/css/common.css">
  <link rel="stylesheet" type="text/css" href="res/css/style.css">
  <script type="text/javascript" src="res/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="res/js/jquery.checkbox.min.js"></script>
  <script type="text/javascript">
var IfSend = function() {
    document.matchForm.action = "./ending_1.asp";
    document.matchForm.submit();
};
$(document).ready(function() {
    $('input #u_age1:checkbox').checkbox({cls:'chk_birth1'});
    $('input #u_age2:checkbox').checkbox({cls:'chk_birth2'});
    $('input #u_age3:checkbox').checkbox({cls:'chk_birth3'});
    $('input #u_age4:checkbox').checkbox({cls:'chk_birth4'});
    $('input #u_age5:checkbox').checkbox({cls:'chk_birth5'});
    $('input #u_age6:checkbox').checkbox({cls:'chk_birth6'});
    $('input #u_age7:checkbox').checkbox({cls:'chk_birth7'});
    $('input #u_age8:checkbox').checkbox({cls:'chk_birth8'});

    $('input #u_height1:checkbox').checkbox({cls:'chk_height1'});
    $('input #u_height2:checkbox').checkbox({cls:'chk_height2'});
    $('input #u_height3:checkbox').checkbox({cls:'chk_height3'});
    $('input #u_height4:checkbox').checkbox({cls:'chk_height4'});
    $('input #u_height5:checkbox').checkbox({cls:'chk_height5'});
    $('input #u_height6:checkbox').checkbox({cls:'chk_height6'});
    $('input #u_height7:checkbox').checkbox({cls:'chk_height7'});

    $('input #u_edu1:checkbox').checkbox({cls:'chk_edu1'});
    $('input #u_edu2:checkbox').checkbox({cls:'chk_edu2'});
    $('input #u_edu3:checkbox').checkbox({cls:'chk_edu3'});
    $('input #u_edu4:checkbox').checkbox({cls:'chk_edu4'});

    $('input #chk_work_all:checkbox').checkbox({cls:'chk_work_all'});
    $('input #u_job2:checkbox').checkbox({cls:'chk_work1'});
    $('input #u_job3:checkbox').checkbox({cls:'chk_work2'});
    $('input #u_job4:checkbox').checkbox({cls:'chk_work3'});
    $('input #u_job5:checkbox').checkbox({cls:'chk_work4'});
    $('input #u_job6:checkbox').checkbox({cls:'chk_work5'});
    $('input #u_job7:checkbox').checkbox({cls:'chk_work6'});
    $('input #u_job8:checkbox').checkbox({cls:'chk_work7'});
    $('input #u_job9:checkbox').checkbox({cls:'chk_work8'});

    $('.a img').each(function(index){
        //(index*500)초 후 animate()메서드 실행
        $(this).delay(index*100).animate({
            opacity: index+1
        },'fast');
    });

    $('.image_container');

    var _slideIndex = 0;
    function slide(){
        $('.image_container').stop().animate( { left: -1120 * _slideIndex}, 1000 );
    }

    $('.btn_area .btn_next').click(function(e){
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
});
</script>
</head>

<!--내용영역-->
	<div style="width:100%; padding-top:98px;">
        <form name="matchForm" method="post">
            <input type="hidden" name="u_div" value="">
            <div id="manwrap">
                <div id="con">
                    <div id="touchSlider2">
                        <ul class="image_container">
                            <li class="q1">
                                <p class="q"><img src="res/img/q_tit1_m.png" /></p>
                                <div class="a">
                                    <input type="checkbox" id="u_age1" title="24세 이하" name="chk_birth1" class="clsChk1" value="Y" />
                                    <label for="chk_birth1">24세 이하</label>
                                    <input type="checkbox" id="u_age2" title="25~29세" name="chk_birth2" class="clsChk1" value="Y" />
                                    <label for="chk_birth2">25~29세</label>
                                    <input type="checkbox" id="u_age3" title="30~34세" name="chk_birth3" class="clsChk1" value="Y" />
                                    <label for="chk_birth3">30~34세</label>
                                    <input type="checkbox" id="u_age4" title="35~39세" name="chk_birth4" class="clsChk1" value="Y" />
                                    <label for="chk_birth4">35~39세</label>
                                    <input type="checkbox" id="u_age5" title="40~44세" name="chk_birth5" class="clsChk1" value="Y" />
                                    <label for="chk_birth5">40~44세</label>
                                    <input type="checkbox" id="u_age6" title="45~49세" name="chk_birth6" class="clsChk1" value="Y" />
                                    <label for="chk_birth6">45~49세</label>
                                    <input type="checkbox" id="u_age7" title="50세~55세" name="chk_birth7" class="clsChk1" value="Y" />
                                    <label for="chk_birth7">50세~55세</label>
                                    <input type="checkbox" id="u_age8" title="56세 이상" name="chk_birth8" class="clsChk1" value="Y" />
                                    <label for="chk_birth8">56세 이상</label>
                                </div>
                            </li>
                            <li class="q2">
                                <p class="q"><img src="res/img/q_tit2.png" /></p>
                                <div class="a">
                                    <input type="checkbox" id="u_height1" title="157cm 이하" name="chk_height1"  class="chk_height1 clsChk2" value="Y" />
                                    <label for="chk_height1">157cm 이하</label>
                                    <input type="checkbox" id="u_height2" title="158~162cm" name="chk_height2"  class="chk_height2 clsChk2" value="Y" />
                                    <label for="chk_height2">158~162cm</label>
                                    <input type="checkbox" id="u_height3" title="163~167cm" name="chk_height3"  class="chk_height3 clsChk2" value="Y" />
                                    <label for="chk_height3">163~167cm</label>
                                    <input type="checkbox" id="u_height4" title="168~172cm" name="chk_height4"  class="chk_height4 clsChk2" value="Y" />
                                    <label for="chk_height4">168~172cm</label>
                                    <input type="checkbox" id="u_height5" title="173~177cm" name="chk_height5" class="chk_height5 clsChk2" value="Y" />
                                    <label for="chk_height5">173~177cm</label>
                                    <input type="checkbox" id="u_height6" title="178~182cm" name="chk_height6" class="chk_height6 clsChk2" value="Y" />
                                    <label for="chk_height6">178~182cm</label>
                                    <input type="checkbox" id="u_height7" title="183cm 이상" name="chk_height7" class="chk_height7 clsChk2"  value="Y" />
                                    <label for="chk_height7">183cm 이상</label>
                                </div>
                            </li>
                            </li>
                            <li class="q3">
                                <p class="q"><img src="res/img/q_tit3.png" /></p>
                                <div class="a">
                                    <input type="checkbox" id="u_edu1" title="고졸" name="chk_edu1" class="chk_edu clsChk3" value="Y" />
                                    <label for="chk_edu1">고졸</label>
                                    <input type="checkbox" id="u_edu2" title="전문대졸" name="chk_edu2" class="chk_edu clsChk3" value="Y" />
                                    <label for="chk_edu2">전문대졸</label>
                                    <input type="checkbox" id="u_edu3" title="대졸" name="chk_edu3" class="chk_edu clsChk3" value="Y" />
                                    <label for="chk_edu3">대졸</label>
                                    <input type="checkbox" id="u_edu4" title="대학원 이상" name="chk_edu4" class="chk_edu clsChk3" value="Y" />
                                    <label for="chk_edu4">대학원 이상</label>
                                </div>
                            </li>
                            <li class="q4">
                                <p class="q"><img src="res/img/q_tit4.png" /></p><div>
                                <div class="a">
                                    <input type="checkbox" id="chk_work_all" title="무관" name="chk_work_all" class="clsChk4" value="Y" />
                                    <label for="chk_work_all">무관</label>
                                    <input type="checkbox" id="u_job2" title="교사,강사,공무원,공사" name="chk_work1" class="chk_work clsChk4" value="Y" />
                                    <label for="chk_work1">교사,강사,공무원,공사</label>
                                    <input type="checkbox" id="u_job3" title="사무직, 금융직" name="chk_work2" class="chk_work clsChk4"  value="Y" />
                                    <label for="chk_work2">사무직, 금융직</label>
                                    <input type="checkbox" id="u_job4" title="기술, 의료, 언론" name="chk_work3" class="chk_work clsChk4"  value="Y" />
                                    <label for="chk_work3">기술, 의료, 언론</label>
                                    <input type="checkbox" id="u_job5" title="자영업, 사업, 특수직" name="chk_work4" class="chk_work clsChk4"  value="Y" />
                                    <label for="chk_work4">자영업, 사업, 특수직</label>
                                    <input type="checkbox" id="u_job6" title="유학생, 학생, 석/박사" name="chk_work5" class="chk_work clsChk4"  value="Y" />
                                    <label for="chk_work5">유학생, 학생, 석/박사</label>
                                    <input type="checkbox" id="u_job7" title="예능계, 프리랜서, 서비스" name="chk_work6" class="chk_work clsChk4"  value="Y" />
                                    <label for="chk_work6">예능계, 프리랜서, 서비스</label>
                                    <input type="checkbox" id="u_job8" title="전문직" name="chk_work7" class="chk_work clsChk4"  value="Y" />
                                    <label for="chk_work7">전문직</label>
                                    <input type="checkbox" id="u_job9" title="기타" name="chk_work8" class="chk_work clsChk4"  value="Y" />
                                    <label for="chk_work8">기타</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="btn_area">
                        <button type="button" class="btn_next">next</button>
                    </div>
                </div>
              </div>
            </div>
        </form>
      </div>
