<?php
if(!defined('CORE'))exit("error!"); 

//排行榜
if($do=="phb"){
	$n=$_POST['n']??0;
	$time=$_POST['time']??1;
	$search='';
	if($n==0){
		$search.='order by zj desc ';
	}elseif($n==1){
		$search.='order by zj asc ';
	}
	$search1='';
	if($time==1){
		$search1.="addtime between date_format(now(),'%Y-%m-%d 00:00:00') and date_format(date_add(now(),INTERVAL 1 day),'%Y-%m-%d 00:00:00')";
	}elseif($time==2){
		$search1.="YEARWEEK(date_format(addtime,'%Y-%m-%d')) = YEARWEEK(now())";
	}elseif($time==3){
		$search1.="addtime between date_format(now(),'%Y-%m-01 00:00:00') and date_format(date_add(now(),INTERVAL 1 month),'%Y-%m-01 00:00:00')";
	}
	$sql="select a.mid,sum(a.shuliang*b.money) as zj from rv_buy as a left join rv_goods as b on a.gid=b.id where 1=1 and ".$search1." group by a.mid ".$search." limit 0,10";
	$db->p_e($sql,array());
	$phb=$db->fetchAll();
	foreach($phb as &$k){
		$k['xxdz']=cha_dizhi($k['mid']);
		$sql="select adminid from rv_mendian where id=?";
		$db->p_e($sql,array($k['mid']));
		$adminid=$db->fetch_count();
		$k['user']=user($adminid);
	}
	$sql="select COUNT(DISTINCT a.mid) from rv_buy as a left join rv_goods as b on a.gid=b.id where 1=1 and ".$search1;
	$db->p_e($sql,array());
	$total=$db->fetch_count();
	$total=ceil($total/10);
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('phb',$phb);
	$smt->assign('n',$n);
	$smt->assign('total',$total);
	$smt->display('phb.html');
	exit;
}
if($do=="phb_list"){
	$pagenum=10;
	$page=$_POST['page']??2;
	$page=($page-1)*$pagenum;
	$n=$_POST['n']??0;
	$time=$_POST['time']??1;
	$search='';
	if($n==0){
		$search.='order by zj desc ';
	}elseif($n==1){
		$search.='order by zj asc ';
	}
	$search1='';
	if($time==1){
		$search1.="addtime between date_format(now(),'%Y-%m-%d 00:00:00') and date_format(date_add(now(),INTERVAL 1 day),'%Y-%m-%d 00:00:00')";
	}elseif($time==2){
		$search1.="YEARWEEK(date_format(addtime,'%Y-%m-%d')) = YEARWEEK(now())";
	}elseif($time==3){
		$search1.="addtime between date_format(now(),'%Y-%m-01 00:00:00') and date_format(date_add(now(),INTERVAL 1 month),'%Y-%m-01 00:00:00')";
	}
	$sql="select a.mid,sum(a.shuliang*b.money) as zj from rv_buy as a left join rv_goods as b on a.gid=b.id where 1=1 and ".$search1." group by mid ".$search." limit ".$page.",".$pagenum;
	$db->p_e($sql,array());
	$phb=$db->fetchAll();
	foreach($phb as &$k){
		$k['xxdz']=cha_dizhi($k['mid']);
		$sql="select adminid from rv_mendian where id=?";
		$db->p_e($sql,array($k['mid']));
		$adminid=$db->fetch_count();
		$k['user']=user($adminid);
	}
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('phb',$phb);
	$smt->assign('n',$n);
	$smt->display('phb_list.html');
	exit;
}