<div id="postion"> <a class="tip-bottom" href="/admin.php" title="Go to TcitCms HomePage" target="_top"><i class="icon-home"></i> HOME</a> 系统信息管理</div>
<div id="manager">
	<h2 class="title">菜 单 功 能 管 理</h2>
	<p>管理导航：<a href="/admin.php/Core/">菜单管理</a>&nbsp;|&nbsp;<a href="/admin.php/Core/addMenu">添加菜单功能</a></p>
</div>
<form name="menuAdd" method="post" onSubmit="return cf(menuAdd)" action="editmenua.php?op=<?php echo $_REQUEST['op']?>&menu_id=<?php echo $_REQUEST['menu_id']?>&grant=<?php echo $_REQUEST['grant']?>">
	<table width="100%" class="content_table">
		<tr>
			<td>菜单标题 </td>
			<td class="textleft"><input type=text name=cla value="<?php echo $row['class']?>" size=18 maxlength=50>
				<input type=hidden name=bn value="<?php echo $row['class']?>">
				<input name=id type=hidden id="id" value="<?php echo $row['lm_id']?>"></td>
			<td>项目标题</td>
			<td class="textleft"><input type=text name=series value="<?php echo $row['series']?>" size=18 maxlength=50>
				<input type=hidden name=bs value="<?php echo $row['series']?>"></td>
			<td>可 用</td>
			<td class="textleft"><input type=radio name=Tuse value=true <?php if($row['Tuse']=="true") echo "checked" ?>>
				是 &nbsp;
				<input type=radio name=Tuse value=false <?php if($row['Tuse']=="false") echo "checked" ?>>
				否</td>
		</tr>
		<tr>
			<td>功能链接</td>
			<td colspan="3" class="textleft"><input type=text name=link value="<?php echo $row['link']?>" size=50 maxlength=200>
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="link_cs1" checked="checked" />
				带参数</td>
			<td>栏 目 ID</td>
			<td class="textleft"><input name="lm_id" type="text" id="lm_id" value="<?php echo $row['lm_id']?>" size="8"></td>
		</tr>
		<tr>
			<td>管理链接</td>
			<td colspan="3" class="textleft"><input name=manage_link type=text id="manage_link" value="<?php echo $row['manage_link']?>" size=50 maxlength=200>
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="link_cs2" checked="checked" />
				带参数 </td>
			<td>排序位置</td>
			<td class="textleft"><input name="paixu" type="text" id="paixu" value="<?php echo $row['paixu']?>" size="6" maxlength="6"></td>
		</tr>
		<tr>
			<td>对应权限</td>
			<td class="textleft"><input name=Tgrant type=text id="Tgrant" value="<?php echo $row['Tgrant']?>" size=18 maxlength=50></td>
			<td>数据表名</td>
			<td colspan="3" class="textleft"><input name="data" type="text" id="data" value="<?php echo $row['data']?>" size="15" maxlength="50"></td>
		</tr>
		<tr>
			<td>是否添加</td>
			<td class="textleft"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="noadd" <?php if (strstr($row['set_nr'], 'noadd')) echo "checked" ?>></td>
			<td>是否删除</td>
			<td class="textleft"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="nodel" <?php if (strstr($row['set_nr'], 'nodel')) echo "checked" ?>></td>
			<td>是否修改</td>
			<td class="textleft"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="nomod" <?php if (strstr($row['set_nr'], 'nomod')) echo "checked" ?>></td>
		</tr>
	</table>
	<div class="clearH"></div>
	<table width="100%" class="content_table content_table_left">
		<tr>
			<td colspan="2"><font color="#FF0000">&nbsp;&nbsp;请选择文章内容所要显示的字段名称！</font></td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title" <?php if (strstr($row['set_nr'], 'title')) echo "checked" ?> />
				<input name="title" type="text" id="title" value="<?php echo $row['title']?>">
				字段名：title</td>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="content" <?php if (strstr($row['set_nr'], 'content')) echo "checked" ?> />
				<input name="content" type="text" id="content" value="<?php echo $row['content']?>" />
				字段名：content</td>
		</tr>
		<tr class="tdbg">
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="btype_id" <?php if (strstr($row['set_nr'], 'btype_id')) echo "checked" ?> />
				<input name="btype_id" type="text" id="btype_id" value="<?php echo $row['btype_id']?>">
				字段名：btype_id</td>
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="smallpic" <?php if (strstr($row['set_nr'], 'smallpic')) echo "checked" ?> />
				<input name="smallpic" type="text" id="smallpic" value="<?php echo $row['smallpic']?>" />
				字段名：smallpic</td>
		</tr>
		<tr class="tdbg">
			<td align="left">字段名：大类(btype_id) 小类(stype_id)</td>
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="bigpic" <?php if (strstr($row['set_nr'], 'name2')) echo "checked" ?> />
				<input name="bigpic" type="text" id="bigpic" value="<?php echo $row['bigpic']?>" />
				字段名：bigpic</td>
		</tr>
		<tr class="tdbg">
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title1" <?php if (strstr($row['set_nr'], 'title1')) echo "checked" ?>>
				<strong>
				<input name="title1" type="text" id="title1" value="<?php echo $row['title1']?>">
				</strong>字段名：title1<br>
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title1_select" <?php if (strstr($row['set_nr'], 'title1_select')) echo "checked" ?>>
				select
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title1_check" <?php if (strstr($row['set_nr'], 'title1_check')) echo "checked" ?>>
				check
				<input name="title1_" type="text" id="title1_" value="<?php echo $row['title1_']?>" size="50"></td>
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title2" <?php if (strstr($row['set_nr'], 'title2')) echo "checked" ?> />
				<strong>
				<input name="title2" type="text" id="title2" value="<?php echo $row['title2']?>" />
				</strong>字段名：title2<br />
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title2_select" <?php if (strstr($row['set_nr'], 'title2_select')) echo "checked" ?> />
				select
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title2_check" <?php if (strstr($row['set_nr'], 'title2_check')) echo "checked" ?> />
				check
				<input name="title2_" type="text" id="title2_" value="<?php echo $row['title2_']?>" size="50" /></td>
		</tr>
		<tr class="tdbg">
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title3" <?php if (strstr($row['set_nr'], 'title3')) echo "checked" ?> />
				<strong>
				<input name="title3" type="text" id="title3" value="<?php echo $row['title3']?>" />
				</strong>字段名：title3<br />
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title3_select" <?php if (strstr($row['set_nr'], 'title3_select')) echo "checked" ?> />
				select
				<input name="set_nr[]3" type="checkbox" id="set_nr[]2" value="title3_check" <?php if (strstr($row['set_nr'], 'title3_check')) echo "checked" ?> />
				check
				<input name="title3_" type="text" id="title3_" value="<?php echo $row['title3_']?>" size="50" /></td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title4" <?php if (strstr($row['set_nr'], 'title4')) echo "checked" ?> />
				<strong>
				<input name="title4" type="text" id="title4" value="<?php echo $row['title4']?>" />
				</strong>字段名：title4<br />
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title4_select" <?php if (strstr($row['set_nr'], 'title4_select')) echo "checked" ?> />
				select
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title4_check" <?php if (strstr($row['set_nr'], 'title4_check')) echo "checked" ?> />
				check
				<input name="set_nr[]" type="checkbox" id="set_nr[]19" value="title4_upload" <?php if (strstr($row['set_nr'], 'title4_upload')) echo "checked" ?> />
		</tr>
		<tr class="tdbg">
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title5" <?php if (strstr($row['set_nr'], 'title5')) echo "checked" ?>>
				<strong>
				<input name="title5" type="text" id="title5" value="<?php echo $row['title5']?>" />
				</strong>字段名：title5<br>
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title5_select" <?php if (strstr($row['set_nr'], 'title5_select')) echo "checked" ?>>
				select
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title5_check" <?php if (strstr($row['set_nr'], 'title5_check')) echo "checked" ?>>
				check
				<input name="title5_" type="text" id="title5_" value="<?php echo $row['title5_']?>" size="50"></td>
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title6" <?php if (strstr($row['set_nr'], 'title6')) echo "checked" ?> />
				<strong>
				<input name="title6" type="text" id="title6" value="<?php echo $row['title6']?>" />
				</strong>字段名：title6<br />
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title6_select" <?php if (strstr($row['set_nr'], 'title6_select')) echo "checked" ?> />
				select
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title6_check" <?php if (strstr($row['set_nr'], 'title6_check')) echo "checked" ?> />
				check
				<input name="title6_" type="text" id="title6_" value="<?php echo $row['title6_']?>" size="50" /></td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title7" <?php if (strstr($row['set_nr'], 'title7')) echo "checked" ?>>
				<strong>
				<input name="title7" type="text" id="title7" value="<?php echo $row['title7']?>">
				</strong>字段名：title7<br>
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title7_select" <?php if (strstr($row['set_nr'], 'title7_select')) echo "checked" ?>>
				select
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title7_check" <?php if (strstr($row['set_nr'], 'title7_check')) echo "checked" ?>>
				check
				<input name="title7_" type="text" id="title7_" value="<?php echo $row['title7_']?>" size="50" /></td>
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title8" <?php if (strstr($row['set_nr'], 'title8')) echo "checked" ?> />
				<strong>
				<input name="title8" type="text" id="title8" value="<?php echo $row['title8']?>" />
				</strong>字段名：title8<br />
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title8_select" <?php if (strstr($row['set_nr'], 'title8_select')) echo "checked" ?> />
				select
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title8_check" <?php if (strstr($row['set_nr'], 'title8_check')) echo "checked" ?> />
				check
				<input name="title8_" type="text" id="title8_" value="<?php echo $row['title8_']?>" size="50" /></td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title9" <?php if (strstr($row['set_nr'], 'title9')) echo "checked" ?>>
				<strong>
				<input name="title9" type="text" id="title9" value="<?php echo $row['title9']?>">
				</strong>字段名：title9<br>
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title9_select" <?php if (strstr($row['set_nr'], 'title9_select')) echo "checked" ?>>
				select
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title9_check" <?php if (strstr($row['set_nr'], 'title9_check')) echo "checked" ?>>
				check
				<input name="title9_" type="text" id="title9_" value="<?php echo $row['title9_']?>" size="50"></td>
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="title10" <?php if (strstr($row['set_nr'], 'title10')) echo "checked" ?> />
				<strong>
				<input name="title10" type="text" id="title10" value="<?php echo $row['title10']?>" />
				</strong>字段名：title10<br />
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title10_select" <?php if (strstr($row['set_nr'], 'title10_select')) echo "checked" ?> />
				select
				<input name="set_nr[]" type="checkbox" id="set_nr[]" value="title10_check" <?php if (strstr($row['set_nr'], 'title10_check')) echo "checked" ?> />
				check
				<input name="title10_" type="text" id="title10_" value="<?php echo $row['title10_']?>" size="50" /></td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="content1" <?php if (strstr($row['set_nr'], 'content1')) echo "checked" ?> />
				<input name="content1" type="text" id="content1" value="<?php echo $row['content1']?>">
				字段名：content1</td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="content2" <?php if (strstr($row['set_nr'], 'content2')) echo "checked" ?> />
				<input name="content2" type="text" id="content2" value="<?php echo $row['content2']?>" />
				字段名：content2</td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="content3" <?php if (strstr($row['set_nr'], 'content3')) echo "checked" ?> />
				<input name="content3" type="text" id="content3" value="<?php echo $row['content3']?>" />
				字段名：content3</td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="content4" <?php if (strstr($row['set_nr'], 'content4')) echo "checked" ?> />
				<input name="content4" type="text" id="content4" value="<?php echo $row['content4']?>" />
				字段名：content4</td>
		</tr>
		<tr class="tdbg">
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="content5" <?php if (strstr($row['set_nr'], 'content5')) echo "checked" ?> />
				<input name="content5" type="text" id="content5" value="<?php echo $row['content5']?>" />
				字段名：content5</td>
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="name1" <?php if (strstr($row['set_nr'], 'name1')) echo "checked" ?> />
				<input name="name1" type="text" id="name1" value="<?php echo $row['name1']?>" />
				字段名：name1</td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="name2" <?php if (strstr($row['set_nr'], 'name2')) echo "checked" ?> />
				<input name="name2" type="text" id="name2" value="<?php echo $row['name2']?>" />
				字段名：name2</td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="name3" <?php if (strstr($row['set_nr'], 'name3')) echo "checked" ?> />
				<input name="name3" type="text" id="name3" value="<?php echo $row['name3']?>" />
				字段名：name3</td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="name4" <?php if (strstr($row['set_nr'], 'name4')) echo "checked" ?> />
				<input name="name4" type="text" id="name4" value="<?php echo $row['name4']?>" />
				字段名：name4</td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="name5" <?php if (strstr($row['set_nr'], 'name5')) echo "checked" ?> />
				<input name="name5" type="text" id="name5" value="<?php echo $row['name5']?>" />
				字段名：name5</td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="upload1" <?php if (strstr($row['set_nr'], 'upload1')) echo "checked" ?> />
				<input name="upload1" type="text" id="upload1" value="<?php echo $row['upload1']?>" />
				字段名：upload1</td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="upload2" <?php if (strstr($row['set_nr'], 'upload2')) echo "checked" ?> />
				<input name="upload2" type="text" id="upload2" value="<?php echo $row['upload2']?>" />
				字段名：upload2</td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="upload3" <?php if (strstr($row['set_nr'], 'upload3')) echo "checked" ?> />
				<input name="upload3" type="text" id="upload3" value="<?php echo $row['upload3']?>" />
				字段名：upload3</td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="upload4" <?php if (strstr($row['set_nr'], 'upload4')) echo "checked" ?> />
				<input name="upload4" type="text" id="upload4" value="<?php echo $row['upload4']?>" />
				字段名：upload4</td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="upload5" <?php if (strstr($row['set_nr'], 'upload5')) echo "checked" ?> />
				<input name="upload5" type="text" id="upload5" value="<?php echo $row['upload5']?>" />
				字段名：upload5</td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="addtime" checked />
				<input name="addtime" type="text" id="addtime" value="<?php echo $row['addtime']?>" />
				字段名：addtime</td>
		</tr>
		<tr class="tdbg">
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="is_tj" <?php if (strstr($row['set_nr'], 'is_tj')) echo "checked" ?> />
				<input name="is_tj" type="text" id="is_tj" value="<?php echo $row['is_tj']?>" />
				字段名：is_tj</td>
			<td width="50%" align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="is_gd" <?php if (strstr($row['set_nr'], 'is_gd')) echo "checked" ?> />
				<input name="is_gd" type="text" id="is_gd" value="<?php echo $row['is_gd']?>" />
				字段名：is_gd</td>
		</tr>
		<tr class="tdbg">
			<td align="left"><p>
					<input name="set_nr[]" type="checkbox" id="set_nr[]" value="is_ab" <?php if (strstr($row['set_nr'], 'is_ab')) echo "checked" ?> />
					<input name="is_ab" type="text" id="is_ab" value="<?php echo $row['is_ab']?>" />
					字段名：is_ab</p></td>
			<td align="left"><p>
					<input name="set_nr[]" type="checkbox" id="set_nr[]" value="is_cd" <?php if (strstr($row['set_nr'], 'is_cd')) echo "checked" ?> />
					<input name="is_cd" type="text" id="is_cd" value="<?php echo $row['is_cd']?>" />
					字段名：is_cd</p></td>
		</tr>
		<tr class="tdbg">
			<td align="left"><p>
					<input name="set_nr[]" type="checkbox" id="set_nr[]" value="is_ef" <?php if (strstr($row['set_nr'], 'is_ef')) echo "checked" ?> />
					<input name="is_ef" type="text" id="is_ef" value="<?php echo $row['is_ef']?>" />
					字段名：is_ef</p></td>
			<td align="left"><p>
					<input name="set_nr[]" type="checkbox" id="set_nr[]" value="is_gh" <?php if (strstr($row['set_nr'], 'is_gh')) echo "checked" ?> />
					<input name="is_gh" type="text" id="is_gh" value="<?php echo $row['is_gh']?>" />
					字段名：is_gh</p></td>
		</tr>
		<tr class="tdbg">
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="is_jk" <?php if (strstr($row['set_nr'], 'is_jk')) echo "checked" ?> />
				<input name="is_jk" type="text" id="is_jk" value="<?php echo $row['is_jk']?>" />
				字段名：is_jk</td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="is_mn" <?php if (strstr($row['set_nr'], 'is_mn')) echo "checked" ?> />
				<input name="is_mn" type="text" id="is_mn" value="<?php echo $row['is_mn']?>" />
				字段名：is_mn</td>
		<tr class="tdbg">
			<td align="left">&nbsp;</td>
			<td align="left"><input name="set_nr[]" type="checkbox" id="set_nr[]" value="hit" <?php if (strstr($row['set_nr'], 'hit')) echo "checked" ?> />
				<strong>
				<input name="hit" type="text" id="hit" value="<?php echo $row['hit']?>" />
				</strong> 字段名：hit</td>
		</tr>
		<tr class="tdbg">
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
		</tr>
	</table>
	<div class="clearH"></div>
	<table width="100%" class="content_table content_table_left">
		<tr>
			<td colspan="2"><font color="#FF0000">请选择类别所要显示的字段名称！</font></td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="notype" <?php if (strstr($row['set_nr'], 'notype')) echo "checked" ?> />
				禁止二级类别</td>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="btype_smallpic" <?php if (strstr($row['set_nr'], 'btype_smallpic')) echo "checked" ?>>
				<input name="btype_smallpic" type="text" id="btype_smallpic" value="<?php echo $row['btype_smallpic']?>">
				字段名：btype_smallpic</td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="btype_name" <?php if (strstr($row['set_nr'], 'btype_name')) echo "checked" ?>>
				<input name="btype_name" type="text" id="btype_name" value="<?php echo $row['btype_name']?>" />
				字段名：btype_name</td>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="btype_bigpic" <?php if (strstr($row['set_nr'], 'btype_bigpic')) echo "checked" ?>>
				<input name="btype_bigpic" type="text" id="btype_bigpic" value="<?php echo $row['btype_bigpic']?>">
				字段名：btype_bigpic</td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="bremark" <?php if (strstr($row['set_nr'], 'bremark')) echo "checked" ?>>
				<input name="bremark" type="text" id="bremark" value="<?php echo $row['bremark']?>">
				字段名：bremark</td>
			<td>&nbsp;</td>
		</tr>
		<tr class="tdbg">
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="btype_content1" <?php if (strstr($row['set_nr'], 'btype_content1')) echo "checked" ?> />
				<input name="btype_content1" type="text" id="btype_content1" value="<?php echo $row['btype_content1']?>" />
				字段名：btype_content1</td>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="btype_content2" <?php if (strstr($row['set_nr'], 'btype_content2')) echo "checked" ?>>
				<input name="btype_content2" type="text" id="btype_content2" value="<?php echo $row['btype_content2']?>" />
				字段名：btype_content2</td>
		</tr>
	</table>
	<div class="clearH"></div>
	<table width="100%" class="content_table content_table_left">
		<tr>
			<td colspan="2"><font color="#FF0000">请选择留言所要显示的字段名称！(title和content字段用文章内容的字段)</font></td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="huifu" <?php if (strstr($row['set_nr'], 'huifu')) echo "checked" ?> />
				启用回复</td>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="hfpic" <?php if (strstr($row['set_nr'], 'hfpic')) echo "checked" ?>>
				<input name="hfpic" type="text" id="hfpic" value="<?php echo $row['hfpic']?>">
				字段名：hfpic</td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="uname" <?php if (strstr($row['set_nr'], 'uname')) echo "checked" ?>>
				<input name="uname" type="text" id="uname" value="<?php echo $row['uname']?>">
				字段名：uname</td>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="mail" <?php if (strstr($row['set_nr'], 'mail')) echo "checked" ?>>
				<input name="mail" type="text" id="mail" value="<?php echo $row['mail']?>">
				字段名：mail</td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="tel" <?php if (strstr($row['set_nr'], 'tel')) echo "checked" ?>>
				<input name="tel" type="text" id="tel" value="<?php echo $row['tel']?>">
				字段名：tel</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><input name="set_nr[]" type="checkbox" id="set_nr[]" value="fax" <?php if (strstr($row['set_nr'], 'fax')) echo "checked" ?> />
				<input name="fax" type="text" id="fax" value="<?php echo $row['fax']?>" />
				字段名：fax</td>
			<td ><input name="set_nr[]" type="checkbox" id="set_nr[]" value="youbian" <?php if (strstr($row['set_nr'], 'youbian')) echo "checked" ?> />
				<input name="youbian" type="text" id="youbian" value="<?php echo $row['youbian']?>" />
				字段名：youbian</td>
		</tr>
	</table>
	<input type=submit name=s value=" 确 定 ">
	&nbsp;
	<input type=button name=b value=" 返 回 " onClick="self.history.back();">
</form>