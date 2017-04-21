<?php
if(!defined('CORE'))exit("error!"); //检查某常量是否存在。
//首页	
    $base64 = $_POST['formFile'];
    $IMG = base64_decode($base64);
	$save_url="http://static.duyiwang.cn/image/";
	$dir_name="D:/image/";
	$ymd = date("Ymd");
	$dir_name .= $ymd . "/";
	$save_url .= $ymd . "/";
	if (!file_exists($dir_name)) {
		mkdir($dir_name);
	}
	//新文件名
	$new_file_name = date("YmdHis") . '_' . mt_rand(10000, 99999) . '.jpg';
	//移动文件
	$file_path = $dir_name . $new_file_name;
	$file_url = $save_url.$new_file_name;
    file_put_contents($file_path,$IMG);
if($do=='upload'){
	echo $file_url;
	exit;
}
if($do=='fasixin_img'){
	$uid=$_POST['uid'];
	$toid=$_POST['toid'];
	$img=$file_url;
	$nowtime=date('m月d日 H:i');
	$cont=array('lx'=>1,'nr'=>$file_url,'time'=>date('m月d日 H:i'));
	$cont=json_encode($cont);
	$sql="insert into rv_xiaoxi(uid,toid,content,content_type,type,status,is_du) values(?,?,?,1,1,1,1)";
	if($db->p_e($sql,array($uid,$toid,$img))){
		$sql="insert into rv_xiaoxi(uid,toid,content,content_type,type,status,is_du) values(?,?,?,1,2,1,0)";
		if($db->p_e($sql,array($toid,$uid,$img))){
			to_msg(array('type'=>'sixin_to','cont'=>$cont,'to'=>$toid));
			echo '{"code":"200","url":"'.$file_url.'","time":"'.$nowtime.'"}';
		}else{
			echo '{"code":"404"}';
		}
	}else{
		echo '{"code":"404"}';
	}
	exit;
}elseif($do == "fasixin_img_ql"){
    $uid = $_REQUEST['uid'];
    $gid = $_REQUEST['gid'];
    $groups_room=$_REQUEST['groups_room'];
    $img=$file_url;
    $nowtime=date('m月d日 H:i');
    $send_name=$db->select(0, 1, "rv_group_to_users","gu_group_nick",array("gu_gid=$gid","gu_uid=$uid"),"gu_id desc");
    $cont=array('lx'=>1,'nr'=>$file_url,'time'=>date('m月d日 H:i'),"from_id"=>$uid,"send_name"=>$send_name[gu_group_nick]);
    $cont=json_encode($cont);
    $sql= "insert into rv_groups_xiaoxi (from_uid,togid,content,content_type) values(?,?,?,1)";
    if($db->p_e($sql, array($uid,$gid,$img))){//成功后像socket 服务端推送数据
        to_msg(array('type'=>'sixin_to_groups','cont'=>$cont,'to'=>$groups_room));//推送消息
        echo '{"code":"200","url":"'.$file_url.'","time":"'.$nowtime.'","send_name":"'.$send_name[gu_group_nick].'"}';
        exit();
    }
    echo '{"code":"500"}';
    exit();
}

?>
