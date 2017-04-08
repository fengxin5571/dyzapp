<?php /* Smarty version Smarty-3.1.12, created on 2017-01-18 10:30:06
         compiled from ".\tpl\bgft\fyxq_dy.html" */ ?>
<?php /*%%SmartyHeaderCode:18401587ed32ece80c4-80669478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2b9995afbf348597c37c37a8c8b7d90aa72f82' => 
    array (
      0 => '.\\tpl\\bgft\\fyxq_dy.html',
      1 => 1484706447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18401587ed32ece80c4-80669478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587ed32ed28e43_55442034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587ed32ed28e43_55442034')) {function content_587ed32ed28e43_55442034($_smarty_tpl) {?><option value="">选择单元</option>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</option>
<?php } ?><?php }} ?>