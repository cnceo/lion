<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<link type="text/css" rel="stylesheet" href="css.css" >
<script language="javascript" type="text/javascript" src="../js/public.js"></script>
<title>代理中心</title>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>
<?php echo $this->_fetch_compile("proxy/top.html"); ?>

<div class="content">
  <div  class="left"></div>
  <div  class="m">
    <div  class="top"></div>
    <div class="top2"></div>
    <div class="c">
      <div class="l">
	  <!--Left middle content--> 
        <?php echo $this->_fetch_compile("proxy/member_left.html"); ?>
                <div  id="link"> <a href="information.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image18','','images/grzlb.gif',1)"> <img src="images/grzlb.gif" name="Image18" width="138" height="36" border="0" id="Image18" /> </a> </div>
        <div id="link"> <a href="news.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image15','','images/zxxxb.gif',1)"> <img src="images/zxxx.gif" name="Image15" width="138" height="36" border="0" id="Image15" /> </a> </div>
        <div id="link"> <a href="join_in.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image20','','images/jmhyb.gif',1)"><img src="images/jmhy.gif" name="Image20" width="138" height="36" border="0" id="Image20" /></a> </div>
        <div id="link"> <a href="profit.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image24','','images/lrfcb.gif',1)"><img src="images/lrfc.gif" name="Image24" width="138" height="36" border="0" id="Image24" /></a> </div>
		        <div id="link"> <a href="proxy_join_in.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/dali_29.gif',1)"><img src="images/dali_27.gif" name="Image5" width="142" height="36" border="0" id="Image5" /></a></div>

	 <!--Left middle content--> 	
      </div>
      <div id="content">
       <!-- right middle content-->      
        <div class="con">
          <div style="height:23px;">
              <ul>
                <li style="margin:0; background-color:#B8EFF9"><a href="information.php">基本信息</a></li>
                <li><a href="Password.php">密码更改</a></li>
				
				<li><a href="bank_bd.php">绑定银行</a></li>
              </ul>
            </div>
		 
		 <div class="nr">
              <div class="nrbanner"><strong>设置代理商个人安全资料</strong></div>
              <div class="qt">
			  
			  <form action="" method="post" id="BasicInformation" name="BasicInformation" onSubmit="">
			  <table border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" style="font-size:12px; color:#B8EFF9">
                    <!---<tr>
                      <td width="89" height="38" bgcolor="#000000" align="center" style="font-size:12px;padding-left:10px; padding-right:10px; line-height:20px;">代理商电话：</td>
                      <td width="189" bgcolor="#FFFFFF"><span class="STYLE1">
                        <label for="textfield"></label>
                        <input name="textfield" type="text" id="textfield" size="20" />
                        </span></td>
                      <td width="317" align="left" bgcolor="#000000" style="font-size:12px; padding-left:10px; padding-right:10px; line-height:20px;">*改名请绑定银行卡，如果银行卡已经绑定，请联系客服</td>
                    </tr>--->
                    <tr>
                      <td width="89" height="38" bgcolor="#000000" align="center" style="font-size:12px; padding-left:10px; padding-right:10px; line-height:20px;">电子邮箱：</td>
                      <td width="189" bgcolor="#FFFFFF"><span class="STYLE1">
                        <input name="textfield2" type="text" id="textfield2" size="20" value="<?php echo $this->_vars['email_dl']; ?>
"/>
                        </span></td>
                      <td width="317" align="left" bgcolor="#000000" style="font-size:12px; padding-left:10px; padding-right:10px; line-height:18px;">*用于找回密码以及在特殊情况下，作为与用户联系的唯方式。</td>
                    </tr>
                    <tr>
                      <td width="89" height="38" bgcolor="#000000" align="center" style="font-size:12px; padding-left:10px; padding-right:10px; line-height:20px;">QQ号码：</td>
                      <td width="189" bgcolor="#FFFFFF"><span class="STYLE1">
                        <input name="textfield3" type="text" id="textfield3" size="20" value="<?php echo $this->_vars['qq_dl']; ?>
