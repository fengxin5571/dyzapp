<?php
if(!defined('CORE'))exit("error!"); 
//消息列表
if($do=="xiaoxi"){
	$uid=$_POST['uid']??1;
	$pagenum=10;
	$page=$_POST['page']??1;
	$page=($page-1)*$pagenum;
	//总部
	$sql="select *,date_format(addtime,'%m月%d日') as addtime1 from rv_xiaoxi where id in (SELECT max(id) FROM rv_xiaoxi where uid=? GROUP BY toid) order by addtime desc limit ".$page.",".$pagenum;
	$db->p_e($sql,array($uid));
	$xiaoxi=$db->fetchAll();
	foreach($xiaoxi as &$k){
		$sql="select count(*) from rv_xiaoxi where 1=1 and uid=? and toid=? and is_du=0";
		$db->p_e($sql,array($uid,$k['toid']));
		$k['weidu']=$db->fetch_count();
		$sql="select * from rv_user where 1=1 and id=?";
		$db->p_e($sql,array($k['toid']));
		$k['user']=$db->fetchRow();
		if($k['user']['roleid']==1){
			$k['user']['zz']='总部';
		}elseif($k['user']['roleid']==2 || $k['user']['roleid']==4){
			$sql="select name from rv_fengongsi where 1=1 and id=?";
			$db->p_e($sql,array($k['user']['zz']));
			$k['user']['zz']=$db->fetch_count();
		}elseif($k['user']['roleid']==3 || $k['user']['roleid']==5){
			$sql="select * from rv_mendian where 1=1 and id=?";
			$db->p_e($sql,array($k['user']['zz']));
			$md=$db->fetchRow();
			$k['user']['zz']=$md['name'];
		}
	}
	$sql="select count(*) from rv_xiaoxi where id in (SELECT max(id) FROM rv_xiaoxi where uid=? GROUP BY toid)";
	$db->p_e($sql,array($uid));
	$total=$db->fetch_count();
	$total=ceil($total/$pagenum);
    
	//获取群聊消息
	$sql="select * ,date_format(ug_create_time,'%m月%d日') as addtime1 from rv_users_groups where ug_id in( SELECT gu_gid from rv_group_to_users where gu_uid=?)";
	$db->p_e($sql, array($uid));
	$user_groups_list=$db->fetchAll();
	foreach ($user_groups_list as &$groups){
	    $groups['ug_name']=$groups['ug_name'] == '未命名'||empty($groups['ug_name'])? '未命名的群聊':$groups['ug_name'];
	    $sql="select *,date_format(addtime,'%m月%d日') as addtime1 from rv_groups_xiaoxi where id in (SELECT max(id) FROM rv_groups_xiaoxi where togid= ? GROUP BY togid) order by addtime desc";
	    $db->p_e($sql, array($groups['ug_id']));
	    $from_xiaoxi=$db->fetchRow();
	    if($groups['ug_admin_id'] == $uid){//如果是群主时 不管有无消息显示群聊信息
	        $groups['admin']=1;
	    }
	    if($from_xiaoxi){//有消息时
	        $groups['xiaoxi']=$from_xiaoxi;
	        $at_user_ids=json_decode($from_xiaoxi['at_user_ids']);
	        foreach ($at_user_ids as $at_uid){
	            if($at_uid == $uid){
	                $groups['xiaoxi']['at_msg']=' [有人@你] ';
	                break;
	            }
	        }
	        $sql="SELECT count(*) from rv_groups_msg_details where guid=? and is_du=0 and gid=?";//获取未读信息
	        $db->p_e($sql, array($uid,$groups['xiaoxi']['togid']));
	        $groups['weidu']=$db->fetch_count();
	        $sql="select gu_group_nick from rv_group_to_users where 1=1 and gu_uid=?";
	        $db->p_e($sql, array($groups['xiaoxi']['from_uid']));
	        $from_name=$db->fetchRow();
	        $groups['xiaoxi']['from_name']=$from_name['gu_group_nick'];
	    }
	     
	    
	}
	//模版
	$smt = new smarty();smarty_cfg($smt);
	$smt->assign("groups",$user_groups_list);
	$smt->assign('xiaoxi',$xiaoxi);
	$smt->assign('total',$total);
	$smt->display('xiaoxi.html');
	exit;
}
