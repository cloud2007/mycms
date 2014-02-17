<form name="form1" method="post" action="/Member">
<div id="main">
	<ul>
		<li>登录用户名：<input type="text" name="userID" id="userID" value="<?php echo $MemberInfo->userID;?>" disabled="disabled" />　<input type="button" name="sendMailCode" id="sendMailCode" value="发送邮箱验证码"></li>
		<li>邮箱验证码：<input type="text" name="mailCode" /></li>
		<li><input type="submit" name="Submit" class="btn blue" value="提交"></li>
	</ul>
</div>
</form>

<script>
$(function(){
	//var time = 60;
	$('#sendMailCode').click(function(){
		ajaxLogin();
	})
})
function ajaxLogin(){
	var userID = $.trim($("#userID").val().replace("请输入用户名", ""));
	$('#sendMailCode').attr('value','正在发送邮箱验证码,请稍后...');
	$.ajax({
		type: "post",
		url: "/Member/sendMailCode",
		data: {userID:userID},
		success: function (data) {
			if (data == 1) {
				$('#sendMailCode').attr('value','邮箱验证码已经发送,请登陆邮箱查看!');
				$('#sendMailCode').attr('disabled','disabled');
				window.time=3;
				window.int = setInterval("clock()",1000)
			} else {
				$('#sendMailCode').attr('value','邮箱验证码发送失败,请检查后重试!');
				$('#sendMailCode').removeAttr('disabled');
			}
		}
	});
}

function clock(){
	$('#sendMailCode').attr('value',(time-1)+'秒后重新发送验证码');
	time=time-1;
	if(time==0){
		window.clearInterval(int);
		$('#sendMailCode').attr('value','发送邮箱验证码');
		$('#sendMailCode').removeAttr('disabled');
	}
}
</script>