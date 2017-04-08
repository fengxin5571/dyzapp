<?php /* Smarty version Smarty-3.1.12, created on 2017-03-07 18:23:49
         compiled from ".\tpl\xiaoxi\dhk.html" */ ?>
<?php /*%%SmartyHeaderCode:314958a41cac75d821-86000864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ea72c297f368f86a2790195fc1a24a52e2e477c' => 
    array (
      0 => '.\\tpl\\xiaoxi\\dhk.html',
      1 => 1488881455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314958a41cac75d821-86000864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a41cac7ad9f6_87659296',
  'variables' => 
  array (
    'dh' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a41cac7ad9f6_87659296')) {function content_58a41cac7ad9f6_87659296($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="dh clearfix">
	<span class="dh_time"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime1'];?>
</span>
	<div class="dh_tx dh_tx<?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>2<?php }else{ ?>1<?php }?>">
		<span class="name"><?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?><?php echo $_smarty_tpl->tpl_vars['row']->value['wo']['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value['to']['name'];?>
<?php }?></span>
		<p class="shuxian"></p>
	</div>
	<div class="dh_con dh_con<?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>2<?php }else{ ?>1<?php }?>">
		<i class="xiaosanjiao"></i>
		<?php if ($_smarty_tpl->tpl_vars['row']->value['content_type']==0){?>
		<p><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</p>
		<?php }elseif($_smarty_tpl->tpl_vars['row']->value['content_type']==1){?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
" class='img'>
		<?php }?>
	</div>
</div>
<?php } ?><?php }} ?>