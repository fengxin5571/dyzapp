<?php
if(!defined('CORE'))exit("error!");
$smt=new Smarty();
smarty_cfg($smt);
if($do=="qrwxcode"){//生成网页版微信二维码
    $wx=new Wx();
    $wx->setSelfuuid($wx->get_uuid());
    $_SESSION['wx_obj']=$wx;
    $code=$wx->qrcode($wx->getSelfuuid());
    if(empty($wx)||empty($code)){
        echo "<script>alert('程序出错请稍后重试！');</script>";
        exit();
    }
    $contents=$_REQUEST['contents']??'太常-独一张';
    $_SESSION['wx_contents']=$contents;
    $smt->assign("QRWXCode",$code);
    $smt->assign("flag","qrwxcode");
    $smt->display("qrcode.html");
}else if($do == 'checkwxlogin'){//监测微信是否扫描登陆成功
  $wx=$_SESSION['wx_obj'];
  if($wx->login($wx->getSelfuuid())){
      echo $wx->login($wx->getSelfuuid());
  }

}else if($do == "success_login") { //微信登陆成功后跳转到此进行初始化，群发
    $wx=$_SESSION['wx_obj'];
    if(empty($wx)||empty($_SESSION['wx_contents'])) exit();
        $callback=$wx->get_uri($wx->getSelfuuid());//登录成功回调
        $post=$wx->post_self($callback);//获取post数据
        $init=json_decode($wx->wxinit($post));//微信初始化
        $wxhaoyoulist=json_decode($wx->webwxgetcontact($post));//获取微信好友
        $BaseResponse=$wxhaoyoulist->MemberList;//微信好友数组
        $send_status;
        if($wx->error){//微信有错时
            $smt->assign("msg",$wx->error);
        }else{
            if($BaseResponse&& is_array($BaseResponse)){//如果有联系人则循环群发
                foreach ($BaseResponse as $value){
                    $send_status=json_decode($wx->webwxsendmsg($post,$init->User,$value->UserName,$_SESSION['wx_contents']));
        
                }
                $smt->assign("msg","发送成功..");
            }else{
                $smt->assign("msg","联系人为空！");
            }
            $wx->wxloginout($post);
        }
    unset($_SESSION['wx_obj']);
    $smt->assign("flag","done");
    $smt->display("qrcode.html");
}