<?php /* Smarty version Smarty-3.1.12, created on 2016-11-08 15:39:44
         compiled from ".\tpl\city\district.html" */ ?>
<?php /*%%SmartyHeaderCode:590158218140ea6753-17954941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56239968cbb21fa721f0a54778564751c398cbd0' => 
    array (
      0 => '.\\tpl\\city\\district.html',
      1 => 1478590722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '590158218140ea6753-17954941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'district' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58218140ee7506_99727873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58218140ee7506_99727873')) {function content_58218140ee7506_99727873($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<li onclick="search_qu('<?php echo $_smarty_tpl->tpl_vars['row']->value['area'];?>
')" tapmode='tap-active' <?php if ($_smarty_tpl->tpl_vars['district']->value==$_smarty_tpl->tpl_vars['row']->value['area']){?>class='cur'<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['area'];?>
<i></i></li>
<?php } ?><?php }} ?>