<link type="text/css" href="/Static/style/login.css" rel="stylesheet" />
<div class="login">
	<div class="login_box">
		<div class="login_content">
			<input id="userID" name="userID" type="text" class="username"  onfocus="if(this.value=='请输入用户名'){this.value=''};this.style='color:#333' " onblur="if(this.value==''){this.value='请输入用户名';this.style='color:#999'}" />
			<div id="pwd">
				<input type="password" class="pwd" id="passWord" name="passWord"  onfocus="if(this.value=='请输入密码'){this.value=''};this.style='color:#333' " onblur="if(this.value==''){this.value='请输入密码';this.style='color:#999'}" onkeydown="if(event.keyCode==13) ajaxLogin();" />
			</div>
			<!--消息提示  控制P标签-->
			<div class="infos_tips"></div>
			<div class="input_remember">
				<input type="checkbox" name="remember" id="remember" class="remember" />
				记住账号</div>
			<a href="javascript:void(0);" class="login_btn">登录</a> <span> 忘记密码? 点我 <a rel="nofollow" target="_top" href="tencent://message/?uin=327110323"><img src="http://wpa.qq.com/pa?p=2:327110323:41" style="vertical-align:middle;" /></a></span> </div>
	</div>
	<div class="login_info">
		<div class="login_int">
			<ul>
				<li> <i class="class_icon"></i> <font>远景目标</font> <em>做最专业的网络营销创意服务及网络技术服务支持平台！</em> </li>
				<li> <i class="time_icon"></i> <font>我们的使命</font> <em>让信息化和电子商务实现得更简单!</em> </li>
				<li> <i class="zidong_icon"></i> <font>价值观</font> <em>客户至上、诚信、道德<br />创新、激情敬业 </em> </li>
			</ul>
		</div>
	</div>
	<!-- footer -->
	<div class="login_footer"> <a href="http://www.evller.com/a/lianxiwomen/2013/0318/28.html">关于我们</a> | <a href="http://www.evller.com/a/lianxiwomen/">联系我们</a> | <a href="http://www.evller.com/a/lianxiwomen/2013/0314/25.html">支付方式</a>| <a href="http://www.evller.com/a/400dianhua/">400电话</a><br>
		Copyright © 2002 - 2014 成都易维恒信科技有限公司 蜀ICP备08005485号 </div>
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
