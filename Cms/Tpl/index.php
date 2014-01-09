<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>TcitCms Index</title>
<link type="text/css" href="/Static/style/frame.css" rel="stylesheet" />
<script type="text/javascript" src="/Static/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/Static/js/frame.js"></script>
<style type="text/css">
#skinlist {
    display: block;
    height: 11px;
	margin-top: 10px;
    overflow: hidden;
    width: 86px;
}
#skin div {
    float: left;
}
#skin li {
    cursor: pointer;
    float: left;
    height: 11px;
    width: 14px;
}
#def div, #s1 div, #s2 div, #s3 div, #s4 div{
    background-image: url("/Static/images/skinbutton.png");
    background-repeat: no-repeat;
}
#s1 div {
    background-position: 0 0px;
}
#s2 div {
    background-position: 0 -11px;
}
#s3 div {
    background-position: 0 -22px;
}
#s4 div {
    background-position: 0 -33px;
}
#s1 div.sel {
    background: url("/Static/images/skinbutton.png") no-repeat scroll -14px top transparent;
}
#s2 div.sel {
    background: url("/Static/images/skinbutton.png") no-repeat scroll -14px -11px transparent;
}
#s3 div.sel {
    background: url("/Static/images/skinbutton.png") no-repeat scroll -14px -22px transparent;
}
#s4 div.sel {
    background: url("/Static/images/skinbutton.png") no-repeat scroll -14px -33px transparent;
}
</style>
</head>
<body class="showmenu">
<div class="head">
	<div class="top">
		<div class="top_logo"> <img src="/Static/images/admin_top_logo.gif" width="200" height="37" alt="Logo" title="Welcome use TcitCMS" id="topdedelogo" /> </div>
		<div class="top_link">
			<ul>
				<li class="welcome">您好：<?php echo $USERINFO->userID;?>，欢迎使用TcitCMS！</li>
				<li><a href="index_menu.php" target="menu">主菜单</a></li>
				<li><a href="javascript:;" onclick="JumpFrame('catalog_menu.php','public_guide.php');">内容发布</a></li>
				<li><a href="javascript:;" onclick="JumpFrame('index_menu.php','content_list.php');">内容维护</a></li>
				<li><a href="javascript:;" onclick="JumpFrame('index_menu.php','index_body.php');">系统主页</a></li>
				<li><a href="../index.php?upcache=1" target="_blank">网站主页</a></li>
				<li><a href="../member" target="_blank">会员中心</a></li>
				<li><a href="/admin.php/User/LoginOut" target="_top">注销</a></li>
			</ul>
			<div class="quick"> <a href="javascript:;" class="ac_qucikmenu" id="ac_qucikmenu">快捷方式</a> <a href="javascript:;" class="ac_qucikadd" id="ac_qucikadd"></a> </div>
		</div>
	</div>
	<div class="topnav">
		<div class="menuact"> <a href="javascript:;" id="togglemenu">隐藏菜单</a> <a href="javascript:;" id="allmenu">功能地图</a> </div>
		<div class="nav" id="nav"> </div>
		<div class="sysmsg">
			<h3>滚动消息:</h3>
			<div class="scroll">
				<form action="action_search.php" target="main" method="post">
					<input name="keyword" type="text" value="功能搜索" onfocus="if(this.value=='功能搜索'){this.value='';}"  onblur="if(this.value==''){this.value='功能搜索';}" class="allsearch" style="width:150px;"/>
					<input name="" type="submit" value="搜索" class="np"/>
					<a href='http://www.tcit123.com' target='_blank'>官方论坛</a> <a href='http://www.tcit123.com' target='_blank'>在线帮助</a>
				</form>
			</div>
		</div>
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
	<!--<div id="help"><span id="content"><a href="#">栏目管理操作使用说明</a></span></div>-->
</div>
<div class="qucikmenu" id="qucikmenu">
	<ul>
		<li><a href='content_list.php' target='main'>文档列表</a></li>
		<li><a href='feedback_main.php' target='main'>评论管理</a></li>
		<li><a href='public_guide.php' target='main'>内容发布</a></li>
		<li><a href='catalog_main.php' target='main'>栏目管理</a></li>
		<li><a href='sys_info.php' target='main'>修改参数</a></li>
	</ul>
</div>
<script language="javascript">
function JumpFrame(url1, url2){
    jQuery('#menufra').get(0).src = url1;
    jQuery('#main').get(0).src = url2;
}
</script>
</body>
</html>
