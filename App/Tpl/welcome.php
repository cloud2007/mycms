<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>DedeCms Home</title>
<base target="_self">
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" type="text/css" href="css/indexbody.css" />
<link href="images/style1/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../include/js/dedeajax2.js"></script>
<script type="text/javascript" src="../include/js/jquery/jquery.js" ></script>
<script language="javascript" src="../include/js/jquery/ui.core.js"></script>
<script language="javascript" src="../include/js/jquery/ui.draggable.js"></script>
<script language="javascript" src="../include/js/jquery/ui.sortable.js"></script>
<script language="javascript" src="js/jquery.json-2.2.min.js"></script>
<script language="javascript" src="js/indexbody.js"></script>
<script language="javascript" src="js/drag.js"></script>
<script type="text/javascript">
function showMore()
{
	$("#allInfo").toggle();
	$("#allInfoTD").toggle();
}

$(function()
{
   $.get("index_testenv.php",function(data)
  {
	if(data !== '')
	{
		$("#__testEvn").html(data);
	}
  })
})
</script>
</head>
<body leftmargin="8" topmargin='8' bgcolor="#FFFFFF">
123123
<div style="min-width:780px">
	<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><div style='float:left'> 欢迎使用专业的PHP网站管理系统，轻松建站的首选利器 -- 织梦内容管理系统 </div>
				<div id='' style='float:right;padding-right:8px;'>
					<!--  //保留位置（顶右）  -->
				</div></td>
		</tr>
		<tr>
			<td height="1" background="images/sp_bg.gif" style='padding:0px'></td>
		</tr>
	</table>
	<div id="__testEvn"></div>
	<div id='mainmsg'>
		<div class="column" id="column1">
			<!--左侧开始-->
			<dl class="dbox" id="item1">
				<dt class='lside'><span class='l'>DedeCMS 更新消息</span></dt>
				<dd>
					<div id='updatetest'>
						<div id='updateinfos'>
							<div class='updatedvt'><b>您系统版本最后更新时间为：2012-11-22 </b><br/>
								<a href='javascript:LoadUpdateInfos();' class='np coolbg'>进行在线更新</a> &nbsp; <a href='sys_repair.php' class='np coolbg'>系统错误修复</a></div>
							<iframe name='stafrm' src='http://www.dedecms.com/newinfov57.php?version=V57_UTF8_SP1&formurl=www.daishijiaoyu.cn&phpver=5.3.13&os=WINNT&mysqlver=5.10&uptime=2012-11-22' frameborder='0' id='stafrm' width='98%' height='50'></iframe>
						</div>
					</div>
				</dd>
			</dl>
			<!--更新消息结束-->
			<dl class='dbox' id="item2">
				<dt class='lside'><span class='l'>商业授权查询</span></dt>
				<dd>
					<iframe name="showauth" src="index_body.php?dopost=showauth" width="100%" frameborder="0" scrolling="no" marginwidth="10" marginheight="10" id="showauth"></iframe>
				</dd>
			</dl>
			<!--更新消息结束-->
			<dl class='dbox' id="item3">
				<dt class='lside'>
					<div class='l'>快捷操作</div>
					<div class='r'><a href='#' onClick="AddNew()"><b>【新增】</b></a><a href='#' onClick="ListAll()"><b>【管理】</b></a></div>
				</dt>
				<dd>
					<div id='quickmenu'>
						<div class='icoitem' style='background:url(images/addnews.gif) 10px 3px no-repeat;'><a href='content_list.php'>文档列表</a></div>
						<div class='icoitem' style='background:url(images/menuarrow.gif) 10px 3px no-repeat;'><a href='feedback_main.php'>评论管理</a></div>
						<div class='icoitem' style='background:url(images/manage1.gif) 10px 3px no-repeat;'><a href='public_guide.php'>内容发布</a></div>
						<div class='icoitem' style='background:url(images/file_dir.gif) 10px 3px no-repeat;'><a href='catalog_main.php'>栏目管理</a></div>
						<div class='icoitem' style='background:url(images/manage1.gif) 10px 3px no-repeat;'><a href='sys_info.php'>修改参数</a></div>
					</div>
				</dd>
			</dl>
			<!--快捷操作结束-->
			<dl class="dbox" id="item4">
				<dt class='lside'>
					<div class='l'>系统基本信息</div>
				</dt>
				<dd class='intable'>
					<table width="98%" class="dboxtable">
						<tr>
							<td width="25%" class='nline' style="text-align:right">您的级别：</td>
							<td class='nline'> 总管理员                        [<a href="javascript:showMore()">查看更多</a>]</td>
						</tr>
						<tr>
							<td colspan="2" class='nline' id="allInfoTD" style="display:none"><table width="100%" border="0" cellspacing="0" cellpadding="0" id="allInfo" style="display:none">
									<tr>
										<td rowspan="5" class='nline' style="text-align:right">PHP环境摘要：</td>
										<td class='nline' style="text-align:left"> PHP版本：5.3.13&nbsp;GD版本：2.0.34</td>
									</tr>
									<tr>
										<td class='nline' style="text-align:left">是否安全模式：<font color='red'>Off</font> 　<a href='testenv.php' style='color:blue'><u>DedeCMS目录权限检测&gt;&gt;</u></a></font> </td>
									</tr>
									<tr>
										<td class='nline' style="text-align:left"> Register_Globals：<font color='red'>Off</font> &nbsp;
											Magic_Quotes_Gpc：<font color='red'>Off</font> </td>
									</tr>
									<tr>
										<td class='nline' style="text-align:left">支持上传的最大文件：20M</td>
									</tr>
									<tr>
										<td class='nline' style="text-align:left">是否允许打开远程连接：支持</td>
									</tr>
									<tr>
										<td class='nline' style="text-align:right"> 其它必须函数检测：</td>
										<td class='nline' style="text-align:left"> 符合要求 </td>
									</tr>
									<tr>
										<td class='nline' style="text-align:right"> 软件版本信息： </td>
										<td class='nline' style="text-align:left"> 版本名称：DedeCMS&nbsp;版本号：V57_UTF8_SP1</td>
									</tr>
								</table></td>
						</tr>
					</table>
				</dd>
			</dl>
			<!--系统基本信息结束-->
			<dl class='dbox' id="item5">
				<dt class='lside'>
					<div class='l'>程序团队</div>
				</dt>
				<dd class='intable'>
					<table width="98%" class="dboxtable">
						<tr>
							<td width='25%' height='36' class='nline' style="text-align:right"> 主程序研发： </td>
							<td class='nline' style="text-align:left"><a href="http://www.desdev.cn/team.php" target="_blank" style="color:blue">织梦团队</a></td>
						</tr>
						<tr>
							<td height='36' class='nline' style="text-align:right">鸣谢：</td>
							<td class='nline' style="text-align:left"><a href="http://www.desdev.cn/dedecms-thanks.html" target="_blank" style="color:blue">热心用户</a>、<a href="http://www.dedecms.com/thanks.html" target="_blank" style="color:blue">赞助商</a></td>
						</tr>
					</table>
				</dd>
			</dl>
			<!--开发团队结束-->
		</div>
		<!--左侧结束-->
		<div class="column" id="column2" >
			<!-- //右边的快捷消息开始 -->
			<dl class='dbox' id="item8">
				<dt class='lside'>
					<div class='l'>赞助商链接(<a href="http://ad.dedecms.com/ad/" target="_blank">说明</a>)</div>
				</dt>
				<dd>
					<iframe name="showad" src="index_body.php?dopost=showad" frameborder="0" width="100%" id="showad" frameborder="0" scrolling="no"  marginheight="5">
					</iframe>
				</dd>
			</dl>
			<!--赞助商链接结束-->
			<dl class='dbox' id="item6">
				<dt class='lside'>
					<div class='l'>信息统计</div>
				</dt>
				<dd id='listCount'> 正在载入中... </dd>
			</dl>
			<!--信息统计结束-->
			<dl class='dbox' id="item7">
				<dt class='lside'>
					<div class='l'>最新文档</div>
				</dt>
				<dd id='listNews'>
					<table width="100%" class="dboxtable">
						<tr>
							<td class='nline'  style="text-align:left"> ·<a href='article_edit.php?aid=47&channelid=1'>成都戴氏精品堂学校南部校区</a> </td>
						</tr>
						<tr>
							<td class='nline'  style="text-align:left"> ·<a href='article_edit.php?aid=46&channelid=1'>成都戴氏精品堂学校-南部校区</a> </td>
						</tr>
						<tr>
							<td class='nline'  style="text-align:left"> ·<a href='article_edit.php?aid=45&channelid=1'>刘宇锋 戴氏教育十里店校区校长</a> </td>
						</tr>
						<tr>
							<td class='nline'  style="text-align:left"> ·<a href='article_edit.php?aid=42&channelid=1'>戴氏教育集团上海总部成立</a> </td>
						</tr>
						<tr>
							<td class='nline'  style="text-align:left"> ·<a href='archives_edit.php?aid=41&channelid=18'>总裁专栏</a> </td>
						</tr>
						<tr>
							<td class='nline'  style="text-align:left"> ·<a href='article_edit.php?aid=40&channelid=1'>热烈祝贺戴氏教育集团戴国斌总裁荣获“中国民办教育家协会 副理事长”称号</a> </td>
						</tr>
					</table>
				</dd>
			</dl>
			<!--最新文档结束-->
		</div>
	</div>
	<br style='clear:both'/>
	<!-- //底部 -->
	<div align="center" class="footer"> Copyright &copy; 2004-2011 <a href='http://www.dedecms.com' target='_blank'><u>DedeCMS</u></a>. 织梦科技 版权所有 </div>
	<!--  下面是隐藏的项目  -->
	<div id='loaddiv' style='display:none'>
		<p align='center' style='padding-top:200px'><img src='images/loadinglit.gif' /> 请稍后，正在下载更新文件列表...</p>
	</div>
	<div id="editTab"> <span id='editTabBody'>请稍候，正在载入...</span> </div>
	<div id="addTab">
		<form name='addform' action='index_body.php'>
			<input type='hidden' name='dopost' value='addnew' />
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td height='28' colspan='3' background="images/tbg.gif"><div style='float:left'><b>增加快捷操作项</b></div>
						<div style='float:right;padding:3px 10px 0 0;'> <a href="javascript:CloseTab('addTab')"><img src="images/close.gif" width="12" height="12" border="0" /></a> </div></td>
				</tr>
				<tr>
					<td style="height:6px;font-size:1px;border-top:1px solid #8DA659" colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td width="20%" height="28" align="right">链接标题：</td>
					<td width="70%"><input name="title" type="text" id="title" class='pubinputs' style="width:255px;"/>
					</td>
				</tr>
				<tr>
					<td height="28" width="20%" align="right">ICO图片：</td>
					<td width="70%"><input name="ico" type="text" id="ico" class='pubinputs' style="width:255px;"/>
					</td>
				</tr>
				<tr>
					<td height="28" width="20%" align="right">链接网址：</td>
					<td width="70%"><input name="link" type="text" id="link" class='pubinputs' style="width:255px;"/>
					</td>
				</tr>
				<tr>
					<td height="45">&nbsp;</td>
					<td><input type="submit" name="Submit" value="保存项目" class="np coolbg" style="width:80px;cursor:pointer" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>
