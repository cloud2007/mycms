<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Member/">会员管理</a></p>
</div>
<form name="ListForm" id="ListForm" method="post" action="/admin.php/Member/Deletes">
<table width="100%" class="content_table">
	<tr class="title">
		<td><input type="checkbox" id="checkAll"> 全选</td>
		<td><b>ID</b></td>
		<td><b>登录用户名</b></td>
		<td><b>真实姓名</b></td>
		<td><b>性　　别</b></td>
		<td><b>邮　　箱</b></td>
		<td><b>状　　态</b></td>
		<td><b>创建时间</b></td>
		<td><b>单项操作</b></td>
	</tr>
	<?php foreach($DataList as $v){?>
	<tr class="content">
		<td><input name="checkID[]" type="checkbox" value="<?php echo $v->id;?>"></td>
		<td><?php echo $v->id;?></td>
		<td><?php echo $v->userID;?><?php echo $v->avatar();?></td>
		<td><?php echo $v->realName;?></td>
		<td><?php echo MemberTable::$sexText[$v->sex];?></td>
		<td><?php echo $v->email;?></td>
		<td><?php echo MemberTable::$statusText[$v->status];?></td>
		<td><?php echo $v->creatTime();?></td>
		<td><a href="/admin.php/Member/Add/<?php echo $v->id;?>?PageNo=<?php echo $_GET['PageNo']?>">查看</a>|<a href="javascript:if (confirm('确定要删除此条信息吗？')) {location='/admin.php/Member/Delete/<?php echo $v->id;?>?PageNo=<?php echo $_GET['PageNo']?>';}">删除</a> </td>
	</tr>
	<?php }?>
	<tr>
		<td><input name="del" type="button" value="删 除" class="btn blue" /></td>
		<td colspan="8" class="pages"><?php echo $PagerData['linkhtml'];?></td>
	</tr>
</table>
</form>
<script type="text/javascript" src="/Static/js/List.js"></script>
<label>