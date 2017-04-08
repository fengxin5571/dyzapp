<?php /* Smarty version Smarty-3.1.12, created on 2016-10-14 15:28:39
         compiled from ".\tpl\index\kehu_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2391057ecd2fc35a840-46781612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fbce016c5af0d2b92941a1f840d098a30491e1a' => 
    array (
      0 => '.\\tpl\\index\\kehu_list.html',
      1 => 1476430098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2391057ecd2fc35a840-46781612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ecd2fc3847b3_74909931',
  'variables' => 
  array (
    'total' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecd2fc3847b3_74909931')) {function content_57ecd2fc3847b3_74909931($_smarty_tpl) {?><!DOCTYPE html>
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
		.my_fx_table{
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
			<div class="tk">
				<div class="tk_box">
					<img src="themes/images/img-cll/chahao.png" alt="" onclick="guanbi(this)">
					<span>输入佣金金额</span>
					<input type="number" class="jine">
					<p onclick="queren()">确认</p>
				</div>
			</div>
			<p class="tit">客户列表</p>
			<div class="my_fx_tit">
				<ul class="my_fx_ul">
					<li class="li1">姓名</li>
					<li class="li2">手机号</li>
					<li class="li3">意向详情</li>
				</ul>
			</div>
			<div class="my_fx_table my_fx_table_kehu">
			</div>
			<div class="jiazai"><span>加载中.......</span></div>
		</div>
	</div>	
</body>
<script>
	// 单击返回
	function fanhui(){
		window.history.go(-1);
	}
	var id=0;
	// 单击成交
	function chengjiao(aa){
		id=aa;
		$('.tk').show();
	}
	// 确认
	function queren(){
		var jine=$('.jine').val();
		if(jine.length>0){
			$.ajax({
			   type: "POST",
			   url: "index.php?action=zygw_index&do=kh_chengjiao",
			   data:{'jine':jine,'id':id},
			   dataType:"json",
			   success: function(msg){
			    	if(msg.code==200){
			    		$('.tk_box').hide();
			    		$('.jine').val('');
						alert('操作成功');
			    	}else{
						alert('操作失败，请重试');
					}
			   }
			});
		}
	}
	// 关闭弹窗
	function guanbi(obj){
		$(obj).parent().parent().hide();
	}
	var page=1;
	var tot=<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
;
	$(document).ready(function() {
		$('.my_fx_table').load('index.php?action=zygw_index&do=kh_list_page&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
		var h=$(window).height();
		hh=h-59-40-61-35-30;
		$('#wrap').height(h);
		$('.my_fx_table').css({'height':hh+'px'});
        $('.my_fx_table').scroll(function(){
            var size=$('.my_fx_table ul').size();
            var ht=$('.my_fx_table ul').outerHeight();
            if($(this).scrollTop()>=size*ht-hh){
                $('.jiazai').show();
                if(page>=tot){
                	$('.jiazai').html('暂无数据');
                }else{
                	$.ajax({
                	   type: "POST",
                	   url: "index.php?action=zygw_index&do=kh_list_page",
                	   data:'page='+page,
                	   dataType:"html",
                	   success: function(msg){
                	    	$('.jiazai').hide();
                	    	$('.my_fx_table').append(msg);
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