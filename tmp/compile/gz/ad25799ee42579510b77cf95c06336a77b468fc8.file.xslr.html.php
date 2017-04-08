<?php /* Smarty version Smarty-3.1.12, created on 2017-02-22 18:15:37
         compiled from ".\tpl\gz\xslr.html" */ ?>
<?php /*%%SmartyHeaderCode:845258ad3bdd3cbd51-67750650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad25799ee42579510b77cf95c06336a77b468fc8' => 
    array (
      0 => '.\\tpl\\gz\\xslr.html',
      1 => 1487758511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '845258ad3bdd3cbd51-67750650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58ad3bdd4013c1_16994377',
  'variables' => 
  array (
    'xslr' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad3bdd4013c1_16994377')) {function content_58ad3bdd4013c1_16994377($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xslr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<ul class="clearfix">
	<li class="cp_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</li>
	<li><i class="dj"><?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
</i>元</li>
	<li><i class="kc" id="a<?php echo $_smarty_tpl->tpl_vars['row']->value['kid'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['kucun'];?>
</i> <span onclick="kcjs(<?php echo $_smarty_tpl->tpl_vars['row']->value['kid'];?>
,this)">-</span></li>
</ul>
<?php } ?><?php }} ?>