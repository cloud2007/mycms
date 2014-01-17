<link href="/Static/js/swfupload/css/upload.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Static/js/kindeditor/kindeditor.js"></script>
<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/News/">信息管理</a>&nbsp;|&nbsp;<a href="/admin.php/News/Add">信息添加</a></p>
</div>
<form name="newsAdd" id="newsAdd" method="post" action="/admin.php/News/newsSave">
	<table width="100%" class="content_table">
		<?php
			$datainfo->showInput('title');
			for($i=1;$i<11;$i++){
				echo $datainfo->showInput('title'.$i);
			}
			for($i=1;$i<6;$i++){
				echo $datainfo->showTextarea('name'.$i);
			}
			$datainfo->showEditorContent('content');
			for($i=1;$i<6;$i++){
				echo $datainfo->showEditorContent('content'.$i);
			}
			$radioArray=array('is_tj','is_gd','is_ab','is_cd','is_ef','is_gh','is_jk','is_mn');
			foreach($radioArray as $v){
				echo $datainfo->showRadio('{$v}');
			}
			for($i=1;$i<6;$i++){
				echo $datainfo->showUploadSingle('upload'.$i);
			}
			echo $datainfo->showUploadMulti('multiPic');
		?>
	</table>
	<div class="clearH"></div>
	<table width="100%" class="content_table">
		<tr>
			<td><input type="submit" class="btn" value=" 确 定 "> <input type="button" class="btn" value=" 返 回 " onClick="self.history.back();"></td>
		</tr>
	</table>
</form>
<script type="text/javascript" src="/Static/js/swfupload/scripts/swfobject.js"></script>
<script type="text/javascript" src="/Static/js/swfupload/scripts/jquery.uploadify.v2.1.0.min.js"></script>
<script type="text/javascript" src="/Static/js/swfupload/myupload.js"></script>
<script type="text/javascript">
$(function(){
	var items = ['source','undo','redo','fontsize','|','forecolor', 'hilitecolor', 'bold', 'italic', 'underline','removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright','|', 'emoticons', 'image', 'link'];
	KindEditor.ready(function(K) {
		K.create('textarea[class="content"]', {
			uploadJson : '/Public/js/kindeditor/php/upload_json.php?pathUrl=tminfo',
			fileManagerJson : '/Static/js/kindeditor/php/file_manager_json.php?pathUrl=tminfo',
			urlType : 'absolute',
			allowFileManager : true,
			//afterBlur:function(){},
			items : items
		});
	});
})
</script>