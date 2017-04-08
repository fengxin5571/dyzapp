<?php
if(!defined('CORE'))exit("error!"); 
//工作

//工作圈
if($do=="gzq"){
	$uid=$_POST['uid'];
	//公告
	$sql="select * from rv_gonggao where 1=1 and status=1 order by addtime desc limit 3";
	$db->p_e($sql,array());
	$gg=$db->fetchAll();
	
	//工作圈
	$sql="select *,date_format(addtime,'%Y/%m/%d') as date,date_format(addtime,'%H:%i') as time from rv_gongzuoquan where 1=1 and status=1 and type=1 order by addtime desc limit 0,10";
	$db->p_e($sql,array());
	$gzq=$db->fetchAll();
	//总数
	$sql="select count(*) from rv_gongzuoquan where 1=1 and status=1 and type=1";
	$db->p_e($sql,array());
	$total=$db->fetch_count();
	$total=ceil($total/10);
	foreach($gzq as &$k){
		$k['user']=user($k['uid']);
		if($k['img']!=""){
			$k['img']=explode(',',$k['img']);
		}else{
			$k['img']='';
		}
		//是否赞
		$sql="select count(*) from rv_zan where 1=1 and uid=? and gzqid=?";
		$db->p_e($sql,array($uid,$k['id']));
		$k['is_zan']=$db->fetch_count();
		//评论
		$sql="select * from rv_pinglun where 1=1 and status=1 and gzqid=?";
		$db->p_e($sql,array($k['id']));
		$k['pl']=$db->fetchAll();
		foreach($k['pl'] as &$v){
			$v['user']=user($v['uid']);
		}
	}
	
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('gg',$gg);
	$smt->assign('gzq',$gzq);
	$smt->assign('total',$total);
	$smt->display('gongzuoquan.html');
	exit;
}
//工作圈分页
if($do=="gzq_list"){
	$uid=$_POST['uid'];
	$pagenum=10;
	$page=$_POST['page']??2;
	$page=($page-1)*$pagenum;
	//工作圈
	$sql="select *,date_format(addtime,'%Y/%m/%d') as date,date_format(addtime,'%H:%i') as time from rv_gongzuoquan where 1=1 and status=1 and type=1 order by addtime desc limit ".$page.",".$pagenum;
	$db->p_e($sql,array());
	$gzq=$db->fetchAll();
	
	foreach($gzq as &$k){
		$k['user']=user($k['uid']);
		if($k['img']!=""){
			$k['img']=explode(',',$k['img']);
		}else{
			$k['img']='';
		}
		//是否赞
		$sql="select count(*) from rv_zan where 1=1 and uid=? and gzqid=?";
		$db->p_e($sql,array($uid,$k['id']));
		$k['is_zan']=$db->fetch_count();
		//评论
		$sql="select * from rv_pinglun where 1=1 and status=1 and gzqid=?";
		$db->p_e($sql,array($k['id']));
		$k['pl']=$db->fetchAll();
		foreach($k['pl'] as &$v){
			$v['user']=user($v['uid']);
		}
	}
	
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('gzq',$gzq);
	$smt->display('gongzuoquan_list.html');
	exit;
}
//工作圈发布
if($do=="gzqfb"){
	$aaa=json_decode($_POST['aaa'],true);
	$uid=$aaa['uid'];
	$img=implode(',',$aaa['img_arr']);
	$sql="insert into rv_gongzuoquan (uid,content,img,type,status) values(?,?,?,1,1)";
	if($db->p_e($sql,array($uid,$aaa['nr'],$img))){
		echo '{"code":"200"}';
	}else{
		echo '{"code":"404"}';
	}
	exit;
}
//工作圈评论
if($do=="gzqpl"){
	$uid=$_POST['uid'];
	$sql="insert into rv_pinglun (uid,gzqid,content,status) values(?,?,?,1)";
	if($db->p_e($sql,array($uid,$_POST['id'],$_POST['txt']))){
		echo '{"code":"200"}';
	}else{
		echo '{"code":"404"}';
	}
	exit;
}
//工作圈赞
if($do=="gzqzan"){
	$uid=$_POST['uid'];
	$sql="insert into rv_zan (uid,gzqid,status) values(?,?,1)";
	if($db->p_e($sql,array($uid,$_POST['id']))){
		echo '{"code":"200"}';
	}else{
		echo '{"code":"404"}';
	}
	exit;
}