<?php
require_once(dirname(__FILE__)."/config.php");
if(empty($action))
{
	$action = '';
}
$back=$Ekrurl;
$id = isset($id) && is_numeric($id) ? $id : 0;
CheckPurview('member_List');
$pagetitle='现金码纪录';

	include(EK_ADMIN.'/templets/admin_top.html');
	include(EK_ADMIN.'/templets/admin_BettingRecord.html');
	include(EK_ADMIN.'/templets/admin_foot.html');
	exit();
?>