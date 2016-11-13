
function launchFullscreen(element) {
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.msRequestFullscreen){
    element.msRequestFullscreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullScreen();
  }
}

function exitFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  } else if (document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
}


if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
    //alert(navigator.userAgent); 
    var fs=0;
    var a="点我播放"
    var b="点我暂停"
    $('#buttomword').html(a);
    var video=document.getElementById('bgvid');
    var audio=document.getElementById('audio');
    $('#fs').click(function () {
      if(fs==0){
      $('#buttomword').html(b);
       audio.play();
       video.play();
       fs=1;     
       return;
      }
      if(fs==1){
       audio.pause();
       video.pause();
       fs=0;
       $('#buttomword').html(a);
       return;
  }})
    //显示
    $("#video").bind('touchstart', function(){$("#clickHide").fadeIn(600);
  setTimeout("$('#clickHide').fadeOut(600);",3000); })
                      
    document.getElementById("bgvid").style.height="100%";
    document.getElementById("bgvid").style.width="100%";
    document.getElementById("bgvid").style.top="0%";
    document.getElementById("bgvid").style.left="-10%";
   //苹果端
} else if (/(Android)/i.test(navigator.userAgent)) {
  var fs=0;
    var a="点我播放"
    var b="点我暂停"
    $('#buttomword').html(a);
    var video=document.getElementById('bgvid');
    var audio=document.getElementById('audio');
    $('#fs').click(function () {
      if(fs==0){
      $('#buttomword').html(b);
       audio.play();
       video.play();
       fs=1;     
       return;
      }
      if(fs==1){
       audio.pause();
       video.pause();
       fs=0;
       $('#buttomword').html(a);
       return;
  }})
    //显示
    $("#video").bind('touchstart', function(){$("#clickHide").fadeIn(600);
  setTimeout("$('#clickHide').fadeOut(600);",3000); })
                      
    document.getElementById("bgvid").style.height="100%";
    document.getElementById("bgvid").style.top="0%";
    document.getElementById("bgvid").style.left="-10%";
    //alert(navigator.userAgent); 
    //安卓端
} else {
  //alert(navigator.userAgent); 
   //pc端
    //<!--鼠标不动隐藏-->
    function showDiv2(){
                        $("#clickHide").fadeIn(600);
                        }
                        function hiddenDiv2(){
                          setTimeout("$('#clickHide').fadeOut(600);",3000);
                        }
   //全屏
var fs=0;
var a="点我全屏"
var b="退出全屏"
$('#fs').click(function () {
  if(fs==0){
   launchFullscreen(document.documentElement);
   fs=1;
   $('#buttomword').html(b);
   return;
  }
  if(fs==1){
   exitFullscreen();
   fs=0;
   $('#buttomword').html(a);
   return;
  }
})
};