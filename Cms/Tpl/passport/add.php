<link href="/Static/js/swfupload/css/upload.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Static/js/kindeditor/kindeditor.js"></script>
<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Port/">信息管理</a></p>
</div>
<form name="AddForm" id="AddForm" method="post" action="/admin.php/Port/Save">
	<input type="hidden" name="lmID" value="<?php echo $_SESSION['lam'];?>" />
	<input type="hidden" name="id" value="<?php echo $datainfo->id;?>" />
	<input type="hidden" name="PageNo" value="<?php echo $PageNo;?>" />
	<table width="100%" class="content_table">
		<tr>
			<td>护照姓名</td>
			<td class="textleft"><input type="text" name="name" value="<?php echo $datainfo->name;?>" /></td>
			<td>联系电话</td>
			<td class="textleft"><input type="text" name="tel" value="<?php echo $datainfo->tel;?>" /></td>
		</tr>
		<tr>
			<td>地址</td>
			<td class="textleft"><input type="text" name="addr" value="<?php echo $datainfo->addr;?>" /></td>
			<td>签证种类</td>
			<td class="textleft">
				<select name="type">
					<?php foreach(PassportAction::$TypeArray as $val){?>
					<option value="<?php echo $val['id'];?>" <?php if($val['id'] == $datainfo->type)echo 'selected="selected"';?>><?php echo $val['text'];?></option>
					<?php }?>
				</select>
			</td>
		</tr>
			<td>渠道</td>
			<td class="textleft">
				<select name="medium">
					<?php foreach(PassportAction::$MediumArray as $val){?>
					<option value="<?php echo $val['id'];?>" <?php if($val['id'] == $datainfo->medium)echo 'selected="selected"';?>><?php echo $val['text'];?></option>
					<?php }?>
				</select>
			</td>
			<td>渠道备注</td>
			<td class="textleft"><input type="text" name="mediumbeizhu" value="<?php echo $datainfo->mediumbeizhu;?>" /></td>
		</tr>
		<tr>
			<td>送签日期</td>
			<td class="textleft"><input type="text" name="sendtime" value="<?php echo $datainfo->sendtime;?>" /></td>
			<td>快递方式</td>
			<td class="textleft"><input type="text" name="send" value="<?php echo $datainfo->send;?>" /></td>
		</tr>
		<tr>
			<td>淘宝ID</td>
			<td class="textleft"><input type="text" name="taobaoid" value="<?php echo $datainfo->taobaoid;?>" /></td>
			<td>团号</td>
			<td class="textleft"><input type="text" name="teamid" value="<?php echo $datainfo->teamid;?>" /></td>
		</tr>
		<tr>
			<td>备注</td>
			<td class="textleft"><input type="text" name="beizhu" /></td>
			<td>状态</td>
			<td class="textleft">
				<select name="status">
					<?php foreach(PassportAction::$StatusArray as $val){?>
					<option value="<?php echo $val['id'];?>" <?php if($val['id'] == $datainfo->status)echo 'selected="selected"';?> <?php if($datainfo->status>$val['id'])echo 'disabled="disabled" ';?> ><?php echo $val['text'];?></option>
					<?php }?>
				</select>
			</td>
		</tr>
	</table>
	<div class="clearH"></div>
	<table width="100%" class="content_table">
		<tr>
			<td><input type="submit" class="btn green big" value="确 定"> <input type="button" class="btn big" value="返 回" onClick="self.history.back();"></td>
		</tr>
	</table>
</form>
<script type="text/javascript" src="/Static/js/swfupload/scripts/swfobject.js"></script>
<script type="text/javascript" src="/Static/js/swfupload/scripts/jquery.uploadify.v2.1.0.min.js"></script>
<script type="text/javascript" src="/Static/js/swfupload/myupload.js"></script>
<script type="text/javascript" src="/Static/js/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
//content字段Kind初始化
$(function(){
	var items = ['source','undo','redo','fontsize','|','forecolor', 'hilitecolor', 'bold', 'italic', 'underline','removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright','|', 'emoticons', 'image', 'multiimage', 'link'];
	KindEditor.ready(function(K) {
		K.create('textarea[class="content"]', {
			uploadJson : '/admin.php/upload/kindEditor',
			fileManagerJson : '/admin.php/upload/fileManager',
			urlType : 'absolute',
			allowFileManager : true,
			//afterBlur:function(){},
			//items : items
		});
	});
})
</script>