<?php /* Smarty version Smarty-3.1.12, created on 2016-11-17 19:14:51
         compiled from ".\tpl\serach\faxian_rmzt.html" */ ?>
<?php /*%%SmartyHeaderCode:16344582532d5313bf8-75139517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42c51bf1c269644643d9487e255ec9f8e3a6b690' => 
    array (
      0 => '.\\tpl\\serach\\faxian_rmzt.html',
      1 => 1479381288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16344582532d5313bf8-75139517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582532d533db63_63587088',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582532d533db63_63587088')) {function content_582532d533db63_63587088($_smarty_tpl) {?><!DOCTYPE html>
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
		#wrap{
			background:#f0f0f0;
		}
		.sousuo_zt{
			background:#fff;
			margin-bottom:10px;
			padding:10px 10px 0 10px;
			box-sizing:border-box;
		}
		.sousuo_zt p{
			line-height:20px;
		}
		.sousuo_zt .tit{
			font-size:14px;
			overflow:hidden;
			text-overflow:ellipsis;
			white-space:nowrap;
		}
		.sousuo_zt .txt{
			color:#999;
			font-size:12px;
			display:-webkit-box !important;
			overflow:hidden;
			text-overflow:ellipsis;
			word-break:break-all;
			-webkit-box-orient:vertical;
			-webkit-line-clamp:2;
		}
		.sousuo_zt_img{
			width:100%;overflow-x:scroll;overflow-y:hidden;
		}
		.sousuo_zt_img img{
			margin-right:8px;
			margin-top:10px;
			float: left;
		}
		.sousuo_zt_img img.last{
			margin-right:0;
		}
		.sousuo_zt_user{
			height:30px;
			margin-top:10px;
			font-size:12px;
			color:#999;
			border-top:1px solid #f0f0f0;
		}
		.sousuo_zt_user img{
			width:20px;
			height:20px;
			border-radius:50px;
			vertical-align:middle;
		}
		.sousuo_zt_user span{
			line-height:30px;
		}
		.pull_right{
			float: right;
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
			<div class="sousuo_zt">
				<p class="tit" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoti'];?>
</p>
				<p class="txt"><?php echo $_smarty_tpl->tpl_vars['row']->value['daodu'];?>
</p>
				<?php if ($_smarty_tpl->tpl_vars['row']->value['tupian']!=''){?>
					<div class="sousuo_zt_img">
						<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['tupian']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['aaaa']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['aaaa']['index']++;
?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['aaaa']['index']<3){?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="">
							<?php }?>
						<?php } ?>
					</div>
				<?php }?>
				

				<p class="sousuo_zt_user">
					<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['touxiang'];?>
" alt="" onclick="open_grzy(1)" tapmode='tap-active'>
					<span><?php echo $_smarty_tpl->tpl_vars['row']->value['nicheng'];?>
</span>
					<span><?php echo $_smarty_tpl->tpl_vars['row']->value['shijian'];?>
</span>
					<span class="pull_right">评论<?php echo $_smarty_tpl->tpl_vars['row']->value['pinlun'];?>
</span>
				</p>
			</div>
			<?php } ?>
		</div>
	</div>
</body>
<script>
	var zt_w=$('.sousuo_zt_img').width();
	var ztimg_w=(zt_w-16)/3;
	$('.sousuo_zt_img>img').css({'width':ztimg_w});

	function open_ztxq(id){
		api.openWin({
		    name:'faxian_ztxq',
		    url:'faxian_ztxq.html',
		    pageParam:{id:id},
		    bounces:false,
		    reload:true,
		    rect:{x:0,y:0, w:'auto',h:'auto'}
		});
	}
	function open_grzy(id){
		api.openWin({
		    name:'grzy',
		    url:'',
		    bounces:false,
		    pageParam:{id:id},
		    rect:{x:0,y:0, w:'auto',h:'auto'}
		});
	}
	apiready = function(){
	    var zt_w=$('.sousuo_zt_img').width();
	    var ztimg_w=(zt_w-16)/3;
	    $('.sousuo_zt_img>img').css({'width':ztimg_w});
	}
</script>
</html><?php }} ?>