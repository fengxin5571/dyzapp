<?php /* Smarty version Smarty-3.1.12, created on 2016-10-14 15:47:46
         compiled from ".\tpl\index\yixiang.html" */ ?>
<?php /*%%SmartyHeaderCode:3116057ecd7539a3395-35749787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238b7eee3cd5d6277b21578fdd803462dff2cc3b' => 
    array (
      0 => '.\\tpl\\index\\yixiang.html',
      1 => 1475551169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3116057ecd7539a3395-35749787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ecd7539d4d00_77435748',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecd7539d4d00_77435748')) {function content_57ecd7539d4d00_77435748($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
	<title>意向详情</title>
	<link rel="stylesheet" href="themes/css/public.css">
	<link rel="stylesheet" href="themes/css/fenxiao.css">
	<script src="themes/js/jquery.min.js"></script>
	<style>
		#main{
			width:100%;
		}
		#footer{
			height:50px;
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
			<p class="tit">意向详情</p>
			<ul class="yixiang_box">
				<li class="li1">姓名：</li>
				<li><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</li>
				<li class="li1">电话：</li>
				<li><?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
</li>
				<li class="li1">楼盘：</li>
				<li><?php echo $_smarty_tpl->tpl_vars['row']->value['loupan'];?>
</li>
				<li><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage'];?>
</li>
				<li class="li1">备注：</li>
				<li class="last"><textarea name="" id="beizhu" cols="30" rows="10" placeholder="请填写备注信息"><?php echo $_smarty_tpl->tpl_vars['row']->value['beizhu'];?>
</textarea></li>
			</ul>
		</div>
		<div id="footer">
			<p class="add_btn" onclick="tijiao()">提交</p>
		</div>
	</div>	
</body>
<script>
	var doc_h=$(document).height();
	var header_h=$('#header').height();
	var main_h=doc_h-header_h-50-40-21;
	$('#footer').css({'top':(doc_h-50)+'px'});
	$('#main').height(main_h);
	// 单击返回
	function fanhui(){
		window.history.go(-1);
	}
	function tijiao(){
		var beizhu=$('#beizhu').val();
		if(beizhu.length>0){
			$.ajax({
			   type: "POST",
			   url: "index.php?action=zygw_index&do=beizhu&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
",
			   data:{'beizhu':beizhu},
			   dataType:"json",
			   success: function(msg){
			    	if(msg.code==200){
			    		alert('备注成功');
			    	}else{
			    		alert('备注失败');
			    	}
			   }
			});
		}
	}
</script>
</html><?php }} ?>