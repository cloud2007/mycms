<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>TcitCms Index</title>
<link type="text/css" href="/Static/style/frame.css" rel="stylesheet" />
<script type="text/javascript" src="/Static/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/Static/js/frame.js"></script>
</head>
<body class="showmenu">
<div class="head">
	<div class="top">
		<div class="top_logo"> <img src="/Static/images/admin_top_logo.gif" width="200" height="37" alt="Logo" title="Welcome use TcitCMS" id="topdedelogo" /> </div>
		<div class="top_link">
			<ul>
				<li class="welcome">您好：<?php echo $UserInfo->userID;?>，欢迎使用TcitCMS！</li>
				<li><a href="/admin.php/Menu" target="menu">主菜单</a></li>
				<!--li><a href="javascript:;" onclick="JumpFrame('catalog_menu.php','public_guide.php');">内容发布</a></li>
				<li><a href="javascript:;" onclick="JumpFrame('index_menu.php','content_list.php');">内容维护</a></li>
				<li><a href="javascript:;" onclick="JumpFrame('index_menu.php','index_body.php');">系统主页</a></li-->
				<li><a href="/" target="_blank">网站主页</a></li>
				<li><a href="/admin.php/User/LoginOut" target="_top">注销</a></li>
			</ul>
		</div>
	</div>
	<div class="topnav">
		<div class="menuact"> <a href="javascript:;" id="togglemenu">隐藏菜单</a></div>
		<div class="sysmsg">
			<ul>
				<?php foreach(Config::item('Config.NOTES') as $k => $v){?>
				<li><a href="<?php echo $v;?>" target="_blank"><?php echo $k;?></a></li>
				<?php }?>
			</ul>
		</div>
		<div class="scroll"><a href='http://www.tcit123.com' target='_blank'>官方论坛</a> <a href='http://www.tcit123.com' target='_blank'>在线帮助</a></div>
	</div>
</div>
<div class="left">
	<div class="menu" id="menu">
		<iframe src="/admin.php/menu" id="menufra" name="menu" frameborder="0"></iframe>
	</div>
</div>
<div class="right">
	<div class="main">
		<iframe src="/admin.php/home/welcome" id="main" name="main" frameborder="0"></iframe>
	</div>
</div>
<script language="javascript">
function JumpFrame(url1, url2){
    jQuery('#menufra').get(0).src = url1;
    jQuery('#main').get(0).src = url2;
}
</script>

<script type="text/javascript">
function AutoScroll(obj) {
	$(obj).find("ul:first").animate({
		marginTop: "-27px"
	}, 500, function () {
		$(this).css({ marginTop: "0px" }).find("li:first").appendTo(this);
	});
}
$(document).ready(function () {
	setInterval('AutoScroll(".sysmsg")', 3000);
});
</script>
</body>
</html>
