<link href="/Static/js/swfupload/css/upload.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.dels{ background:#C10000; color:#FFFFFF; padding:2px 5px; text-decoration:none; font-size:14px}
.views{ background:green; color:#FFFFFF; padding:2px 5px; text-decoration:none; font-size:14px}
a.dels:hover,a.views:hover{ color:#FFFFFF}
.tr_view{ display:none; background:#f7f7f7}
</style>
<script type="text/javascript" src="/Static/js/kindeditor/kindeditor.js"></script>
<script type="text/javascript" src="/Static/js/My97DatePicker/WdatePicker.js"></script>
<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Passport/">信息管理</a>&nbsp;|&nbsp;<a href="/admin.php/Passport/Add">信息添加</a></p>
</div>
<form name="AddForm" id="AddForm" method="post" action="/admin.php/Passport/orderSave">
	<input type="hidden" name="user_id" value="<?php echo $user->id;?>" />
	<input type="hidden" name="id" value="<?php echo $datainfo->id;?>" />
	<input type="hidden" name="PageNo" value="<?php echo $PageNo;?>" />
	<table width="100%" class="content_table" id="passporthtml">
		<tr>
			<td class="2">
				<ul class="addlist">
					<li class="one"><span>联系人:</span><input name="uname" value="<?php echo $datainfo->uname;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li class="one"><span>地址:</span><input name="addr" value="<?php echo $datainfo->addr;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li class="one"><span>订单号:</span><input name="orderid" value="<?php echo $datainfo->orderid;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>电话:</span><input name="utel" value="<?php echo $datainfo->utel;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>成交日期:</span><input name="okdate" type="text" value="<?php echo $datainfo->okdate();?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> class="Wdate" onClick="WdatePicker()" /></li>
					<li><span>统计日期:</span><input name="countdate" value="<?php echo $datainfo->countdate();?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> class="Wdate" onClick="WdatePicker()" /></li>
					<li><span>收件日期:</span><input name="recivedate" value="<?php echo $datainfo->recivedate();?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> class="Wdate" onClick="WdatePicker()" /></li>
					<li><span>送签日期:</span><input name="sentdate" value="<?php echo $datainfo->sentdate();?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> class="Wdate" onClick="WdatePicker()" /></li>
					<li><span>签证种类:</span><input name="type" value="<?php echo $datainfo->type;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>数量:</span><input name="num" value="<?php echo $datainfo->num;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>快递方式:</span><input name="sendtype" value="<?php echo $datainfo->sendtype;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>付款方式:</span><input name="paytype" value="<?php echo $datainfo->paytype;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>保险:</span><input name="safe" value="<?php echo $datainfo->safe;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>淘宝ID:</span><input name="taobaoid" value="<?php echo $datainfo->taobaoid;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>团号:</span><input name="teamid" value="<?php echo $datainfo->teamid;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>应收款:</span><input name="price" value="<?php echo $datainfo->price;?>" <?php if($datainfo->id)echo 'readonly="readonly"';?> /></li>
					<li><span>是否付款:</span><select name="pay" <?php if($datainfo->id)echo 'readonly="readonly"';?>>
							<?php foreach(PassportAction::$YesnoArray as $val){?>
							<option value="<?php echo $val['id'];?>" <?php if($val['id'] == $v->pay)echo 'selected="selected"';?>><?php echo $val['text'];?></option>
							<?php }?>
						</select>
					</li>
					<li><span>状态:</span><select name="status">
							<?php foreach(PassportAction::$StatusArray as $val){?>
							<option value="<?php echo $val['id'];?>" <?php if( $datainfo->status > $val['id'])echo 'disabled="disabled"';?> <?php if($val['id'] == $datainfo->status)echo 'selected="selected"';?> <?php if(!$datainfo->id && $val['id']>1)echo 'disabled="disabled" ';?>><?php echo $val['text'];?></option>
							<?php }?>
						</select>
					</li>
					<li class="one"><span>客人姓名:</span><textarea name="content" <?php if($datainfo->id)echo 'readonly="readonly"';?>><?php echo $datainfo->content;?></textarea></li>
					<li class="one"><span>备注:</span><input name="beizhu" /></li>
					<li><span></span><a class="views" id="<?php echo $datainfo->id;?>" href="javascript:void(0);">View</a></li>
				</ul>
			</td>
		</tr>
		<tr class="tr_view" id="tr<?php echo $datainfo->id;?>">
			<td class="textleft" colspan="2" id="td<?php echo $datainfo->id;?>"></td>
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

$(".views").live('click',function(){
	var id = $(this).attr('id');
	$.post("/admin.php/Passport/info",{id:id},function(result){
		$('td#td'+id).html(result);
		$('tr#tr'+id).toggle();
	});
});
</script>