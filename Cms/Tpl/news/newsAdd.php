<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/News/">信息管理</a>&nbsp;|&nbsp;<a href="/admin.php/News/Add">信息添加</a></p>
</div>
<form name="newsAdd" id="newsAdd" method="post" action="/admin.php/News/newsSave">
	<table width="100%" class="content_table">
		<?php
		if(in_array('title', array_filter(explode('|', $datainfo->tcitFields)))){
		?>
		<tr>
			<td><?php echo $datainfo->title;?></td>
			<td class="textleft"><input type="text" name="title" value="" size="50" /></td>
		</tr>
		<?php
		}
		?>
		<?php
			for($i=1;$i<11;$i++){
				echo $datainfo->showInput('title'.$i);
			}
		?>
		<?php
			for($i=1;$i<6;$i++){
				echo $datainfo->showNameInput('name'.$i);
			}
		?>
	</table>
	<div class="clearH"></div>
	<table width="100%" class="content_table">
		<tr>
			<td><input type="submit" class="btn" value=" 确 定 "> <input type="button" class="btn" value=" 返 回 " onClick="self.history.back();"></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
$(function(){
	var demo = $("#newsAdd").Validform({
		tiptype:3,
	});
	demo.tipmsg.s="Error!";
	demo.addRule([
		{
			ele:"input[name='lmName']",
			datatype:"*",
		},
		{
			ele:"input[name='menuName']",
			datatype:"*",
		},
		{
			ele:"input[name='lmID']",
			datatype:"*,n",
		},
		{
			ele:"input[name='doLink']",
			datatype:"*",
		},
		{
			ele:"input[name='hits']",
			datatype:"n",
			ignore:"ignore",
		},
	]);
})
</script>