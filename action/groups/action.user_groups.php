<?php
if(!defined('CORE'))exit("error!");
//加入群聊
if($do == "add_groups"){
    $admin_id = $_REQUEST['admin_id'];//群主用户id
    $groups_users = json_decode($_REQUEST['groups_users']);//群内用户id
    if(!empty($admin_id)&&!empty($groups_users)&&is_array($groups_users)){
        $admin_name = $db->select(0,1,"rv_user","name",array("id = $admin_id"),"id desc");
        array_unshift($groups_users, array($admin_id,$admin_name[name]));//将自己加入到群组数组中
        $ug_id=$db->insert(0, 2, "rv_users_groups", array("ug_admin_id = $admin_id"));//如果插入成功，则返回群组id
        if($ug_id){//如果创建群聊成功，则往群成员表插入群成员
            $sql="INSERT INTO rv_group_to_users(gu_gid,gu_uid,gu_group_nick) VALUES";
            $item_list_tmp = '';
            $params=array();
            $groups_users=unique($groups_users);//去除重复人员
            foreach ($groups_users as $value){
                $item_list_tmp .=$item_list_tmp ? ",(?,?,?)" : "(?,?,?)";
                array_push($params,$ug_id,$value[0],"$value[1]");
            }
            $sql .=$item_list_tmp;
            $db->p_e($sql,$params);
            echo '{"code":"200","msg":"创建群聊成功","gid":"'.$ug_id.'"}';
        }else{
            echo '{"code":"500","msg":"创建群聊有误"}'; 
        }
    }else{
        echo '{"code":"500","msg":"创建群聊有误"}';
    }
}elseif($do == "qlxx"){//获取群聊信息
    $gid=$_REQUEST['gid'];//群聊id
    if($gid){
        $sql=" SELECT * from rv_group_to_users where gu_gid=?";
        $db->p_e($sql, array($gid));
        $groups_users_list=json_encode($db->fetchAll());//群聊组员
        $groups_info=json_encode($db->select(0, 1, "rv_users_groups","*,date_format(ug_create_time,'%m月%d日 %H:%i') as ug_create_time_format",array("ug_id = $gid"),' ug_id desc'));//群聊信息
        echo '{"code":"200","gid":"'.$gid.'","groups_info":'.$groups_info.',"groups_users_list":'.$groups_users_list.'}';
        exit();
    }
    echo '{"code":"500"}';
    exit();
}elseif($do =='edit'){ //编辑群聊信息(群名，昵称，公告)
    $gid=$_REQUEST['gid'];
    $flag=$_REQUEST['flag'];
    if($gid&&$flag){
        if($flag == "groups_name"){//修改群名
            if($db->update(0,1, "rv_users_groups", array("ug_name='$_REQUEST[groups_name]'"),array("ug_id=$gid"))){
                echo '{"code":"200","msg":"修改成功"}';
                exit();
            }
        }elseif($flag == "nick_name"){//修改昵称
            $uid=$_REQUEST['uid'];
            if($db->update(0,1, "rv_group_to_users",array("gu_group_nick='$_REQUEST[nick_name]'"),array("gu_gid =$gid","gu_uid=$uid"))){
                echo '{"code":"200","msg":"修改成功"}';
                exit();
            }
        }elseif($flag == "notice"){//修改公告
            if($db->update(0, 1, 'rv_users_groups', array("ug_notice='$_REQUEST[notice]'"),array("ug_id=$gid"))){
                echo '{"code":"200","msg":"修改成功"}';
                exit();
            }
        }
    } 
    echo '{"code":"500","msg":"修改失败"}';
    exit();
}elseif($do == "leave_groups"){//删除or推出群聊
    $gid= $_REQUEST['gid'];//群聊id
    $uid= $_REQUEST['uid'];//用户id
    $groups_info=$db->select(0, 1, "rv_users_groups","*",array("ug_id = $gid"),' ug_id desc');//群聊信息
    if($groups_info['ug_admin_id'] ==$uid){//如果是群主删除整个群
        if($db->delete(0, 1, "rv_users_groups",array("ug_id=$gid"))){
            echo '{"code":"200","msg":"解散群聊成功"}';
            exit();
        }
    }else{//不是群主则退出此群聊
        if($db->delete(0, 1, "rv_group_to_users",array("gu_uid=$uid","gu_gid=$gid"))){
            echo '{"code":"200","msg":"离开群聊成功"}';
            exit();
        }
    }
    echo '{"code":"500","msg":"操作失败"}';
    exit();
}elseif($do == "qldhk"){//群聊对话框
    $gid= $_REQUEST['gid'];//群聊id
    $uid= $_REQUEST['uid'];//用户id
    if($gid&&$uid){
        //变已读
        $sql="update rv_groups_msg_details set is_du=1 where 1=1 and guid=? and gid=?";
        $db->p_e($sql, array($uid,$gid));
        $sql="select *,date_format(addtime,'%m月%d日 %H:%i') as addtime1 from rv_groups_xiaoxi where 1=1 and togid =?";
        $db->p_e($sql, array($gid));
        $qdh=$db->fetchAll();
        foreach ($qdh as $key=>&$value){
            $value['from_uid'] ==$uid?$qdh[$key]['type']=1:$qdh[$key]['type']=2;//获取是收消息or发消息
            $qdh[$key]['from']=user($value['from_uid']);//获取发消息人
        }
        //模版
        $smt = new smarty();smarty_cfg($smt);
        $smt->assign('qdh',$qdh);
        $smt->display('qdhk.html');
        exit;
    }
    
}elseif($do == "test"){
    $smt = new smarty();smarty_cfg($smt);
    $smt->display("test.html");
}