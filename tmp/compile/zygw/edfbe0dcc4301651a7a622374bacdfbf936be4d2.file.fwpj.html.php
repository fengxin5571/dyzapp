<?php /* Smarty version Smarty-3.1.12, created on 2016-11-22 09:13:02
         compiled from ".\tpl\zygw\fwpj.html" */ ?>
<?php /*%%SmartyHeaderCode:117995832cb869c6759-23047166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edfbe0dcc4301651a7a622374bacdfbf936be4d2' => 
    array (
      0 => '.\\tpl\\zygw\\fwpj.html',
      1 => 1479725821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117995832cb869c6759-23047166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5832cb86a074e1_60380353',
  'variables' => 
  array (
    'fwpj' => 0,
    'zhi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832cb86a074e1_60380353')) {function content_5832cb86a074e1_60380353($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['zhi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zhi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fwpj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zhi']->key => $_smarty_tpl->tpl_vars['zhi']->value){
$_smarty_tpl->tpl_vars['zhi']->_loop = true;
?>
<li class="zyxq_div">
	<img src="<?php echo $_smarty_tpl->tpl_vars['zhi']->value['user']['touxiang'];?>
" alt="" class="user_tx">
	<p class="user_name"><?php echo $_smarty_tpl->tpl_vars['zhi']->value['user']['nicheng'];?>
</p>
	<p class="pj_time"><?php echo $_smarty_tpl->tpl_vars['zhi']->value['addtime'];?>
</p>
	<p class="pj_time" style="position:absolute;left:62px;top:20px;">对您服务的评价</p>
	<p class="pingfen" score="<?php echo $_smarty_tpl->tpl_vars['zhi']->value['pingfen'];?>
">
		<span class="star1"></span>
		<span class="star1"></span>
		<span class="star1"></span>
		<span class="star1"></span>
		<span class="star1"></span>
	</p>
	<p style="clear:both;font-size:14px;line-height:20px;width:100%; overflow:hidden;white-space:nowrap;text-overflow:ellipsis;text-align:right;padding-top:5px">
		<?php echo $_smarty_tpl->tpl_vars['zhi']->value['pingjia'];?>

	</p>
</li>
<?php } ?><?php }} ?>