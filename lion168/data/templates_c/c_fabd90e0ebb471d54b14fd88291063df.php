﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <title>代理管理中心 - 推广链接</title>
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
       <div class="title"><strong>推广链接</strong></div>
       <ul class="tablelist">
  <form action="" method="post" id="BasicInformation" name="BasicInformation" onSubmit="">
         <li><label>推广网站：</label><input name="textfield9" type="text" id="textfield9" size="20"  value="<?php echo $this->_vars['url_dl']; ?>
" readonly/></li>
          <input type="hidden" name="action" value="save"> 
 
           
         </li>
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
 