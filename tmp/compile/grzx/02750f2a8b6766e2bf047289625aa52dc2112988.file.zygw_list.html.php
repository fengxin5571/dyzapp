<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:40:08
         compiled from ".\tpl\grzx\zygw_list.html" */ ?>
<?php /*%%SmartyHeaderCode:8094582d147a6a8e53-31325671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02750f2a8b6766e2bf047289625aa52dc2112988' => 
    array (
      0 => '.\\tpl\\grzx\\zygw_list.html',
      1 => 1486967712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8094582d147a6a8e53-31325671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582d147a6de4e4_76986528',
  'variables' => 
  array (
    'szm' => 0,
    'a' => 0,
    'b' => 0,
    'zygw' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d147a6de4e4_76986528')) {function content_582d147a6de4e4_76986528($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['szm']->value)>0){?>
<div class="search_zimu">
	<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['szm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
	<a href="#<?php echo $_smarty_tpl->tpl_vars['a']->value['szm'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['szm'];?>
</a>
	<?php } ?>
</div>
<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['szm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
	<p class="zimu" id='<?php echo $_smarty_tpl->tpl_vars['b']->value['szm'];?>
'><?php echo $_smarty_tpl->tpl_vars['b']->value['szm'];?>
</p>
	<ul class="zhiyeguwen">
		<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zygw']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['c']->value['szm']==$_smarty_tpl->tpl_vars['b']->value['szm']){?>
			<li onclick="zhiye_tiao(<?php echo $_smarty_tpl->tpl_vars['c']->value['uid'];?>
,'<?php echo $_smarty_tpl->tpl_vars['c']->value['nicheng'];?>
')" tapmode='tap-active'>
				<img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['touxiang'];?>
" alt="" class="user_tx">
				<p><?php echo $_smarty_tpl->tpl_vars['c']->value['nicheng'];?>
</p>
				<p style="text-align:right;color:#b3b3b3;font-size:12px;"><?php echo $_smarty_tpl->tpl_vars['c']->value['loupan'];?>
</p>
			</li>
		<?php }?>
		<?php } ?>
	</ul>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>听说，<br>好的置业顾问，<br>能帮着省大钱，<br>不信试试？</span>
</p>
<?php }?>
	<?php }} ?>