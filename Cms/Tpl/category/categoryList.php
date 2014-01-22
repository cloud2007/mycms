<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Category/">信息管理</a>&nbsp;|&nbsp;<a href="/admin.php/Category/Add">信息添加</a></p>
</div>
<form name="ListForm" id="ListForm" method="post" action="/admin.php/Category/Deletes">
<table width="100%" class="content_table">
	<tr class="title">
		<td><input type="checkbox" id="checkAll"> 全选</td>
		<td><b>ID</b></td>
		<td><b>菜单标题</b></td>
		<td><b>项目标题</b></td>
		<td><b>功能链接</b></td>
		<td><b>对应权限</b></td>
		<td><b>单项操作</b></td>
	</tr>
	<?php foreach($NewsList as $v){?>
	<tr class="content">
		<td><input name="checkID[]" type="checkbox" value="<?php echo $v->id;?>"></td>
		<td><?php echo $v->id;?></td>
		<td><?php echo $v->title;?></td>
		<td><?php echo $v->title1;?></td>
		<td align="left"><?php echo $v->title1;?></td>
		<td><?php echo $v->title1;?></td>
		<td><a href="/admin.php/News/Add/<?php echo $v->id;?>">修改</a>|<a href="javascript:if (confirm('确定要删除此条信息吗？')) {location='/admin.php/News/Delete/<?php echo $v->id;?>';}">删除</a> </td>
	</tr>
	<?php }?>
	<tr>
		<td><input name="del" type="button" value="删 除" class="btn blue" /></td>
		<td colspan="6" class="pages"><?php echo $PagerData['linkhtml'];?></td>
	</tr>
</table>
</form>
<script type="text/javascript" src="/Static/js/List.js"></script>