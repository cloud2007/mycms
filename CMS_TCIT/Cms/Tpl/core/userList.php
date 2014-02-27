<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>

<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Core/userList">用户管理</a>&nbsp;|&nbsp;<a href="/admin.php/Core/userEdit">添加用户</a></p>
</div>

<table width="100%" class="content_table">
	<tr class="title">
		<td><b>ID</b></td>
		<td><b>用户名</b></td>
		<td><b>权限</b></td>
		<td><b>状态</b></td>
		<td><b>单项操作</b></td>
	</tr>
	<?php foreach($userList as $v){?>
	<tr class="content">
		<td><?php echo $v->id;?></td>
		<td><?php echo $v->userID;?></td>
		<td><?php echo $v->grantWord();?></td>
		<td><?php echo $v->status();?></td>
		<td><?php echo $v->statusHref();?>|<a href="/admin.php/Core/userEdit/?id=<?php echo $v->id;?>">修改</a>|<a href="javascript:if (confirm('确定要删除此条信息吗？')) {location='/admin.php/Core/userDelete/<?php echo $v->id;?>';}">删除</a> </td>
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