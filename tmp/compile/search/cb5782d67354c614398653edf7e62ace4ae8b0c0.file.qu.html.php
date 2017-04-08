<?php /* Smarty version Smarty-3.1.12, created on 2017-02-18 17:14:12
         compiled from ".\tpl\search\qu.html" */ ?>
<?php /*%%SmartyHeaderCode:2259658a810193a8927-13752026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb5782d67354c614398653edf7e62ace4ae8b0c0' => 
    array (
      0 => '.\\tpl\\search\\qu.html',
      1 => 1487409248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2259658a810193a8927-13752026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a810193d6585_24993320',
  'variables' => 
  array (
    'qu' => 0,
    'mrow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a810193d6585_24993320')) {function content_58a810193d6585_24993320($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['mrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['qu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mrow']->key => $_smarty_tpl->tpl_vars['mrow']->value){
$_smarty_tpl->tpl_vars['mrow']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['mrow']->value['areaid'];?>
"><?php echo $_smarty_tpl->tpl_vars['mrow']->value['area'];?>
</option>
<?php } ?><?php }} ?>