<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 修改密码</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Core/databaseBackup">数据库备份</a></p>
</div>
<form name="changePwd" id="changePwd" method="post" action="/admin.php/Core/databaseBackup">
	<table width="100%" class="content_table">
		<tr>
			<td colspan="2"><font color="#FF0000">&nbsp;&nbsp;Tips:如不了解后台数据逻辑,请一次性备份所有数据!保存文件名不填写则自动生成!</font></td>
		</tr>
		<tr>
			<td width="120">数据表</td>
			<td class="textleft">
				<?php
				$dataArray = array(
					'category' => '类别数据',
					'grant'=>'权限数据',
					'member'=>'会员数据',
					'menu'=>'核心数据',
					'message'=>'留言数据',
					'news'=>'文章数据',
					'user'=>'用户信息'
				);
				foreach($dataArray as $k=>$v){
				?>
				<label>
				<input type="checkbox" name="table[]" value="<?php echo $k;?>" checked="checked" />&nbsp;<?php echo $v;?>&nbsp;&nbsp;
				</label>
				<?php }?>
			</td>
		</tr>
		<tr>
			<td width="120">备份文件名</td>
			<td class="textleft"><input type="text" name="filename" value="<?php echo $datainfo->userID;?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" class="btn" value=" 确 定 "></td>
		</tr>
	</table>
</form>