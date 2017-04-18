<?php
	//====================================================
	//		FileName: index.php
	//		Summary:  程序入口文件
	//====================================================
	header("Content-type: text/html; charset=utf-8");
	
	ini_set("display_errors","off");
	error_reporting(-1);
	//配置数据库
	$Config['dsn']="mysql:dbname=dyz;host=127.0.0.1;charset=utf8";     //数据库主机名
	$Config['name']="root";		    //数据库用户名
	$Config['password']="root"; 				//数据库密码
	//$Config['db']="mysql:dbname=test;";   			//数据库名称
	//引入类库及公共方法
	//echo 111;exit;
	define("CORE",true); 	    //根目录    dirname(string path)返回路径中的目录部分
	require_once("lib/db.class.php"); 
	require_once("lib/smarty.class.php"); 
	require_once("lib/func.class.php");
    require_once("lib/wx.class.php");
    require_once('lib/phpqrcode.php');
	//操作值
    session_start();
	$dir=$_GET['dir']??'index';
	$action=$_GET['action']??'index'; 	 //get action值     判断action的get传值是否为空，如果为空则返回空，否则返回action的Get传值
	$do=$_GET['do']??'index';			 	 //get do值
	$id=$_GET['id']??'';			 	 //get id值
	
	
//执行页面
	if(file_exists('action/'.$dir.'/action.'.$action.'.php')){
		include('action/'.$dir.'/action.'.$action.'.php'); 
	}else{
		echo "404!";
	}
?>