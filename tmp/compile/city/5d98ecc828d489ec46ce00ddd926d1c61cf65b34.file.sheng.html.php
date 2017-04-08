<?php /* Smarty version Smarty-3.1.12, created on 2016-11-08 15:13:18
         compiled from ".\tpl\city\sheng.html" */ ?>
<?php /*%%SmartyHeaderCode:1407458216f5a2e0286-76418573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d98ecc828d489ec46ce00ddd926d1c61cf65b34' => 
    array (
      0 => '.\\tpl\\city\\sheng.html',
      1 => 1478588880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1407458216f5a2e0286-76418573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58216f5a3195f0_36553561',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'sheng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58216f5a3195f0_36553561')) {function content_58216f5a3195f0_36553561($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<li onclick="search_shi(this,<?php echo $_smarty_tpl->tpl_vars['row']->value['provinceid'];?>
,'<?php echo $_smarty_tpl->tpl_vars['row']->value['province'];?>
')" tapmode='tap-active' <?php if ($_smarty_tpl->tpl_vars['sheng']->value==$_smarty_tpl->tpl_vars['row']->value['province']){?>class='cur'<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['province'];?>
<i></i></li>
<?php } ?><?php }} ?>