<?php /* Smarty version Smarty-3.1.12, created on 2017-01-18 16:58:52
         compiled from ".\tpl\bgft\zan_list.html" */ ?>
<?php /*%%SmartyHeaderCode:13737587f2e4cce39f9-40195927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb09bda98a161557f5c1b457f4ede82231854c8' => 
    array (
      0 => '.\\tpl\\bgft\\zan_list.html',
      1 => 1484647555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13737587f2e4cce39f9-40195927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'z' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587f2e4cd24796_09750762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f2e4cd24796_09750762')) {function content_587f2e4cd24796_09750762($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['list']->value)>0){?>
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