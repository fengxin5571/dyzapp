<?php
if(!defined('CORE'))exit("error!"); 

//门店数据分析
if($do=="xssj"){
	//本日销售总额
	$uid=$_POST['uid'];
	$id=$_POST['id']??1;
	$sql="insert into rv_search(uid,mid) values(?,?)";
	$db->p_e($sql,array($uid,$id));
	$sql="select date_format(addtime,'%Y/%m/%d') as addtime,sum(a.shuliang*b.money) as zj from rv_buy as a left join rv_goods as b on a.gid=b.id where 1=1 and a.mid=? and to_days(addtime) = to_days(now())";
	$db->p_e($sql,array($id));
	$day_total=$db->fetchRow();
	if($day_total['zj']==''){
		$day_total['zj']=0;
	}
	$sql="select a.id,sum(c.shuliang*b.money) as zj from rv_type as a left join rv_goods as b on a.id=b.fatherid left join (select * from rv_buy where 1=1 and mid=? and to_days(addtime) = to_days(now()) ) as c on b.id=c.gid where 1=1 group by a.id";
	$db->p_e($sql,array($id));
	$daysale=$db->fetchAll();
	foreach($daysale as &$k){
		if($day_total['zj']==0){
			$k['bfb']=0;
		}else{
			$k['bfb']=round($k['zj']/$day_total['zj'],2)*100;
		}
	}
	//本周销售总额
	$sql="select date_format(addtime,'%c') as month,((day(now())+WEEKDAY(now()-interval day(now()) day)) div 7 + 1) as week,sum(a.shuliang*b.money) as zj from rv_buy as a left join rv_goods as b on a.gid=b.id where 1=1 and a.mid=? and YEARWEEK(date_format(addtime,'%Y-%m-%d')) = YEARWEEK(now())";
	$db->p_e($sql,array($id));
	$week_total=$db->fetchRow();
	if($week_total['zj']==''){
		$week_total['zj']=0;
	}
	$sql="select a.id,sum(c.shuliang*b.money) as zj from rv_type a left join rv_goods as b on a.id=b.fatherid left join (select * from rv_buy where 1=1 and mid=? and YEARWEEK(date_format(addtime,'%Y-%m-%d')) = YEARWEEK(now())) as c on b.id=c.gid where 1=1 group by a.id";
	$db->p_e($sql,array($id));
	$weeksale=$db->fetchAll();
	foreach($weeksale as &$k){
		if($week_total['zj']==0){
			$k['bfb']=0;
		}else{
			$k['bfb']=round($k['zj']/$week_total['zj'],2)*100;
		}
	}
	//本月销售总额
	$sql="select date_format(addtime,'%c') as month,sum(a.shuliang*b.money) as zj from rv_buy as a left join rv_goods as b on a.gid=b.id where 1=1 and a.mid=? and addtime between date_format(now(),'%Y-%m-01 00:00:00') and date_format(date_add(now(),INTERVAL 1 month),'%Y-%m-01 00:00:00')";
	$db->p_e($sql,array($id));
	$month_total=$db->fetchRow();
	if($month_total['zj']==''){
		$month_total['zj']=0;
	}
	$sql="select a.id,sum(c.shuliang*b.money) as zj from rv_type a left join rv_goods as b on a.id=b.fatherid left join (select * from rv_buy where 1=1 and mid=? and addtime between date_format(now(),'%Y-%m-01 00:00:00') and date_format(date_add(now(),INTERVAL 1 month),'%Y-%m-01 00:00:00')) as c on b.id=c.gid where 1=1 group by a.id";
	$db->p_e($sql,array($id));
	$monthsale=$db->fetchAll();
	foreach($monthsale as &$k){
		if($month_total['zj']==0){
			$k['bfb']=0;
		}else{
			$k['bfb']=round($k['zj']/$month_total['zj'],2)*100;
		}
	}
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('daysale',$daysale);
	$smt->assign('day_total',$day_total);
	$smt->assign('monthsale',$monthsale);
	$smt->assign('month_total',$month_total);
	$smt->assign('weeksale',$weeksale);
	$smt->assign('week_total',$week_total);
	$smt->display('sjfx.html');
	exit;
}
//门店日销售数据详情
if($do="sjxq"){
	$id=$_POST['id']??1;
	$pagenum=10;
	$page=$_POST['page']??1;
	$page=($page-1)*$pagenum;
	$time=$_POST['time']??2;
	$type=$_POST['type']??0;
	$type=$type+1;
	$search='';
	if($time==0){
		$search.="to_days(a.addtime) = to_days(now())";
	}elseif($time==1){
		$search.="YEARWEEK(date_format(addtime,'%Y-%m-%d')) = YEARWEEK(now())";
	}elseif($time==2){
		$search.="addtime between date_format(now(),'%Y-%m-01 00:00:00') and date_format(date_add(now(),INTERVAL 1 month),'%Y-%m-01 00:00:00')";
	}
	$sql="select b.name,b.money,sum(a.shuliang) as xl,sum(a.shuliang*b.money) as zj from rv_buy as a left join rv_goods as b on a.gid=b.id where a.mid=? and b.fatherid=? and ".$search." group by b.id limit ".$page.",".$pagenum;
	$db->p_e($sql,array($id,$type));
	$sale=$db->fetchAll();
	$sql="select count(*) from (select count(*) from rv_buy as a left join rv_goods as b on a.gid=b.id where a.mid=? and b.fatherid=? and ".$search." group by b.id) as u";
	$db->p_e($sql,array($id,$type));
	$total=$db->fetch_count();
	$total=ceil($total/10);
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign('sale',$sale);
	$smt->assign('total',$total);
	$smt->display('sjxq.html');
	exit;
}