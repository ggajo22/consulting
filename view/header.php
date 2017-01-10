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
    .padding30{
      padding-top: 40px;
    }
    .accordion_sub {
      display : none;
    }
    .accordion_sub2 {
      display : none;
    }
    .accordion_title {
      background-color : #FAF4C0;
    }
    .accordion_title2 {
      background-color : #D9D6FF;
    }
    .jungbok {
      background-color : #FF7E7E;
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

  </head>
  <body>
