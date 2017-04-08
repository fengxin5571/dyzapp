<?php /* Smarty version Smarty-3.1.12, created on 2017-01-17 13:59:24
         compiled from ".\tpl\bgft\bgft_qbhx.html" */ ?>
<?php /*%%SmartyHeaderCode:2241558295aeb7a5dd1-95479030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '374fd403627db850aa531a78f468968d16d447ca' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_qbhx.html',
      1 => 1484617583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2241558295aeb7a5dd1-95479030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58295aeb7db446_29383621',
  'variables' => 
  array (
    'hx' => 0,
    'hu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58295aeb7db446_29383621')) {function content_58295aeb7db446_29383621($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['hu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hx']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hu']->key => $_smarty_tpl->tpl_vars['hu']->value){
$_smarty_tpl->tpl_vars['hu']->_loop = true;
?>
<li class="qbhx" onclick="open_xuanfang(<?php echo $_smarty_tpl->tpl_vars['hu']->value['id'];?>
)" tapmode='tap-active'>
	<div class="qbhx_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['hu']->value['pic'];?>
">
	</div>
	<div style="flex: 1;-webkit-box-flex: 1;-webkit-flex: 1;">
		<p><?php echo $_smarty_tpl->tpl_vars['hu']->value['name'];?>
</p>
		<p>厅室 ：<?php echo $_smarty_tpl->tpl_vars['hu']->value['geju'];?>
</p>
		<p>面积 ：<?php echo $_smarty_tpl->tpl_vars['hu']->value['mianji'];?>
平方米</p>
	</div>
</li>
<?php } ?><?php }} ?>