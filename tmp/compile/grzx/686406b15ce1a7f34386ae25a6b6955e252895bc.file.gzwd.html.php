<?php /* Smarty version Smarty-3.1.12, created on 2017-01-05 09:38:56
         compiled from ".\tpl\grzx\gzwd.html" */ ?>
<?php /*%%SmartyHeaderCode:11889582c2a1787d539-78111796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '686406b15ce1a7f34386ae25a6b6955e252895bc' => 
    array (
      0 => '.\\tpl\\grzx\\gzwd.html',
      1 => 1481873832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11889582c2a1787d539-78111796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c2a178a7482_93757320',
  'variables' => 
  array (
    'gzwd' => 0,
    'gzw' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c2a178a7482_93757320')) {function content_582c2a178a7482_93757320($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['gzw'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gzw']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gzwd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gzw']->key => $_smarty_tpl->tpl_vars['gzw']->value){
$_smarty_tpl->tpl_vars['gzw']->_loop = true;
?>
<li uid="<?php echo $_smarty_tpl->tpl_vars['gzw']->value['user']['id'];?>
">
	<img src="<?php echo $_smarty_tpl->tpl_vars['gzw']->value['user']['touxiang'];?>
" alt="" class="user_tx">
	<p class="user_name"><?php echo $_smarty_tpl->tpl_vars['gzw']->value['user']['nicheng'];?>
</p> 
	<?php if ($_smarty_tpl->tpl_vars['gzw']->value['is_guanzhu']<1){?>
	<p style="float:right;color:#999999;font-size:10px;margin-top: 16px;margin-left: 5px;" tapmode='tap-active' onclick="guanzhu(<?php echo $_smarty_tpl->tpl_vars['gzw']->value['user']['id'];?>
,this)">
		<img src="../../image/img-qm/guanzhu.png" alt="">
		<span>关注</span>
	</p>  
	<?php }else{ ?>
	<p style="float:right;color:#999999;font-size:10px;margin-top: 16px;margin-left: 5px;">
		<!-- <img src="../../image/img-qm/guanzhu.png" alt=""> -->
		<span>互相关注</span>
	</p>  
	<?php }?>	
	<p style="float:right;color:#999999;font-size:10px;margin-top: 16px" onclick="sixin(<?php echo $_smarty_tpl->tpl_vars['gzw']->value['user']['id'];?>
)" tapmode='tap-active'>
		<img src="../../image/img-qm/sixin.png" alt="">
		<span>私信</span>
	</p>
</li>
<?php } ?><?php }} ?>