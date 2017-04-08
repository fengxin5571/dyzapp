<?php /* Smarty version Smarty-3.1.12, created on 2016-11-20 15:21:29
         compiled from ".\tpl\zygw_xiaoxi\paidan.html" */ ?>
<?php /*%%SmartyHeaderCode:1841658314dbea75764-53133854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21bb5372bc7a3a8eefe330eebaef428219010bb6' => 
    array (
      0 => '.\\tpl\\zygw_xiaoxi\\paidan.html',
      1 => 1479626324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1841658314dbea75764-53133854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58314dbea93fb9_00449258',
  'variables' => 
  array (
    'xtpda' => 0,
    'xta' => 0,
    'xtpdb' => 0,
    'xtb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58314dbea93fb9_00449258')) {function content_58314dbea93fb9_00449258($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['xta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xtpda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xta']->key => $_smarty_tpl->tpl_vars['xta']->value){
$_smarty_tpl->tpl_vars['xta']->_loop = true;
?>
<div class="xx_box_inner id1">
	<div class="xx_list_one xx_list">
		<div class="xx_list_tx"><img src="<?php echo $_smarty_tpl->tpl_vars['xta']->value['user']['touxiang'];?>
"></div>
		<div class="xx_list_info">
			<p><span><?php echo $_smarty_tpl->tpl_vars['xta']->value['user']['nicheng'];?>
</span><span class="blue_btn" onclick="jieshou(<?php echo $_smarty_tpl->tpl_vars['xta']->value['id'];?>
,this)" tapmode='tap-active' data-title='<?php echo $_smarty_tpl->tpl_vars['xta']->value['user']['nicheng'];?>
'>接受</span></p>
			<p class="time"><?php echo $_smarty_tpl->tpl_vars['xta']->value['addtime'];?>
</p>
		</div>
	</div>
	<p class="del_btn" onclick="jujue(<?php echo $_smarty_tpl->tpl_vars['xta']->value['id'];?>
,this)" tapmode='tap-active' data-title='<?php echo $_smarty_tpl->tpl_vars['xta']->value['user']['nicheng'];?>
'>拒绝此单</p>
</div>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['xtb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xtpdb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtb']->key => $_smarty_tpl->tpl_vars['xtb']->value){
$_smarty_tpl->tpl_vars['xtb']->_loop = true;
?>
<div class="xx_list_one">
	<div class="xx_list_tx"><img src="<?php echo $_smarty_tpl->tpl_vars['xtb']->value['user']['touxiang'];?>
"></div>
	<div class="xx_list_info">
		<p><span><?php echo $_smarty_tpl->tpl_vars['xtb']->value['user']['nicheng'];?>
</span><span class="<?php if ($_smarty_tpl->tpl_vars['xtb']->value['status']==3){?>red_font<?php }else{ ?>green_font<?php }?>"><?php if ($_smarty_tpl->tpl_vars['xtb']->value['status']==3){?>已拒绝<?php }else{ ?>已联系<?php }?></span></p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xtb']->value['addtime'];?>
</p>
	</div>
</div>
<?php } ?>
<?php }} ?>