<?php /* Smarty version Smarty-3.1.12, created on 2016-11-08 15:39:02
         compiled from ".\tpl\city\city.html" */ ?>
<?php /*%%SmartyHeaderCode:22837582176d9576028-77530262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32b94a43d02db8b7514ea05b31548f3006a9da0f' => 
    array (
      0 => '.\\tpl\\city\\city.html',
      1 => 1478590066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22837582176d9576028-77530262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582176d95b6dc8_45405372',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'city' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582176d95b6dc8_45405372')) {function content_582176d95b6dc8_45405372($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<li onclick="search_qu(this,<?php echo $_smarty_tpl->tpl_vars['row']->value['cityid'];?>
,'<?php echo $_smarty_tpl->tpl_vars['row']->value['city'];?>
')" tapmode='tap-active' <?php if ($_smarty_tpl->tpl_vars['city']->value==$_smarty_tpl->tpl_vars['row']->value['city']){?>class='cur'<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['city'];?>
<i></i></li>
<?php } ?><?php }} ?>