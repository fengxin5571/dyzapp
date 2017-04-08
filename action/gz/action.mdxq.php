<?php
if(!defined('CORE'))exit("error!"); 
//工作

//门店需求
if($do=="mdxq"){
	$uid=$_POST['uid']??1;
	$user=user($uid);
	$pagenum=10;
	$page=$_POST['page']??1;
	$page=($page-1)*$pagenum;
	//门店需求
	$sql="select *,date_format(addtime,'%Y/%m/%d') as date,date_format(addtime,'%H:%i') as time from rv_gongzuoquan where 1=1 and status=1 and type=2 order by addtime desc limit ".$page.",".$pagenum;
	$db->p_e($sql,array());
	$mdxq=$db->fetchAll();
	//总数
	$sql="select count(*) from rv_gongzuoquan where 1=1 and status=1 and type=2";
	$db->p_e($sql,array());
	$total=$db->fetch_count();
	$total=ceil($total/10);
	foreach($mdxq as &$k){
		$k['user']=user($k['uid']);
		
		if($k['img']!=""){
			$k['img']=explode(',',$k['img']);
		}else{
			$k['img']='';
		}
		//是否能评论
		if($uid==$k['uid'] || $user['roleid']==1){
			$k['is_pl']=1;
		}else{
			$k['is_pl']=0;
		}
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
	$smt->assign('mdxq',$mdxq);
	$smt->assign('total',$total);
	$smt->display('mendianxuqiu.html');
	exit;
}
//门店需求发布
if($do=="mdxqfb"){
	$aaa=json_decode($_POST['aaa'],true);
	$uid=$aaa['uid'];
	$img=implode(',',$aaa['img_arr']);
	$sql="insert into rv_gongzuoquan (uid,content,img,type,status) values(?,?,?,2,1)";
	if($db->p_e($sql,array($uid,$aaa['nr'],$img))){
		echo '{"code":"200"}';
	}else{
		echo '{"code":"404"}';
	}
	exit;
}
//门店需求评论
if($do=="mdxqpl"){
	$uid=$_POST['uid'];
	$sql="insert into rv_pinglun (uid,gzqid,content,status) values(?,?,?,1)";
	if($db->p_e($sql,array($uid,$_POST['id'],$_POST['txt']))){
		echo '{"code":"200"}';
	}else{
		echo '{"code":"404"}';
	}
	exit;
}

//我的需求
if($do=="wdxq"){
	$uid=$_POST['uid']??1;
	$user=user($uid);
	$pagenum=10;
	$page=$_POST['page']??1;
	$page=($page-1)*$pagenum;
	//我的需求
	$sql="select *,date_format(addtime,'%m/%d') as date,date_format(addtime,'%H:%i') as time from rv_gongzuoquan where 1=1 and uid=? and status=1 and type=2 order by addtime desc limit ".$page.",".$pagenum;
	$db->p_e($sql,array($uid));
	$mdxq=$db->fetchAll();
	//总数
	$sql="select count(*) from rv_gongzuoquan where 1=1 and uid=? and status=1 and type=2";
	$db->p_e($sql,array($uid));
	$total=$db->fetch_count();
	$total=ceil($total/$pagenum);
	foreach($mdxq as &$k){
		if($k['img']!=""){
			$k['img']=explode(',',$k['img']);
		}else{
			$k['img']='';
		}
		//是否能评论
		if($uid==$k['uid'] || $user['roleid']==1){
			$k['is_pl']=1;
		}else{
			$k['is_pl']=0;
		}
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
	$smt->assign('mdxq',$mdxq);
	$smt->assign('user',$user);
	$smt->assign('total',$total);
	$smt->display('wodexuqiu.html');
	exit;
}
//解决
if($do=="jiejue"){
	$sql="update rv_gongzuoquan set jiejue=1 where 1=1 and id=?";
	if($db->p_e($sql,array($_POST['id']))){
		echo '{"code":"200"}';
	}else{
		echo '{"code":"404"}';
	}
	exit;
}