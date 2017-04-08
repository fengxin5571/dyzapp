<?php /* Smarty version Smarty-3.1.12, created on 2016-09-29 16:38:35
         compiled from ".\tpl\index\kehu_list1.html" */ ?>
<?php /*%%SmartyHeaderCode:1210657ecd30b159c31-21588903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a7ba8c11678f4813cc9a80c02f1c250322ddbfb' => 
    array (
      0 => '.\\tpl\\index\\kehu_list1.html',
      1 => 1475126708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1210657ecd30b159c31-21588903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ecd30b192fc5_54210346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecd30b192fc5_54210346')) {function content_57ecd30b192fc5_54210346($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
	<title>Document</title>
	<link rel="stylesheet" href="themes/css/public.css">
	<link rel="stylesheet" href="themes/css/fenxiao.css">
	<script src="themes/js/jquery.min.js"></script>
	<style>
		#main{
			width:100%;
		}
		#footer{
			height:70px;
		}
		.my_kehu_table{
			overflow-y: auto;
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
			<p class="tit">客户列表</p>
			<div class="my_kehu_tit">
				<ul class="my_kehu_ul">
					<li class="li1">姓名</li>
					<li class="li2">手机号</li>
					<li class="li3">性别</li>
					<li class="li4">是否成交</li>
				</ul>
			</div>
			<div class="my_kehu_table">
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">未成交</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
				<ul class="tr2 clearfix">
					<li class="td1">张三</li>
					<li class="td2">15200000000</li>
					<li class="td3">男</li>
					<li class="td4">3000元</li>
				</ul>
			</div>
			<div class="jiazai"><span>加载中.......</span></div>
		</div>
		<div id="footer">
			<p class="add_btn">结算中心</p>
		</div>
	</div>	
</body>
<script>
	var page=0;
	var tot=10;
	$(document).ready(function() {		
		var h=$(window).height();
		hh=h-59-70-40-61-35-30;
		$('#wrap').height(h);
		$('.my_kehu_table').css({'height':hh+'px'});
        $('.my_kehu_table').scroll(function(){
            var size=$('.tr2').size();
            var ht=$('.tr2').outerHeight();
            if($(this).scrollTop()>=size*ht-hh){
                $('.jiazai').show();
                if(page>=tot){
                	$('.jiazai').html('暂无数据');
                }else{
                	$.ajax({
                	   type: "POST",
                	   url: "aa.txt",
                	   data:'page='+page,
                	   dataType:"html",
                	   success: function(msg){
                	    	$('.jiazai').hide();
                	    	$('.my_kehu_table').append(msg);
                	    	page++;
                	   }
                	});
                }
            }else{
            	$('.jiazai').hide();
            }
        });
	});
	// 单击返回
	function fanhui(){
		window.history.go(-1);
	}
</script>
</html><?php }} ?>