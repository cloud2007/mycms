<link type="text/css" href="/Static/style/login.css" rel="stylesheet" />
<div class="login">
	<div class="login_box">
		<div class="login_content">
			<input id="userID" name="userID" type="text" class="username" value="cloud" onfocus="if(this.value=='请输入用户名'){this.value=''};this.style='color:#333' " onblur="if(this.value==''){this.value='请输入用户名';this.style='color:#999'}" />
			<div id="pwd">
				<input type="password" class="pwd" id="passWord" name="passWord" value="840312" onfocus="if(this.value=='请输入密码'){this.value=''};this.style='color:#333' " onblur="if(this.value==''){this.value='请输入密码';this.style='color:#999'}" onkeydown="if(event.keyCode==13) ajaxLogin();" />
			</div>
			<!--消息提示  控制P标签-->
			<div class="infos_tips"></div><div class="input_remember"><input type="checkbox" name="remember" id="remember" class="remember" />记住账号</div>
			<a href="javascript:void(0);" class="login_btn">登录</a> <span> <a href="/Welcome/reg" class="Free_Signup f-fl">免费注册</a> <a href="/Forgetpsw/index" class="forget_pwd f-fr">忘记密码?</a> <a href="/Public/help/help_index.html" class="f-fr">帮助中心</a> </span> </div>
	</div>
	<div class="login_info">
		<div class="login_int">
			<ul>
				<li> <i class="class_icon"></i> <font>全天候 全地域</font> <em>全天候全地域实时在线，自动查询商标申请进展和状态。</em> </li>
				<li> <i class="time_icon"></i> <font>商标到期 100%预警</font> <em>商标续展我来管，邮件、站内双重预警。</em> </li>
				<li> <i class="zidong_icon"></i> <font>官方数据 严谨如一</font> <em>状态监测、实时跟踪，所有信息同步国家商标数据库。</em> </li>
			</ul>
		</div>
	</div>
	<!-- footer -->
	<div class="login_footer"> <a href="/Public/help/bzzx_about.html">关于我们</a> | <a href="/Public/help/bzzx_contact.html">联系我们</a> | <a href="/Public/help/help_index.html">帮助中心</a>| <a href="/Public/help/bzzx_friend.html">友情链接</a> | <a href="/Public/help/bzzx_copy.html">版权申明</a> | <a href="http://job.chofn.com/">超凡招聘</a><br>
		Copyright © 2002 - 2013 北京超凡知识产权代理有限公司 京ICP备13010625号 </div>
	<!-- footer -->
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
				$(".infos_tips").html('<p><i class="tips_icon"></i>' + data + '</p>');
			}
		}
	});
}
</script>