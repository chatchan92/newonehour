$(document).ready(function(){
 setTimeout(function () {$("#ohf").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},500); 
 setTimeout(function () {$("#fs").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},1500); 
 setTimeout(function () {$("#a1").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},600); 
 setTimeout(function () {$("#a2").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},700); 
 setTimeout(function () {$("#a3").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},800); 
 setTimeout(function () {$("#a4").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},900); 
 setTimeout(function () {$("#a5").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},1000); 
 setTimeout(function () {$("#a6").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},1100); 
 setTimeout(function () {$("#a7").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},1200);      
 setTimeout(function () {$("#a8").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},1300); 
 setTimeout(function () {$("#a9").animate({marginLeft:"0px", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},1400); 
 setTimeout(function () {$("#getstart").animate({marginTop:"83vh", opacity:"show"},{ duration: 1000 }).fadeIn(2000);},1400); 
 });

var imgSrc=[
"http://i4.buimg.com/aabe0d7d0afc5a0d.jpg",
"http://i4.buimg.com/55cf504d18441cd3.jpg",
"http://i4.buimg.com/9b4604768df2773c.jpg",
"http://i4.buimg.com/fd2de6b64fbbecc0.jpg",
"http://i4.buimg.com/c001bf82bb78966f.jpg",
"http://i4.buimg.com/0e0b51a563c6f9c4.jpg",
"http://i4.buimg.com/eb0994f14decf5d1.jpg",
"http://i4.buimg.com/63edcdd5e5a5d6e0.jpg",
"http://i4.buimg.com/0172f7f0bba8da7e.jpg"]

var mp4Src=[
"http://chansound.oss-cn-shanghai.aliyuncs.com/fall2.mp4",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Fireplate.mp4",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Record.mp4",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Earth.mp4",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Forest.mp4",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Sea.mp4",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Cloud.mp4",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Calm Water.mp4",
"http://chansound.oss-cn-shanghai.aliyuncs.com/candle.mp4"]

var mp3Src=[
"http://chansound.oss-cn-shanghai.aliyuncs.com/fall2.mp3",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Fireplate.mp3",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Record.mp3",
"videos/Earth/Earth.mp3",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Forest.mp3",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Sea.mp3",
"http://chansound.oss-cn-shanghai.aliyuncs.com/Cloud.mp3",
"videos/Calm Water/Calm Water.mp3",
"http://chansound.oss-cn-shanghai.aliyuncs.com/candle.mp3"]

var video=document.getElementById('bgvid');
var audio=document.getElementById('audio');

function aa(){
document.getElementById("bgvid").poster=imgSrc[0];
document.getElementById("bgvid").src=mp4Src[0];
document.getElementById("audio").src=mp3Src[0];
       audio.play();
       video.play();
}


function bb(){
document.getElementById("bgvid").poster=imgSrc[1];
document.getElementById("bgvid").src=mp4Src[1];
document.getElementById("audio").src=mp3Src[1];
       audio.play();
       video.play();
}


function c(){
document.getElementById("bgvid").poster=imgSrc[2];
document.getElementById("bgvid").src=mp4Src[2];
document.getElementById("audio").src=mp3Src[2];
       audio.play();
       video.play();
}


function d(){
document.getElementById("bgvid").poster=imgSrc[3];
document.getElementById("bgvid").src=mp4Src[3];
document.getElementById("audio").src=mp3Src[3];
       audio.play();
       video.play();
}


function e(){
document.getElementById("bgvid").poster=imgSrc[4];
document.getElementById("bgvid").src=mp4Src[4];
document.getElementById("audio").src=mp3Src[4];
       audio.play();
       video.play();
}


function f(){
document.getElementById("bgvid").poster=imgSrc[5];
document.getElementById("bgvid").src=mp4Src[5];
document.getElementById("audio").src=mp3Src[5];
       audio.play();
       video.play();
}


function g(){
document.getElementById("bgvid").poster=imgSrc[6];
document.getElementById("bgvid").src=mp4Src[6];
document.getElementById("audio").src=mp3Src[6];
       audio.play();
       video.play();
}


function h(){
document.getElementById("bgvid").poster=imgSrc[7];
document.getElementById("bgvid").src=mp4Src[7];
document.getElementById("audio").src=mp3Src[7];
       audio.play();
       video.play();
}


function i(){
document.getElementById("bgvid").poster=imgSrc[8];
document.getElementById("bgvid").src=mp4Src[8];
document.getElementById("audio").src=mp3Src[8];
       audio.play();
       video.play();
}



