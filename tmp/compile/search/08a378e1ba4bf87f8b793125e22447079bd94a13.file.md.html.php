<?php /* Smarty version Smarty-3.1.12, created on 2017-02-18 15:31:07
         compiled from ".\tpl\search\md.html" */ ?>
<?php /*%%SmartyHeaderCode:1045158a7f83be8e3d8-91611272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a378e1ba4bf87f8b793125e22447079bd94a13' => 
    array (
      0 => '.\\tpl\\search\\md.html',
      1 => 1487403044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045158a7f83be8e3d8-91611272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'md' => 0,
    'mrow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a7f83beb8342_82943941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7f83beb8342_82943941')) {function content_58a7f83beb8342_82943941($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['mrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['md']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mrow']->key => $_smarty_tpl->tpl_vars['mrow']->value){
$_smarty_tpl->tpl_vars['mrow']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['mrow']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mrow']->value['name'];?>
</option>
<?php } ?><?php }} ?>