<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Category/">信息管理</a>&nbsp;|&nbsp;<a href="/admin.php/Category/Add">信息添加</a></p>
</div>
<form name="ListForm" id="ListForm" method="post" action="/admin.php/Category/Deletes">
<table width="100%" class="content_table">
	<tr class="title">
		<td><input type="checkbox" id="checkAll" disabled="disabled" /> 全选</td>
		<td><b>ID</b></td>
		<td><b>类别名称</b></td>
		<td><b>单项操作</b></td>
	</tr>
	<?php foreach($dataList as $v){?>
	<tr class="content">
		<td><input name="checkID[]" type="checkbox" value="<?php echo $v->id;?>" /></td>
		<td><?php echo $v['id'];?></td>
		<td class="textleftlist"><?php echo $v['categoryTitle'];?><div style="float:right;"><input id="<?php echo $v['id'];?>" op="up" name="upButton" type="button" value="上移" class="btn blue small" /> <input id="<?php echo $v['id'];?>" op="down" name="downButton" type="button" value="下移" class="btn blue small" /></div></td>
		<td><a href="/admin.php/Category/AddSon/<?php echo $v['id'];?>">添加子类</a>|<a href="/admin.php/Category/Add/<?php echo $v['id'];?>">修改</a>|<a href="javascript:if (confirm('确定要删除此条信息吗？')) {location='/admin.php/Category/Delete/<?php echo $v['id'];?>';}">删除</a> </td>
	</tr>
	<?php }?>
	<tr>
		<td><input name="del" type="button" value="删 除" class="btn blue" /></td>
		<td colspan="6" class="pages"><?php echo '^_^';?></td>
	</tr>
</table>
</form>
<script type="text/javascript" src="/Static/js/List.js"></script>
<script>
	$("input[name='upButton'],input[name='downButton']").click(function(){
		var id = $(this).attr('id');
		var op = $(this).attr('op');
		//alert(id+op);
		$('#ListForm').attr("action","/admin.php/category/"+op+'/'+id);
		$('#ListForm').submit();
	})
	
	
</script>