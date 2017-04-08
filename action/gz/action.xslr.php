<?php
if(!defined('CORE'))exit("error!"); 

//销售录入
if($do=="xslr"){
	$uid=$_POST['uid'];
	$sql="select zz from rv_user where id=?";
	$db->p_e($sql,array($uid));
	$zz=$db->fetch_count();
	$pagenum=10;
	$page=$_POST['page']??1;
	$page=($page-1)*$pagenum;
	$type=$_POST['type']??2;
	$type=$type+1;
	
	$sql="select *,a.id as kid from rv_kucun as a left join rv_goods as b on a.gid=b.id where a.mid=? and b.fatherid=? limit ".$page.",".$pagenum;
	$db->p_e($sql,array($zz,$type));
	$xslr=$db->fetchAll();
	
	$sql="select count(*) from rv_kucun as a left join rv_goods as b on a.gid=b.id where a.mid=? and b.fatherid=?";
	$db->p_e($sql,array($zz,$type));
	$total=$db->fetch_count();
	$total=ceil($total/$pagenum);
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('xslr',$xslr);
	$smt->assign('total',$total);
	$smt->display('xslr.html');
	exit;
}

//录入详情
if($do=="lrxq"){
	$id=$_POST['id'];
	$uid=$_POST['uid'];
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$tel=$_POST['tel'];
	$sl=$_POST['sl'];
	$beizhu=$_POST['beizhu']??'';
	$sql="select * from rv_kucun where 1=1 and id=?";
	$db->p_e($sql,array($id));
	$kucun=$db->fetchRow();
	$sql="insert into rv_buy(uid,mid,gid,username,sex,age,tel,shuliang,beizhu) values(?,?,?,?,?,?,?,?,?)";
	if($db->p_e($sql,array($uid,$kucun['mid'],$kucun['gid'],$name,$sex,$age,$tel,$sl,$beizhu))){
		$sql="update rv_kucun set kucun=kucun-? where 1=1 and id=?";
		if($db->p_e($sql,array($sl,$id))){
			echo '{"code":"200"}';
		}else{
			echo '{"code":"404"}';
		}
	}else{
		echo '{"code":"404"}';
	}
	exit;
}