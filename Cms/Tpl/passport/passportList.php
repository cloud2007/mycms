<script type="text/javascript" src="/Static/js/My97DatePicker/WdatePicker.js"></script>
<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Passport/">信息管理</a>&nbsp;|&nbsp;<a href="/admin.php/Passport/Add">信息添加</a></p>
</div>
<form name="SearForm" id="SearForm" method="post" action="/admin.php/Passport/">
<table width="100%" class="content_table">
	<tr class="title">
		<td style="text-align:right; padding:0 10px 0 0">成交日期：<input name="begin" id="begin" type="text" class="Wdate" onClick="WdatePicker()" /> - <input name="end" id="end" type="text" class="Wdate" onClick="WdatePicker()" /> <input type="text" name="w" /> <input name="sear" type="submit" value="搜索" /> <input name="export" id="export" type="button" value="导出" /> <span class="exportdiv"></span></td>
	</tr>
</table>
</form>
<div class="clearh"></div>
<form name="ListForm" id="ListForm" method="post" action="/admin.php/Passport/deletes">
<table width="100%" class="content_table">
	<tr class="title">
		<td><input type="checkbox" id="checkAll"> 全选</td>
		<td><b>ID</b></td>
		<td><b>订单ID</b></td>
		<td><b>联系人</b></td>
		<td><b>客户姓名</b></td>
		<td><b>最后编辑用户</b></td>
		<td><b>创建时间</b></td>
		<td><b>状态</b></td>
		<td><b>单项操作</b></td>
	</tr>
	<?php foreach($List as $v){?>
	<tr class="content">
		<td><input name="checkID[]" type="checkbox" value="<?php echo $v->id;?>"></td>
		<td><?php echo $v->id;?></td>
		<td><?php echo $v->uname;?> - <?php echo $v->utel;?></td>
		<td><?php echo $v->orderid;?></td>
		<td>
		<?php
		$arr = array();
		foreach(explode("\n",$v->content) as $val){
			$o = explode('-',$val);
			$arr[] = $o[0];
		}
		echo implode(',',$arr);
		?></td>
		<td><?php echo $v->user_id();?></td>
		<td><?php echo $v->creatTime();?></td>
		<td>
			<select name="status" status="<?php echo $v->status;?>" id="status<?php echo $v->id;?>">
				<?php foreach(PassportAction::$StatusArray as $val){?>
				<option value="<?php echo $val['id'];?>" <?php if($val['id'] == $v->status)echo 'selected="selected"';?> <?php if($v->status>$val['id'])echo 'disabled="disabled" ';?> ><?php echo $val['text'];?></option>
				<?php }?>
			</select><input name="b" type="button" id="<?php echo $v->id;?>" class="status-ok" value="提交" />
			<span id="res<?php echo $v->id;?>"></span>
		</td>
		<td><a href="/admin.php/Passport/Add/<?php echo $v->id;?>?PageNo=<?php echo $_GET['PageNo']?>">修改</a>|<a href="javascript:if (confirm('确定要删除此条信息吗？')) {location='/admin.php/Passport/delete/<?php echo $v->id;?>?PageNo=<?php echo $_GET['PageNo']?>';}">删除</a> </td>
	</tr>
	<?php }?>
	<tr>
		<td><input name="del" type="button" value="删 除" class="btn blue" /></td>
		<td colspan="8" class="pages"><?php echo $PagerData['linkhtml'];?></td>
	</tr>
</table>
</form>
<script>
$(".status-ok").live('click',function(){
	var id = $(this).attr('id');
	var status_o = $('#status'+id).attr('status');
	var status_n = $('#status'+id).val();
	if(status_n > status_o){
		$.post("/admin.php/Passport/status/",{id:id,status:status_n},function(result){
			$('#res'+id).html(result);
		});
	}else{
		alert('状态无更改');
	}
});

$("#export").live('click',function(){
	$('.exportdiv').html('<img src="/Static/images/load.gif" />');
	var begin = $('#begin').val();
	var end = $('#end').val();
	$.post("/admin.php/Export/",{begin:begin,end:end},function(result){
		$('.exportdiv').html('<a href="/Uploads/execl/'+result+'">导出成功,点击下载</a>');
	});
});
</script>
<script type="text/javascript" src="/Static/js/List.js"></script>