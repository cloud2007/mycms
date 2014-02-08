<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>

<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Core/">菜单管理</a>&nbsp;|&nbsp;<a href="/admin.php/Core/addMenu">添加菜单功能</a></p>
</div>

<table width="100%" class="content_table">
	<tr class="title">
		<td><b>LM_ID</b></td>
		<td><b>菜单标题</b></td>
		<td><b>项目标题</b></td>
		<td><b>功能链接</b></td>
		<td><b>对应权限</b></td>
		<td><b>单项操作</b></td>
	</tr>
	<?php foreach($MenuList as $v){?>
	<tr class="content">
		<td><?php echo $v->lmID;?></td>
		<td><?php echo $v->lmName;?></td>
		<td><?php echo $v->menuName;?></td>
		<td><?php echo $v->doLink;?></td>
		<td><?php echo $v->grantWord;?></td>
		<td><a href="/admin.php/Core/Modify/<?php echo $v->id;?>">修改</a>|<a href="javascript:if (confirm('确定要删除此条信息吗？')) {location='/admin.php/Core/Delete/<?php echo $v->id;?>';}">删除</a> </td>
	</tr>
	<?php }?>
	<tr class="pages">
		<td colspan="6"><?php echo $PagerData['linkhtml'];?></td>
	</tr>
</table>

<script type="text/javascript">
$(document).ready(function(){
  $("tr.content").mouseover(function(){
      $(this).addClass("over");}).mouseout(function(){
            $(this).removeClass("over");})
      $("tr.content:even").addClass("alt");
});
</script>