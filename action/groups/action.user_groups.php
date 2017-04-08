<?php
if(!defined('CORE'))exit("error!");
//加入群聊
if($do == "add_groups"){
    $admin_id = $_REQUEST['admin_id'];//群主用户id
    $groups_users = $_REQUEST['groups_users'];//群内用户id
    if(!empty($admin_id)&&!empty($groups_users)&&is_array($groups_users)){
        
        $admin_name = $db->select(0,1,"rv_user","name",array("id = $admin_id"),"id desc");
        array_unshift($groups_users, array($admin_id,$admin_name[name]));//将自己加入到群组中
        $ug_id=$db->insert(0, 2, "rv_users_groups", array("ug_admin_id = $admin_id"));//如果插入成功，则返回群组id
        if($ug_id){
            $sql="INSERT INTO rv_group_to_users(gu_gid,gu_uid,gu_group_nick) VALUES";
            $item_list_tmp = '';
            $params=array();
            $groups_users=unique($groups_users);//去除重复人员
            foreach ($groups_users as $value){
                $item_list_tmp .=$item_list_tmp ? ",(?,?,?)" : "(?,?,?)";
                array_push($params,$ug_id,$value[0],"'$value[1]'");
            }
            $sql .=$item_list_tmp;
            $db->p_e($sql,$params);
            echo '{"code":"200","msg":"创建群聊成功"}';
        }else{
            echo '{"code":"500","msg":"创建群聊有误"}'; 
        }
    }else{
        echo '{"code":"500","msg":"创建群聊有误"}';
    }
}
elseif($do == "test"){
    $smt = new smarty();smarty_cfg($smt);
    $smt->display("test.html");
}