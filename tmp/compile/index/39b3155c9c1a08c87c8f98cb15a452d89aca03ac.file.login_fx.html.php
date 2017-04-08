<?php /* Smarty version Smarty-3.1.12, created on 2016-10-19 14:26:05
         compiled from ".\tpl\index\login_fx.html" */ ?>
<?php /*%%SmartyHeaderCode:1019157ece1e388f650-01308288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39b3155c9c1a08c87c8f98cb15a452d89aca03ac' => 
    array (
      0 => '.\\tpl\\index\\login_fx.html',
      1 => 1476858340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1019157ece1e388f650-01308288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ece1e38c89e0_30401676',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ece1e38c89e0_30401676')) {function content_57ece1e38c89e0_30401676($_smarty_tpl) {?> <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
	<title>分销专员登录</title>
	<link rel="stylesheet" href="themes/css/public.css">
	<link rel="stylesheet" href="themes/css/fenxiao.css">
	<script src="themes/js/jquery.min.js"></script>
</head>
<body>
	<div id="wrap">
		<div id="header">
			<div class="logo">
				<img src="themes/images/img-cll/logo.png" alt="" class="logo">
			</div>
		</div>
		<div id="main">
			<p class="tit">分销专员登录</p>
			<ul class="ul_ipt clearfix">
				<li class="left">手机号</li>
				<li class="right"><input type="text" class="tel"></li>
			</ul>
			<ul class="ul_ipt clearfix">
				<li class="left">密码</li>
				<li class="right"><input type="password" class="pass"></li>
			</ul>
		</div>
		<div id="footer">
			<p class="add_btn" onclick="denglu()">登录</p>
		</div>
	</div>	
</body>
<script>
	var doc_h=$(document).height();
	var header_h=$('#header').height();
	var footer_h=$('#footer').height();
	var main_h=doc_h-header_h-footer_h-40;
	$('#footer').css({'top':(doc_h-100)+'px'});
	$('#main').height(main_h);
	$('.ul_ipt input').focus(function(){
		$(this).parent().css({'border-bottom-color':'#3fb4e2'});
	});
	$('.ul_ipt input').blur(function(){
		$(this).parent().css({'border-bottom-color':'#ccc'});
	});
	function denglu(){
		var tel=$('.tel').val();
		var pass=$('.pass').val();
		$.ajax({
		   type: "POST",
		   url: "index.php?action=fx_index&do=loginok",
		   data:{'pass':pass,'tel':tel},
		   dataType:"json",
		   success: function(msg){
		    	if(msg.code==200){
		    		//$('input').val('');
		    		window.location='index.php?action=fx_index&do=index';
		    	}else{
		    		alert('手机号或密码不正确');
		    	}
		   }
		});
	}
</script>
</html><?php }} ?>