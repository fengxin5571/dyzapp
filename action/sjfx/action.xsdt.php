<?php
if(!defined('CORE'))exit("error!"); 

//销售动态
if($do=="xsdt"){
	$pagenum=10;
	$page=$_POST['page']??1;
	$page=($page-1)*$pagenum;
	$sql="select *,date_format(addtime,'%Y/%m/%d %H:%i') as addtime from rv_buy where 1=1 order by addtime desc limit ".$page.",".$pagenum;
	$db->p_e($sql,array());
	$xsdt=$db->fetchAll();
	foreach($xsdt as &$k){
		$k['user']=user($k['uid']);
		$sql="select * from rv_goods where 1=1 and id=?";
		$db->p_e($sql,array($k['gid']));
		$k['goods']=$db->fetchRow();
	}
	$sql="select count(*) from rv_buy where 1=1";
	$db->p_e($sql,array());
	$total=$db->fetch_count();
	$total=ceil($total/10);
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('xsdt',$xsdt);
	$smt->assign('total',$total);
	$smt->display('xsdt.html');
	exit;
}