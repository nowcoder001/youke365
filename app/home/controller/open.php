<?php
/****************优客365网址导航系统 开源版********************/
/*                                                            */
/*  Youke365.site (C)2017 Youke365 Inc.                       */
/*  This is NOT a freeware, use is subject to license terms   */
/*  优客365网址导航开源版 个人用户可免费使用  请保留底部版权  */
/*  2018.4                                                    */
/*  官方网址：http://www.youke365.site                        */
/*  官方论坛：http://bbs.youke365.site                        */                           
/**************************************************************/
if (!defined('IN_YOUKE365')) exit('Access Denied');
$id  = I('get.id','','intval');
$url = I('get.url','','addslashes'); 
	header("location:".$url);     

if(!empty($id) && !empty($url)){
    $table = table('webdata');
    $time = time();
	$Db->query("UPDATE $table SET web_outstat = web_outstat+1,web_itime='$time'  WHERE web_id=".$id." LIMIT 1");
}


