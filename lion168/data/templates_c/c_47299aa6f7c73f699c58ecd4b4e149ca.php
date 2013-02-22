<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <title>户头转账</title>
    <meta name="keywords" content="keyword ..." />
    <meta name="Description" content="description ..." />
    <!--<link href="favicon.ico" rel="shortcut icon" />-->
    <link href="../css/member/global.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $this->_fetch_compile("member/top.html"); ?>

<div id="maincontent">
 <div class="title">户头转账
 <p>金狮国际玩家，请把资金从此账户转到其相对应的账户。</p>
 </div>
 <div id="accountcontent">
   <div class="l">
     <dl class="d">
       <dt>您的主要账户</dt>
       <dd>
         <div class="account">金狮国际 余额<span>RMB <?php echo $this->_vars['money']; ?>
</span><span style="margin-left:145px;" id="my_1"></span></div>
         <p><a href="#">此账户余额可以直接用于平台游戏。</a></p>
       </dd>
     </dl>
     <div class="accountlist">
      <dl class="dl1">
        <dt>您的游戏账户</dt>
        <dd>* 转账无法直接从游戏账户中转至另一个游戏账户</dd>
      </dl>
      <ul class="alist">
       <li>
        <dl>
          <dt><span>RMB <?php echo $this->_vars['tmount']; ?>
<span style="margin-left:30px; width:30px;" id="my_2"></span></span>金狮国际HG平台 Casino</dt>
          <dd><a href="#">金狮国际拥有最热辣的美女真人荷官！</a></dd>
        </dl>
       </li>
       
         <li>
        <dl>
          <dt><span>RMB 0.00</span>IPM体育平台</dt>
          <dd><a href="#">即将开放</a></dd>
        </dl>
       </li>        
      </ul>
     </div>
   </div>
   <div class="r">
     <div class="content">
     
     <form action ="" method=post id="form2" name="form2">
       <h3>转账</h3>
       <ul class="form">
        <li>
        <b>转出账户</b>
        <select class="select" name="cash_out" id="cash_out">
        <option value="">&nbsp;&nbsp;选择账户</option>
        <option value="1">&nbsp;&nbsp;金狮账户</option>
        <option value="2">&nbsp;&nbsp;HG平台</option>
        </select>
        </li>
        <li>
        <b>转入账户</b>
        <select class="select" name="cash_in" id="cash_in">
        <option value="">&nbsp;&nbsp;选择账户</option>
        <option value="1">&nbsp;&nbsp;金狮账户</option>
        <option value="2">&nbsp;&nbsp;HG平台</option>
        </select>
        </li>
        <li><input name="amount" type="text" class="text" id="amount" onkeyup='this.value=this.value.replace(/[^0-9]\D*$/,"")' maxlength="12" ondragenter="return false" onpaste="return !clipboardData.getData('text').match(/\D/)" />数额</li>
        <li class="btnli"><div class="btndiv"><input type="hidden" name="action" value="save"><input name="提交" type="submit" class="submit" onclick="amcheck()" value="转账" /></div></li>
       </ul>
       </form>
       
     </div>
     <div class="content contentbottom">
       <h3>历史记录</h3>
       <ul class="ul">
         <li><a href="cash_system.php">存款记录</a></li>
         <li><a href="limit_operation_list.php">转账记录</a></li>
       </ul>
     </div>
   </div>
   <div class="clear"></div>
 </div>
</div>
<?php echo $this->_fetch_compile("member/footer.html"); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" language="javascript" type="text/javascript"></script>
 <script type="text/javascript">
$(document).ready(function(){  
	   $("#cash_out").change(function(){
		   var cash_out=parseInt($.trim($("#cash_out").val()));
		   var cash_out_text=$("#cash_out").find("option:selected").text();
		   if(cash_out)
		     { 
			     if (cash_out == 1)
			       {
					  $("#cash_in option[value='1']").remove();
					  $("#cash_in option[value='2']").remove();
					  $("#my_2").html('');
					  $("#my_1").html('<img src="../images/member/right.gif">');
					  $("#cash_in").append("<option value='2'>&nbsp;&nbsp;HG平台</option>");
			        }
			     if (cash_out == 2)
			       {
					  $("#cash_in option[value='1']").remove();
					  $("#cash_in option[value='2']").remove();
					  $("#my_1").html('');	
					  $("#my_2").html('<img src="../images/member/right.gif">');
					  $("#cash_in").append("<option value='1'>&nbsp;&nbsp;金狮账户</option>");
			       } 		
			 }
 
		}); 
		
		 $("#cash_in").change(function(){
		   var cash_in=parseInt($.trim($("#cash_in").val()));
 		   if(cash_in)
		     { 
			     if (cash_in == 1)
			       {
					  $("#my_1").html('<img src="../images/member/left.gif">');
			        }
			     if (cash_in == 2)
			       { 
					  $("#my_2").html('<img src="../images/member/left.gif">');
			       } 		
			 }
 
		}); 
}); 
</script> 
 
</body>
</html>
