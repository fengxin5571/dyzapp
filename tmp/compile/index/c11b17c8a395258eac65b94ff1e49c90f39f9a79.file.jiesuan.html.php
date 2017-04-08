<?php /* Smarty version Smarty-3.1.12, created on 2016-09-30 16:24:55
         compiled from ".\tpl\index\jiesuan.html" */ ?>
<?php /*%%SmartyHeaderCode:2717857ecd63938ca32-38744534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c11b17c8a395258eac65b94ff1e49c90f39f9a79' => 
    array (
      0 => '.\\tpl\\index\\jiesuan.html',
      1 => 1475199318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2717857ecd63938ca32-38744534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ecd6393c5dc5_49548106',
  'variables' => 
  array (
    'sum' => 0,
    'sumcj' => 0,
    'sumwcj' => 0,
    'sumlq' => 0,
    'sumwlq' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecd6393c5dc5_49548106')) {function content_57ecd6393c5dc5_49548106($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
	<title>结算中心</title>
	<link rel="stylesheet" href="themes/css/public.css">
	<link rel="stylesheet" href="themes/css/fenxiao.css">
	<script src="themes/js/jquery.min.js"></script>
	<style>
		#main{
			width:100%;
		}
	</style>
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
			<p class="tit">结算中心</p>
			<ul class="yixiang_box">
				<li class="li1">总客户数：</li>
				<li><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
户</li>
				<li class="li1">成交客户数：</li>
				<li><?php echo $_smarty_tpl->tpl_vars['sumcj']->value;?>
人</li>
				<li class="li1">未成交客户数：</li>
				<li><?php echo $_smarty_tpl->tpl_vars['sumwcj']->value;?>
人</li>
				<li class="li1">已领取佣金总额：</li>
				<li><?php echo $_smarty_tpl->tpl_vars['sumlq']->value;?>
元</li>
				<li class="li1">未领取佣金总额：</li>
				<li><?php echo $_smarty_tpl->tpl_vars['sumwlq']->value;?>
元</li>
			</ul>
			<p class='zhu'>注：分销佣金每月10号前结算</p>
		</div>
	</div>	
</body>
<script>
	// 单击返回
	function fanhui(){
		window.history.go(-1);
	}
</script>
</html><?php }} ?>