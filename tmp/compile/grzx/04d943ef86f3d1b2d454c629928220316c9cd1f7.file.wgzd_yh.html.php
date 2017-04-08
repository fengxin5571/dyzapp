<?php /* Smarty version Smarty-3.1.12, created on 2016-11-23 16:11:53
         compiled from ".\tpl\grzx\wgzd_yh.html" */ ?>
<?php /*%%SmartyHeaderCode:30182582c2e7b94ae59-23691448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d943ef86f3d1b2d454c629928220316c9cd1f7' => 
    array (
      0 => '.\\tpl\\grzx\\wgzd_yh.html',
      1 => 1479888703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30182582c2e7b94ae59-23691448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c2e7b98f902_45366728',
  'variables' => 
  array (
    'wgzd' => 0,
    'wg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c2e7b98f902_45366728')) {function content_582c2e7b98f902_45366728($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['wgzd']->value)<1){?>
<p class="zanwu">您尚未关注任何用户！</p>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['wg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wgzd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wg']->key => $_smarty_tpl->tpl_vars['wg']->value){
$_smarty_tpl->tpl_vars['wg']->_loop = true;
?>
<li uid="<?php echo $_smarty_tpl->tpl_vars['wg']->value['user']['id'];?>
">
	<img src="<?php echo $_smarty_tpl->tpl_vars['wg']->value['user']['touxiang'];?>
" alt="" class="user_tx">
	<p class="user_name"><?php echo $_smarty_tpl->tpl_vars['wg']->value['user']['nicheng'];?>
</p>
	<p style="float:right;color:#2878b9;font-size:10px;margin-top: 16px;margin-left: 5px;" onclick="heimingdan(<?php echo $_smarty_tpl->tpl_vars['wg']->value['user']['id'];?>
,this)" tapmode='tap-active'>移入黑名单</p>   
	<p style="float:right;color:#999999;font-size:10px;margin-top: 16px;margin-left: 5px;color:#2878b9;" tapmode='tap-active' onclick="quxiaoguanzhu(<?php echo $_smarty_tpl->tpl_vars['wg']->value['user']['id'];?>
,this)">
		<span>取消关注</span>
	</p>         
	<p style="float:right;color:#999999;font-size:10px;margin-top: 16px" onclick="sixin(<?php echo $_smarty_tpl->tpl_vars['wg']->value['user']['id'];?>
)" tapmode='tap-active'>
		<img src="../../image/img-qm/sixin.png" alt="">
		<span>私信</span>
	</p>
</li>
<?php } ?>
<?php }?><?php }} ?>