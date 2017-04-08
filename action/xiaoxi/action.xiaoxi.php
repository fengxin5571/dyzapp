<?php
if(!defined('CORE'))exit("error!"); 
//消息列表
if($do=="xiaoxi"){
	$uid=$_POST['uid']??1;
	$pagenum=10;
	$page=$_POST['page']??1;
	$page=($page-1)*$pagenum;
	//总部
	$sql="select *,date_format(addtime,'%m月%d日') as addtime1 from rv_xiaoxi where id in (SELECT max(id) FROM rv_xiaoxi where uid=? GROUP BY toid) order by addtime desc limit ".$page.",".$pagenum;
	$db->p_e($sql,array($uid));
	$xiaoxi=$db->fetchAll();
	foreach($xiaoxi as &$k){
		$sql="select count(*) from rv_xiaoxi where 1=1 and uid=? and toid=? and is_du=0";
		$db->p_e($sql,array($uid,$k['toid']));
		$k['weidu']=$db->fetch_count();
		$sql="select * from rv_user where 1=1 and id=?";
		$db->p_e($sql,array($k['toid']));
		$k['user']=$db->fetchRow();
		if($k['user']['roleid']==1){
			$k['user']['zz']='总部';
		}elseif($k['user']['roleid']==2 || $k['user']['roleid']==4){
			$sql="select name from rv_fengongsi where 1=1 and id=?";
			$db->p_e($sql,array($k['user']['zz']));
			$k['user']['zz']=$db->fetch_count();
		}elseif($k['user']['roleid']==3 || $k['user']['roleid']==5){
			$sql="select * from rv_mendian where 1=1 and id=?";
			$db->p_e($sql,array($k['user']['zz']));
			$md=$db->fetchRow();
			$k['user']['zz']=$md['name'];
		}
	}
	$sql="select count(*) from rv_xiaoxi where id in (SELECT max(id) FROM rv_xiaoxi where uid=? GROUP BY toid)";
	$db->p_e($sql,array($uid));
	$total=$db->fetch_count();
	$total=ceil($total/$pagenum);
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('xiaoxi',$xiaoxi);
	$smt->assign('total',$total);
	$smt->display('xiaoxi.html');
	exit;
}
