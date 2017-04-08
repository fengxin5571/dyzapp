<?php /* Smarty version Smarty-3.1.12, created on 2016-11-17 09:57:12
         compiled from ".\tpl\grzx\zhuti_whfd_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:29004582c3ac8f01c70-98470948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f02c4775e5f7ac3dbeca876f92c0b5296ad1d44' => 
    array (
      0 => '.\\tpl\\grzx\\zhuti_whfd_pl.html',
      1 => 1479347820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29004582c3ac8f01c70-98470948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c3ac9008003_90749999',
  'variables' => 
  array (
    'huifu' => 0,
    'hui' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c3ac9008003_90749999')) {function content_582c3ac9008003_90749999($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['hui'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hui']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['huifu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hui']->key => $_smarty_tpl->tpl_vars['hui']->value){
$_smarty_tpl->tpl_vars['hui']->_loop = true;
?>
<li class="jdal_one" uid='<?php echo $_smarty_tpl->tpl_vars['hui']->value['id'];?>
'>
	<input type="checkbox">
	<div>
		<p class="jdal_tit"><?php echo $_smarty_tpl->tpl_vars['hui']->value['neirong'];?>
</p>
		<p class="jdal_nr">回复的主题：<?php echo $_smarty_tpl->tpl_vars['hui']->value['zhuti']['biaoti'];?>
</p>
	</div>   
   <p class="jdal_time"><?php echo $_smarty_tpl->tpl_vars['hui']->value['addtime'];?>
</p>
</li>
<?php } ?><?php }} ?>