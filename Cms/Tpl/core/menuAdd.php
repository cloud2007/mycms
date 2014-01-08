<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Core/">菜单管理</a>&nbsp;|&nbsp;<a href="/admin.php/Core/addMenu">添加菜单功能</a></p>
</div>
<form name="menuAdd" method="post" onSubmit="return cf(menuAdd)" action="">
	<table width="100%" class="content_table">
		<tr>
			<td>栏目名称</td>
			<td class="textleft"><input type="text" name="lmName" value="<?php echo $datainfo->lmName;?>" size="18" />
				<input type="hidden" name="menuId" value="<?php echo $datainfo->menuId;?>" />
			<td>项目标题</td>
			<td class="textleft"><input type="text" name="menuName" value="<?php echo $datainfo->menuName;?>" size="18" /></td>
			<td>是否可用</td>
			<td class="textleft"><input type="radio" name="usable" value="1" <?php if($datainfo->usable) echo "checked" ?>>
				是 &nbsp;
				<input type="radio" name="usable" value="0" <?php if(!$datainfo->usable) echo "checked" ?>>
				否</td>
		</tr>
		<tr>
			<td>功能链接</td>
			<td colspan="3" class="textleft"><input type="text" name="doLink" value="<?php echo $datainfo->doLink;?>" size="50" />
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="link_cs1" checked="checked" />
				带参数</td>
			<td>栏 目 ID</td>
			<td class="textleft"><input name="lmId" type="text" id="lmId" value="<?php echo $datainfo->lmId?>" size="8" /></td>
		</tr>
		<tr>
			<td>管理链接</td>
			<td colspan="3" class="textleft"><input name="adminLink" type="text" id="adminLink" value="<?php echo $datainfo->adminLink;?>" size="50" />
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="link_cs2" checked="checked" />
				带参数 </td>
			<td>排序位置</td>
			<td class="textleft"><input name="orderNo" type="text" value="<?php echo $datainfo->orderNo?>" size="6" /></td>
		</tr>
		<tr>
			<td>对应权限</td>
			<td class="textleft"><input name="grantWord" type="text" value="<?php echo $datainfo->grantWord;?>" size="18" /></td>
			<td>数据表名</td>
			<td colspan="3" class="textleft"><input name="dataBase" type="text" value="<?php echo $datainfo->dataBase;?>" size="15" /></td>
		</tr>
		<tr>
			<td>禁止添加</td>
			<td class="textleft"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="noadd" <?php if (strstr($row['set_nr'], 'noadd')) echo "checked" ?>></td>
			<td>禁止删除</td>
			<td class="textleft"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="nodel" <?php if (strstr($row['set_nr'], 'nodel')) echo "checked" ?>></td>
			<td>禁止修改</td>
			<td class="textleft"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="nomod" <?php if (strstr($row['set_nr'], 'nomod')) echo "checked" ?>></td>
		</tr>
	</table>
	<div class="clearH"></div>
	<table width="100%" class="content_table content_table_left">
		<tr>
			<td colspan="2"><font color="#FF0000">&nbsp;&nbsp;请选择文章内容所要显示的字段名称！</font></td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" value="title" <?php echo $datainfo->fieldShow('title',1);?> />
				<input name="title" type="text" value="<?php echo $datainfo->title;?>">
				字段名：title</td>
			<td><input name="set_nr[]" type="checkbox" value="content" <?php echo $datainfo->fieldShow('content',1);?> />
				<input name="content" type="text" value="<?php echo $datainfo->content;?>" />
				字段名：content</td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" value="category" <?php echo $datainfo->fieldShow('category',1);?> />
				<input name="category" type="text" value="<?php echo $datainfo->category;?>">
				字段名：category</td>
			<td></td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" value="smallpic" <?php echo $datainfo->fieldShow('smallpic',1);?> />
				<input name="smallpic" type="text" id="smallpic" value="<?php echo $datainfo->smallpic;?>" />
				字段名：smallpic</td>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="bigpic" <?php echo $datainfo->fieldShow('bigpic',1);?> />
				<input name="bigpic" type="text" id="bigpic" value="<?php echo $datainfo->bigpic;?>" />
				字段名：bigpic</td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" value="is_tj" <?php echo $datainfo->fieldShow('is_tj',1);?> />
				<input name="is_gd" type="text" value="<?php echo $datainfo->is_tj;?>" />
				字段名：is_tj</td>
			<td><input name="set_nr[]" type="checkbox" value="is_gd" <?php echo $datainfo->fieldShow('is_gd',1);?> />
				<input name="is_gd" type="text" value="<?php echo $datainfo->is_gd;?>" />
				字段名：bigpic</td>
		</tr>
		<tr>
			<?php
			for($i=1;$i<11;$i++){
			$o = 'title'.$i;
			$o_ = 'title'.$i.'_';
			$o_select = 'title'.$i.'_select';
			$o_check = 'title'.$i.'_check';
			?>
			<td><input name="set_nr[]" type="checkbox" value="<?php echo $o;?>" <?php echo $datainfo ->fieldShow($o,1);?>>
				<input name="title<?php echo $i?>" type="text" value="<?php echo $datainfo->$o;?>">
				字段名：<?php echo $o;?><br>
				<input name="set_nr[]" type="checkbox" value="<?php echo $o;?>_select" <?php echo $datainfo ->fieldShow($o_select,1);?> />
				select
				<input name="set_nr[]" type="checkbox" value="<?php echo $o;?>_check" <?php echo $datainfo ->fieldShow($o_check,1);?> />
				check
				<input name="<?php echo $o;?>_" type="text" value="<?php echo $datainfo->$o_;?>" size="50"></td>
			<?php
			if($i%2==0)echo'</tr><tr>';
			}
			?>
		</tr>
		<tr>
			<?php 
			$fieldlist = array('content1','content2','content3','content4','content5','','name1','name2','name3','name4','name5','','upload1','upload2','upload3','upload4','upload5','','multiPic1','multiPic2');
			foreach($fieldlist as $k => $field){
				if(!$field){
					echo '<td></td>';
				}else{
			?>
			<td><input name="set_nr[]" type="checkbox" value="<?php echo $field;?>" <?php echo $datainfo->fieldShow($field,1);?> />
				<input name="<?php echo $field;?>" type="text" value="<?php echo $datainfo->$field;?>">
				字段名：<?php echo $field;?></td>
			<?php
				}
			if(($k+1)%2==0)echo'</tr><tr>';
			}
			?>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" value="hits"  />
				<input name="hits" type="text" value="点击数">
				字段名：hits</td>
			<td><input name="set_nr[]" type="checkbox" value="creattime"  />
				<input name="creattime" type="text" value="创建时间">
				字段名：creattime</td>
		</tr>
	</table>
	<div class="clearH"></div>
	<table width="100%" class="content_table content_table_left">
		<tr>
			<td colspan="2"><font color="#FF0000">请选择类别所要显示的字段名称！</font></td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" value="categoryTitle" <?php echo $datainfo->fieldShow('categoryTitle',1);?> />
				<input name="categoryTitle" type="text" value="<?php echo $datainfo->categoryTitle ? $datainfo->categoryTitle : '类别名称';?>">
				字段名：categoryTitle</td>
			<td><input name="set_nr[]" type="checkbox" value="noSonType" <?php echo $datainfo->fieldShow('noSonType',1);?> /> 禁止二级类别</td>
		</tr>
		<tr>
			<?php 
			$fieldlist = array('categoryTitle1','categoryTitle2','categorySmallPic','categoryBigPic','categoryBremark','categoryName1','categoryName2','categoryContent1','categoryContent2','categoryMultiPic');
			foreach($fieldlist as $k => $field){
				if(!$field){
					echo '<td></td>';
				}else{
			?>
			<td><input name="set_nr[]" type="checkbox" value="<?php echo $field;?>" <?php echo $datainfo->fieldShow($field,1);?> />
				<input name="<?php echo $field;?>" type="text" value="<?php echo $datainfo->$field;?>">
				字段名：<?php echo $field;?></td>
			<?php
				}
			if(($k+1)%2==0)echo'</tr><tr>';
			}
			?>
		</tr>
	</table>
	<div class="clearH"></div>
	<table width="100%" class="content_table content_table_left">
		<tr>
			<td colspan="2"><font color="#FF0000">请选择留言所要显示的字段名称！(title和content字段用文章内容的字段)</font></td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" value="huifu" <?php echo $datainfo->fieldShow('huifu',1);?> />
				启用回复</td>
			<td></td>
		</tr>
		<?php 
			$fieldlist = array('uname','phone','tel','fax','pic','email','youbian','addr');
			foreach($fieldlist as $k => $field){
				if(!$field){
					echo '<td></td>';
				}else{
			?>
			<td><input name="set_nr[]" type="checkbox" value="<?php echo $field;?>" <?php echo $datainfo->fieldShow($field,1);?> />
				<input name="<?php echo $field;?>" type="text" value="<?php echo $datainfo->$field;?>">
				字段名：<?php echo $field;?></td>
			<?php
				}
			if(($k+1)%2==0)echo'</tr><tr>';
			}
			?>
		</tr>
	</table>
	<table width="100%" class="content_table">
		<tr>
			<td><input type="submit" class="btn" value=" 确 定 "> <input type="button" class="btn" value=" 返 回 " onClick="self.history.back();"></td>
		</tr>
	</table>
</form>