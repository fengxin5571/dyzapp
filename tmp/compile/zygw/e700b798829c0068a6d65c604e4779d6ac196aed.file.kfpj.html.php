<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 18:55:34
         compiled from ".\tpl\zygw\kfpj.html" */ ?>
<?php /*%%SmartyHeaderCode:89045832cb9d339fa2-78162009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e700b798829c0068a6d65c604e4779d6ac196aed' => 
    array (
      0 => '.\\tpl\\zygw\\kfpj.html',
      1 => 1479725733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89045832cb9d339fa2-78162009',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5832cb9d37ea38_89928150',
  'variables' => 
  array (
    'kfpj' => 0,
    'kf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832cb9d37ea38_89928150')) {function content_5832cb9d37ea38_89928150($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['kf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kfpj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kf']->key => $_smarty_tpl->tpl_vars['kf']->value){
$_smarty_tpl->tpl_vars['kf']->_loop = true;
?>
<li class="zyxq_div">
	<img src="<?php echo $_smarty_tpl->tpl_vars['kf']->value['user']['touxiang'];?>
" alt="" class="user_tx">
	<p class="user_name"><?php echo $_smarty_tpl->tpl_vars['kf']->value['user']['nicheng'];?>
</p>
	<p class="pj_time"><?php echo $_smarty_tpl->tpl_vars['kf']->value['addtime'];?>
</p>
	<p class="pj_time" style="position:absolute;left:62px;top:20px;width:160px;"><?php echo $_smarty_tpl->tpl_vars['kf']->value['kanfangtime'];?>
在&nbsp;<?php echo $_smarty_tpl->tpl_vars['kf']->value['tuan']['name'];?>
&nbsp;看房的评价</p>
	<p class="pingfen" score="<?php echo $_smarty_tpl->tpl_vars['kf']->value['pingfen'];?>
">
		<span class="star1"></span>
		<span class="star1"></span>
		<span class="star1"></span>
		<span class="star1"></span>
		<span class="star1"></span>
	</p>
	<p style="clear:both;font-size: 14px;line-height: 20px;width:100%; overflow:hidden;white-space:nowrap;text-overflow:ellipsis;text-align:right;padding-top:20px">
		<?php echo $_smarty_tpl->tpl_vars['kf']->value['pingjia'];?>

	</p>
</li>
<?php } ?><?php }} ?>