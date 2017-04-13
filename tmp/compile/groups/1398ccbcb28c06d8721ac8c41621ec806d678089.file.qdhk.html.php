<?php /* Smarty version Smarty-3.1.12, created on 2017-04-13 10:16:58
         compiled from ".\tpl\groups\qdhk.html" */ ?>
<?php /*%%SmartyHeaderCode:1270258eedf23f21276-76884924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1398ccbcb28c06d8721ac8c41621ec806d678089' => 
    array (
      0 => '.\\tpl\\groups\\qdhk.html',
      1 => 1492049810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270258eedf23f21276-76884924',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58eedf240e7643_87727765',
  'variables' => 
  array (
    'qdh' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eedf240e7643_87727765')) {function content_58eedf240e7643_87727765($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['qdh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="dh clearfix">
	<span class="dh_time"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime1'];?>
</span>
	<div class="dh_tx dh_tx<?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>2<?php }else{ ?>1<?php }?>">
		<span class="name"><?php echo $_smarty_tpl->tpl_vars['row']->value['from']['name'];?>
</span>
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