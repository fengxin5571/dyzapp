<?php
if(!defined('CORE'))exit("error!"); 
//通讯录
if($do=="txl"){
	//总部
	$sql="select * from rv_user where 1=1 and roleid=1 and status=1";
	$db->p_e($sql,array());
	$zb_user=$db->fetchAll();
	foreach($zb_user as &$k){
		$sql="select name from rv_zongbu where 1=1 and id=?";
		$db->p_e($sql,array($k['zz']));
		$k['zbname']=$db->fetch_count();
	}
	//门店
	$sql="select GET_SZM(b.name) as szm from rv_mendian as a left join rv_fengongsi as b on a.fid=b.id where 1=1 and a.status=1 group by szm";
	$db->p_e($sql,array());
	$szm=$db->fetchAll();
	if(count($szm)>0){
		$sql="select a.*,b.name as fgsname,GET_SZM(b.name) as szm from rv_mendian as a left join rv_fengongsi as b on a.fid=b.id where 1=1 and a.status=1 and b.status=1";
		$db->p_e($sql,array());
		$txl=$db->fetchAll();
		foreach($txl as &$k){
			$k['admin']=user($k['adminid']);
			$sql="select id from rv_user where 1=1 and zz=? and status=1 and roleid in (3,5)";
			$db->p_e($sql,array($k['id']));
			$k['yh_user']=$db->fetchAll();
			foreach($k['yh_user'] as &$v){
				$v['user']=user($v['id']);
			}
		}
	}else{
		$txl=array();
	}
	//模版
	$flag=$_REQUEST['flag']??'0';//0未默认通信录 1群聊通讯录
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign("flag",$flag);
	$smt->assign('szm',$szm);
	$smt->assign('txl',$txl);
	$smt->assign('zb_user',$zb_user);
	$smt->display('txl.html');
	exit;
}