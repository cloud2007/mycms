<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>

<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Core/grantList">权限管理</a>&nbsp;|&nbsp;<a href="/admin.php/Core/addGrant">添加权限</a></p>
</div>

<table width="100%" class="content_table">
	<tr class="title">
		<td><b>ID</b></td>
		<td><b>name</b></td>
		<td><b>value</b></td>
		<td><b>状态</b></td>
		<td><b>单项操作</b></td>
	</tr>
	<?php foreach($GrantList as $v){?>
	<tr class="content">
		<td><?php echo $v->id;?></td>
		<td><?php echo $v->name;?></td>
		<td><?php echo $v->value;?></td>
		<td><?php echo $v->status();?></td>
		<td><?php echo $v->statusHref();?>|<a href="/admin.php/Core/addGrant/?id=<?php echo $v->id;?>">修改</a>|<a href="javascript:if (confirm('确定要删除此条信息吗？')) {location='/admin.php/Core/grantDelete/<?php echo $v->id;?>';}">删除</a> </td>
	</tr>
	<?php }?>
</table>

<script type="text/javascript">
$(document).ready(function(){
  $("tr.content").mouseover(function(){
      $(this).addClass("over");}).mouseout(function(){
            $(this).removeClass("over");})
      $("tr.content:even").addClass("alt");
});
</script>