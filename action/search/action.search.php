<?php
if(!defined('CORE'))exit("error!"); 
//搜索
if($do=="search"){
	$uid=$_POST['uid'];
	//搜索记录
	$sql="select * from rv_search where 1=1 and uid=? group by mid";
	$db->p_e($sql,array($uid));
	$jilu=$db->fetchAll();
	foreach($jilu as &$k){
		$k['md']=cha_dizhi($k['mid']);
	}
	//省
	$sql="select * from rv_province where 1=1";
	$db->p_e($sql,array());
	$sheng=$db->fetchAll();
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('sheng',$sheng);
	$smt->assign('jilu',$jilu);
	$smt->display('search.html');
	exit;
}

if($do=="shi"){
	$provinceid=$_POST['sheng'];
	$sql="select * from rv_city where 1=1 and fatherid=?";
	$db->p_e($sql,array($provinceid));
	$city=$db->fetchAll();
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('city',$city);
	$smt->display('shi.html');
	exit;
}

if($do=="qu"){
	$cityid=$_POST['shi'];
	$sql="select * from rv_area where 1=1 and fatherid=?";
	$db->p_e($sql,array($cityid));
	$qu=$db->fetchAll();
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('qu',$qu);
	$smt->display('qu.html');
	exit;
}

if($do=="jieguo"){
	$search='';
	$arr=array();
	$type=$_POST['type']??1;
	if($type==1){
		$sheng=$_POST['sheng']??0;
		$shi=$_POST['shi']??0;
		$qu=$_POST['qu']??0;
		$mendian=$_POST['mendian']??'';
		if($mendian!=""){
			$search.=" and a.name like '%".$mendian."%'";
		}
		if($sheng!=0){
			$search.=" and a.provinceid=?";
			$arr[]=$sheng;
		}
		if($shi!=0){
			$search.=" and a.cityid=?";
			$arr[]=$shi;
		}
		if($qu!=0){
			$search.=" and a.areaid=?";
			$arr[]=$qu;
		}
	}elseif($type==2){
		$id=$_POST['id'];
		$search.=" and a.id=?";
		$arr[]=$id;
	}
	$search1='';
	$time=$_POST['time']??0;
	if($time==0){
		$search1.="to_days(b.addtime) = to_days(now()) ";
	}elseif($time==1){
		$search1.="YEARWEEK(date_format(b.addtime,'%Y-%m-%d')) = YEARWEEK(now()) ";
	}elseif($time==2){
		$search1.="b.addtime between date_format(now(),'%Y-%m-01 00:00:00') and date_format(date_add(now(),INTERVAL 1 month),'%Y-%m-01 00:00:00') ";
	}
	$pagenum=10;
	$page=$_POST['page']??1;
	$page=($page-1)*$pagenum;
	$sql="select *,a.id as mdid from rv_mendian as a left join v_goods as b on a.id=b.mid where 1=1 and ".$search1.$search." order by b.zj desc limit ".$page.",".$pagenum;
	$db->p_e($sql,$arr);
	$mendian=$db->fetchAll();
	foreach($mendian as &$k){
		$k['user']=user($k['adminid']);
		$k['md']=cha_dizhi($k['mdid']);
	}
	$sql="select count(*) from rv_mendian as a left join v_goods as b on a.id=b.mid where 1=1 and ".$search1.$search;
	$db->p_e($sql,$arr);
	$total=$db->fetch_count();
	$total=ceil($total/10);
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('mendian',$mendian);
	$smt->assign('total',$total);
	$smt->display('jieguo.html');
	exit;
}






