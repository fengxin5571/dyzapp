<?php
if(!defined('CORE'))exit("error!"); 
if($do=="url"){
	$type=$_POST['type']??1;
	$sql="select * from rv_url where 1=1 and fatherid=?";
	$db->p_e($sql,array($type));
	$url=$db->fetchRow();
	echo $url['url'];
	exit;
}