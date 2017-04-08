<?php /* Smarty version Smarty-3.1.12, created on 2017-01-14 16:19:32
         compiled from ".\tpl\cgft\cgft_toupiao.html" */ ?>
<?php /*%%SmartyHeaderCode:66315879dc3aa26848-47171567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '923ade1074e481b4081da04fc5e116d02190e06b' => 
    array (
      0 => '.\\tpl\\cgft\\cgft_toupiao.html',
      1 => 1484381593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66315879dc3aa26848-47171567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5879dc3aa769f2_56797743',
  'variables' => 
  array (
    'jxtz' => 0,
    'jx' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5879dc3aa769f2_56797743')) {function content_5879dc3aa769f2_56797743($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['jx'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jx']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jxtz']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jx']->key => $_smarty_tpl->tpl_vars['jx']->value){
$_smarty_tpl->tpl_vars['jx']->_loop = true;
?>
<div class="toupiao">
	<p class="tp_user">
		<img src="<?php echo $_smarty_tpl->tpl_vars['jx']->value['user']['touxiang'];?>
">
		<span><?php echo $_smarty_tpl->tpl_vars['jx']->value['user']['nicheng'];?>
</span>
		<span style="font-size:12px;color:#999">（票数：<?php echo $_smarty_tpl->tpl_vars['jx']->value['total'];?>
）</span>
		<i class="tp_ipt">
			<?php if ($_smarty_tpl->tpl_vars['jx']->value['is_toupiao']<1){?>
				<input type='radio' name="tp" value="<?php echo $_smarty_tpl->tpl_vars['jx']->value['id'];?>
">
			<?php }else{ ?>
				已投票
			<?php }?>
		</i>
	</p>
	<p class="jxxy">竞选宣言：<span><?php echo $_smarty_tpl->tpl_vars['jx']->value['xuanyan'];?>
</span></p>
</div>
<?php } ?><?php }} ?>