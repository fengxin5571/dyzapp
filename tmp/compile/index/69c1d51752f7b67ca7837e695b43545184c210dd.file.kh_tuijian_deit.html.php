<?php /* Smarty version Smarty-3.1.12, created on 2016-10-20 19:18:29
         compiled from ".\tpl\index\kh_tuijian_deit.html" */ ?>
<?php /*%%SmartyHeaderCode:32403580499df4b9df4-60250466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69c1d51752f7b67ca7837e695b43545184c210dd' => 
    array (
      0 => '.\\tpl\\index\\kh_tuijian_deit.html',
      1 => 1476845536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32403580499df4b9df4-60250466',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_580499df520dc1_52652259',
  'variables' => 
  array (
    'c' => 0,
    'row' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580499df520dc1_52652259')) {function content_580499df520dc1_52652259($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
	<title>添加客户</title>
	<link rel="stylesheet" href="themes/css/public.css">
	<link rel="stylesheet" href="themes/css/fenxiao.css">
	<script src="themes/js/jquery.min.js"></script>
	<style>
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
			<p class="tit">分销系统</p>
			<ul class="ul_ipt clearfix">
				<li class="left">姓名</li>
				<li class="right"><input type="text" class="name" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
"></li>
			</ul>
			<ul class="ul_ipt clearfix">
				<li class="left">手机号</li>
				<li class="right"><input type="text" class="tel" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['tel'];?>
"></li>
			</ul>
			<ul class="ul_ipt clearfix">
				<li class="left">性别</li>
				<li class="right sex_ipt">
					<label><input type="radio" name='sex' value='男' <?php if ($_smarty_tpl->tpl_vars['c']->value['sex']==1){?>checked<?php }?>>男</label>
					<label><input type="radio" name='sex' value='女' <?php if ($_smarty_tpl->tpl_vars['c']->value['sex']==2){?>checked<?php }?>>女</label>
				</li>
			</ul>
			<ul class="ul_ipt clearfix">
				<li class="left">购买意向</li>
				<li class="right gmyx_select">
					<div class="select_box clearfix">
						<span>用户类别</span>
						<select name="leibie" style='float:right;width:140px;'>
							<option value="1" <?php if ($_smarty_tpl->tpl_vars['c']->value['leibie']==1){?>selected<?php }?>>自然上客</option>
							<option value="2" <?php if ($_smarty_tpl->tpl_vars['c']->value['leibie']==2){?>selected<?php }?>>外拓</option>
						</select>
					</div>
					<div class="select_box clearfix">
						<span>楼盘名</span>
						<select name="mingc" style='float:right;width:140px;'>
							<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value['loupan']==$_smarty_tpl->tpl_vars['a']->value['name']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</li>
			</ul>
		</div>
		<div id="footer">
			<p class="add_btn" onclick="add_kehu()">添加客户</p>
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
	$('.ul_ipt input').focus(function(){
		$(this).parent().css({'border-bottom-color':'#3fb4e2'});
	});
	$('.ul_ipt input').blur(function(){
		$(this).parent().css({'border-bottom-color':'#ccc'});
	});
	$('select').focus(function(){
		$(this).children('option').css({'outline-color':'#ccc'});
	});
	function add_kehu(){
		var name=$('.name').val();
		var tel=$('.tel').val();
		var sex=$('input[name=sex]').attr('checked')=='checked'?1:2;
		var mingc=$('select[name=mingc] option:selected').val();
		var leibie=$('select[name=leibie] option:selected').val();
		if(name.length==0){
			alert('姓名不能为空');
		}else if(!tel.match(/^1[3|5|7|8]\d{9}$/)){
			alert('手机号格式不正确');
		}else{
			$.ajax({
			   type: "POST",
			   url: "index.php?action=zygw_index&do=kh_update$id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
",
			   data:{'name':name,'sex':sex,'tel':tel,'mingc':mingc,'leibie':leibie},
			   dataType:"json",
			   success: function(msg){
					//alert(msg.code);
			    	if(msg.code==200){
			    		window.location='index.php?action=zygw_index&do=kh_index';
			    	}else if(msg.code==201){
						alert('被修改手机号已于'+msg.time+'被添加！');
					}else{
						alert('操作失败');
					}
			   }
			});
		}	
	}
</script>
</html><?php }} ?>