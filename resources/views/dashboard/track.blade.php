<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('resources/views/dashboard/css/trackstyle.css')}}" />
	<link rel="stylesheet" href="{{asset('resources/views/dashboard/css/materialize.min.css')}}" />
    <script src="{{asset('resources/views/dashboard/dist/js/jquery-1.12.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/views/dashboard/js/jquery.countdown.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/views/dashboard/js/site.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/views/dashboard/js/materialize.min.js')}}"></script>
	
</head>
<body>
<section id="settings">
	<div class="overlay"></div>
	<div class="content">
		<form action="" id="cycle-form" class="settings-form">
			<label for="cycle">循环周期<br>（分钟）</label>
			<input type="text" id="cycle" placeholder="30" />
			<button type="submit" class="btn waves-effect waves-light" style=" font-size:16px; padding:0px;float:right;">&nbsp&nbsp保存&nbsp&nbsp</button>
		</form>
		<form action="" id="next-form" class="settings-form">
			<label for="nextCycle">下一循环周期<br>（分钟）</label>
			<input type="text" id="nextCycle" placeholder="30" />
			<button type="submit" class="btn waves-effect waves-light" style=" font-size:16px; padding:0px;float:right;">&nbsp&nbsp保存&nbsp&nbsp</button>
		</form>
	</div>
</section>
<section id="welcome">
	<h1>留下你时间足迹，从现在开始</h1>
	<p>帮助你记录下高效的专注时间，让每一刻都充满意义</p>
	<a href="" class="btn-start btn-large waves-effect waves-light red" style="border-radius:5px">开始吧！</a>
	<a href="" class="settings set-cycle">设置</a>
</section>

<section id="countdown">
	<div id="timer"><span></span></div>
	<a href="" id="end">我完成了这项任务</a>
	<a href="" id="cancel">你的时间足迹</a>
</section>

<section id="list">
	<ul id="done">
		
	</ul>
	<div id="actions">
		<button href="" class="btn-start btn-large waves-effect waves-light red" style="padding:0px;">继续工作！</button>
		<br>
		<a href="" id="reset">清空足迹日志</a>
		<span>你确定吗？ <a href="" class="confirm">是</a> <a href="" class="cancel">否</a></span>
	</div>
	<a href="" class="settings set-cycle">设置</a>
</section>

<section id="alert">
	<form action="" id="logActivity">
	<label for="what">刚刚你都完成了什么？</label>
	<input type="text" id="what" placeholder="请尽可能的描述完整 :)" />
	<input type="checkbox" id="new" checked /> <label for="new" style="margin-top:7px;color:#fff;font-size:16px;">开始一个新的循环？</label>
	<button type="submit" id="submit" class="btn waves-effect waves-light red" style="float:right;border-radius:5px">继续</button>
	<button type="button" id="submit2" class="btn waves-effect waves-light light-blue lighten-2" onclick="rest()" style="margin-right:10px;float:right;border-radius:5px">休息</button>
	</form>
	<a href="" id="void">取消</a>
	<a href="" class="settings set-next">设置</a>
</section>
<script type="text/javascript">

function rest(){
    window.open ('rest.html');
    parent.document.getElementById("audio").pause();
    parent.document.getElementById("play").className="play";}
	//window.postMessage("hello i am track !","localhost");

	
</script>
</body>
</html>