<?php /* Smarty version Smarty-3.1.12, created on 2017-02-18 17:21:52
         compiled from ".\tpl\search\shi.html" */ ?>
<?php /*%%SmartyHeaderCode:1358758a7f838585fe5-44778456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db739011fa17c20868b79360f7473440333e7dd2' => 
    array (
      0 => '.\\tpl\\search\\shi.html',
      1 => 1487409657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1358758a7f838585fe5-44778456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a7f8385b7960_32596578',
  'variables' => 
  array (
    'city' => 0,
    'crow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7f8385b7960_32596578')) {function content_58a7f8385b7960_32596578($_smarty_tpl) {?><option value="0">请选择</option>
<?php  $_smarty_tpl->tpl_vars['crow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['crow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['crow']->key => $_smarty_tpl->tpl_vars['crow']->value){
$_smarty_tpl->tpl_vars['crow']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['crow']->value['cityid'];?>
"><?php echo $_smarty_tpl->tpl_vars['crow']->value['city'];?>
</option>
<?php } ?><?php }} ?>