"/>
                        </span></td>
                      <td width="317" rowspan="2" align="left" bgcolor="#000000" style="font-size:12px; padding-left:10px; padding-right:10px; line-height:20px;">*可修改。</td>
                    </tr>
                    <tr>
                      <td width="89" height="38" bgcolor="#000000" align="center" style="font-size:12px; padding-left:10px; padding-right:10px; line-height:20px;">手机号码：</td>
                      <td width="189" bgcolor="#FFFFFF"><span class="STYLE1">
                        <input name="textfield4" type="text" id="textfield4" size="20"value="<?php echo $this->_vars['phone_dl']; ?>
" />
                        </span></td>
                    </tr>		
					
                    <tr>
                      <td colspan="3" align="center" bgcolor="#B8EFF9" style="font-size:12px; line-height:20px; padding-left:10px; padding-right:10px; color:#000;"><strong>推广网站</strong></td>
                    </tr>
                  </table>

				  
				  
                  <table border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" style="font-size:12px; color:#B8EFF9">
                     <tr>
                      <td width="89" height="38" bgcolor="#000000" align="center" style="font-size:12px;padding-left:10px; padding-right:10px; line-height:20px;">推广网站：</td>
                      <td width="189" bgcolor="#FFFFFF"><span class="STYLE1">
                        <label for="textfield3"></label>
                        <input name="textfield9" type="text" id="textfield9" size="20"  value="<?php echo $this->_vars['url_dl']; ?>
" readonly/>
                        </span></td>
                      <td width="317" align="left" bgcolor="#000000" style="font-size:12px; padding-left:10px; padding-right:10px; line-height:20px;">&nbsp;</td>
                    </tr>
					
					
                  </table>
				  <input type="hidden" name="action" value="save">
                <div style="text-align:center; margin-top:10px;"><img src="images/qr.png" width="97" height="29" onclick="Save_Basic_form();" /></div>

              </form>
               
				
              </div>
            </div>
		 
		 
		 
		 
          <!-- right middle content--> 
        </div>
      </div>
    </div>
    <div style=" clear:left; background-image:url(images/42.png);  height:5px; margin-top:4px; "></div>
  </div>
  <div style="display:block; float:left; width:201px; height:692px; background-image:url(images/04.gif)"></div>
  <!-- end .content -->
</div>
<?php echo $this->_fetch_compile("proxy/foot.html"); ?>
</body></html>


<script type="text/javascript">
function Save_Basic_form(){
	var iChars;

	iChars= "~!@#$%^&*(){}:?<>,/;'[]\=`-+|";
	iQQNumber= "^-?\d+$";
	iEmil= "^[a-z A-Z 0-9 _]+@[a-z A-Z 0-9 _]+(\.[a-z A-Z 0-9 _]+)+(\,[a-z A-Z 0-9 _]+@[a-z A-Z 0-9 _]+(\.[a-z A-Z 0-9 _]+)+)*$";
	iEmill="^(?://w+//.?)*//w+@(?://w+//.?)*//w+$";
	iChins="[\u4e00-\u9fa5]";
	
	if (Check_Emil(document.BasicInformation.textfield2,'Emil地址',9,38,iEmil) != true){
		return false;
	}	
	if (Check_Input(document.BasicInformation.textfield3,'QQ号码',4,12,iQQNumber) != true){
		return false;
	}
	if (Check_Input(document.BasicInformation.textfield4,'手机号码',7,11,iQQNumber) != true){
		return false;
	}
	document.BasicInformation.submit();
	return true;
/*	
	alert("运行完成！");
	document.BasicInformation.submit();
	return true;*/
}

function Check_Emil(inputName,strInputTitle,intMin,intMax,iChars){
	var strValue = inputName.value;
	if(strValue==''){
		window.alert("请输入"+strInputTitle+"！");
		inputName.style.backgroundColor="#FFECFF";
		inputName.focus();
		return false;
	}
	
	 if(strValue.search(iChars)!=0){
		alert(strInputTitle+"格式不正确，请重新输入！");
		inputName.focus();
		return false;
		}
	
	
	if ((strValue.length < intMin)||(strValue.length > intMax)){
        //window.alert(strInputTitle+"长度不符合要求，长度必须在"+intMin+"到"+intMax+"之间！");
		alert(strInputTitle+"格式不正确，请重新输入！");
		inputName.focus();
		return false; 
	}
	return true;
}
</script>