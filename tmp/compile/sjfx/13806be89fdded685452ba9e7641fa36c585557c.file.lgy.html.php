<?php /* Smarty version Smarty-3.1.12, created on 2017-02-18 09:43:46
         compiled from ".\tpl\sjfx\lgy.html" */ ?>
<?php /*%%SmartyHeaderCode:2936758a7a67c77a9b2-48040170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13806be89fdded685452ba9e7641fa36c585557c' => 
    array (
      0 => '.\\tpl\\sjfx\\lgy.html',
      1 => 1487382225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2936758a7a67c77a9b2-48040170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a7a67c79cf15_83772674',
  'variables' => 
  array (
    'daysale' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7a67c79cf15_83772674')) {function content_58a7a67c79cf15_83772674($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daysale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
元/个</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['xl'];?>
个</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['zj'];?>
元</td>
</tr>
<?php } ?><?php }} ?>