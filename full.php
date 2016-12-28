<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=euc-kr'>
<meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
<meta name='Subject' content='결혼정보회사 듀오 - 한국대표결혼정보회사'>
<meta name='Title' content='결혼정보회사 듀오 - 한국대표결혼정보회사, 초혼, 재혼, 만혼, 노블레스, 결혼정보회사'>
<meta name='Keywords' content='결혼정보회사, 결혼정보, 결혼, 결혼해듀오, 듀오,결혼정보업체, 듀오 결혼'>
<meta name='Description' content='결혼정보회사,초혼,재혼,노블레스결혼,무료 이상형찾기,맞선,중매,만남주선,미팅파티,베테랑 커플매니저,깊이있는 무료상담,믿을수있는 듀오,100%신원인증,가입비정찰제,고객만족우선,환불규정준수,2012 소비자가 뽑은 가장 신뢰하는 브랜드대상'>
<title>듀오-한국대표결혼정보회사</title><link href="/html/common/css/common.css" rel="stylesheet" type="text/css" />
<link href="/html/common/css/sub_layout.css" rel="stylesheet" type="text/css" />
<link href="/html/common/css/sub_top_20151002.css" rel="stylesheet" type="text/css" />

<link href="/html/common/css/member.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/html/common/js/jquery-1.11.0.min.js"></script>
<script language="javascript" type="text/javascript" src="/html/common/isValidType.js"></script>
<script language="javascript" type="text/javascript" src="/html/common/flashshow.js"></script>

<script type="text/javascript" src="/html/common/js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="/html/member/match/css/common.css">
<link rel="stylesheet" type="text/css" href="/html/member/match/css/style.css">
<!-- 2014-04-08 | 엠포스 start --------------------->
<img src="https://pixel.mathtag.com/event/img?mt_id=442318&mt_adid=122014&v1=&v2=&v3=&s1=&s2=&s3=" width="1" height="1" style="display:none;"/>
<!-- 2014-04-08 | 엠포스 end ----------------------->
<!-- 2015-03-12 | incross script start -->
<script language='javascript' src='https://i85.icast-ad.com/track?ccd=2385&mcd=01040601&pcd=4095'></script>
<!-- 2015-03-12 | incross script end -->
<script type="text/javascript" src="/html/member/match/js/jquery.checkbox.min.js"></script>
<script type="text/javascript">
var IfSend = function() {
    document.matchForm.action = "./ending_1.asp";
    document.matchForm.submit();
};

