<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <title>网站地图 - 金狮娱乐</title>
    <meta name="keywords" content="keyword ..." />
    <meta name="Description" content="description ..." />
    <!--<link href="favicon.ico" rel="shortcut icon" />-->
    <link href="../css/index/global.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <?php echo $this->_fetch_compile("index/top.html"); ?>  
 
<div id="maincontent">
 <div id="informscroll">
  <div id="informcontent">
    <?php echo $this->_fetch_compile("index/inc_notice.html"); ?>
    <div class="tel"></div>
    </div>
 </div>
 <div id="listcontent">
   <div class="inners">
    <?php echo $this->_fetch_compile("index/left_menu.html"); ?> 
   <div id="rightcontent">
     <div class="site"><a href="about_us.html">关于我们</a><span>&gt;</span>网站地图</div>
 <table width="680" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:20px; line-height:20px;">
  <tbody>
    <tr>
      <td width="18%" height="40"><strong>会员专区：</strong></td>
      <td width="68%" height="40"><a href="sign_in.html">我要开户</a> <a href="login.html">用户登录</a> <a href="game_demo.html">试玩体验</a></td>
    </tr>
    <tr>
      <td height="40"><strong>VIP专区：</strong></td>
      <td height="40"><p><a href="vip_privilege.php">会员特权</a> <a href="vip_level.php">会员级别</a><a href="vip_privilege.php"> VIP特权 </a><a href="vip_qa.php">常见问题</a> <a href="vip_terms_and_rules.php">条款与规则</a><a href="vip_contact_us.php"> 联系我们</a></p></td>
    </tr>
    <tr>
      <td height="40"><strong>游戏：</strong></td>
      <td height="40"><a href="client_download.html">游戏下载 </a><a href="real_person.html">真人荷官</a><a href="table_games.html"> 赌台游戏 </a><a href="poker.html">扑克牌</a> <a href="slot_machine.html">角子老虎机</a><a href="video_poker.html"> 视像扑克</a></td>
    </tr>
    <tr>
      <td height="40"><strong>优惠：</strong></td>
      <td height="40"><a href="preferential.html">最新优惠</a> <a href="history_preferential.html">历史优惠</a><a href="activities.html"> 参加活动</a></td>
    </tr>
    <tr>
      <td height="40"><strong>存取款：</strong></td>
      <td height="40"><a href="deposit_process.html">存款流程</a> <a href="withdrawals_process.html">取款流程</a> <a href="cnotice.html">存款须知</a> <a href="qnotice.html">取款须知</a></td>
    </tr>
    <tr>
      <td height="40"><strong>加盟合作：</strong></td>
      <td height="40"><a href="agency.html">代理加盟</a> <a href="friends_recommendation.html">好友计划</a> <a href="agency_login.html">代理商登录</a><a href="agency_reject.html">代理商注册</a></td>
    </tr>
    <tr>
      <td height="40"><strong>关于我们：</strong></td>
      <td height="40"><a href="conect_way.html">联系方式</a> <a href="qa.html">常见问题</a> <a href="partner.html">合作伙伴</a> <a href="tfu.html">使用条款</a> <a href="responsibility.html">责任博彩</a> <a href="conect_way.html">客服帮助</a></td>
    </tr>
  </tbody>
</table>    
   </div>
   <div class="clear"></div>
   </div>
 </div>
</div>
<?php echo $this->_fetch_compile("index/footer.html"); ?> 
 <script type="text/javascript">				
 $(function(){
   //$(".leftcontent dl dd").hide();
   $(".leftcontent dl dt").click(function(){
   $(".leftcontent dl dd").not($(this).next()).hide();
   $(this).next().slideToggle(500); 
    });
 });
 </script>  
</body>
</html>
