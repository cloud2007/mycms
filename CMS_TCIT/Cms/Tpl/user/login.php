<link type="text/css" href="/Static/style/login.css" rel="stylesheet" />
<div class="header"> <a href="javascript:void(0);"><img src="/Static/images/login_logo.png"></a> </div>
<div class="main">
	<div class="login_picture">
		<div class="login_box">
			<input name="userID" id="userID" type="text" placeholder="请输入用户名" >
			<input name="passWord" id="passWord" type="passWord" placeholder="请输入密码" onkeydown="if(event.keyCode==13) sublogin();">
			<div class="infos_tips"></div>
			<a href="javascript:void(0);" title="登录" class="login_btn">登 录</a> <span> <a href="/Welcome/reg/cname/0" class="login_reg" title="免费注册" target="_blank">免费注册</a> | <a href="/Forgetpsw/index" title="忘记密码" target="_blank">忘记密码</a> | <a href="/Public/help/help_index.html" title="帮助中心" target="_blank">帮助中心</a> </span> </div>
	</div>
</div>
<div class="login_text">
	<ul>
		<span><em>全天候 全地域</em>全天候全地域实时在线，<br />
		自动查询商标申请进展和状态。</span> <span class="text02"><em>商标异常100%预警</em>商标异常我来管，<br />
		邮件、站内双重预警。</span> <span class="text03"><em>官方数据 严谨如一</em>状态监测、实时跟踪，<br />
		所有信息同步国家商标数据库。</span>
	</ul>
</div>
<script type="text/javascript">
$(document).ready(function () {
	$(".login_btn").click(function () {
		ajaxLogin();
	});
});

function ajaxLogin(){
	var userID = $.trim($("#userID").val().replace("请输入用户名", ""));
	var passWord = $.trim($("#passWord").val().replace("请输入密码", ""));
	var remember = 0;
	if($("#remember").attr("checked")){
		remember=1;
	}
	$.ajax({
		type: "post",
		url: "/admin.php/User/loginAction",
		data: {userID:userID, passWord:passWord ,remember:remember},
		success: function (data) {
			if (data == 1) {
				location.href = "/admin.php";
			} else {
				$(".infos_tips").html('<p class="tips_icon">' + data + '</p>');
			}
		}
	});
}
</script>
