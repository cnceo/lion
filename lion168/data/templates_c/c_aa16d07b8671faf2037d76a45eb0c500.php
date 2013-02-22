<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <title>代理管理中心 - 下线开户</title>
    <meta name="keywords" content="keyword ..." />
    <meta name="Description" content="description ..." />
    <!--<link href="favicon.ico" rel="shortcut icon" />-->
    <link href="../css/agent/memberglobal.css" rel="stylesheet" type="text/css" />
 
 
</head>
<body>
<?php echo $this->_fetch_compile("agent/top.html"); ?>  
<div id="maincontent">
 <div id="informscroll">
  <div id="informcontent">
     <?php echo $this->_fetch_compile("agent/inc_notice.html"); ?>  
    <div class="tel"></div>
    </div>
 </div>
 <div id="listcontent">
   <div class="inners">
   <?php echo $this->_fetch_compile("agent/left_menu.html"); ?>  
   <div id="rightcontent">
     <div class="site"><strong>管理中心</strong></div>
     <div class="bodycontent">
<?php echo $this->_fetch_compile("agent/accountinfo.html"); ?>  
     <div class="content">
       <div class="title"><strong>下线开户</strong></div>
       <ul class="tablelist">
  <form action="" method="post"  id="frmMain" name="frmMain" onSubmit="">
      <input type="hidden" value="save" name="action">
         <li><label> * 用户名：</label><input name="UserName" type="text" id="UserName" size="20"  value="" onblur="username_check()" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeyup="value=value.replace(/[\W]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"   /></li>
         <li><label> * 密码：</label><input name="Password" type="password" id="p1" size="20"  value="" onblur="checkPassnum()"   /></li>
         <li><label> * 确认密码：</label><input name="rePassword" type="password" id="p2" size="20"  value="" onblur="checkPassnum()"   /></li>
         <li><label> * 姓 名：</label><input name="TrueName" type="text" id="TrueName" size="20"  value="" onblur="Truename_check()" onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')"   /></li>
           

         <li><label> * 性 别：</label><input name="gender" type="radio"  id="SexM" value="1" style="width:35px;" checked />男<input name="gender" type="radio"  id="SexF" value="0"  style="width:20px; margin-left:35px;" />女</li>
         
         <li><label> * 电 话：</label><input name="userTel" type="text" id="userTel" size="20"  value="" onblur="userTel_check()" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"  /></li>
         <li><label> * 邮 箱 地 址：</label><input name="email" type="text" id="email" size="20" onblur="check_email1()"  /></li>
         <li><label> * 推荐人：</label><input name="formuser" type="text" readonly="readonly" value="<?php echo $this->_vars['username']; ?>
"  size="20" /></li>
         
         <li class="btnli"><input type="image" src="../images/index/submit.jpg"  onclick="Check_Reg()" />  
    </form>
    
    
    
    
       </ul>
     </div>
     </div>
   </div>
   <div class="clear"></div>
   </div>
 </div>
</div>
<?php echo $this->_fetch_compile("agent/footer.html"); ?>  
</body>
</html>
<script>
//用户注册
function Check_Reg(){
	var iChars;

	iChars= "~!@#$%^&*(){}:?<>,/;'[]\=`-+|";
	if (Check_Input(document.frmMain.UserName,'账号',5,20,iChars) != true){
		return false;
	}

	if (Check_Input(document.frmMain.rePassword,'密码',6,20,iChars) != true){
		return false;
	}

	if (Check_Input(document.frmMain.Password,'重复密码',6,20,iChars) != true){
		return false;
	}



	if (document.frmMain.rePassword.value != document.frmMain.Password.value){
		alert("两次密码输入不一致");
		document.frmMain.Password.focus();
		return false;
	}

	if(document.frmMain.TrueName.value==''){
		window.alert("请输入真实姓名!");
		document.frmMain.TrueName.focus();
		return false;
	}

	if(document.frmMain.userTel.value==''){
		window.alert("请输入电话!");
		document.frmMain.userTel.focus();
		return false;
	}

	if(!isEmail(document.frmMain.email.value)) {
		alert("电子邮件格式不正确!"); 
		document.frmMain.Email.focus(); 
		return false;
	}

	//if(document.frmMain.Year.value=='' || document.frmMain.Month.value=='' || document.frmMain.Day.value==''){
	///	window.alert("请选择出生日期");
	//	return false;
	//}

	if(document.frmMain.ValidateCode.value==''){
		window.alert("请输入验证码!");
		document.frmMain.ValidateCode.focus();
		return false;
	}

	
	document.frmMain.submit();
	return true;
	
}
</script>