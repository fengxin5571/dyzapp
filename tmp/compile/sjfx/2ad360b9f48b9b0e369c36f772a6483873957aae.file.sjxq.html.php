<?php /* Smarty version Smarty-3.1.12, created on 2017-02-18 14:09:26
         compiled from ".\tpl\sjfx\sjxq.html" */ ?>
<?php /*%%SmartyHeaderCode:1367758a7a817c24867-64573215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ad360b9f48b9b0e369c36f772a6483873957aae' => 
    array (
      0 => '.\\tpl\\sjfx\\sjxq.html',
      1 => 1487398125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1367758a7a817c24867-64573215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a7a817c524c6_01692292',
  'variables' => 
  array (
    'total' => 0,
    'sale' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7a817c524c6_01692292')) {function content_58a7a817c524c6_01692292($_smarty_tpl) {?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="sjxq_total">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<ul class="xs_box clearfix">
	<li><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</li>
	<li><?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
元/个</li>
	<li><?php echo $_smarty_tpl->tpl_vars['row']->value['xl'];?>
个</li>
	<li><?php echo $_smarty_tpl->tpl_vars['row']->value['zj'];?>
元</li>
</ul>
<?php } ?><?php }} ?>