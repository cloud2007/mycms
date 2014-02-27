<link href="/Static/js/swfupload/css/upload.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Static/js/kindeditor/kindeditor.js"></script>
<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Member/">会员管理</a></p>
</div>
<form name="AddForm" id="AddForm" method="post" action="/admin.php/Member/memberSave">
	<input type="hidden" name="lmID" value="<?php echo $_SESSION['lam'];?>" />
	<input type="hidden" name="id" value="<?php echo $datainfo->id;?>" />
	<input type="hidden" name="PageNo" value="<?php echo $PageNo;?>" />
	<table width="100%" class="content_table">
		<?php
			$inputArray=array(
				array('userID','会员账号'),
				array('realName','真实姓名'),
				array('sex','性别','radio'),
				array('phone','手机号'),
				array('tel','电话号码'),
				array('addr','地址'),
				array('email','E-Mail'),
				array('youbian','邮编'),
				array('avatar','头像','avatar'),
				array('status','状态','radio'),
				array('creatTime','创建时间','time'),
				array('loginTime','最后登录','time'),
			);
			foreach($inputArray as $v){
				echo $Menu->showMemberInput("{$v[0]}","{$v[1]}",$datainfo,"{$v[2]}");
			}
		?>
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