$(document).ready(function() {
    $('input#u_age1:checkbox').checkbox({cls:'chk_birth1'});
    $('input#u_age2:checkbox').checkbox({cls:'chk_birth2'});
    $('input#u_age3:checkbox').checkbox({cls:'chk_birth3'});
    $('input#u_age4:checkbox').checkbox({cls:'chk_birth4'});
    $('input#u_age5:checkbox').checkbox({cls:'chk_birth5'});
    $('input#u_age6:checkbox').checkbox({cls:'chk_birth6'});
    $('input#u_age7:checkbox').checkbox({cls:'chk_birth7'});
    $('input#u_age8:checkbox').checkbox({cls:'chk_birth8'});

    $('input#u_height1:checkbox').checkbox({cls:'chk_height1'});
    $('input#u_height2:checkbox').checkbox({cls:'chk_height2'});
    $('input#u_height3:checkbox').checkbox({cls:'chk_height3'});
    $('input#u_height4:checkbox').checkbox({cls:'chk_height4'});
    $('input#u_height5:checkbox').checkbox({cls:'chk_height5'});
    $('input#u_height6:checkbox').checkbox({cls:'chk_height6'});
    $('input#u_height7:checkbox').checkbox({cls:'chk_height7'});

    $('input#u_edu1:checkbox').checkbox({cls:'chk_edu1'});
    $('input#u_edu2:checkbox').checkbox({cls:'chk_edu2'});
    $('input#u_edu3:checkbox').checkbox({cls:'chk_edu3'});
    $('input#u_edu4:checkbox').checkbox({cls:'chk_edu4'});

    $('input#chk_work_all:checkbox').checkbox({cls:'chk_work_all'});
    $('input#u_job2:checkbox').checkbox({cls:'chk_work1'});
    $('input#u_job3:checkbox').checkbox({cls:'chk_work2'});
    $('input#u_job4:checkbox').checkbox({cls:'chk_work3'});
    $('input#u_job5:checkbox').checkbox({cls:'chk_work4'});
    $('input#u_job6:checkbox').checkbox({cls:'chk_work5'});
    $('input#u_job7:checkbox').checkbox({cls:'chk_work6'});
    $('input#u_job8:checkbox').checkbox({cls:'chk_work7'});
    $('input#u_job9:checkbox').checkbox({cls:'chk_work8'});

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
<body>
<div id="subArea">
	<h1>듀오</h1>
	<!--상단영역-->
	<div id="nw_header">
	<div class="menu-wrapper">
		<div class="main-menu">
			<div style="float:left; width:230px; overflow:hidden;">
				<h1 class="logo"><a href="/"><img src="/html/include/header/img/sub_logo_new.gif" alt="듀오" /></a></h1>
				<div style="float:left; margin:47px 0 0 15px; width:120px; font-family:'Malgun Gothic','맑은고딕'; font-size:11px; color:#8d8d8d;">한국대표결혼정보회사<br /><span style="font-size:12px; color:#5d5d5d;">성혼회원수 34,296명</span></div>
			</div>

			<ul class="menu-list">
				<li class="menu-01 root_menu" style="margin:0;"><a href="/html/duostory/main.asp">듀오이야기</a></li>
				<li class="menu-02 root_menu"><a href="/html/service/main.asp">가입안내</a></li>
				<li class="menu-03 root_menu"><a href="/html/member/photo_interview.asp">회원검색</a></li>
				<li class="menu-04 root_menu"><a href="/html/duo_couple/main.asp">성혼커플</a></li>
				<li class="menu-05 root_menu"><a href="/html/love_test/main.asp">러브테스트</a></li>
				<li class="menu-06 root_menu"><a href="/html/meetguide/main.asp">미팅가이드</a></li>
				<li class="menu-07 root_menu"><a href="/html/event/main.asp">이벤트</a></li>
				<li class="menu-08 root_menu"><a href="http://www.duoremarry.com/" target="_blank">재혼</a></li>
				<li class="menu-09 root_menu"><a href="http://www.duowed.com/" target="_blank">웨딩</a></li>
			</ul>

			<div class="gnb-menu">
					<ul class="gnb">
						<li><a href="/html/duostory/humanlife.asp">듀오휴먼라이프연구소</a></li>

						<li><a href="/com_member/member_join.asp?site=duo"><strong>회원가입</strong></a></li>
						<li><a href="/html/membership/login.asp">로그인</a></li>

						<li><a href="/html/helpdesk/main.asp">헬프데스크</a></li>
						<li style="color:#000000; font-weight:bold;"><a href="http://english.duo.co.kr/"  target="_blank">DUO USA</a></li>
					</ul>
			</div>


		</div>
		<div class="depth-menu">
			<div class="common-wrapper-2 depth2">
				<div class="d-left">
					<h2 class="t-menu" style="position:static; visibility:visible;">新결혼문화창조<br /><span class="menu-01">듀오이야기</span></h2>
					<a href="/html/duostory/main.asp" class="go">바로가기</a>
					<p class="tel">무료상담전화<br /><span>1577-8333</span></p>
				</div>
				<ul class="depth-list">
					<li class="menu-01"><a href="/html/duostory/ceo_greeting.asp">CEO소개</a></li>
					<li class="menu-01"><a href="/html/duostory/manager_intro.asp">커플매니저 소개</a></li>
					<li class="menu-01"><a href="/html/duostory/ad_tv.asp">광고 갤러리</a></li>
					<li class="menu-01"><a href="/html/duostory/media_main.asp">언론에 비친 듀오</a></li>
					<li class="menu-01"><a href="/html/duostory/video.asp">동영상 이야기</a></li>
					<li class="menu-01"><a href="/html/duostory/humanlife.asp">듀오휴먼라이프연구소</a></li>
					<li class="menu-01"><a href="/html/duostory/browse.asp">듀오 둘러보기</a></li>
					<li class="menu-01"><a href="/html/duostory/campaign.asp">아름다운 캠페인</a></li>
				</ul>
				<div class="d-right">
					<h3 class="thumb" style="position:static; visibility:visible;"><a href="/html/duostory/video.asp" class="menu-01">왜 나는 듀오하는가_1부] '몰라염'</a></h3>
					<ul class="bn-list">
						<li><a href="/html/service/program01.asp" class="bn-1">듀오 가입안내</a></li>
						<li><a href="/html/member/matching_main.asp" class="bn-2">내 이상형은 어디에?</a></li>
						<li><a href="/html/service/know.asp" class="bn-3">WHY 듀오일까요?</a></li>
					</ul>
				</div>
			</div>
			<div class="common-wrapper-2 depth2">
				<div class="d-left">
					<h2 class="t-menu" style="position:static; visibility:visible;">듀오 서비스<br /><span class="menu-02">가입안내</span></h2>
					<a href="/html/service/main.asp" class="go">바로가기</a>
					<p class="tel">무료상담전화<br /><span>1577-8333</span></p>
				</div>
				<ul class="depth-list" style="float: left;
    margin:24px 0 0 25px;
    width: 215px;
    font-size: 14px;
    color: #5d5d5d;
    line-height: 33px;">
					<li class="menu-02"><a href="/html/service/know.asp">왜 듀오일까요?</a></li>
					<li class="menu-02"><a href="/html/service/number_duo.asp">숫자로 보는 듀오</a></li>
					<li class="menu-02"><a href="/html/service/program01.asp">서비스종류</a></li>
					<li class="menu-02"><a href="/html/service/service.asp">가입비 안내</a></li>
					<li class="menu-02"><a href="/html/service/matching_01.asp">가입 및 활동절차</a></li>
					<!--<li class="menu-02"><a href="/html/service/consult.asp">상담방법&자료요청</a></a></li>-->
					<li class="menu-02"><a href="/html/service/matching_02.asp">매칭시스템</a></li>
					<li class="menu-02"><a href="/html/service/free_service/201611_main_01.asp">서비스 무료체험</a></li>
					<li class="menu-02"><a href="/html/service/members.asp">멤버스클럽 알아보기</a></li>
					<li class="menu-02"><a href="/html/service/marriage_consult.asp">자녀결혼 컨설팅</a></li>
				</ul>
				<div class="d-right">
					<h3 class="thumb" style="position:static; visibility:visible;"><a href="/html/service/members.asp" class="menu-02">결혼 확률 높여주는 멤버스클럽의 장점 4가지!</a></h3>
					<ul class="bn-list">
						<li><a href="/html/service/program01.asp" class="bn-1">듀오 가입안내</a></li>
						<li><a href="/html/member/matching_main.asp" class="bn-2">내 이상형은 어디에?</a></li>
						<li><a href="/html/service/know.asp" class="bn-3">WHY 듀오일까요?</a></li>
					</ul>
				</div>
			</div>
			<div class="common-wrapper-2 depth2">
				<div class="d-left">
					<h2 class="t-menu" style="position:static; visibility:visible;">신뢰할 수 있는 듀오<br /><span class="menu-03">회원검색</span></h2>
					<a href="/html/member/photo_interview.asp" class="go">바로가기</a>
					<p class="tel">무료상담전화<br /><span>1577-8333</span></p>
				</div>
				<ul class="depth-list">
					<li class="menu-03"><a href="/html/member/photo_interview.asp">듀오회원인터뷰</a></li>
					<li class="menu-03"><a href="/html/member/member_search01.asp">결혼회원검색</a></li>
					<li class="menu-03"><a href="/html/member/matching_main.asp">이상형찾기</a></li>
					<li class="menu-03"><a href="/html/member/data_marry.asp">듀오회원현황</a></li>
				</ul>
				<div class="d-right">
					<h3 class="thumb" style="position:static; visibility:visible;"><a href="/html/member/matching_main.asp" class="menu-03">DUO MATCHING TEST! 나만의 이상형 찾기</a></h3>
					<ul class="bn-list">
						<li><a href="/html/service/program01.asp" class="bn-1">듀오 가입안내</a></li>
						<li><a href="/html/member/matching_main.asp" class="bn-2">내 이상형은 어디에?</a></li>
						<li><a href="/html/service/know.asp" class="bn-3">WHY 듀오일까요?</a></li>
					</ul>
				</div>
			</div>
			<div class="common-wrapper-2 depth2">
				<div class="d-left">
					<h2 class="t-menu" style="position:static; visibility:visible;">국내유일 실시간 성혼회원 공개<br /><span class="menu-04">성혼커플</span></h2>
					<a href="/html/duo_couple/main.asp" class="go">바로가기</a>
					<p class="tel">무료상담전화<br /><span>1577-8333</span></p>
				</div>
				<ul class="depth-list">
					<li class="menu-04"><a href="/html/duo_couple/couple_interview.asp">성혼커플 인터뷰</a></li>
					<li class="menu-04"><a href="/html/duo_couple/couple_story.asp">성혼커플 스토리</a></li>
					<li class="menu-04"><a href="/html/duo_couple/couple_list.asp">성혼커플 리스트</a></li>
					<li class="menu-04"><a href="/html/duo_couple/couple_assay_main.asp">성혼커플 분석</a></li>
				</ul>
				<div class="d-right">
					<h3 class="thumb" style="position:static; visibility:visible;"><a href="/html/duo_couple/couple_assay_main.asp" class="menu-04">4시간마다 1명씩 결혼 듀오의 성혼지상주의</a></h3>
					<ul class="bn-list">
						<li><a href="/html/service/program01.asp" class="bn-1">듀오 가입안내</a></li>
						<li><a href="/html/member/matching_main.asp" class="bn-2">내 이상형은 어디에?</a></li>
						<li><a href="/html/service/know.asp" class="bn-3">WHY 듀오일까요?</a></li>
					</ul>
				</div>
			</div>
			<div class="common-wrapper-2 depth2">
				<div class="d-left">
					<h2 class="t-menu" style="position:static; visibility:visible;">다양한 심리테스트<br /><span class="menu-05">러브테스트</span></h2>
					<a href="/html/love_test/main.asp" class="go">바로가기</a>
					<p class="tel">무료상담전화<br /><span>1577-8333</span></p>
				</div>
				<ul class="depth-list">
					<li class="menu-05"><a href="/html/love_test/loveclinic/loveclinic_main.asp">연애진단 테스트</a></li>
					<li class="menu-05"><a href="/html/love_test/self_discovery/self_main.asp">자기성향 테스트</a></li>
					<li class="menu-05"><a href="/html/love_test/love_tendency/love_tendency_main.asp">LOVE 성향 테스트</a></li>
					<li class="menu-05"><a href="/html/love_test/partner_test2/partner_test_main.asp">내 결혼상대 알아보기</a></li>
					<li class="menu-05"><a href="/html/love_test/self_love/self_love_main.asp">연애적성검사</a></li>
					<li class="menu-05"><a href="/html/landing/love_fortune2013.asp">무료 연애운 보기</a></li>
					<li class="menu-05"><a href="/html/love_test/color_test/color_test_main.asp">컬러 진단 테스트</a></li>
					<li class="menu-05"><a href="/html/love_test/ogamlove/ogam_love_main.asp">가상연애유형테스트</a></li>
				</ul>
				<div class="d-right">
					<h3 class="thumb" style="position:static; visibility:visible;"><a href="/html/love_test/love_tendency/love_tendency_main.asp" class="menu-05">당신의 연애성향은? LOVE 성향테스트</a></h3>
					<ul class="bn-list">
						<li><a href="/html/service/program01.asp" class="bn-1">듀오 가입안내</a></li>
						<li><a href="/html/member/matching_main.asp" class="bn-2">내 이상형은 어디에?</a></li>
						<li><a href="/html/service/know.asp" class="bn-3">WHY 듀오일까요?</a></li>
					</ul>
				</div>
			</div>
			<div class="common-wrapper-2 depth2">
				<div class="d-left">
					<h2 class="t-menu" style="position:static; visibility:visible;">재밌고 유용한 TIP<br /><span class="menu-06">미팅가이드</span></h2>
					<a href="/html/meetguide/main.asp" class="go">바로가기</a>
					<p class="tel">무료상담전화<br /><span>1577-8333</span></p>
				</div>
				<ul class="depth-list">
					<li class="menu-06"><a href="/html/meetguide/success_time.asp">미팅성공전략</a></li>
					<li class="menu-06"><a href="/html/meetguide/love_qna_list.asp">연애고민Q&A</a></li>
					<li class="menu-06"><a href="/html/meetguide/love_column_list.asp">연애칼럼</a></li>
					<li class="menu-06"><a href="/html/meetguide/cartoon_list.asp">러브카툰</a></li>
					<li class="menu-06"><a href="/html/meetguide/date_list.asp">추천! 데이트 코스</a></li>
					<li class="menu-06"><a href="/html/meetguide/love_speech_list.asp">연애스피치</a></li>
					<li class="menu-06"><a href="/html/meetguide/love_institute_list.asp">연애연구소</a></li>
					<li class="menu-06"><a href="/html/meetguide/research_list.asp">톡톡! 리서치</a></li>
				</ul>
				<div class="d-right">
					<h3 class="thumb" style="position:static; visibility:visible;"><a href="/html/meetguide/love_column_list.asp" class="menu-06">알쏭달쏭 연애심리 연애컬럼</a></h3>
					<ul class="bn-list">
						<li><a href="/html/service/program01.asp" class="bn-1">듀오 가입안내</a></li>
						<li><a href="/html/member/matching_main.asp" class="bn-2">내 이상형은 어디에?</a></li>
						<li><a href="/html/service/know.asp" class="bn-3">WHY 듀오일까요?</a></li>
					</ul>
				</div>
			</div>
			<div class="common-wrapper-2 depth2">
				<div class="d-left">
					<h2 class="t-menu" style="position:static; visibility:visible;">공연 문화 그리고 미팅파티<br /><span class="menu-07">이벤트</span></h2>
					<a href="/html/event/main.asp" class="go">바로가기</a>
					<p class="tel">무료상담전화<br /><span>1577-8333</span></p>
				</div>
				<ul class="depth-list">
					<li class="menu-07"><a href="/html/event/event_list.asp">이벤트 전체보기</a></li>
					<li class="menu-07"><a href="/html/event/join_party.asp">기업제휴파티</a></li>
					<li class="menu-07"><a href="/html/event/event_sketch_list.asp">파티현장 갤러리</a></li>
					<li class="menu-07"><a href="/html/event/event_spentry_list.asp">후기&자유게시판</a></li>
					<li class="menu-07"><a href="/html/event/event_qna_01.asp">듀오파티 Q&A</a></li>
				</ul>
				<div class="d-right">
					<h3 class="thumb" style="position:static; visibility:visible;"><a href="/html/event/event_list_view.asp?evt_no=4322" class="menu-07">12월 노블레스 멤버십 파티</a></h3>
					<ul class="bn-list">
						<li><a href="/html/service/program01.asp" class="bn-1">듀오 가입안내</a></li>
						<li><a href="/html/member/matching_main.asp" class="bn-2">내 이상형은 어디에?</a></li>
						<li><a href="/html/service/know.asp" class="bn-3">WHY 듀오일까요?</a></li>
					</ul>
				</div>
			</div>
			<div class="common-wrapper-2 depth2">
				<div class="d-left">
					<h2 class="t-menu" style="position:static; visibility:visible;">재혼도 역시 듀오<br /><span class="menu-08">재혼</span></h2>
					<a href="http://www.duoremarry.com/" class="go" target="_blank">바로가기</a>
					<p class="tel">무료상담전화<br /><span>1577-8333</span></p>
				</div>
				<ul class="depth-list">
					<li class="menu-08"><a href="http://www.duoremarry.com/html/intro/ceo_greeting.asp" target="_blank">듀오재혼소개</a></li>
					<li class="menu-08"><a href="http://www.duoremarry.com/html/service/know.asp" target="_blank">가입안내</a></li>
					<li class="menu-08"><a href="http://www.duoremarry.com/html/member/member_search01.asp" target="_blank">재혼회원검색</a></li>
					<li class="menu-08"><a href="http://www.duoremarry.com/html/guide/remarry_column.asp" target="_blank">재혼전문가 칼럼</a></li>
					<li class="menu-08"><a href="http://www.duoremarry.com/html/guide/success_list.asp" target="_blank">재혼성공법</a></li>
					<li class="menu-08"><a href="http://www.duoremarry.com/html/love_test/lovetest_main.asp" target="_blank">재혼진단테스트</a></li>
				</ul>
				<div class="d-right">
					<h3 class="thumb" style="position:static; visibility:visible;"><a href="http://www.duoremarry.com/html/member/data_remarry.asp" class="menu-08" target="_blank">듀오 재혼회원 분석 Report</a></h3>
					<ul class="bn-list">
						<li><a href="http://www.duoremarry.com/html/service/service.asp" class="bn-1" target="_blank">듀오 가입안내</a></li>
						<li><a href="http://www.duoremarry.com/html/member/matching_main.asp" class="bn-2" target="_blank">내 이상형은 어디에?</a></li>
						<li><a href="http://www.duoremarry.com/html/service/know.asp" class="bn-3" target="_blank">WHY 듀오일까요?</a></li>
					</ul>
				</div>
			</div>
			<div class="common-wrapper-2 depth2">
				<div class="d-left">
					<h2 class="t-menu" style="position:static; visibility:visible;">듀오가 만든 웨딩컨설팅<br /><span class="menu-09">웨딩</span></h2>
					<a href="http://www.duowed.com/" class="go" target="_blank">바로가기</a>
					<p class="tel">무료상담전화<br /><span>1577-2229</span></p>
				</div>
				<ul class="depth-list">
					<li class="menu-09"><a href="http://www.duowed.com/html/duowed/main.asp" target="_blank">듀오웨드소개</a></li>
					<li class="menu-09"><a href="http://www.10weddinghall.com/html/search/hall_search.asp" target="_blank">웨딩홀 검색</a></li>
					<li class="menu-09"><a href="http://www.10weddinghall.com/html/event/main.asp" target="_blank">웨딩홀 이벤트</a></li>
					<li class="menu-09"><a href="http://www.duowed.com/html/gallery/gallery_list.asp?pagemode=studio" target="_blank">웨딩갤러리</a></li>

				  <li class="menu-09"><a href="http://www.duowed.com/html/couple/after_list.asp" target="_blank">커플스토리</a></li>
					<li class="menu-09"><a href="http://www.duowed.com/html/event/free_diary_consult.asp" target="_blank">웨딩다이어리신청</a></li>
				</ul>
				<div class="d-right">
					<h3 class="thumb" style="position:static; visibility:visible;">
                    <a href="http://www.duowed.com/html/event/event_view.asp?idx=455" class="menu-09" target="_blank">인기브랜드 웨딩스타일링</a></h3>

                   <!-- <a href="http://www.duowed.com/html/guide/dress_choice.asp" class="menu-09" target="_blank">드레스고르기 테스트</a></h3>-->
					<ul class="bn-list">
						<li><a href="http://www.duowed.com/html/gallery/self.asp" class="w-bn-1" target="_blank">웨딩패키지 셀프견적</a></li>
						<li><a href="http://www.10weddinghall.com/html/estimate/estimate.asp" class="w-bn-2" target="_blank">예식비용 견적내기</a></li>
						<li><a href="http://www.duowed.com/html/guide/dress_choice.asp" class="w-bn-3" target="_blank">드레스 고르기 테스트</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="border"></div>
	</div>
</div>
<script type="text/javascript">
$(document).mousemove(function(e){
	if (e.pageY > 450)
	{
		$(".depth-menu").slideUp(300);
	}

});

$(".root_menu").mouseover(function(){
	var now_position = $(".root_menu").index(this);

	$(".depth-menu").slideDown(300);
	$(".depth2").hide();
	$(".depth2").eq(now_position).show();
});

$(".gnb").mouseover(function(){
	$(".depth-menu").slideUp(300);
});

$("#subcontentArea").mouseover(function(){
	$(".depth-menu").slideUp(300);
});



</script>
	<!--상단영역-->
	<!--내용영역-->
	<div style="width:100%; padding-top:98px;">
        <form name="matchForm" method="post">
            <input type="hidden" name="u_div" value="">
            <div id="manwrap">
                <div id="con">
                    <div id="touchSlider2">
                        <ul class="image_container">
                            <li class="q1">
                                <p class="q"><img src="/html/member/match/images/q_tit1_m.png" /></p>
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
                                <p class="q"><img src="/html/member/match/images/q_tit2.png" /></p>
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
                                <p class="q"><img src="/html/member/match/images/q_tit3.png" /></p>
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
                                <p class="q"><img src="/html/member/match/images/q_tit4.png" /></p><div>
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
        </form>
        <div id="etc-footer">
            <ul>
                <li><a href="/html/love_test/love_tendency/love_tendency_main.asp"><img src="/html/member/match/images/banner_1.gif" alt="LOVE 성향 테스트" /></a></li>
                <li><a href="/html/love_test/self_love/self_love_main.asp"><img src="/html/member/match/images/banner_2.gif" alt="연애적성검사" /></a></li>
                <li><a href="/html/love_test/loveclinic/loveclinic_main.asp"><img src="/html/member/match/images/banner_3.gif" alt="연애진단테스트" /></a></li>
                <li><a href="/html/landing/love_fortune2013.asp"><img src="/html/member/match/images/banner_4.gif" alt="무료 연애운 보기" /></a></li>
                <li><a href="/html/love_test/partner_test2/partner_test_main.asp"><img src="/html/member/match/images/banner_5.gif" alt="결혼상대 알아보기" /></a></li>
            </ul>
        </div>
	</div>
	<!--내용영역-->
	<!--하단영역-->

<script type="text/javascript">
function footer_agree_view(vmode)
{
	if (vmode == 0)
	{
		$("#footer_agree").show();
	}
	else
	{
		$("#footer_agree").hide();
	}
}

function footer_select_jisa(obj)
{
	if ($(obj).val() == "14" || $(obj).val() == "11" || $(obj).val() == "12")
	{
		$("#bottom_speed #f_mtel1").hide();
		$("#bottom_speed #f_mtel_text").hide();
		$("#bottom_speed #f_mtel").show();
	}
	else
	{
		$("#bottom_speed #f_mtel1").show();
		$("#bottom_speed #f_mtel_text").show();
		$("#bottom_speed #f_mtel").hide();
	}

}

//체크박스,라디오버튼 체크표시 label class 변경/ 실제 체크박스 checked 별도 처리
function check_class_togle(obj,addclass,removeclass,index)
{
	var now_class;
	var this_obj;

	this_obj = $(obj);

	if (index >= 0)
	{
		now_class = this_obj.eq(index).attr("class");
	}
	else
	{
		now_class = this_obj.attr("class");
	}

	if (addclass.length > 0 && now_class.indexOf(addclass) < 0 )
	{
		if (index >= 0)
		{
			this_obj.eq(index).addClass(addclass);
		}
		else
		{
			this_obj.addClass(addclass);
		}
	}

	if (removeclass.length > 0 && now_class.indexOf(removeclass) > 0 )
	{
		if (index >= 0)
		{
			this_obj.eq(index).removeClass(removeclass);
		}
		else
		{
			this_obj.removeClass(removeclass);
		}
	}
}

function change_radio(obj,radioName,index)
{
	var now_class;

	if (index >=0)
	{
		now_class = $(obj).eq(index).attr("class");
	}
	else
	{
		now_class = $(obj).attr("class");
	}

	$(obj).each(function(index){
		check_class_togle(obj,"r-off","r-on",index);
	});


	if (now_class.indexOf("r-on") > 0)
	{
		check_class_togle(obj,"r-off","r-on",index);
		$("#bottom_speed :radio[name='" + radioName + "']").eq(index).prop("checked",false);
	}
	else
	{
		check_class_togle(obj,"r-on","r-off",index);
		$("#bottom_speed :radio[name='" + radioName + "']").eq(index).prop("checked",true);
	}

}

function footer_agree_check()
{
	if (!$("#footer_agree").is(":visible"))
	{
		$("#footer_agree").show();
	}
}

function bottom_check_form()
{
	var formnm;

	formnm = document.bottom_speed;

	if(!isValidType(formnm.u_sex, 'check_nofocus', '성별을 선택하여 주세요.' )){ return; }
	if(!isValidType(formnm.u_married,'check_nofocus','초혼 재혼을 선택하여 주세요.')){ return;}
	if(!isValidType(formnm.u_jisa, 'select', '거주지역을 선택하여 주세요.' )){ return; }
	if(!isValidType(formnm.u_edu, 'select', '학력을 선택하여 주세요.' )){ return; }

	if (formnm.u_name.value == '이름')
	{
		alert("이름을 입력하여 주세요.");
		formnm.u_name.focus();
		return;
	}

	if(!isValidType(formnm.u_name, 'text', '이름을 입력하여 주세요.' )){ return; }
	if(!isValidType(formnm.u_birth, 'select', '출생년도를 선택하여 주세요.' )){ return; }


	if ($("select[name='u_jisa']").val() == "14" || $("select[name='u_jisa']").val() == "11" || $("select[name='u_jisa']").val() == "12")
	{
		if (formnm.u_mtel.value == "핸드폰")
		{
			alert("핸드폰번호를 입력해 주세요.");
			formnm.u_mtel.value = "";
			formnm.u_mtel.focus();
			return;
		}

		if(!isValidType(formnm.u_mtel, 'text', '연락처를 입력해 주세요.' )){ return; }

		if (!mtel_check_value(formnm.u_mtel.value))
		{
			alert("하이픈(-)외에 다른문자는 입력할 수 없습니다.");
			return;
		}
	}
	else
	{
		if(!isValidType(formnm.u_mtel1, 'select', '연락처 앞자리를 선택하여 주세요.' )){ return; }
		if(!isValidType(formnm.u_mtel2, 'number', '연락처 중간자리를 입력하여 주세요.' )){ return; }
		if(!isValidType(formnm.u_mtel3, 'number', '연락처 끝자리를 입력하여 주세요.' )){ return; }

		if(!hp_chck_array(formnm.u_mtel2.value) && !hp_chck_array(formnm.u_mtel3.value)){
			alert("핸드폰 번호가 올바르지 않습니다.");
			formnm.u_mtel3.focus();
			return;
		}

		formnm.u_mtel.value = "";
	}

	footer_agree_check();

	if(!agree_check('f_agree_all','f_agree1','f_agree2')){return;}

	var formdata;

	formdata = ajax_setFormData("bottom_speed","u_name");

	$.ajax({
		url:"/html/common/right_speed_proc.asp",
		data:formdata,
		type:"POST",
		success:function(data){
			if (data.indexOf("[[proc=success]]") > -1)
			{
				alert("상담신청이 완료 되었습니다.");
				formnm.reset();
				$("#footer_agree").hide();
				$("#bottom_speed #f_mtel1").show();
				$("#bottom_speed #f_mtel_text").show();
				$("#bottom_speed #f_mtel").hide();

				$(".s_sex").each(function(index){
					check_class_togle(this,"r-off","r-on",-1);
				});

				$(".s_married").each(function(index){
					check_class_togle(this,"r-off","r-on",-1);
				});
			}
			else
			{
				alert("오류가 발생하였습니다. 다시 시도해 주세요.." + "\n" + data);
			}
		},
		error:function(data){
			alert("오류가 발생하였습니다. 다시 시도해 주세요." + "\n" + data);
		}
	})
}

</script>
<div id="n_footer">
	<div class="record-type1">
		<div class="contents-wrapper">
			<div class="speed-area">
				<h3 class="speed-txt">SPEED 상담</h3>
				<form method="post" name="bottom_speed" id="bottom_speed">
				<input type="hidden" name="pg" value="bottom_speed" />
					<fieldset style="position:relative;">
						<legend class="hideTxt">스피드 상담을 위한 정보입력</legend>
						<div class="speed-row">
							<input type="radio" style="display:none;" name="u_sex" value="1" />
							<label class="s_sex speed-label-3 r-off" title="남성" onclick="change_radio('.s_sex','u_sex',0);">남성</label>
							<input type="radio" style="display:none;" name="u_sex" value="2"/>
							<label class="s_sex speed-label-3 r-off" title="여성" onclick="change_radio('.s_sex','u_sex',1);">여성</label>
						</div>
						<div class="speed-row">
							<input type="radio" style="display:none;" name="u_married" value="5"/>
							<label class="s_married speed-label-3 r-off" onclick="change_radio('.s_married','u_married',0);">미혼</label>
							<input type="radio" style="display:none;" name="u_married" value="2"/>
							<label class="s_married speed-label-3 r-off" onclick="change_radio('.s_married','u_married',1);">재혼</label>
						</div>
						<div class="speed-row">
							<select style="display:block; margin:3px 0 6px 0; width:110px; height:26px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;" name="u_jisa" onchange="footer_select_jisa(this)">
								<option value="">거주지역</option>
								<option value="01">서울</option>
<option value="02">인천</option>
<option value="03">수원</option>
<option value="13">천안</option>
<option value="04">대전</option>
<option value="05">전주</option>
<option value="06">광주</option>
<option value="07">대구</option>
<option value="08">부산</option>
<option value="09">울산</option>
<option value="10">창원</option>
<option value="14">뉴욕</option>
<option value="11">LA</option>

							</select>
							<select style="display:block; margin:3px 0 6px 0; width:110px; height:26px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;" name="u_edu">
								<option value="">학력</option>
								<option value="02">고등학교 졸업</option>
<option value="05">전문대졸업</option>
<option value="09">대학교졸업</option>
<option value="11">대학원재학</option>
<option value="13">대학원졸업</option>
<option value="14">박사이상</option>
<option value="15">기타</option>

							</select>
						</div>
						<div class="speed-row">
							<input type="text" style="display:block; margin:3px 0 6px 0; width:80px; height:22px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;" name="u_name" maxlength="10"  onclick="footer_agree_view(0);" value="이름" onfocus="footer_agree_view(0);if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
							<div style="display:block; margin:3px 0 6px 0; ">
								<!--
								<span>19</span>
								<input type="text" style="width:30px; height:22px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;" name="u_birth" maxlength="2" />
								<span>년생</span>
								-->
								<select name="u_birth" style="display:block; margin:3px 0 6px 0; width:80px; height:22px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;">
									<option value="">출생년</option>
									<option value="1997">1997년</option><option value="1996">1996년</option><option value="1995">1995년</option><option value="1994">1994년</option><option value="1993">1993년</option><option value="1992">1992년</option><option value="1991">1991년</option><option value="1990">1990년</option><option value="1989">1989년</option><option value="1988">1988년</option><option value="1987">1987년</option><option value="1986">1986년</option><option value="1985">1985년</option><option value="1984">1984년</option><option value="1983">1983년</option><option value="1982">1982년</option><option value="1981">1981년</option><option value="1980">1980년</option><option value="1979">1979년</option><option value="1978">1978년</option><option value="1977">1977년</option><option value="1976">1976년</option><option value="1975">1975년</option><option value="1974">1974년</option><option value="1973">1973년</option><option value="1972">1972년</option><option value="1971">1971년</option><option value="1970">1970년</option><option value="1969">1969년</option><option value="1968">1968년</option><option value="1967">1967년</option><option value="1966">1966년</option><option value="1965">1965년</option><option value="1964">1964년</option><option value="1963">1963년</option><option value="1962">1962년</option><option value="1961">1961년</option><option value="1960">1960년</option><option value="1959">1959년</option><option value="1958">1958년</option><option value="1957">1957년</option><option value="1956">1956년</option><option value="1955">1955년</option><option value="1954">1954년</option><option value="1953">1953년</option><option value="1952">1952년</option><option value="1951">1951년</option><option value="1950">1950년</option><option value="1949">1949년</option><option value="1948">1948년</option><option value="1947">1947년</option><option value="1946">1946년</option><option value="1945">1945년</option><option value="1944">1944년</option><option value="1943">1943년</option><option value="1942">1942년</option><option value="1941">1941년</option><option value="1940">1940년</option><option value="1939">1939년</option><option value="1938">1938년</option><option value="1937">1937년</option><option value="1936">1936년</option>
								</select>
							</div>
						</div>
						<div class="speed-row">
							<input type="text" style="display:none; margin:3px 0 6px 0; width:80px; height:22px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;" name="u_mtel" id="f_mtel"/>

							<!--<input type="text" style="display:block; margin:3px 0 6px 0; width:80px; height:22px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;" name="u_mtel1" maxlength="3" id="f_mtel1" />-->
							<select style="display:block; margin:3px 0 6px 0; width:80px; height:26px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;" name="u_mtel1">
							<option value="">연락처</option>
							<option value="010">010</option>
<option value="011">011</option>
<option value="016">016</option>
<option value="017">017</option>
<option value="018">018</option>
<option value="019">019</option>
							</select>
							<div style="display:block; margin:3px 0 6px 0; overflow:hidden;" id="f_mtel_text">
								<input type="text" style="width:30px; height:22px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;" name="u_mtel2" maxlength="4" />
								<span>-</span>
								<input type="text" style="width:30px; height:22px; border:1px solid #dbdbdb; font-family:'Malgun Gothic','맑은고딕'; font-size:14px;" name="u_mtel3" maxlength="4"/>
							</div>
						</div>
						<a href="javascript:bottom_check_form();" class="speed-btn">무료신청</a>

						<div class="agree" id="footer_agree" style="display:none;">
							<div style="width:100%; position:relative;">
							<div style="margin:0 0 10px 0;" class="c_flow">
								<input type="checkbox" name="f_agree_all" value="Y" id="agree_f3" onclick="agree_click('f_agree_all','f_agree1','f_agree2',0);" class="a_input" />
								<label class="a_label" for="agree_f3" style=" width:600px;">개인정보 수집 및 이용, 마케팅 활용에 모두 동의</label>
							</div>
							<div class="c_flow">
								<div style="float:left; width:300px;">
									<div class="a_con">

		&lt;개인정보 수집 및 이용동의 &gt;<br/><br/>

		당사는 '개인정보보호법'에 따라 귀하의 개인정보를 다음과 같이 수집.이용하고자 합니다.<br/><br/>

		개인정보의 수집.이용 목적<br/>
		- 회원관리 및 결혼서비스에 관한 상담 및 자료요청 의사 확인<br/>
		- 결혼관련 서비스 상담 및 이용 권유, 각종 서비스 및 이벤트 안내<br/>
		- 테스트 결과안내를 위한 정보수집<br/>
		- 이벤트 참가신청, 참가가능여부, 당첨자발표, 진행사항에 대한 정보 전달<br/><br/>

		수집하는 개인정보의 항목<br/>
		- 성명, 주민번호앞자리(또는 출생년월일) 성별, 연락처 및 휴대폰번호, 결혼경력, 이메일, 학력(또는 최종출신학교), 주거주지(또는 주소), 직업종류(또는 직장명)<br/><br/>

		개인정보의 보유 및 이용기간<br/>
		- 결혼중개업법 기준 5년 또는 개인정보 삭제 및 탈회를 요청할 때까지 보유.이용합니다.<br/>
		- 결혼회원 가입의 경우 개인정보에 관한 회사 내부 방침에 따라 개인정보를 보유합니다.<br/>
		- 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.<br/><br/>
		가. 회사 내부 방침에 의한 정보보유 사유<br/><br/>

		-개인정보 삭제 및 회원탈퇴 신청기록 <br/>
		　보존 이유 : 부정 이용 방지 <br/>
		　보존 기간 : 회원탈퇴일부터 2년 <br/>
		　보존 항목 : 아이디, 이름, 주민번호 앞자리, 이메일 <br/><br/>

		-채용에 관한 입사지원 기록 <br/>
		　보존 이유 : 상시채용을 위한 보관 <br/>
		　보존기간 : 개인정보 삭제를 요청하기 전까지<br/><br/>

		나. 관련법령에 의한 정보보유 사유 <br/><br/>

		상법, 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. 이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.<br/><br/>

		- 계약 또는 청약철회 등에 관한 기록 <br/>
		　보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률 <br/>
		　보존 기간 : 5년 <br/><br/>

		- 대금결제 및 재화 등의 공급에 관한 기록<br/>
		　보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률 <br/>
		　보존 기간 : 5년 <br/><br/>

		- 전자금융 거래에 관한 기록 <br/>
		　보존 이유 : 전자금융거래법 <br/>
		　보존 기간 : 5년 <br/><br/>

		- 소비자의 불만 또는 분쟁처리에 관한 기록 <br/>
		　보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률 <br/>
		　보존 기간 : 3년 <br/><br/>

		- 본인 확인에 관한 기록 <br/>
		　보존 이유 : 정보통신 이용촉진 및 정보보호 등에 관한 법률 <br/>
		　보존 기간 : 6개월 <br/><br/>

		- 웹사이트 방문기록 <br/>
		　보존 이유 : 통신비밀보호법 <br/>
		　보존 기간 : 3개월<br/><br/>

		※ 정보동의시 가입상담을 위해 최소한의 정보만 수집.이용하게 되며, 본 동의를 거부하시는 경우에는 해당 서비스이용 및 가입상담 등 정상적인 서비스 제공이 불가능 할 수 있습니다.<br/><br/>



									</div>
									<div style="margin:5px 0 0 0;" class="c_flow">
										<input type="checkbox" name="f_agree1" value="Y" id="agree_f1" onclick="agree_click('f_agree_all','f_agree1','f_agree2',1);" class="a_input" />
										<label class="a_label" for="agree_f1" style=" width:280px; font-weight:normal;">개인정보 수집 및 이용 동의</label>
									</div>
								</div>
								<div style="float:right; width:300px;">
									<div class="a_con">

		&lt;개인정보의 제공에 관한 안내&gt;<br/><br/>

		[소비자 권익 보호에 관한 사항]<br/><br/>
		최소한의 정보처리 및 동의거부에 대한 안내 : 정보동의시 가입상담 및 고객관리 등을 위해 최소한의 정보만 수집.이용하게 되며, 본 동의를 거부하시는 경우에는 해당 서비스의 이용 및 가입상담 등 정상적인 서비스 제공이 불가능할 수 있음을 알려 드립니다.<br/><br/>
		개인정보 제공동의 철회 : 개인정보 수집ㆍ이용에 동의한 이후에도 전화[대표번호], 서면, 메일 등을 통해 고객정보 관리 등에 대한 개인정보 처리 중지를 요청할 수 있습니다.<br/><br/>
		상품권유 중지청구(Do-Not Call) : 개인정보 제공 및 이용에 동의한 이후에도 전화[대표번호], 서면 등을 통해 마케팅활동에 대한 중지를 요청할 수 있습니다.
		<br/><br/>

		개인정보 제공에 관한 사항<br/><br/>
		1. 개인정보를 제공받는 자 : 듀오 커플매니저 및 이벤트/마케팅 담담<br/><br/>
		2. 개인정보를 제공받는 자의 이용 목적<br/>
		- 회원관리 및 결혼서비스에 관한 상담 및 자료요청 의사 확인<br/>
		- 결혼관련 서비스 상담 및 이용 권유, 각종 서비스 및 이벤트 안내<br/>
		- 테스트 결과안내를 위한 정보수집<br/>
		- 이벤트 참가신청, 참가가능여부, 당첨자발표, 진행사항에 대한 정보 전달<br/><br/>

		3. 제공할 개인정보의 내용<br/><br/>
		- 개인식별정보 (성명, 주민번호앞자리(또는 출생년월일) 성별, 연락처 및 휴대폰번호, 결혼경력, 이메일, 학력(또는 최종출신학교), 주거주지(또는 주소), 직업종류(또는 직장명))<br/><br/>

		4. 제공받는 자의 개인정보 보유 및 이용기간<br/><br/>
		- 결혼중개업법 기준 5년 또는 개인정보 삭제 및 탈회를 요청할 때까지 보유.이용합니다.<br/>
		- 결혼회원 가입의 경우 개인정보에 관한 회사 내부 방침에 따라 개인정보를 보유합니다.<br/>
		- 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.<br/><br/>
		가. 회사 내부 방침에 의한 정보보유 사유<br/><br/>

		-개인정보 삭제 및 회원탈퇴 신청기록 <br/>
		　보존 이유 : 부정 이용 방지 <br/>
		　보존 기간 : 회원탈퇴일부터 2년 <br/>
		　보존 항목 : 아이디, 이름, 주민번호 앞자리, 이메일 <br/><br/>

		-채용에 관한 입사지원 기록 <br/>
		　보존 이유 : 상시채용을 위한 보관 <br/>
		　보존기간 : 개인정보 삭제를 요청하기 전까지<br/><br/>

		나. 관련법령에 의한 정보보유 사유 <br/><br/>

		상법, 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. 이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.<br/><br/>

		- 계약 또는 청약철회 등에 관한 기록 <br/>
		　보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률 <br/>
		　보존 기간 : 5년 <br/><br/>

		- 대금결제 및 재화 등의 공급에 관한 기록<br/>
		　보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률 <br/>
		　보존 기간 : 5년 <br/><br/>

		- 전자금융 거래에 관한 기록 <br/>
		　보존 이유 : 전자금융거래법 <br/>
		　보존 기간 : 5년 <br/><br/>

		- 소비자의 불만 또는 분쟁처리에 관한 기록 <br/>
		　보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률 <br/>
		　보존 기간 : 3년 <br/><br/>

		- 본인 확인에 관한 기록 <br/>
		　보존 이유 : 정보통신 이용촉진 및 정보보호 등에 관한 법률 <br/>
		　보존 기간 : 6개월 <br/><br/>

		- 웹사이트 방문기록 <br/>
		　보존 이유 : 통신비밀보호법 <br/>
		　보존 기간 : 3개월<br/><br/>

		5. 서비스 안내방법 : SMS, Email, 전화 <br/><br/>

									</div>
									<div style="margin:5px 0 0 0;" class="c_flow">
										<input type="checkbox" name="f_agree2" id="agree_f2" value="Y" onclick="agree_click('f_agree_all','f_agree1','f_agree2',2);" class="a_input" />
										<label class="a_label" for="agree_f2" style=" width:280px; font-weight:normal;">마케팅 활용 동의</label>
									</div>
								</div>
							</div>
							<a href="javascript:footer_agree_view(1);"><img src="/html/common/img/closeBtn_02.gif" alt="닫기" class="a_close" /></a>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="video-area">
				<div style="float:left; margin:30px 0 0 0; width:100px;">
					<h3 class="video-txt">듀오 <br /><span style="color:#fe0000;">동영상이야기</span></h3>
					<a href="/html/duostory/video.asp" class="detail-btn">자세히보기</a>
				</div>
				<div class="v-avi">
					<object type="application/x-shockwave-flash" data="/html/duostory/img/movie_duostory.swf" width="150" height="110">
					<param name="movie" value="/html/duostory/img/movie_duostory.swf" />
					<param name="quality" value="high" />
					<param name="wmode" value="transparent" />듀오 동영상 이야기
					</object>
				</div>
			</div>
		</div>
	</div>
	<div class="record-type2">
    <h3>듀오 수상실적</h3>
    <ul>
        <li class="record-first">
        <a href="/html/company/company_prize_view.asp?CP_No=76"><span class="txt-type-1">2016 대한민국 대표브랜드 대상</span><span class="txt-type-2">7년 연속 수상!</span><span class="txt-type-3">결혼정보서비스 부문</span></a>
        </li>
        <li class="record-second">
        <a href="/html/company/company_prize_view.asp?CP_No=60"><span class="txt-type-3">2014 소비자 중심 경영</span><span class="txt-type-2">CCM 우수기업 인증</span><span class="txt-type-1">업계 최초 공정거래위원회 ccm인증</span></a>
        <span class="badge">업계최초</span>
        </li>
        <li class="record-third">
        <a href="/html/company/company_prize_view.asp?CP_No=74"><span class="txt-type-1">2016 대한민국 퍼스트 브랜드</span><span class="txt-type-2">7년 연속 수상!</span><span class="txt-type-3">결혼정보서비스 부문</span></a>
        </li>
    </ul>
</div>
<div class="record-type3">
    <h3>듀오 수상실적</h3>
    <div class="contents-wrapper" style="height:50px; overflow:hidden;">
        <!--ul 의 컨텐츠가 돌아가면 됩니다.-->
        <ul style=" margin:0; padding:0; list-style:none; width:5682px; height:50px; overflow:hidden;" id="prize_items">
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=65"><img src="/html/main_img/footerPrizeBn_02.jpg" alt="2015 대표브랜드 대상 결혼정보서비스 부문"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=65"><span class="title-type1">대표브랜드 대상</span><span class="title-type2">결혼정보서비스 부문</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=61"><img src="/html/main_img/footerPrizeBn_27.jpg" alt="2015 고객감동경영대상 결혼정보서비스 부문"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=61"><span class="title-type1">고객감동경영대상</span><span class="title-type2">결혼정보서비스 부문</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=60"><img src="/html/main_img/footerPrizeBn_28.jpg" alt="소비자중심경영(CCM) 우수기업 인증"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=60"><span class="title-type1">소비자중심경영(CCM)</span><span class="title-type2">우수기업 인증서 수여</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=59"><img src="/html/main_img/footerPrizeBn_29.jpg" alt="결혼정보분야 선정 올해를 빛낸 히트상품"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=59"><span class="title-type1">결혼정보분야 선정</span><span class="title-type2">올해를 빛낸 히트상품</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=62"><img src="/html/main_img/footerPrizeBn_15.jpg" alt="2015 소비자가 뽑은 가장 신뢰하는 브랜드"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=62"><span class="title-type1">소비자가 뽑은</span><span class="title-type2">가장 신뢰하는 브랜드</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=35"><img src="/html/main_img/footerPrizeBn_24.jpg" alt="2014년 대한민국 올해를 빛낸 히트상품 선정"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=59"><span class="title-type1">대한민국 올해를</span><span class="title-type2">빛낸 히트상품 선정</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=52"><img src="/html/main_img/footerPrizeBn_26.jpg" alt="2014 프리미엄 브랜드 지수 1위"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=52" "=""><span class="title-type1">프리미엄</span><span class="title-type2">브랜드 지수 1위</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=43"><img src="/html/main_img/footerPrizeBn_20.jpg" alt="지속가능경영대상 중소기업청장상 수상"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=43"><span class="title-type1">지속가능경영대상</span><span class="title-type2">중소기업청장상 수상</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=42"><img src="/html/main_img/footerPrizeBn_21.jpg" alt="고객감동브랜드 1위 결혼정보서비스 부문"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=42"><span class="title-type1">고객감동브랜드 1위</span><span class="title-type2">결혼정보서비스 부문</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=36"><img src="/html/main_img/footerPrizeBn_23.jpg" alt="2012 대한민국 윤리경영 대상 수상"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=36"><span class="title-type1">대한민국</span><span class="title-type2">윤리경영 대상 수상</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=25"><img src="/html/main_img/footerPrizeBn_01.jpg" alt="소비자 권익증진 경영대상 고객감동 부문 수상"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=25"><span class="title-type1">소비자 권익증진 대상</span><span class="title-type2">고객감동 부문 수상</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=33"><img src="/html/main_img/footerPrizeBn_18.jpg" alt="2012 소비자선정 최고의 브랜드 대상"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=33"><span class="title-type1">소비자선정</span><span class="title-type2">최고의 브랜드 대상</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=28"><img src="/html/main_img/footerPrizeBn_19.jpg" alt="2011 고객사랑 브랜드 대상"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=28"><span class="title-type1">고객사랑</span><span class="title-type2">브랜드 대상</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=23"><img src="/html/main_img/footerPrizeBn_05.jpg" alt="소비자가 뽑은  '신뢰기업 대상' 수상"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=23"><span class="title-type1">소비자가 뽑은</span><span class="title-type2">신뢰기업 대상' 수상</span></a>
            </div>
            </li>
            <li>
            <a href="/html/company/company_prize_view.asp?CP_No=16"><img src="/html/main_img/footerPrizeBn_09.jpg" alt="2011 고객행복경영 대상 결혼정보서비스 부분"></a>
            <div class="textarea">
                <a href="/html/company/company_prize_view.asp?CP_No=16"><span class="title-type1">한국 소비자 웰빙지수</span><span class="title-type2">결혼정보부문 1위</span></a>
            </div>
            </li>
        </ul>
    </div>
</div>
<div id="n_footer_wrapper">
    <h2>하단 영역</h2>
    <div id="footer-menu">
        <ul>
            <li style="margin-left: 0;"><a href="/html/company/company_manage.asp">회사소개</a></li>
            <li class="policy"><a style="color: #fc4740;font-size: 1.2em;letter-spacing: -.5px;" href="/com_member/privacy_02.asp?site=duo" target="_blank">개인정보처리방침</a></li>
            <li><a href="/com_member/privacy_01.asp?site=duo" target="_blank">이용약관</a></li>
            <li><a href="javascript:notice_popup_view();">손해배상청구절차</a></li>
            <li><a href="/html/duostory/partner.asp?tab=4">제휴문의</a></li>
            <li><a href="http://recruit.duo.co.kr/html/index.asp" target="_blank">채용공고</a></li>
            <li><a href="/html/duostory/browse.asp">찾아오시는길</a></li>
            <li><a href="/html/bottom/sitemap.asp">사이트맵</a></li>
        </ul>
		<form class="jisa_Form" target="_blank" name="jisa_form" id="jisa_form" method="post">
        <select class="select_jisa" name="u_jisa" onchange="jisa_select(this.value)">
        <option>국내외지사</option>
        <option value="/html/jisa/jisa_main.asp?n_type=01">서울본사</option>
        <option value="/html/jisa/jisa_main.asp?n_type=10">인천듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=11">수원듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=35">천안듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=12">부산듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=20">대구듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=30">대전듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=31">광주듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=40">울산듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=50">창원듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=51">전주듀오</option>
         <option value="/html/jisa/jisa_main.asp?n_type=70">LA 듀오</option>
        <option value="/html/jisa/jisa_main.asp?n_type=75">뉴욕듀오</option>

        </select>
		</form>
    </div>
    <div id="footer-info">
        <div class="contents-wrapper" style="margin-top:30px; overflow:hidden; position:relative;">
            <h3>듀오 정보</h3>
            <img src="/html/main_img_2015/footer-logo.gif" alt="듀오, 한국대표결혼정보회사" class="footerLogo">
            <div class="info" style="box-sizing:content-box !important;">
                <address style="font-style:normal;">서울 강남구 강남대로 406 (역삼동 820-9 글라스타워) 11,12,16,17층 (06134)</address>
                <p>상호명 : 듀오정보(주) / 대표자 : 박수경 / 결혼중개업 신고번호 : 강남 080031<br>등록번호 : 서울 080079 / 사업자등록번호 : 214-86-28824<br>통신판매업 신고 : 강남 - 3259호 [<a href="http://www.ftc.go.kr/info/bizinfo/communicationList.jsp" target="_blank" style="color:#959595;">사업자정보확인</a>]</p>
                <p class="contact" style="box-sizing:content-box !important;"><span class="tel">무료상담전화 : <span>1577-8333</span></span> / Fax : 02-550-6003 / Email : duo@duonet.com</p>
                <p class="copyright" style="box-sizing:content-box !important;">copyright <span>1995~2015</span> @duoinfo corp. all right reserved</p>
            </div>
            <div class="sns">
                <ul>
                    <li><a href="https://twitter.com/duoepisode" class="twitter" target="_blank">트위터</a></li>
                    <li><a href="https://www.facebook.com/DuoEpisode" class="facebook" target="_blank">페이스북</a></li>
                    <li><a href="http://blog.naver.com/officialduo" class="b" target="_blank">네이버 블로그</a></li>
                    <li><a href="http://www.duoepisode.com/" class="t" target="_blank">티스토리</a></li>
                    <li><a href="http://plus.kakao.com/home/@%EB%93%80%EC%98%A4" class="kakao" target="_blank">카카오톡</a></li>
                    <li><a href="https://story.kakao.com/ch/duo" class="quotes" target="_blank">카카오스토리</a></li>
                </ul>
            </div>
            <img src="/html/main_img_2015/footer-securitymark.gif" class="security" alt="보안마크">
        </div>
    </div>
</div>

<script type="text/javascript">
var prize_one_step;
var prize_page;
var page_step;
var check_step;
var footer_prize_interval;

function initprize()
{
	prize_page = 6;
	prize_one_step = $("#prize_items li").css("width").replace(/[^-\d\.]/g,'');

	//alert(prize_one_step);

	page_step = prize_one_step * prize_page;

	//alert(page_step);

	check_step = prize_one_step * ($("#prize_items li").length - 3);

	//alert(check_step);

	var overlab_html;

	overlab_html = "";

	for (i=0;i<6 ;i++ )
	{
		overlab_html = overlab_html + '<li>' + "\n";
		overlab_html = overlab_html + $("#prize_items li").eq(i).html() + "\n";
		overlab_html = overlab_html + '</li>' + "\n";
	}

	//alert(overlab_html);

	$("#prize_items").append(overlab_html);

	var contener_width;

	contener_width = prize_one_step * $("#prize_items li").length;

	$("#prize_items").css("width",contener_width + "px");

	//alert(contener_width);
}

function move_prize_list()
{
	try
	{
		var now_position;

		now_position = $("#prize_items").css("margin-left").replace(/[^-\d\.]/g,'');

		if ((parseInt(check_step) + parseInt(now_position)) == 0)
		{
			$("#prize_items").css("margin-left","0px");
		}
		else
		{
			now_position = now_position - 1;
			$("#prize_items").css("margin-left",now_position + "px");
		}
	}
	catch(e)
	{
		return;
	}

}

function start_prize_list()
{
	footer_prize_interval = setInterval(move_prize_list,30);
}

function stop_prize_list()
{
	clearInterval(footer_prize_interval);
}

initprize();
start_prize_list();

$("#prize_items").mouseover(function(){
	stop_prize_list();
});

$("#prize_items").mouseout(function(){
	start_prize_list();
});

</script>

<script type="text/javascript">
function jisa_select(strUrl)
{

	if (strUrl !="" )
	{
		$("#jisa_form").attr("action",strUrl);
		$("#jisa_form").submit();
	}
}

function notice_popup_view()
{
	window.open("/html/common/notice_content.asp?no=579", "iframe_scroll","width=650,height=430,scrollbars=no,toolbar=no,menubar=no,resizable=no");
}

</script>

<!--2013-11-04 | 신규 간편 상담 예약-->
<!--2016-11-03 | 신규 간편 상담 예약 변경-->
<link rel="stylesheet" type="text/css" href="/html/common/css/inc_simple_consult.css" />
<script type="text/javascript">
var now = new Date();
var year = now.getFullYear(); //현재 년
var month = now.getMonth(); //현재 월
var day = now.getDate(); //현재 일

var n_year = now.getFullYear(); //현재 년 (고정)
var n_month = now.getMonth();  //현재 월 (고정)
var n_day = now.getDate(); //현재 일(고정)

var Monthplus_count = 0; // 월변경 카운트
var isSelect = false;

function reset_value()
{
	now = new Date();
	year = now.getFullYear(); //현재 년
	month = now.getMonth(); //현재 월
	day = now.getDate(); //현재 일

	n_year = now.getFullYear(); //현재 년 (고정)
	n_month = now.getMonth();  //현재 월 (고정)
	n_day = now.getDate(); //현재 일(고정)

	Monthplus_count = 0; // 월변경 카운트
	isSelect = false;

	$(".jisa_item").removeClass("select");
	$("#sc_jisa").val("");
	$("#sc_counsel_date").val("");
}

//날짜 박스 채우기 step #1
function makeDate()
{
	var firstDay = new Date(year, month, 1);
	var yoil = firstDay.getDay(); //요일 얻기. 0~6(일~토)
	var nalsu = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	if ((year % 4 === 0) && (year % 100 !== 0) || (year % 400 === 0)) {
	   nalsu[1] = 29; //윤년 체크
	}

	makeDateList(yoil, nalsu[month], year, month, day); //날짜박스 채우기 step #2
}

//날짜 박스 채우기 step #2
function makeDateList(yoil, nalsu, year, month, day) {
	var firstDay = new Date(year, month, 1);
    var yoil = firstDay.getDay(); //요일 얻기. 0~6(일~토)

	var str = "";
	var no = 1;
	var currentCell = 0;
	var ju = Math.ceil((nalsu + yoil) / 7); //몇주인지가 나옴.

	for ( var row = 1; row <= ju; row++) {
	//str += "<tr>"; //이 아래 7바퀴를 돌림
		for ( var col = 1; col <= 7; col++)
		{
			if (no > nalsu) break; //1부터 날수 까지만  숫자 채우기

			if (currentCell < yoil)
			{
				str += '<span class="date"></span>';
				currentCell++;
			} else {
				if (isSelect == false)
				{
					str += '<span class="date">' + no + '</span>';
				}
				else
				{
					if (no < day){
						if (year == n_year)
						{
							if ( month == n_month)
							{
								str += '<span class="date">' + no + '</span>';
							}else if (month > n_month)
							{
								str += '<span class="date" id="' + no + '">' + no + '</span>';
							}

						}else if (year > n_year)
						{
							str += '<span class="date" id="' + no + '">' + no + '</span>';
						}

					}else if (no === day) {
						str += '<span class="date select" id="' + no + '">' + no + '</span>';
					} else {
						str += '<span class="date" id="' + no + '">' + no + '</span>';
					}
				}
				no++;
			}
		}
	}


	$("#day_box").html(str); //날자 li html 입력

	$("#tx_date_view").html(year + "."+(month+1)); //월 표시

	if (isSelect == false)
	{
		$("span.date").unbind('click');
	}
	else
	{
		//날자 click function set
		$("span.date").click(function(){
			day = this.id;

			$("span.date").removeClass("select");
			$(this).addClass("select");

			$("#sc_counsel_date").attr("value",year + "-" + (month+1) + "-" + day);

			makeTime(year,month,day,n_day);

		});
	}
}

function Monthminus()
{
	if (month == 0) {
	   year--;
	   month = 11;
	}else{
	   month--;
	}

	if (month == n_month)
	{
		$(".sc_prev").hide();
	}

	Monthplus_count = Monthplus_count - 1;

	makeDate();
	makeTime(year,month,day,n_day);
}

function Monthplus() {
	if (Monthplus_count == 2)
	{
		alert("방문날짜 선택은 3개월까지만 가능합니다.");
		return;
	}else{
		if (month > 10) {
		   year++;
		   month = 0;
		}else{
		month++;
		}

		$(".sc_prev").show();

		Monthplus_count = Monthplus_count + 1;

		makeDate();
		makeTime(year,month,day,n_day);
	}
}

function set_event_jisa()
{
	$(".jisa_item").unbind().bind("click",function(){
		var now_index = $(".jisa_item").index(this);

		$(".jisa_item").removeClass("select");
		$(".jisa_item").eq(now_index).addClass("select");

		var srt_value = this.id;

		srt_value = srt_value.substring(srt_value.length,srt_value.length-2);

		if (srt_value == "75" || srt_value == "70" || srt_value == "80")
		{
			$("form#SMCForm #mtel_01").hide();
			$("form#SMCForm #mtel_02").hide();
			$("form#SMCForm #mtel_03").hide();
			$("form#SMCForm #mtel_04").show();
		}
		else
		{
			$("form#SMCForm #mtel_01").show();
			$("form#SMCForm #mtel_02").show();
			$("form#SMCForm #mtel_03").show();
			$("form#SMCForm #mtel_04").hide();
		}

		$("#sc_jisa").val(srt_value);

		isSelect = true;

		makeDate();
	});

	$(".sc_sex_input").unbind().bind("click",function(e){
		var now_position = $(".sc_sex_input").index(this);

		if (now_position == 0)
		{
			$(".sc_sex_rd").eq(0).removeClass("man");
			$(".sc_sex_rd").eq(0).removeClass("man_on");
			$(".sc_sex_rd").eq(0).addClass("man_on");

			$(".sc_sex_rd").eq(1).removeClass("woman");
			$(".sc_sex_rd").eq(1).removeClass("woman_on");
			$(".sc_sex_rd").eq(1).addClass("woman");
		}
		else
		{
			$(".sc_sex_rd").eq(0).removeClass("man");
			$(".sc_sex_rd").eq(0).removeClass("man_on");
			$(".sc_sex_rd").eq(0).addClass("man");

			$(".sc_sex_rd").eq(1).removeClass("woman");
			$(".sc_sex_rd").eq(1).removeClass("woman_on");
			$(".sc_sex_rd").eq(1).addClass("woman_on");
		}

	});

	$(".sc_married_input").unbind().bind("click",function(e){
		check_label_base_radio("sc_married_input",this,"sc_married_rd","on","off");
	});

	$(".sc_agree_rd").unbind().bind("click",function(e){
		var now_index = $(".sc_agree_rd").index(this);
		label_case_agree_check("sc_agree_rd","sc_agree_label","agree_on","agree",now_index);
	});
}


function ViewSimpleAppointment()
{
	reset_value();

	$.ajax({
		url:"/html/include/inc_simple_consult_html.asp",
		success:function(data){
			if (data == "")
			{
				alert("팝업을 실행할 수 없습니다. 다시 시도해 주세요.");
				return;
			}

			$("html").css("overflow","hidden");
			$("#simple_consult_popup").html(data);

			set_event_jisa();

			makeDate();

			$("#simple_pop_bg").show();
			$("#simple_consult_popup").show();
		}
	});
}

function hideSimpleAppointment()
{
	$("#simple_pop_bg").hide();
	$("#simple_consult_popup").hide();
	$("html").css("overflow","auto");
}

function opms_script_run()
{
	_trk_flashEnvView('_TRK_PI=RES','_TRK_CN=간편상담신청','_TRK_RK=' + document.SMCForm.u_name.value);
}

function label_case_agree_check(c_name,l_name,c_on,c_off,idx)
{

	switch(idx)
	{
	case 0:

		if ($("." + c_name).eq(0).is(":checked"))
		{
			$("." + c_name).eq(0).prop("checked",true);
			$("." + c_name).eq(1).prop("checked",true);
			$("." + c_name).eq(2).prop("checked",true);

			$("." + l_name).removeClass(c_on);
			$("." + l_name).removeClass(c_off);
			$("." + l_name).addClass(c_on);
		}
		else
		{
			$("." + c_name).eq(0).prop("checked",false);
			$("." + c_name).eq(1).prop("checked",false);
			$("." + c_name).eq(2).prop("checked",false);

			$("." + l_name).removeClass(c_on);
			$("." + l_name).removeClass(c_off);
			$("." + l_name).addClass(c_off);
		}


	break;

	case 1:
		if ($("." + c_name).eq(1).is(":checked"))
		{
			if ($("." + c_name).eq(2).is(":checked"))
			{
				$("." + c_name).eq(0).prop("checked",true);
				$("." + c_name).eq(1).prop("checked",true);
				$("." + c_name).eq(2).prop("checked",true);

				$("." + l_name).removeClass(c_on);
				$("." + l_name).removeClass(c_off);
				$("." + l_name).addClass(c_on);
			}
			else
			{
				$("." + c_name).eq(0).prop("checked",false);

				$("." + l_name).eq(0).removeClass(c_off);
				$("." + l_name).eq(0).removeClass(c_on);
				$("." + l_name).eq(0).addClass(c_off);

				$("." + l_name).eq(1).removeClass(c_off);
				$("." + l_name).eq(1).removeClass(c_on);
				$("." + l_name).eq(1).addClass(c_on);
			}
		}
		else
		{
			$("." + c_name).eq(0).prop("checked",false);

			$("." + l_name).eq(0).removeClass(c_off);
			$("." + l_name).eq(0).removeClass(c_on);
			$("." + l_name).eq(0).addClass(c_off);

			$("." + l_name).eq(1).removeClass(c_off);
			$("." + l_name).eq(1).removeClass(c_on);
			$("." + l_name).eq(1).addClass(c_off);
		}


	break;

	case 2:
		if ($("." + c_name).eq(2).is(":checked"))
		{
			if ($("." + c_name).eq(1).is(":checked"))
			{
				$("." + c_name).eq(0).prop("checked",true);
				$("." + c_name).eq(1).prop("checked",true);
				$("." + c_name).eq(2).prop("checked",true);

				$("." + l_name).removeClass(c_on);
				$("." + l_name).removeClass(c_off);
				$("." + l_name).addClass(c_on);
			}
			else
			{
				$("." + c_name).eq(0).prop("checked",false);

				$("." + l_name).eq(0).removeClass(c_off);
				$("." + l_name).eq(0).removeClass(c_on);
				$("." + l_name).eq(0).addClass(c_off);

				$("." + l_name).eq(2).removeClass(c_off);
				$("." + l_name).eq(2).removeClass(c_on);
				$("." + l_name).eq(2).addClass(c_on);
			}
		}
		else
		{
			$("." + c_name).eq(0).prop("checked",false);

			$("." + l_name).eq(0).removeClass(c_off);
			$("." + l_name).eq(0).removeClass(c_on);
			$("." + l_name).eq(0).addClass(c_off);

			$("." + l_name).eq(2).removeClass(c_off);
			$("." + l_name).eq(2).removeClass(c_on);
			$("." + l_name).eq(2).addClass(c_off);
		}


	break;
	}
}


function check_simple_consult()
{
	var formnm = document.SMCForm;

	formnm.action="/html/include/inc_simple_appointment_proc.asp";

	if(formnm.u_jisa.value == "" )
	{
		alert('상담하실 지사를 하여 주세요.' );
		return;
	}

	if(formnm.u_counsel_date.value=="")
	{
		alert('방문날짜를 선택해 주세요.' );
		return;
	}

	if($("#day_box").find(".select").length==0){alert("방문날짜 선택이 되지 않았거나 잘못된 날짜가 선택되었습니다.");return;}

	var tnow = new Date();
	var tyear = tnow.getFullYear();
	var tmonth = tnow.getMonth();
	var tday = tnow.getDate();
	var thour = tnow.getHours();
	var date_check = true;

	if (tyear < year)
	{
		date_check = false;
	}else if (tyear == year && tmonth == month && tday < day)
	{
		date_check = false;
	}

	if (date_check == false)
	{
		alert("현재날짜가 변경되었습니다. 방문날짜를 다시 선택해 주세요.");
		reset_value();
		makeDate();
		return;
	}

	if (formnm.u_name.value =="이름")
	{
		alert("이름을 입력해 주세요.");
		formnm.u_name.value = "";
		formnm.u_name.focus();
		return;
	}

	if(!isValidType(formnm.u_name, 'text', '이름을 입력하여 주세요.' )){ return; }
	if(checkstring(formnm.u_name.value)){alert("특수문자를 사용할 수 없습니다.");return;}
	if(!check_input_byte(formnm.u_name.value,10)){alert("입력할 수 있는 길이를 초과하였습니다.");return;}

	if(!isValidType(formnm.u_sex, 'check', '성별을 선택하여 선택하여 주세요.' )){ return; }

	if(!isValidType(formnm.u_ident1, 'select', '출생년도가 선택되지 않았습니다.' )){ return; }


	if(!isValidType(formnm.u_edu, 'select', '학력을 선택하여 주세요.')){ return; }

	if(!isValidType(formnm.u_married, 'check', '결혼 경험을 선택하여 주세요.' )){ return; }

	if ($("#sc_jisa").val() == "70" || $("#sc_jisa").val() == "75" || $("#sc_jisa").val() == "80")
	{
		if(!isValidType(formnm.u_mtel, 'text', '연락처를 입력해 주세요.' )){ return; }

		if (!mtel_check_value(formnm.u_mtel.value))
		{
			alert("하이픈(-)외에 다른문자는 입력할 수 없습니다.");
			return;
		}
	}
	else
	{
		if(!isValidType(formnm.u_mtel1, 'select', '연락처 앞자리를 선택하여 주세요.' )){ return; }
		if(!isValidType(formnm.u_mtel2, 'number', '연락처 중간자리를 입력하여 주세요.' )){ return; }
		if(!isValidType(formnm.u_mtel3, 'number', '연락처 끝자리를 입력하여 주세요.' )){ return; }

		if(!hp_chck_array(formnm.u_mtel2.value) && !hp_chck_array(formnm.u_mtel3.value)){
			alert("핸드폰 번호가 올바르지 않습니다.");
			formnm.u_mtel3.focus();
			return;
		}
	}

	if(!agree_check('sc_agree_all','sc_agree_1','sc_agree_2')){return;}

	var strdata;
	strdata = "";

	/*
	strdata += "u_ident1=" + formnm.u_ident1.value;
	strdata += "&u_sex=" + $(":radio[name='u_sex']:checked").val();
	strdata += "&u_edu=" + formnm.u_edu.value;
	strdata += "&u_married=" + $(":radio[name='u_married']:checked").val();
	strdata += "&u_mtel1=" + formnm.u_mtel1.value;
	strdata += "&u_mtel2=" + formnm.u_mtel2.value;
	strdata += "&u_mtel3=" + formnm.u_mtel3.value;
	if (formnm.u_mtel.value != "핸드폰")
	{
		strdata += "&u_mtel=" + formnm.u_mtel.value;
	}
	strdata += "&u_counsel_date=" + formnm.u_counsel_date.value;
	strdata += "&u_counsel_time=" + formnm.u_counsel_time.value;
	strdata += "&u_jisa=" + formnm.u_jisa.value;
	strdata += "&u_div=" + formnm.u_div.value;
	strdata += "&u_name=" + escape(formnm.u_name.value);

	//alert(strdata);
	*/

	strdata = ajax_setFormData("SMCForm","u_name,u_mtel")

	//alert(strdata);

	$.ajax({
		type:"post",
		url:"/html/include/inc_simple_appointment_proc.asp",
		data:strdata,
		success:function(data){
			if (data == "success")
			{
				opms_script_run();
				alert("간편상담예약 신청이 완료 되었습니다.");
				hideSimpleAppointment();
			}
			else{
				if (data == "date_error")
				{
					alert("예약날짜가 올바르지 않습니다.\n다시 선택해 주세요." + data);
					return;
				}
				else
				{
					alert("신청중 오류가 발생하였습니다. 다시 시도해 주세요." + data);
					return;
				}
			}
		},
		error:function(request,status,error){
			alert("신청중 오류가 발생하였습니다. 다시 시도해 주세요.2" + request.responseText);
				return;
		}
	});
}
</script>
<div id="simple_pop_bg"></div>
<div id="simple_consult_popup"></div>

<!--2016-11-03 | 신규 간편 상담 예약 변경-->
<!--2013-11-04 | 신규 간편 상담 예약-->

<link rel="stylesheet" type="text/css" href="/html/common/css/inc_fast_consult.css" />
<script type="text/javascript">
function fast_consult_popup_view()
{
	$.ajax({
		url:"/html/include/inc_fast_consult_html.asp",
		success:function(data){
			if (data == "")
			{
				alert("팝업을 불러오지 못했습니다. 다시 시도해 주세요.");
				return;
			}
			else
			{
				$("#fast_consult_popup").html(data);

					$(".fc_sex_input").unbind().bind("click",function(e){
					var now_position = $(".fc_sex_input").index(this);

					if (now_position == 0)
					{
						$(".fc_sex_rd").eq(0).removeClass("m");
						$(".fc_sex_rd").eq(0).removeClass("m_on");
						$(".fc_sex_rd").eq(0).addClass("m_on");

						$(".fc_sex_rd").eq(1).removeClass("w");
						$(".fc_sex_rd").eq(1).removeClass("w_on");
						$(".fc_sex_rd").eq(1).addClass("w");
					}
					else
					{
						$(".fc_sex_rd").eq(0).removeClass("m");
						$(".fc_sex_rd").eq(0).removeClass("m_on");
						$(".fc_sex_rd").eq(0).addClass("m");

						$(".fc_sex_rd").eq(1).removeClass("w");
						$(".fc_sex_rd").eq(1).removeClass("w_on");
						$(".fc_sex_rd").eq(1).addClass("w_on");
					}

				});

				$(".fc_married_input").unbind().bind("click",function(e){
					check_label_base_radio("fc_married_input",this,"fc_married_rd","on","off");
				});

				$("html").css("overflow","hidden"); // 바닥레이어 스크롤바 숨김

				$("body").on("keydown.disableScroll", function(e) {
					var eventKeyArray = [32, 33, 34, 35, 36, 37, 38, 39, 40];
					for (var i = 0; i < eventKeyArray.length; i++) {
						if (e.keyCode === eventKeyArray [i]) {
							e.preventDefault();
							return;
						}
					}
				});

				$("#fast_pop_bg").show();
				$("#fast_consult_popup").show();

			}
		}
		,
		error:function(data){
			alert("팝업을 불러오지 못했습니다. 다시 시도해 주세요.");
			return;
		}
	});
}

function fast_consult_popup_close()
{
	$("#fast_consult_popup").hide();
	$("#fast_pop_bg").hide();
	$("body").off(".disableScroll");
    $("html").css("overflow",""); //바닥레이어 스크롤바 복귀
}

function fast_select_jisa(obj)
{
	if ($(obj).val() == "14" || $(obj).val() == "11" || $(obj).val() == "12")
	{
		$("#FFCForm #fc_mtel1").hide();
		$("#FFCForm #fc_mtel2").hide();
		$("#FFCForm #fc_mtel3").hide();
		$("#FFCForm #fc_mtel").show();
	}
	else
	{
		$("#FFCForm #fc_mtel1").show();
		$("#FFCForm #fc_mtel2").show();
		$("#FFCForm #fc_mtel3").show();
		$("#FFCForm #fc_mtel").hide();
	}
}

function fc_agree_view()
{
	if ($("#fc_agree_content").is(":visible"))
	{
		$("#fc_agree_content").hide();
	}
	else
	{
		$("#fc_agree_content").show();
	}
}


function fast_consult_popup_check()
{
	var formnm = document.FFCForm;

	formnm.u_name.value = formnm.u_name.value.replace("이름", "");

	if(!isValidType(formnm.u_name, 'text', '이름을 입력하여 주세요.' )){ return; }
	if(checkstring(formnm.u_name.value) == true){alert("이름입력에 특수문자는 입력할수 없습니다."); return;}
	if(!check_input_byte(formnm.u_name.value,10)){alert("입력 할 수 있는 문자길이를 초과하였습니다."); return;}

	formnm.u_birth.value = formnm.u_birth.value.replace("출생년(예1980)", "");

	if(!isValidType(formnm.u_birth, 'number', '출생년도를 입력하여 주세요.' )){ return; }

	if(!isValidType(formnm.u_sex, 'check', '성별을 선택하여 주세요.' )){ return; }
	if(!isValidType(formnm.u_married,'check','초혼 재혼을 선택하여 주세요.')){ return;}

	var v = $("#FFCForm select[name='u_jisa']").val();
	if(v == "11" || v == "12" || v == "14"){
		if (formnm.u_mtel.value == "연락처")
		{
			alert("연락처를 입력해 주세요.");
			formnm.u_mtel.value = "";
			formnm.u_mtel.focus();
			return;
		}

		if(!isValidType(formnm.u_mtel, 'text', '연락처를 입력하여 주세요.' )){ return; }

	}else{
		if(!isValidType(formnm.u_mtel1, 'select', '연락처 앞자리를 선택하여 주세요.' )){ return; }
		if(!isValidType(formnm.u_mtel2, 'number', '연락처 중간자리를 입력하여 주세요.' )){ return; }
		if(!isValidType(formnm.u_mtel3, 'number', '연락처 끝자리를 입력하여 주세요.' )){ return; }

		if(!hp_chck_array(formnm.u_mtel2.value) && !hp_chck_array(formnm.u_mtel3.value)){
			alert("핸드폰 번호가 올바르지 않습니다.");
			formnm.u_mtel3.focus();
			return;
		}

		formnm.u_mtel.value = "";
	}

	if(!isValidType(formnm.u_jisa, 'select', '지사를 선택하여 주세요.' )){ return; }
	if(!isValidType(formnm.u_edu, 'select', '학력을 선택하여 주세요.' )){ return; }

	if(!agree_check('fc_agree_all','fc_agree1','fc_agree2')){return;}

	var formdata;

	formdata = ajax_setFormData("FFCForm","u_name");

	$.ajax({
		url:"/html/common/right_speed_proc.asp",
		data:formdata,
		type:"POST",
		success:function(data){
			if (data.indexOf("[[proc=success]]") > -1)
			{
				//callbackFlashAction(708, 1335, 0, 0, 0 ); // emforce script run | 2013-08-30
				setTimeout(function(){
					alert("상담신청이 완료 되었습니다.");
					formnm.reset();
					fast_consult_popup_close();
				},500);
			}
			else
			{
				alert("오류가 발생하였습니다. 다시 시도해 주세요." + "\n" + data);
			}
		},
		error:function(data){
			alert("오류가 발생하였습니다. 다시 시도해 주세요." + "\n" + data);
		}
	});
}
</script>
<div id="fast_pop_bg" style="display:none;"></div>
<div id="fast_consult_popup" style="display:none;">
</div><style>
#main_pop_bg { opacity:0.8; filter:alpha(opacity:'80'); position:fixed; top:0; right:0; bottom:0; left:0; z-index:100000; background-color:rgb(0, 0, 0); display:none; }
#main_consult_popup { opacity:1; position:fixed; overflow:hidden; z-index:100001; width:100%; height:100%; top:0; left:0; text-align:center; display:none; }
#main_consult_popup .align { display:inline-block; vertical-align:middle; height:100%; }
#main_consult_popup .content { display:inline-block; opacity:1; visibility:visible; outline:none; text-align:left; position:relative; vertical-align:middle; font-family:Malgun Gothic, 맑은 고딕, Dotum, 돋움, Gulim, 굴림; }
#main_consult_popup .view-wrapper { float:left; width:100%; min-width:1040px; }
#main_consult_popup .view-wrapper span.close { display:block; float:left; width:1040px; text-align:right; margin-bottom:10px; }
#main_consult_popup .view-wrapper span.st-1 { display:block; float:left; width:520px; height:580px; background:#5298ee url(/html/main_img_2016/popup_01.gif) center center no-repeat; }
#main_consult_popup .view-wrapper form { display:block; float:left; margin:0; padding:0; padding:0 80px; width:360px; height:580px; padding-top:40px; height:540px; background-color:#ffffff; }
#main_consult_popup .view-wrapper form a.confirm { display:block; clear:both; float:left; width:360px; height:54px; background:#5298ee url(/html/main_img_2016/popup_02.gif) center center no-repeat; font-size:0; line-height:0; }
#main_consult_popup .view-wrapper form table { width:100%; font-family:Malgun Gothic, 맑은 고딕, Dotum, 돋움, Gulim, 굴림; }
#main_consult_popup .view-wrapper form table caption { display:block; margin-top:-1px; height:0; color:transparent; line-height:0; overflow:hidden; }
#main_consult_popup .view-wrapper form table td { line-height:36px; padding-bottom:15px; }
#main_consult_popup .view-wrapper form table .agree { height:34px; vertical-align:middle; }
#main_consult_popup .view-wrapper form table .submit { padding-top:10px; height:37px; }
#main_consult_popup .view-wrapper form table input[type=text] { height:43px; line-height:43px; color:#535353; padding:0 4px; font-family:Malgun Gothic, 맑은 고딕, Dotum, 돋움, Gulim, 굴림; font-size:16px; background-color:#ffffff; border:1px solid #dedede; }
#main_consult_popup .view-wrapper form table select { height:44px; font-family:Malgun Gothic, 맑은 고딕, Dotum, 돋움, Gulim, 굴림; font-size:16px; color:#535353; background-color:#ffffff; border:1px solid  #dedede; line-height:31px; }
#main_consult_popup .view-wrapper form table select { height:auto; padding:10px 0;\0/ie8+9;}
#main_consult_popup .view-wrapper form table label { font-size:14px; color:#535353; }
#main_consult_popup .view-wrapper form table .field { margin-right:5px; }
#main_consult_popup .view-wrapper form table input[type=checkbox], #main_consult_popup .view-wrapper form table input[type=radio] { display:none; position:absolute; z-index:-1; }
#main_consult_popup .view-wrapper form table textarea { height:44px; line-height:22px; color:#535353; padding:0 4px; font-family:Malgun Gothic, 맑은 고딕, Dotum, 돋움, Gulim, 굴림; font-size:14px; background-color:#ffffff; border:1px solid #dedede; }

#main_consult_popup .view-wrapper form table label.sex { display:inline-block; width:85px; height:44px; position:relative; font-size:0; line-height:100%; }
#main_consult_popup .view-wrapper form table .man { background:url(/html/main_img_2016/popup_sex_m_off.gif) left top no-repeat; }
#main_consult_popup .view-wrapper form table .man_on { background:url(/html/main_img_2016/popup_sex_m_on.gif) left top no-repeat; }
#main_consult_popup .view-wrapper form table .woman { margin-left:-1px; background:url(/html/main_img_2016/popup_sex_w_off.gif) left top no-repeat; }
#main_consult_popup .view-wrapper form table .woman_on { margin-left:-1px; background:url(/html/main_img_2016/popup_sex_w_on.gif) left top no-repeat; }

#main_consult_popup .view-wrapper form table label.marry { display:inline-block; width:83px; height:42px; font-size:16px; text-align:center; line-height:41px; }
#main_consult_popup .view-wrapper form table .on { background:#6f7e91; border:1px solid #6f7e91; color:#ffffff; }
#main_consult_popup .view-wrapper form table .off { background:#ffffff; border:1px solid #dbdbdb; color:#333333; }
#main_consult_popup .view-wrapper form table .second { margin-left:-1px; }

#main_consult_popup .view-wrapper form .privacy { display:block; position:absolute; padding:10px; width:480px; height:104px; background:#ffffff; top:0; border:1px solid #e7e7e7; left:-520px; }
#main_consult_popup .view-wrapper form .privacy img.close { display:block; position:absolute; width:13px; height:13px; right:-5px; top:-5px; }
#main_consult_popup .view-wrapper form .privacy span.all { display:block; float:left; width:100%; height:16px; margin-bottom:10px; font-size:12px; }
#main_consult_popup .view-wrapper form .privacy span.each { display:block; float:left; width:100%; height:16px; font-size:12px; }
#main_consult_popup .view-wrapper form .privacy span.agree-type { display:block; float:left; width:230px; height:50px; font-size:11px; border:1px solid #e2e2e2; overflow-x:auto; margin-bottom:10px; }
</style>
<script type="text/javascript">
function main_consult_popup_view(u_div)
{
	$.ajax({
		url:"/html/include/inc_service_consult_html.asp",
		data:"u_div=" + u_div,
		success:function(data){
			$("#main_consult_popup").html(data);

			$(".mc_sex_input").unbind().bind("click",function(e){
				var now_position = $(".mc_sex_input").index(this);

				if (now_position == 0)
				{
					$(".mc_sex_rd").eq(0).removeClass("man");
					$(".mc_sex_rd").eq(0).removeClass("man_on");
					$(".mc_sex_rd").eq(0).addClass("man_on");

					$(".mc_sex_rd").eq(1).removeClass("woman");
					$(".mc_sex_rd").eq(1).removeClass("woman_on");
					$(".mc_sex_rd").eq(1).addClass("woman");
				}
				else
				{
					$(".mc_sex_rd").eq(0).removeClass("man");
					$(".mc_sex_rd").eq(0).removeClass("man_on");
					$(".mc_sex_rd").eq(0).addClass("man");

					$(".mc_sex_rd").eq(1).removeClass("woman");
					$(".mc_sex_rd").eq(1).removeClass("woman_on");
					$(".mc_sex_rd").eq(1).addClass("woman_on");
				}

			});

			$(".mc_married_input").unbind().bind("click",function(e){
				check_label_base_radio("mc_married_input",this,"mc_married_rd","on","off");
			});

			$(".mc_tx_content").focus(function(){
				if ($(".mc_tx_content").html() == "문의사항 입력")
				{
					$(".mc_tx_content").html("")
				}
			});


			$("html").css("overflow","hidden"); // 바닥레이어 스크롤바 숨김

			$("body").on("keydown.disableScroll", function(e) {
				var eventKeyArray = [32, 33, 34, 35, 36, 37, 38, 39, 40];
				for (var i = 0; i < eventKeyArray.length; i++) {
					if (e.keyCode === eventKeyArray [i]) {
						e.preventDefault();
						return;
					}
				}
			});

			$("#main_pop_bg").show();
			$("#main_consult_popup").css("top","0px");
			$("#main_consult_popup").css("left","-1500px");

			$("#main_consult_popup").show();
			$("#main_consult_popup").animate({"left":"0px"},600);
		},
		error:function(data){
			alert("팝업을 불러오지 못했습니다. 다시 시도해 주세요.");
			return;
		}
	});
}
function main_consult_popup_close()
{
	$("#main_consult_popup").hide();
	$("#main_pop_bg").hide();
	$("body").off(".disableScroll");
    $("html").css("overflow",""); //바닥레이어 스크롤바 복귀
}

function mc_agree_view(v_type)
{
	if (v_type == 1)
	{
		$(".mc_agree_area").eq(0).hide();
	}
	else
	{
		$(".mc_agree_area").eq(0).show();
	}
}

function check_label_base_radio(c_name,obj,rd_class,on_class,off_class)
{
	var rd_index = $("." + c_name).index(obj);

	$("." + rd_class).removeClass(off_class);
	$("." + rd_class).removeClass(on_class);
	$("." + rd_class).addClass(off_class);

	$("." + rd_class).eq(rd_index).removeClass(off_class);
	$("." + rd_class).eq(rd_index).addClass(on_class);
}


function main_consult_popup_check()
{
	var formnm = document.MCForm;
	formnm.action="/html/membership/marriage_guide_proc.asp";

	if (formnm.u_name.value == "이름" || formnm.u_name.value=="")
	{
		alert("이름을 입력하여 주세요.");
		formnm.u_name.focus();
		return;
	}

	if(!isValidType(formnm.u_name, 'text', '이름을 입력하여 주세요.' )){ return; }
	if(checkstring(formnm.u_name.value) == true){alert("이름입력에 특수문자는 입력할수 없습니다."); return;}
	if(!check_input_byte(formnm.u_name.value,10)){alert("입력 할 수 있는 문자길이를 초과하였습니다."); return;}

	if(!isValidType(formnm.u_ident1, 'select', '출생년을 선택해 주세요.' )){ return; }
	if(!isValidType(formnm.u_ident2, 'check', '성별을 선택하여 선택하여 주세요.' )){ return; }
	if(!isValidType(formnm.u_married, 'check', '결혼 경력을 선택하여 주세요.' )){ return; }

	if(!isValidType(formnm.u_work, 'select', '직업종류를 선택하여 주세요.' )){ return; }
	if(!isValidType(formnm.u_edu, 'select', '학력을 선택하여 주세요.' )){ return; }

	if(!isValidType(formnm.u_mtel1, 'select', '핸드폰 앞자리를 선택하여 주세요.' )){ return; }
	if(!isValidType(formnm.u_mtel2, 'number', '핸드폰 중간자리를 입력하여 주세요.' )){ return; }
	if(!isValidType(formnm.u_mtel3, 'number', '핸드폰 끝자리를 입력하여 주세요.' )){ return; }

	if(!hp_chck_array(formnm.u_mtel2.value) && !hp_chck_array(formnm.u_mtel3.value)){
		alert("핸드폰 번호가 올바르지 않습니다.");
		formnm.u_mtel3.focus();
		return;
	}

	if(checkEmail(formnm.u_email,formnm.u_email_domain,formnm.u_email_domain_select) == false){ return; }

	if(!isValidType(formnm.u_dwell, 'select', '거주지역을 선택하여 주세요.' )){ return; }

	if(!agree_check('m_agree_all','m_agree1','m_agree2')){
		$(".mc_agree_area").eq(0).show();
		return;
	}

	formnm.submit();
}

</script>
<div id="main_pop_bg"></div>
<div id="main_consult_popup"></div>


<!-- 2014-04-25 | GDN start ----------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 990742742;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/990742742/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- 2014-04-25 | GDN end ----------->

<!-- 2014-10-29 | google ga start -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55116372-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- 2014-10-29 google ga end -->

<!-- 2014-12-18 | DDN script start -->
<script type="text/javascript">
    var roosevelt_params = {
        retargeting_id:'jOYpR31_m8ZRnNFGlzon8A00',
        tag_label:'iAW4dsRsQBKzekdlKgghXQ'
    };
</script>
<script type="text/javascript" src="//adimg.daumcdn.net/rt/roosevelt.js"></script>
<!-- 2014-12-18 | DDN script end -->

<!-- 2015-03-09 | naver start -->
<script type="text/javascript" src="https://wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "55c58803ab0580";
wcs_do();
</script>
<!-- 2015-03-09 | naver end -->

<!-- LOGGER(TM) TRACKING SCRIPT V.40 FOR logger.co.kr / 42233 : COMBINE TYPE / DO NOT ALTER THIS SCRIPT. -->
<script type="text/javascript">var _TRK_LID="42233";var _L_TD="ssl.logger.co.kr";var _TRK_CDMN=".duo.co.kr";</script>
<script type="text/javascript">var _CDN_DOMAIN = location.protocol == "https:" ? "https://fs.bizspring.net" : "http://fs.bizspring.net";
(function(b,s){var f=b.getElementsByTagName(s)[0],j=b.createElement(s);j.async=true;j.src='//fs.bizspring.net/fs4/bstrk.1.js';f.parentNode.insertBefore(j,f);})(document,'script');</script>
<noscript><img alt="Logger Script" width="1" height="1" src="http://ssl.logger.co.kr/tracker.tsp?u=42233&amp;js=N" /></noscript>
<!-- END OF LOGGER TRACKING SCRIPT -->
</div>
	<!--하단영역-->
</div>
</body>
</html>
