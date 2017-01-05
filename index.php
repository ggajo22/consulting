<?php
  require("view/header.php");
?>
<style media="screen">
#wrap{min-width:964px; height:845px; margin:0 auto;background:url(res/img/index_bg.jpg); no-repeat center top;}
#header{width:1120px;margin:0 auto;}
h1 {color:#A50000;}
#index_title {
  position:relative;
  left: 200px;
  top: 100px;
}
#index_startBtn{
  position:relative;
  left: 450px;
  top: 120px;
}
#index_teacher{
  position:relative;
  left: 30px;
  top: 280px;
}
</style>

<div id="header">
  <div id="wrap">
    <div id="index_title"><img src="res/img/index_title.png" alt=""></div>
    <div id="index_startBtn"><img src="res/img/index_startBtn.png" alt=""></div>
    <div id="index_teacher"><img src="res/img/index_teacher.png" alt=""></div>
  </div>
</div>
<script>
  $('#index_startBtn img').click(function(){
    $(location).attr('href', 'http://localhost/consulting/input.php');
  })
  $('#index_startBtn img').hover(function(){
    $(this).attr('src', 'res/img/index_startBtn_h.png');
  }, function(){
    $(this).attr('src', 'res/img/index_startBtn.png');
  })
</script>
