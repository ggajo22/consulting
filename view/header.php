<?php
  session_save_path('./session');
  $_session['title'] = '용팀힘내';

  require("config/db_config.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link href="./res/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./res/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <style media="screen">
    @font-face { font-family: 'kakaoFont';
      font-style: normal;/* 폰트 명 */
      font-weight: 100; /* 폰트 스타일 설정 */
      src: url(font/Kakao-aLt.eot);/* IE9 호환성 보기 */
      src: local("☺"),/* 웹 브라우저가 지원하지 않는 불필요한 웹 폰트 호출을 막는데 사용 */
      url(font/Kakao-aLt.eot?#iefix) format('embedded-opentype'),/* IE6-IE8 */
      url(font/Kakao-aLt.woff2) format('woff2'),/* WOFF의 차기 포맷 */
      url(font/Kakao-aLt.woff) format('woff'),/* 표준 브라우저 */
      url(font/Kakao-aLt.ttf) format('truetype'),/* Safari, Android, iOS */
      url(font/Kakao-aLt.svg#KakaoaLt) format('svg');/* TTF에서도 커버가 안되는 기기들에 대한 대응 */
      }
    body{font-family:'kakaoFont'}

    .padding30{
      padding-top: 40px;
    }
    ul li{
      list-style : none;
    }
    </style>
    <script src="./res/js/jquery-1.11.3.min.js"></script>
    <script src="./res/jquery-ui/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./res/bootstrap/js/bootstrap.min.js"></script>

    <script src="./res/js/mgTable.js"></script>
    <script src="./res/js/mgImg.js"></script>
    <script src="./res/js/string.js"></script>
    <script src="./res/js/common.js"></script>

    <script src="./res/js/jquery.checkbox.min.js"></script>

    <!-- 풀스크린 슬라이더-->
    <link rel="stylesheet" type="text/css" href="res/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="res/css/style.css" />
    <link rel="stylesheet" type="text/css" href="res/css/custom.css" />
    <script type="text/javascript" src="res/js/modernizr.custom.79639.js"></script>
    <noscript>
      <link rel="stylesheet" type="text/css" href="res/css/styleNoJS.css" />
    </noscript>
    <script type="text/javascript" src="res/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="res/js/jquery.slitslider.js"></script>

  </head>
  <body>
