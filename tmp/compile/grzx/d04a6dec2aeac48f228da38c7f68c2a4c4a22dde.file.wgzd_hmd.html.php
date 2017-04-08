<?php /* Smarty version Smarty-3.1.12, created on 2016-11-16 18:15:31
         compiled from ".\tpl\grzx\wgzd_hmd.html" */ ?>
<?php /*%%SmartyHeaderCode:26961582c31c3e94c26-48272682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04a6dec2aeac48f228da38c7f68c2a4c4a22dde' => 
    array (
      0 => '.\\tpl\\grzx\\wgzd_hmd.html',
      1 => 1479291328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26961582c31c3e94c26-48272682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wgzd' => 0,
    'hmd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c31c3eca2a7_45465002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c31c3eca2a7_45465002')) {function content_582c31c3eca2a7_45465002($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['hmd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hmd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wgzd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hmd']->key => $_smarty_tpl->tpl_vars['hmd']->value){
$_smarty_tpl->tpl_vars['hmd']->_loop = true;
?>
<li uid="">
	<img src="<?php echo $_smarty_tpl->tpl_vars['hmd']->value['user']['touxiang'];?>
" alt="" class="user_tx">
	<p class="user_name"><?php echo $_smarty_tpl->tpl_vars['hmd']->value['user']['nicheng'];?>
</p>
	<p style="float:right;color:#2878b9;font-size:14px;margin-top: 16px;margin-left: 5px;" onclick="yichuheimingdan(<?php echo $_smarty_tpl->tpl_vars['hmd']->value['user']['id'];?>
,this)" tapmode='tap-active'>移出黑名单</p>   
</li>
<?php } ?><?php }} ?>