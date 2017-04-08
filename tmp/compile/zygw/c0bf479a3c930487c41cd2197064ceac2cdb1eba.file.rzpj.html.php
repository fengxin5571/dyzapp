<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 18:55:35
         compiled from ".\tpl\zygw\rzpj.html" */ ?>
<?php /*%%SmartyHeaderCode:256935832cbb348bc75-32972017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0bf479a3c930487c41cd2197064ceac2cdb1eba' => 
    array (
      0 => '.\\tpl\\zygw\\rzpj.html',
      1 => 1479725728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256935832cbb348bc75-32972017',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5832cbb34cca04_44355632',
  'variables' => 
  array (
    'rzpj' => 0,
    'rz' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832cbb34cca04_44355632')) {function content_5832cbb34cca04_44355632($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['rz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rzpj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rz']->key => $_smarty_tpl->tpl_vars['rz']->value){
$_smarty_tpl->tpl_vars['rz']->_loop = true;
?>
<li class="zyxq_div">
	<img src="<?php echo $_smarty_tpl->tpl_vars['rz']->value['user']['touxiang'];?>
" alt="" class="user_tx">
	<p class="user_name"><?php echo $_smarty_tpl->tpl_vars['rz']->value['user']['nicheng'];?>
</p>
	<p class="pj_time"><?php echo $_smarty_tpl->tpl_vars['rz']->value['addtime'];?>
</p>
	<p class="pj_time" style="position:absolute;left:62px;top:20px;width:160px;"><?php echo $_smarty_tpl->tpl_vars['rz']->value['kanfangtime'];?>
在&nbsp;<?php echo $_smarty_tpl->tpl_vars['rz']->value['tuan']['name'];?>
&nbsp;入住的评价</p>
	<p class="pingfen" score="<?php echo $_smarty_tpl->tpl_vars['rz']->value['pingfen'];?>
">
		<span class="star1"></span>
		<span class="star1"></span>
		<span class="star1"></span>
		<span class="star1"></span>
		<span class="star1"></span>
	</p>
	<p style="clear:both;font-size: 14px;line-height: 20px;width:100%; overflow:hidden;white-space:nowrap;text-overflow:ellipsis;text-align:right;padding-top:20px;">
		<?php echo $_smarty_tpl->tpl_vars['rz']->value['pingjia'];?>

	</p>
</li>
<?php } ?>
<?php }} ?>