<?php /* Smarty version Smarty-3.1.12, created on 2016-10-03 10:49:20
         compiled from ".\tpl\index\zhuce.html" */ ?>
<?php /*%%SmartyHeaderCode:3124257ee210ef0b703-87777253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0469e44be46b7510e94ed78700090780300b8888' => 
    array (
      0 => '.\\tpl\\index\\zhuce.html',
      1 => 1475401875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3124257ee210ef0b703-87777253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ee210ef31953_39520302',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee210ef31953_39520302')) {function content_57ee210ef31953_39520302($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
	<title>添加分销员</title>
	<link rel="stylesheet" href="themes/css/public.css">
	<link rel="stylesheet" href="themes/css/fenxiao.css">
	<script src="themes/js/jquery.min.js"></script>
</head>
<body>
	<div id="wrap">
		<img src="themes/images/img-cll/fanhui.png" alt="" class="fanhui" onclick="fanhui()">
		<div id="header">
			<div class="logo">
				<img src="themes/images/img-cll/logo.png" alt="" class="logo">
			</div>
		</div>
		<div id="main">
			<p class="tit">分销系统</p>
			<ul class="ul_ipt clearfix">
				<li class="left">姓名</li>
				<li class="right"><input type="text" class='name'></li>
			</ul>
			<ul class="ul_ipt clearfix">
				<li class="left">手机号</li>
				<li class="right"><input type="text" class="tel"></li>
			</ul>
			<ul class="ul_ipt clearfix">
				<li class="left">设置密码</li>
				<li class="right"><input type="text" class="pass"></li>
			</ul>
			<ul class="ul_ipt clearfix">
				<li class="left">绑定银行卡</li>
				<li class="right"><input type="text" class="yinhangka"></li>
			</ul>
		</div>
		<div id="footer">
			<p class="add_btn" onclick="add()">添加分销员</p>
		</div>
	</div>	
</body>
<script>
	var doc_h=$(document).height();
	var header_h=$('#header').height();
	var footer_h=$('#footer').height();
	var main_h=doc_h-header_h-footer_h-40;
	$('#footer').css({'top':(doc_h-150)+'px'});
	$('#main').height(main_h);
	// 单击返回
	function fanhui(){
		window.history.go(-1);
	}
	$('.ul_ipt input').focus(function(){
		$(this).parent().css({'border-bottom-color':'#3fb4e2'});
	});
	$('.ul_ipt input').blur(function(){
		$(this).parent().css({'border-bottom-color':'#ccc'});
	});
	function add(){
		var name=$('.name').val();
		var tel=$('.tel').val();
		var pass=$('.pass').val();
		var yinhangka=$('.yinhangka').val();
		if(name.length==0){
			alert('姓名不能为空');
		}else if(!tel.match(/^1[3|5|7|8]\d{9}$/)){
			alert('手机号格式不正确');
		}else if(pass.length==0){
			alert('密码不能为空');
		}else{
			$.ajax({
			   type: "POST",
			   url: "index.php?action=zygw_index&do=add",
			   data:{'name':name,'pass':pass,'tel':tel,'yinhangka':yinhangka},
			   dataType:"json",
			   success: function(msg){
			    	if(msg.code==200){
						alert('添加成功');
			    		window.location='index.php?action=zygw_index&do=index';
			    	}else if(msg.code==201){
						alert('用户已存在！');
					}else{
						alert('操作失败');
					}
			   }
			});
		}
	}
</script>
</html><?php }} ?>