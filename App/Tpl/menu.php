<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MyCms Menu</title>
<link type="text/css" href="/Static/style/base.css" rel="stylesheet" />
<script type="text/javascript" src="/Static/js/dedeajax2.js"></script>
<script type="text/javascript" src="/Static/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">var curopenItem = '1';</script>
<script type="text/javascript" src="/Static/js/leftmenu.js"></script>
<style>
div {
	padding:0px;
	margin:0px;
}
body {
	padding:0px;
	margin:auto;
	text-align:center;
	background-color:#eff5ed;
	background:url(images/leftmenu_bg.gif);
	padding-left:3px;
	overflow:scroll;
	overflow-x:hidden;
	scrollbar-face-color: #eff8e6;
	scrollbar-shadow-color: #edf2e3;
	scrollbar-highlight-color: #ffffff;
	scrollbar-3dlight-color: #F2F2F2;
	scrollbar-darkshadow-color: #bdbcbd;
	scrollbar-arrow-color: #bdbcbd
}
dl.bitem {
	clear:both;
	width:140px;
	margin:0px 0px 5px 12px;
	background:url(images/menunewbg.gif) repeat-x;
}
dl.bitem2 {
	clear:both;
	width:140px;
	margin:0px 0px 5px 12px;
	background:url(images/menunewbg2.gif) repeat-x;
}
dl.bitem dt, dl.bitem2 dt {
	height:25px;
	line-height:25px;
	padding-left:35px;
	cursor:pointer;
}
dl.bitem dt b, dl.bitem2 dt b {
	color:#4D6C2F;
}
dl.bitem dd, dl.bitem2 dd {
	padding:3px 3px 3px 3px;
	background-color:#fff;
}
div.items {
	clear:both;
	padding:0px;
	height:0px;
}
.fllct {
	float:left;
	width:85px;
}
.flrct {
	padding-top:3px;
	float:left;
}
.sitemu li {
	padding:0px 0px 0px 18px;
	line-height:22px;
	background:url(images/arr4.gif) no-repeat 5px 9px;
}
ul {
	padding-top:3px;
}
li {
	height:22px;
}
a.mmac div {
	background:url(images/leftbg2.gif) no-repeat;
	height:37px!important;
	height:47px;
	padding:6px 4px 4px 10px;
	word-wrap: break-word;
	word-break : break-all;
	font-weight:bold;
	color:#325304;
}
a.mm div {
	background:url(images/leftmbg1.gif) no-repeat;
	height:37px!important;
	height:47px;
	padding:6px 4px 4px 10px;
	word-wrap: break-word;
	word-break : break-all;
	font-weight:bold;
	color:#475645;
	cursor:pointer;
}
a.mm:hover div {
	background:url(images/leftbg2.gif) no-repeat;
	color:#4F7632;
}
.mmf {
	height:1px;
	padding:5px 7px 5px 7px;
}
#mainct {
	padding-top:8px;
	background: url(images/idnbg1.gif) repeat-y;
}
</style>
<base target="main" />
</head>
<body target="main" onLoad="CheckOpenMenu();">
<table width="180" align="left" border='0' cellspacing='0' cellpadding='0' style="text-align:left;">
	<tr>
		<td valign='top' style='padding-top:10px' width='20'><a id='link1' class='mmac'>
			<div onClick="ShowMainMenu(1)">核心</div>
			</a> <a id='link100' class='mm'>
			<div onClick="ShowMainMenu(100)">模块</div>
			</a> <a id='link5' class='mm'>
			<div onClick="ShowMainMenu(5)">生成</div>
			</a> <a id='link3' class='mm'>
			<div onClick="ShowMainMenu(3)">采集</div>
			</a> <a id='link6' class='mm'>
			<div onClick="ShowMainMenu(6)">会员</div>
			</a> <a id='link7' class='mm'>
			<div onClick="ShowMainMenu(7)">模板</div>
			</a> <a id='link10' class='mm'>
			<div onClick="ShowMainMenu(10)">系统</div>
			</a>
			<div class='mmf'></div></td>
		<td width='160' id='mainct' valign="top"><div id='ct1'>
				<!-- Item 2 Strat -->
				<dl class='bitem' id='sunitems1_1'>
					<dt onClick='showHide("items1_1")'><b>常用操作</b></dt>
					<dd style='display:block' class='sitem' id='items1_1'>
						<ul class='sitemu'>
							<li>
								<div class='items'>
									<div class='fllct'><a href='catalog_main.php' target='main'>网站栏目管理</a></div>
									<div class='flrct'> <a href='catalog_add.php?listtype=all' target='main'><img src='images/gtk-sadd.png' alt='创建栏目' title='创建栏目'/></a> </div>
								</div>
							</li>
							<li><a href='content_list.php' target='main'>所有档案列表</a> </li>
							<li><a href='content_list.php?arcrank=-1' target='main'>等审核的档案</a> </li>
							<li><a href='content_list.php?mid=1' target='main'>我发布的文档</a> </li>
							<li><a href='feedback_main.php' target='main'>评论管理</a> </li>
							<li>
								<div class='items'>
									<div class='fllct'><a href='recycling.php' target='main'>内容回收站</a></div>
									<div class='flrct'> <a href='archives_do.php?dopost=clear&aid=no&recycle=1' target='main'><img src='images/gtk-del.png' alt='清空回收站' title='清空回收站'/></a> </div>
								</div>
							</li>
						</ul>
					</dd>
				</dl>
				<!-- Item 2 End -->
				<!-- Item 3 Strat -->
				<dl class='bitem' id='sunitems2_1'>
					<dt onClick='showHide("items2_1")'><b>内容管理</b></dt>
					<dd style='display:block' class='sitem' id='items2_1'>
						<ul class='sitemu'>
							<li>
								<div class='items'>
									<div class='fllct'><a href='content_list.php?channelid=1' target='main'>普通文章</a></div>
									<div class='flrct'> <a href='article_add.php?channelid=1' target='main'><img src='images/gtk-sadd.png' alt='录入新内容' title='录入新内容'/></a> </div>
								</div>
							</li>
							<li>
								<div class='items'>
									<div class='fllct'><a href='content_list.php?channelid=17' target='main'>老师</a></div>
									<div class='flrct'> <a href='archives_add.php?channelid=17' target='main'><img src='images/gtk-sadd.png' alt='录入新内容' title='录入新内容'/></a> </div>
								</div>
							</li>
							<li>
								<div class='items'>
									<div class='fllct'><a href='content_list.php?channelid=18' target='main'>专栏</a></div>
									<div class='flrct'> <a href='archives_add.php?channelid=18' target='main'><img src='images/gtk-sadd.png' alt='录入新内容' title='录入新内容'/></a> </div>
								</div>
							</li>
							<li>
								<div class='items'>
									<div class='fllct'><a href='content_s_list.php' target='main'>专题管理</a></div>
									<div class='flrct'> <a href='spec_add.php' target='main'><img src='images/gtk-sadd.png' alt='录入新内容' title='录入新内容'/></a> </div>
								</div>
							</li>
						</ul>
					</dd>
				</dl>
				<!-- Item 3 End -->
				<!-- Item 4 Strat -->
				<dl class='bitem' id='sunitems3_1'>
					<dt onClick='showHide("items3_1")'><b>附件管理</b></dt>
					<dd style='display:block' class='sitem' id='items3_1'>
						<ul class='sitemu'>
							<li><a href='media_add.php' target='main'>上传新文件</a> </li>
							<li><a href='media_main.php' target='main'>附件数据管理</a> </li>
							<li><a href='media_main.php?dopost=filemanager' target='main'>文件式管理器</a> </li>
						</ul>
					</dd>
				</dl>
				<!-- Item 4 End -->
				<!-- Item 5 Strat -->
				<dl class='bitem' id='sunitems4_1'>
					<dt onClick='showHide("items4_1")'><b>频道模型</b></dt>
					<dd style='display:block' class='sitem' id='items4_1'>
						<ul class='sitemu'>
							<li><a href='mychannel_main.php' target='main'>内容模型管理</a> </li>
							<li><a href='templets_one.php' target='main'>单页文档管理</a> </li>
							<li><a href='stepselect_main.php' target='main'>联动类别管理</a> </li>
							<li><a href='freelist_main.php' target='main'>自由列表管理</a> </li>
							<li><a href='diy_main.php' target='main'>自定义表单</a> </li>
						</ul>
					</dd>
				</dl>
				<!-- Item 5 End -->
				<!-- Item 6 Strat -->
				<dl class='bitem' id='sunitems5_1'>
					<dt onClick='showHide("items5_1")'><b>批量维护</b></dt>
					<dd style='display:block' class='sitem' id='items5_1'>
						<ul class='sitemu'>
							<li><a href='sys_cache_up.php' target='main'>更新系统缓存</a> </li>
							<li><a href='content_batch_up.php' target='main'>文档批量维护</a> </li>
							<li><a href='search_keywords_main.php' target='main'>搜索关键词维护</a> </li>
							<li><a href='article_keywords_main.php' target='main'>文档关键词维护</a> </li>
							<li><a href='article_test_same.php' target='main'>重复文档检测</a> </li>
							<li><a href='article_description_main.php' target='main'>自动摘要|分页</a> </li>
							<li><a href='tags_main.php' target='main'>TAG标签管理</a> </li>
							<li><a href='sys_data_replace.php' target='main'>数据库内容替换</a> </li>
						</ul>
					</dd>
				</dl>
				<!-- Item 6 End -->
				<!-- Item 7 Strat -->
				<dl class='bitem' id='sunitems6_1'>
					<dt onClick='showHide("items6_1")'><b>系统帮助</b></dt>
					<dd style='display:block' class='sitem' id='items6_1'>
						<ul class='sitemu'>
							<li><a href='http://help.dedecms.com' target='_blank'>参考文档</a> </li>
							<li><a href='http://site.desdev.cn/suggest/' target='_blank'>意见建议反馈</a> </li>
							<li><a href='http://bbs.dedecms.com' target='_blank'>官方交流论坛</a> </li>
						</ul>
					</dd>
				</dl>
				<!-- Item 7 End -->
			</div>
			<div id='ct100'></div>
			<div id='ct3'></div>
			<div id='ct5'></div>
			<div id='ct6'></div>
			<div id='ct7'></div>
			<div id='ct20'></div>
			<div id='ct10'></div></td>
	</tr>
	<tr>
		<td width='26'></td>
		<td width='160' valign='top'><img src='images/idnbgfoot.gif' /></td>
	</tr>
</table>
<script language="javascript">
function myAlert()
{
	alert('dede');	
}
</script>
</body>
</html>
