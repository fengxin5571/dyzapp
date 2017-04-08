<?php /* Smarty version Smarty-3.1.12, created on 2016-10-02 17:00:14
         compiled from ".\tpl\index\kehu_fx.html" */ ?>
<?php /*%%SmartyHeaderCode:813957ecd358e4cf76-87548021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3871639048764bd59a874b2d46f5922d213e9b56' => 
    array (
      0 => '.\\tpl\\index\\kehu_fx.html',
      1 => 1475226958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '813957ecd358e4cf76-87548021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ecd358e7e8f8_00991767',
  'variables' => 
  array (
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecd358e7e8f8_00991767')) {function content_57ecd358e7e8f8_00991767($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
	<title>客户列表</title>
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
			</div>
			<div class="jiazai"><span>加载中.......</span></div>
		</div>
		<div id="footer">
			<a href='index.php?action=fx_index&do=jszx'><p class="add_btn add_btn1">结算中心</p></a>
			<a href='index.php?action=fx_index&do=new'><p class="add_btn add_btn1">添加客户</p></a>
		</div>
	</div>	
</body>
<script>
	var page=1;
	var tot=<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
;
	$(document).ready(function() {	
		$('.my_kehu_table').load('index.php?action=fx_index&do=index_page');
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
                	   url: "index.php?action=fx_index&do=index_page",
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
</script>
</html><?php }} ?>