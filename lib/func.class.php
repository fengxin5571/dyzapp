<?php
//====================================================
//		FileName: func.class.php
//		Summary:  系统函数配置
//====================================================

if(!defined('CORE'))exit("error!"); 
//当前时区
date_default_timezone_set('asia/shanghai');

//初始化数据库连接
$db	= new pdo_mysql($Config);
//安全验证
function smarty_cfg($self){
	global $dir;
	$self->setTemplateDir('./tpl/'.$dir.'/');
	$self->setCompileDir('./tmp/compile/'.$dir.'/');   
	$self->setCacheDir('./tmp/cache/'.$dir.'/');
}
function isLogin(){
	if($_SESSION['app_c_id']<1){
		echo "<script>alert(\"您还未登录!\");window.location=\"index.php?action=zygw_index\";</script>";
		exit;
	}
}
function cha_province($id){
	global $db;
	$sql="select province from rv_province where 1=1 and provinceid=?";
	$db->p_e($sql,array($id));
	$province=$db->fetch_count();
	return $province;
}
function cha_city($id){
	global $db;
	$sql="select city from rv_city where 1=1 and cityid=?";
	$db->p_e($sql,array($id));
	$city=$db->fetch_count();
	return $city;
}
function cha_area($id){
	global $db;
	$sql="select area from rv_area where 1=1 and areaid=?";
	$db->p_e($sql,array($id));
	$area=$db->fetch_count();
	return $area;
}
function cha_dizhi($id){
	global $db;
	$sql="select * from rv_mendian where 1=1 and id=?";
	$db->p_e($sql,array($id));
	$md=$db->fetchRow();
	
	$sql="select * from rv_fengongsi where 1=1 and id=?";
	$db->p_e($sql,array($md['fid']));
	$fgs=$db->fetchRow();
	if($fgs){
		$dizhi=$fgs['name'].'-'.$md['name'];
	}else{
		$dizhi=$md['name'];
	}
	//$dizhi=cha_province($md['provinceid']).cha_city($md['cityid']).cha_area($md['areaid']).$md['dizhi'].$md['name'];
	return $dizhi;
}
function user($uid){
	global $db;
	$sql="select * from rv_user where 1=1 and id=?";
	$db->p_e($sql,array($uid));
	$user=$db->fetchRow();
	if($user['roleid']==1){
		$user['zz']='总部';
	}elseif($user['roleid']==2 || $user['roleid']==4){
		$sql="select name from rv_fengongsi where 1=1 and id=?";
		$db->p_e($sql,array($user['zz']));
		$user['zz']=$db->fetch_count();
	}elseif($user['roleid']==3 || $user['roleid']==5){
		$sql="select * from rv_mendian where 1=1 and id=?";
		$db->p_e($sql,array($user['zz']));
		$md=$db->fetchRow();
		$user['zz']=cha_province($md['provinceid']).cha_city($md['cityid']).cha_area($md['areaid']).$md['dizhi'].$md['name'];
	}
	return $user;
}
function send_sms($tel,$sms,$smstpl){
	$pub_arr = array(
		'app_key' => '23274158',
		'format' => 'json',
		'method' => 'alibaba.aliqin.fc.sms.num.send',
		'rec_num' => $tel,
		'sign_method'=>'md5',
		'simplify' => 'true',			
		'sms_free_sign_name' => '房团惠',
		'sms_param' => $sms,
		'sms_template_code' => $smstpl,
		'sms_type' => 'normal',
		'timestamp' => date('Y-m-d H:i:s'),	
		'v' => '2.0'
	);
	
	ksort($pub_arr);
	$appSecret = '7f301f4577c08a9ffaf0563b7aeb32ff';
	$arrstr=''; 
	foreach ($pub_arr as $key => $val) {
		$arrstr .= $key.$val;
	}
	$sign = strtoupper(md5($appSecret.$arrstr.$appSecret)); 
	$strParam = http_build_query($pub_arr);
	$strParam .= '&sign='.$sign;
	$ch = curl_init();
	$url = 'http://gw.api.taobao.com/router/rest?'.$strParam;
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_IPRESOLVE , CURL_IPRESOLVE_V4);	
	curl_setopt($ch , CURLOPT_URL , $url);
	$res = json_decode(curl_exec($ch),true);
	if(!empty($res['result'])){
		if($res['result']['err_code'] == 0 && $res['result']['success'] == true){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}	
}
//  推送消息
function to_msg($post_data){
	$ch = curl_init('http://127.0.0.1:4000');
	curl_setopt_array($ch, array(
		CURLOPT_POST => TRUE,
		CURLOPT_HEADER=> 0,
		CURLOPT_SSL_VERIFYPEER=>FALSE,
		CURLOPT_SSL_VERIFYHOST=>FALSE,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
		CURLOPT_POSTFIELDS => http_build_query($post_data)
	));
	$aa=curl_exec($ch);
	curl_close($ch);
	return $aa=='ok'?true:false;	
}
//去除重复数据
function unique($data = array()){
    $tmp = array();
    foreach($data as $key => $value){
        //把一维数组键值与键名组合
        foreach($value as $key1 => $value1){
            $value[$key1] = $key1 . '_|_' . $value1;//_|_分隔符复杂点以免冲突
        }
        $tmp[$key] = implode(',|,', $value);//,|,分隔符复杂点以免冲突
    }
    //对降维后的数组去重复处理
    $tmp = array_unique($tmp);
    //重组二维数组
    $newArr = array();
    foreach($tmp as $k => $tmp_v){
        $tmp_v2 = explode(',|,', $tmp_v);
        foreach($tmp_v2 as $k2 => $v2){
            $v2 = explode('_|_', $v2);
            $tmp_v3[$v2[0]] = $v2[1];
        }
        $newArr[$k] = $tmp_v3;
    }
    return $newArr;
}
?>