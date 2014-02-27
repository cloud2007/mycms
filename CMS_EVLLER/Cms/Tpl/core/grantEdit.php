<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 修改密码</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Core/grantList">权限管理</a>&nbsp;|&nbsp;<a href="/admin.php/Core/addGrant">添加权限</a></p>
</div>
<form name="changeGrant" id="changeGrant" method="post" action="/admin.php/Core/addGrant">
	<table width="100%" class="content_table">
		<tr>
			<td width="120">权限字</td>
			<td class="textleft"><input type="text" name="name" value="<?php echo $Grant->name;?>" /><input type="hidden" name="id" value="<?php echo $Grant->id;?>" /></td>
		</tr>
		<tr>
			<td width="120">权限说明</td>
			<td class="textleft"><input type="text" name="value" value="<?php echo $Grant->value;?>" /></td>
		</tr>
		<tr>
			<td width="120">状态</td>
			<td class="textleft"><?php echo $Grant->statusRadio();?></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" class="btn" value=" 确 定 "></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
$(function(){
	var demo = $("#changeGrant").Validform({
		tiptype:3,
	});
	demo.tipmsg.s="Error!";
	demo.addRule([
		{
			ele:"input[name='name']",
			datatype:"*",
		},
		{
			ele:"input[name='value']",
			datatype:"*",
		},
	]);
})
</script>