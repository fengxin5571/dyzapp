<?php /* Smarty version Smarty-3.1.12, created on 2016-11-19 16:01:11
         compiled from ".\tpl\bgft\bgft_fjdt.html" */ ?>
<?php /*%%SmartyHeaderCode:91365826c31d973119-29598657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e089b7dc6a19496d599d5d299ebdda590bce6eeb' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_fjdt.html',
      1 => 1479542471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91365826c31d973119-29598657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5826c31d9b7bc4_23470675',
  'variables' => 
  array (
    'fjdbt' => 0,
    'fjb' => 0,
    'fjdct' => 0,
    'fj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5826c31d9b7bc4_23470675')) {function content_5826c31d9b7bc4_23470675($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['fjb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fjb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fjdbt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fjb']->key => $_smarty_tpl->tpl_vars['fjb']->value){
$_smarty_tpl->tpl_vars['fjb']->_loop = true;
?>
<div class="shoye_gft clearfix" onclick="open_gft(<?php echo $_smarty_tpl->tpl_vars['fjb']->value['id'];?>
,2)" tapmode='tap-active'>
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['fjb']->value['touxiang']['img'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['fjb']->value['user']['loupan'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['fjb']->value['dizhi'];?>
</p>
		<p class="p3">距您参加购房团<?php echo $_smarty_tpl->tpl_vars['fjb']->value['juli'];?>
公里</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['fjb']->value['pjyhj'];?>
</em>元</p>
	</div>
</div>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['fj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fjdct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fj']->key => $_smarty_tpl->tpl_vars['fj']->value){
$_smarty_tpl->tpl_vars['fj']->_loop = true;
?>
<div class="shoye_gft clearfix" onclick="open_gft(<?php echo $_smarty_tpl->tpl_vars['fj']->value['id'];?>
,1)" tapmode='tap-active'>
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['fj']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['fj']->value['loupan'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['fj']->value['dizhi'];?>
</p>
		<p class="p3">距您参加购房团<?php echo $_smarty_tpl->tpl_vars['fj']->value['juli'];?>
公里</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['fj']->value['jiage'];?>
</em>元</p>
	</div>
</div>
<?php } ?><?php }} ?>