<?php /* Smarty version Smarty-3.1.12, created on 2016-11-22 09:28:21
         compiled from ".\tpl\zygw\mingxi.html" */ ?>
<?php /*%%SmartyHeaderCode:11892583296f162a358-11980135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65ac11c3f7af5888142b6938dc43f0b94bec4c3a' => 
    array (
      0 => '.\\tpl\\zygw\\mingxi.html',
      1 => 1479716396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11892583296f162a358-11980135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_583296f162e051_15659840',
  'variables' => 
  array (
    'type' => 0,
    'mingxi' => 0,
    'xi' => 0,
    'da' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583296f162e051_15659840')) {function content_583296f162e051_15659840($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['type']->value==0){?>
<?php  $_smarty_tpl->tpl_vars['xi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mingxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xi']->key => $_smarty_tpl->tpl_vars['xi']->value){
$_smarty_tpl->tpl_vars['xi']->_loop = true;
?>
<li class="jymx_one">
	<p style="color:#333333"><?php if ($_smarty_tpl->tpl_vars['xi']->value['type']==2){?>打赏<?php }elseif($_smarty_tpl->tpl_vars['xi']->value['type']==4){?>提现<?php }?></p>
	<p style="color:#999999;font-size: 12px;float:right"><?php echo $_smarty_tpl->tpl_vars['xi']->value['addtime'];?>
</p>
	<p style="clear:both"><?php if ($_smarty_tpl->tpl_vars['xi']->value['status']==1){?>存入：<?php }else{ ?>支出：<?php }?><?php echo $_smarty_tpl->tpl_vars['xi']->value['lingqian'];?>
元</p>
</li>
<?php } ?>

<?php }elseif($_smarty_tpl->tpl_vars['type']->value==1){?>
<?php  $_smarty_tpl->tpl_vars['da'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['da']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mingxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['da']->key => $_smarty_tpl->tpl_vars['da']->value){
$_smarty_tpl->tpl_vars['da']->_loop = true;
?>
<li class="jymx_one">
	<p style="color:#333333">被打赏</p>
	<p style="color:#999999;font-size: 12px;float:right"><?php echo $_smarty_tpl->tpl_vars['da']->value['addtime'];?>
</p>
	<p style="clear:both"><?php if ($_smarty_tpl->tpl_vars['da']->value['status']==1){?>存入：<?php }?><?php echo $_smarty_tpl->tpl_vars['da']->value['lingqian'];?>
元</p>
</li>
<?php } ?>

<?php }elseif($_smarty_tpl->tpl_vars['type']->value==2){?>
<?php  $_smarty_tpl->tpl_vars['ti'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ti']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mingxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ti']->key => $_smarty_tpl->tpl_vars['ti']->value){
$_smarty_tpl->tpl_vars['ti']->_loop = true;
?>
<li class="jymx_one">
	<p style="color:#333333">提现</p>
	<p style="color:#999999;font-size: 12px;float:right"><?php echo $_smarty_tpl->tpl_vars['ti']->value['addtime'];?>
</p>
	<p style="clear:both">支出：<?php echo $_smarty_tpl->tpl_vars['ti']->value['lingqian'];?>
元</p>
</li>
<?php } ?>
<?php }?><?php }} ?>