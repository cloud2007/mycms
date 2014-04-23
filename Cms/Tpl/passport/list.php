<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Passport/">信息管理</a>&nbsp;|&nbsp;<a href="/admin.php/Passport/Add">信息添加</a></p>
</div>
<form name="ListForm" id="ListForm" method="post" action="/admin.php/Post/deletes">
<table width="100%" class="content_table">
	<tr class="title">
		<td><input type="checkbox" id="checkAll"> 全选</td>
		<td><b>ID</b></td>
		<td><b>姓名</b></td>
		<td><b>订单ID</b></td>
		<td><b>电话</b></td>
		<td><b>应收款</b></td>
		<td><b>是否收款</b></td>
		<td><b>状态</b></td>
		<td><b>创建时间</b></td>
		<td><b>单项操作</b></td>
	</tr>
	<?php foreach($List as $v){?>
	<tr class="content">
		<td><input name="checkID[]" type="checkbox" value="<?php echo $v->id;?>"></td>
		<td><?php echo $v->id;?></td>
		<td><?php echo $v->name;?></td>
		<td><?php echo $v->order_id;?></td>
		<td><?php echo $v->tel;?></td>
		<td><?php echo $v->price;?></td>
		<td><?php echo $v->yesno;?></td>
		<td><?php echo $v->status;?></td>
		<td><?php echo $v->creatTime();?></td>
		<td><a href="/admin.php/Port/Add/<?php echo $v->id;?>?PageNo=<?php echo $_GET['PageNo']?>">修改</a>|<a href="javascript:if (confirm('确定要删除此条信息吗？')) {location='/admin.php/Port/delete/<?php echo $v->id;?>?PageNo=<?php echo $_GET['PageNo']?>';}">删除</a> </td>
	</tr>
	<?php }?>
	<tr>
		<td><input name="del" type="button" value="删 除" class="btn blue" /></td>
		<td colspan="9" class="pages"><?php echo $PagerData['linkhtml'];?></td>
	</tr>
</table>
</form>
<script type="text/javascript" src="/Static/js/List.js"></script>