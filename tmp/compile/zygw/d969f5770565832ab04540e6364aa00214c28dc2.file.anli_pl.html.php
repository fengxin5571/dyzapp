<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 11:24:46
         compiled from ".\tpl\zygw\anli_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:32353583268fed23ea7-99778013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd969f5770565832ab04540e6364aa00214c28dc2' => 
    array (
      0 => '.\\tpl\\zygw\\anli_pl.html',
      1 => 1479698672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32353583268fed23ea7-99778013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_583268fed59517_69890956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583268fed59517_69890956')) {function content_583268fed59517_69890956($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<li class="jdal_one" uid='<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>
	<input type="checkbox">
	<div style="width:80%;padding-left:30px;box-sizing:border-box;border-bottom:solid 1px #f2f2f2; ">
	   <p class="jdal_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoti'];?>
</p>
	   <p class="jdal_nr"><?php echo $_smarty_tpl->tpl_vars['row']->value['neirong'];?>
</p>
	</div>   
   <p class="jdal_time" style="margin-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</p>
</li>
<?php } ?>
<?php }} ?>