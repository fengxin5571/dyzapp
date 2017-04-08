<?php /* Smarty version Smarty-3.1.12, created on 2016-11-14 15:09:46
         compiled from ".\tpl\bgft\bgft_chaxun.html" */ ?>
<?php /*%%SmartyHeaderCode:83485829633a2cb2c8-31397168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df01ef8e7e56b4a9036b3ed8b11157d6fa34667' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_chaxun.html',
      1 => 1479107326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83485829633a2cb2c8-31397168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fy' => 0,
    'fyy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5829633a31f173_49660340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829633a31f173_49660340')) {function content_5829633a31f173_49660340($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['fyy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fyy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fyy']->key => $_smarty_tpl->tpl_vars['fyy']->value){
$_smarty_tpl->tpl_vars['fyy']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['fyy']->value['status']==0){?>
	<span class="org" onclick="hxxq(<?php echo $_smarty_tpl->tpl_vars['fyy']->value['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['fyy']->value['name'];?>
</span>
	<?php }elseif($_smarty_tpl->tpl_vars['fyy']->value['status']==2){?>
	<span class="gray"><?php echo $_smarty_tpl->tpl_vars['fyy']->value['name'];?>
</span>
	<?php }else{ ?>
	<?php }?>
<?php } ?><?php }} ?>