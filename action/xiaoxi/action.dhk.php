<?php
if(!defined('CORE'))exit("error!"); 
//对话框
if($do=="dhk"){
	$uid=$_POST['uid'];
	$id=$_POST['id'];
	//变已读
	$sql="update rv_xiaoxi set is_du=1 where 1=1 and uid=? and toid=?";
	$db->p_e($sql,array($uid,$id));
	//总部
	$sql="select *,date_format(addtime,'%m月%d日 %H:%i') as addtime1 from rv_xiaoxi where 1=1 and uid=? and toid=? and status=1";
	$db->p_e($sql,array($uid,$id));
	$dh=$db->fetchAll();
	foreach($dh as &$k){
		$k['wo']=user($k['uid']);
		$k['to']=user($k['toid']);
	}
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('dh',$dh);
	$smt->display('dhk.html');
	exit;
}
//对话人
if($do=="dhr"){
	$id=$_POST['id'];
	$uid=$_POST['uid'];
	$sql="select name from rv_user where 1=1 and id=?";
	$db->p_e($sql,array($id));
	$to_name=$db->fetch_count();
	$sql="select name from rv_user where 1=1 and id=?";
	$db->p_e($sql,array($uid));
	$wo_name=$db->fetch_count();
	echo '{"code":"200","to_name":"'.$to_name.'","wo_name":"'.$wo_name.'"}';
	exit;
}

//发私信
if($do=="fasixin"){
	$uid=$_POST['uid'];
	$toid=$_POST['toid'];
	$txt=$_POST['txt'];
	$nowtime=date('m月d日 H:i');
	$cont=array('lx'=>0,'nr'=>$txt,'time'=>date('m月d日 H:i'));
	$cont=json_encode($cont);
	$sql="insert into rv_xiaoxi(uid,toid,content,content_type,type,status,is_du) values(?,?,?,0,1,1,1)";
	if($db->p_e($sql,array($uid,$toid,$txt))){
		$sql="insert into rv_xiaoxi(uid,toid,content,content_type,type,status,is_du) values(?,?,?,0,2,1,0)";
		if($db->p_e($sql,array($toid,$uid,$txt))){
			to_msg(array('type'=>'sixin_to','cont'=>$cont,'to'=>$toid));
			echo '{"code":"200","time":"'.$nowtime.'"}';
		}else{
			echo '{"code":"404"}';
		}
	}else{
		echo '{"code":"404"}';
	}
	exit;
}