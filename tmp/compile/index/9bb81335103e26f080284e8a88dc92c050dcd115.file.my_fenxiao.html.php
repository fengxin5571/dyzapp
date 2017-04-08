<?php /* Smarty version Smarty-3.1.12, created on 2016-10-14 17:53:05
         compiled from ".\tpl\index\my_fenxiao.html" */ ?>
<?php /*%%SmartyHeaderCode:1552857ecc536c30941-59540138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bb81335103e26f080284e8a88dc92c050dcd115' => 
    array (
      0 => '.\\tpl\\index\\my_fenxiao.html',
      1 => 1476438518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1552857ecc536c30941-59540138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ecc536c622a1_89484128',
  'variables' => 
  array (
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecc536c622a1_89484128')) {function content_57ecc536c622a1_89484128($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
	<title>分销专员列表</title>
	<link rel="stylesheet" href="themes/css/public.css">
	<link rel="stylesheet" href="themes/css/fenxiao.css">
	<script src="themes/js/jquery.min.js"></script>
	<style>
		#footer{
			height:70px;
		}
		#main{
			width:100%;
		}
		.my_fx_table{
			overflow-y: auto;
		}
		.tit a{
			display:inline-block;
			padding:0 50px;
			color:blue;
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
			<div class="tk">
				<div class="tk_box">
					<img src="themes/images/img-cll/chahao.png" alt="" onclick="guanbi(this)">
					<span>新密码</span>
					<input type="text" class="password">
					<p onclick="queren()">确认</p>
				</div>
			</div>
			<p class="tit"><a href="index.php?action=zygw_index&do=index">我的分销</a>
			<a href="index.php?action=zygw_index&do=kh_index">我的客户</a></p>
			<div class="my_fx_tit">
				<ul class="my_fx_ul">
					<li class="li1">姓名</li>
					<li class="li2">手机号</li>
					<li class="li3">修改密码</li>
				</ul>
			</div>
			<div class="my_fx_table">
				
			</div>
			<div class="jiazai"><span>加载中.......</span></div>
		</div>
		<div id="footer">
			<a href='index.php?action=zygw_index&do=new'><p class="add_btn">添加分销员</p></a>
		</div>
	</div>	
</body>
<script>
	var doc_h=$(document).height();
	var header_h=$('#header').height();
	var footer_h=$('#footer').height();
	var main_h=doc_h-header_h-70-40-21;
	$('#footer').css({'top':(doc_h-70)+'px'});
	$('#main').height(main_h);
	// 点击修改密码按钮
	var uid=0;
	function xiugai(aa){
		uid=aa;
		$('.tk').show();
	}
	// 确认修改
	function queren(){
		var pass=$('.password').val();
		if(pass.length>0){
			$.ajax({
			   type: "POST",
			   url: "index.php?action=zygw_index&do=password",
			   data:{'pass':pass,'uid':uid},
			   dataType:"json",
			   success: function(msg){
			    	if(msg.code==200){
			    		$('.tk_box').hide();
			    		$('.password').val('');
						alert('修改成功');
			    	}else{
						alert('操作失败');
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
		$('.my_fx_table').load('index.php?action=zygw_index&do=index_page');
		var h=$(window).height();
		var hh=h-70-59-40-61-35-30;
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
                	   url: "index.php?action=zygw_index&do=index_page",
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