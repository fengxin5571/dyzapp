<?php /* Smarty version Smarty-3.1.12, created on 2017-01-17 18:06:11
         compiled from ".\tpl\cgft\zan_list.html" */ ?>
<?php /*%%SmartyHeaderCode:173155879f6d8ed3987-88970984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea3ecf13896435253af02d3802083b67017aae5' => 
    array (
      0 => '.\\tpl\\cgft\\zan_list.html',
      1 => 1484647555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173155879f6d8ed3987-88970984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5879f6d8f32f76_25547423',
  'variables' => 
  array (
    'list' => 0,
    'z' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5879f6d8f32f76_25547423')) {function content_5879f6d8f32f76_25547423($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['list']->value)>0){?>
<!-- <span class="who_zan"> -->
	<?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['yha']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['yha']['index']++;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['yha']['index']<9){?>
			<i style="color:#ff0000;font-size:10px;"><?php echo $_smarty_tpl->tpl_vars['z']->value['name'];?>
</i>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['yha']['index']>8||$_smarty_tpl->getVariable('smarty')->value['foreach']['yha']['index']==count($_smarty_tpl->tpl_vars['list']->value)-1){?>
				等
			<?php }else{ ?>
				、
			<?php }?>
		<?php }?>
	<?php } ?>
	<i style="color:#ff0000;font-size:10px;"><?php echo count($_smarty_tpl->tpl_vars['list']->value);?>
人</i>觉得很赞
<!-- </span> -->
<?php }?><?php }} ?>