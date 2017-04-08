<?php /* Smarty version Smarty-3.1.12, created on 2016-11-20 14:35:36
         compiled from ".\tpl\zygw_xiaoxi\yykf.html" */ ?>
<?php /*%%SmartyHeaderCode:2578583144382824a3-30896624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '202fdfce18763f55f4f66a65325807e1dddcdf40' => 
    array (
      0 => '.\\tpl\\zygw_xiaoxi\\yykf.html',
      1 => 1479623648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2578583144382824a3-30896624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yykfa' => 0,
    'yya' => 0,
    'yykfb' => 0,
    'yyb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_583144382d2672_71242658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583144382d2672_71242658')) {function content_583144382d2672_71242658($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['yya'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['yya']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yykfa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['yya']->key => $_smarty_tpl->tpl_vars['yya']->value){
$_smarty_tpl->tpl_vars['yya']->_loop = true;
?>
<div class="xx_box_inner id1">
	<div class="xx_list xx_list_one">
		<div class="xx_list_tx"><img src="<?php echo $_smarty_tpl->tpl_vars['yya']->value['user']['touxiang'];?>
"></div>
		<div class="xx_list_info">
			<p>
				<span><?php echo $_smarty_tpl->tpl_vars['yya']->value['user']['nicheng'];?>
</span>
				<span class="pull_right time"><?php echo $_smarty_tpl->tpl_vars['yya']->value['addtime'];?>
</span>
			</p>
			<p>
				<span class="yy_time">预约时间：<?php echo $_smarty_tpl->tpl_vars['yya']->value['kanfangtime'];?>
</span>
			</p>
			<p class="blue_btn" onclick="jieshou_yuyue(<?php echo $_smarty_tpl->tpl_vars['yya']->value['id'];?>
,this)" tapmode='tap-active' data-user='<?php echo $_smarty_tpl->tpl_vars['yya']->value['user']['nicheng'];?>
'>接受预约</p>
		</div>
	</div>
	<p class="del_btn" onclick="jujue_yuyue(<?php echo $_smarty_tpl->tpl_vars['yya']->value['id'];?>
,this)" tapmode='tap-active' data-user='<?php echo $_smarty_tpl->tpl_vars['yya']->value['user']['nicheng'];?>
'>拒绝此单</p>
</div>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['yyb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['yyb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yykfb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['yyb']->key => $_smarty_tpl->tpl_vars['yyb']->value){
$_smarty_tpl->tpl_vars['yyb']->_loop = true;
?>
<div class="xx_list_one">
	<div class="xx_list_tx"><img src="<?php echo $_smarty_tpl->tpl_vars['yyb']->value['user']['touxiang'];?>
"></div>
	<div class="xx_list_info">
		<p>
			<span><?php echo $_smarty_tpl->tpl_vars['yyb']->value['user']['nicheng'];?>
</span>
			<span class="pull_right time"><?php echo $_smarty_tpl->tpl_vars['yyb']->value['addtime'];?>
</span>
		</p>
		<p>
			<span class="yy_time">预约时间：<?php echo $_smarty_tpl->tpl_vars['yyb']->value['kanfangtime'];?>
</span>
		</p>
		<p class="<?php if ($_smarty_tpl->tpl_vars['yyb']->value['status']==4){?>red_font<?php }else{ ?>green_font<?php }?>"><?php if ($_smarty_tpl->tpl_vars['yyb']->value['status']==4){?>已拒绝<?php }else{ ?>已接受<?php }?></p>
	</div>
</div>
<?php } ?>
<?php }} ?>