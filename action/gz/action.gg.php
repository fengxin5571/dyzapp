<?php
if(!defined('CORE'))exit("error!"); 

//公告
if($do=="gg"){
	$sql="select * from rv_gonggao where 1=1 and status=1 order by addtime desc limit 1";
	$db->p_e($sql,array());
	$gg_tuijian=$db->fetchRow();
	//公告
	$sql="select *,date_format(addtime,'%Y.%m.%d') as addtime from rv_gonggao where 1=1 and status=1 and id!=? order by addtime desc limit 0,10";
	$db->p_e($sql,array($gg_tuijian['id']));
	$gg=$db->fetchAll();
	
	//总数
	$sql="select count(*) from rv_gonggao where 1=1 and status=1";
	$db->p_e($sql,array());
	$total=$db->fetch_count();
	$total=ceil($total/10);
	
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('gg',$gg);
	$smt->assign('gg_tuijian',$gg_tuijian);
	$smt->assign('total',$total);
	$smt->display('gonggao.html');
	exit;
}
//公告分页
if($do=="gg_list"){
	$pagenum=10;
	$page=$_POST['page']??2;
	$page=($page-1)*$pagenum;
	
	$sql="select id from rv_gonggao where 1=1 and status=1 order by addtime desc limit 1";
	$db->p_e($sql,array());
	$gg_tuijian=$db->fetch_count();
	//公告
	$sql="select *,date_format(addtime,'%Y.%m.%d') as addtime from rv_gonggao where 1=1 and status=1 and id!=? order by addtime desc limit ".$page.",".$pagenum;
	$db->p_e($sql,array($gg_tuijian));
	$gg=$db->fetchAll();
	
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('gg',$gg);
	$smt->display('gonggao_list.html');
	exit;
}
//公告发布
if($do=="ggfb"){
	$aaa=json_decode($_POST['aaa'],true);
	$uid=$aaa['uid'];
	$sql="insert into rv_gonggao (uid,title,content,img,status) values(?,?,?,?,1)";
	if($db->p_e($sql,array($uid,$aaa['tit'],$aaa['nr'],$aaa['img']))){
		echo '{"code":"200"}';
	}else{
		echo '{"code":"404"}';
	}
	exit;
}
//公告详情页
if($do=="ggxq"){
	$id=$_POST['id']??1;
	$sql="select *,date_format(addtime,'%Y.%m.%d') as addtime from rv_gonggao where 1=1 and id=? and status=1";
	$db->p_e($sql,array($id));
	$gg=$db->fetchRow();
	//推荐
	$sql="select * from rv_gonggao where 1=1 and status=1 and id!=? order by addtime desc limit 2";
	$db->p_e($sql,array($id));
	$gg_tuijian=$db->fetchAll();
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('gg',$gg);
	$smt->assign('gg_tuijian',$gg_tuijian);
	$smt->display('gonggao_xq.html');
	exit;
}