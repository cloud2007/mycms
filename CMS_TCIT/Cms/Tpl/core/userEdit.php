<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 修改密码</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Core/userList">用户管理</a>&nbsp;|&nbsp;<a href="/admin.php/Core/userEdit">添加用户</a></p>
</div>
<form name="changeUser" id="changeUser" method="post" action="/admin.php/Core/userEdit">
	<table width="100%" class="content_table">
		<tr>
			<td colspan="2"><font color="#FF0000">&nbsp;&nbsp;Tips:修改用户可不输入密码，添加用户默认密码888888!</font></td>
		</tr>
		<tr>
			<td width="120">用户名</td>
			<td class="textleft"><input type="text" name="userID" value="<?php echo $user->userID;?>" <?php if($user->id)echo 'disabled="disabled"';?> /><input type="hidden" name="id" value="<?php echo $user->id;?>" /></td>
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
			<td width="120">权限</td>
			<td class="textleft"><?php echo $user->grantCheckbox();?>
				<?php foreach($GrantList as $v){?>
				<input type="checkbox" name="grantWord[]" value="<?php echo $v->name;?>">&nbsp;<?php echo $v->value;?>&nbsp;
				<?php }?>
			</td>
		</tr>
		<tr>
			<td width="120">状态</td>
			<td class="textleft"><?php echo $user->statusRadio();?></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" class="btn" value=" 确 定 "></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
$(function(){
	var demo = $("#changeUser").Validform({
		tiptype:3,
	});
	demo.tipmsg.s="Error!";
	demo.addRule([
		{
			ele:"input[name='userID']",
			datatype:"*3-18",
		},
		{
			ele:"input[name='pwd1']",
			datatype:"*3-16",
			nullmsg:"输入密码",
			errormsg:"密码长度为6-16个字符",
			ignore:"ignore",
		},
		{
			ele:"input[name='pwd2']",
			datatype:"*3-16",
			nullmsg:"再次输入密码",
			recheck:"pwd1",
			errormsg:"输入错误",
			ignore:"ignore",
		},
	]);
})
</script>