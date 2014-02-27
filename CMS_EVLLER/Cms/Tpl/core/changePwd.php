<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 修改密码</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Core/changePwd">密码修改</a></p>
</div>
<form name="changePwd" id="changePwd" method="post" action="/admin.php/Core/changePwd">
	<table width="100%" class="content_table">
		<tr>
			<td colspan="2"><font color="#FF0000">&nbsp;&nbsp;Tips:修改密码后需要重新登录!</font></td>
		</tr>
		<tr>
			<td width="120">用户名</td>
			<td class="textleft"><input type="text" name="userID" value="<?php echo $datainfo->userID;?>" disabled="disabled" /><input type="hidden" name="id" value="<?php echo $datainfo->id;?>" disabled="disabled" /></td>
		</tr>
		<tr>
			<td>输入原密码</td>
			<td class="textleft"><input type="password" name="pwd" /></td>
		</tr>
		<tr>
			<td>输入密码</td>
			<td class="textleft"><input type="password" name="pwd1" /></td>
		</tr>
		<tr>
			<td>确认密码</td>
			<td class="textleft"><input type="password" name="pwd2" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" class="btn" value=" 确 定 "></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
$(function(){
	var demo = $("#changePwd").Validform({
		tiptype:3,
	});
	demo.tipmsg.s="Error!";
	demo.addRule([
		{
			ele:"input[name='pwd']",
			datatype:"*",
			nullmsg:"输入原密码",
		},
		{
			ele:"input[name='pwd1']",
			datatype:"*6-16",
			nullmsg:"输入密码",
			errormsg:"密码长度为6-16个字符",
		},
		{
			ele:"input[name='pwd2']",
			datatype:"*6-16",
			nullmsg:"再次输入密码",
			recheck:"pwd1",
			errormsg:"输入错误",
		},
	]);
})
</script>