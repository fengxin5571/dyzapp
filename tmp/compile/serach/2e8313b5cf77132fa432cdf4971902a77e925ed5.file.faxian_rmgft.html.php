<?php /* Smarty version Smarty-3.1.12, created on 2016-11-19 09:45:21
         compiled from ".\tpl\serach\faxian_rmgft.html" */ ?>
<?php /*%%SmartyHeaderCode:144445825a3c8081d60-57319379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8313b5cf77132fa432cdf4971902a77e925ed5' => 
    array (
      0 => '.\\tpl\\serach\\faxian_rmgft.html',
      1 => 1479519832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144445825a3c8081d60-57319379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5825a3c80d9915_97778022',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825a3c80d9915_97778022')) {function content_5825a3c80d9915_97778022($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../../css/api.css" />
	<script type="text/javascript" src="../../script/api.js"></script>
	<script type="text/javascript" src="../../script/zepto.js"></script>
	<style>
		html,body{
		    height: 100%;
		}
		#wrap{
		    height: 100%;
		    display: -webkit-box;
		    display: -webkit-flex;
		    display: flex;
		    -webkit-box-orient: vertical;
		    -webkit-flex-flow: column;
		    flex-flow: column;
		}
		#main{
		    -webkit-box-flex: 1; 
		    -webkit-flex: 1;
		    flex: 1;
		}
		.rmgft{
			border-bottom:1px solid #ccc;
			padding:10px;
			display: -webkit-box;
			display: -webkit-flex;
			display: flex;
			-webkit-box-orient: horizontal;
		}
		.rmgft_img{
			width:100px;
			height:80px;
			margin-right:10px;
			background:#ccc;
		}
		.rmgft_sm{
			-webkit-box-flex: 1; 
			-webkit-flex: 1;
			flex: 1;
		}
		.rmgft_sm .p1{
			font-size:14px;
			color:#333;
			text-overflow:ellipsis;
			overflow: hidden;
			white-space:nowrap;
		}
		.rmgft_sm .p2{
			font-size:12px;
			color:#999;
		}
		.rmgft_sm .p3{
			font-size:12px;
			color:#333;
		}
		.rmgft_sm .p3>em{
			color:#dc0000;
		}
		.rmgft_r{
			width:70px;
			font-size:12px;
			color:#999;
			text-align:right;
			text-overflow:ellipsis;
			overflow: hidden;
			white-space:nowrap;
		}
	</style>
</head>
<body>
	<div id="wrap">
		<div id="main">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<div class="rmgft" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',1,'<?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
')" tapmode='tap-active'>
				<div class="rmgft_img">
					<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
				</div>
				<div class="rmgft_sm">
					<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan'];?>
购房团</p>
					<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
					<?php if ($_smarty_tpl->tpl_vars['row']->value['jiage']!=''){?>
					<p class="p3">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage'];?>
</em>元</p>
					<?php }?>
				</div>
				<div class="rmgft_r"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuanyuan'];?>
人参团</div>
			</div>
		<?php } ?>	
		</div>
	</div>
</body>
<script>
	function open_gft(id){
		api.openWin({
		    name:'gft_xq',
		    url:'',
		    bounces:false,
		    pageParam:{id:id},
		    rect:{x:0,y:0, w:'auto',h:'auto'}
		});
	}
</script>
</html><?php }} ?>