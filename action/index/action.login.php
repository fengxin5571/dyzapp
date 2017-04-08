<?php
if(!defined('CORE'))exit("error!"); 

if($do=="login"){
	if($_POST['type']==0){
		$sql="select * from rv_user where 1=1 and username=? and password=? and roleid=1 and status=1";
		$db->p_e($sql,array($_POST['name'],md5($_POST['pass'])));
		$user=$db->fetchRow();
		if($user['id']>0){
			echo '{"code":"200","uid":"'.$user['id'].'"}';
		}else{
			echo '{"code":"201","msg":"登陆信息有误"}';
		}
		exit;
	}elseif($_POST['type']==1){
		$sql="select * from rv_user where 1=1 and username=? and password=? and status=1";
		$db->p_e($sql,array($_POST['name'],md5($_POST['pass'])));
		$user=$db->fetchRow();
		if($user['id']>0){
			echo '{"code":"200","uid":"'.$user['id'].'"}';
		}else{
			echo '{"code":"201","msg":"登陆信息有误"}';
		}
		exit;
	}
}