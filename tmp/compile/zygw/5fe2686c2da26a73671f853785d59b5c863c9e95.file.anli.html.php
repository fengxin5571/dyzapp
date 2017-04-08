<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 11:21:07
         compiled from ".\tpl\zygw\anli.html" */ ?>
<?php /*%%SmartyHeaderCode:2481358326823388f12-80840244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fe2686c2da26a73671f853785d59b5c863c9e95' => 
    array (
      0 => '.\\tpl\\zygw\\anli.html',
      1 => 1479698454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2481358326823388f12-80840244',
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
  'unifunc' => 'content_583268233be586_19166774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583268233be586_19166774')) {function content_583268233be586_19166774($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<li class="jdal_one">
	<div class="one_left">
		<p class="jdal_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoti'];?>
</p>
		<p class="jdal_nr"><?php echo $_smarty_tpl->tpl_vars['row']->value['neirong'];?>
</p>
		<p class="jdal_time"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</p>
		<p style="float:right;margin-top:10px;" onclick="bianji(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" tapmode='tap-active'><img src="../../image/img-qm/bianji.png" alt="" class="bianji_img"></p>
	</div>
	<div class="one_right" onclick="shanchu(this,<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" tapmode='tap-active'>删除</div>
</li>
<?php } ?><?php }} ?>