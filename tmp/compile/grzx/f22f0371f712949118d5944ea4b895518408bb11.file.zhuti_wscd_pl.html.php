<?php /* Smarty version Smarty-3.1.12, created on 2016-11-18 15:43:29
         compiled from ".\tpl\grzx\zhuti_wscd_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:27430582c3b03debe55-13308267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f22f0371f712949118d5944ea4b895518408bb11' => 
    array (
      0 => '.\\tpl\\grzx\\zhuti_wscd_pl.html',
      1 => 1479454967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27430582c3b03debe55-13308267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c3b03e3c017_29261721',
  'variables' => 
  array (
    'wscd' => 0,
    'sc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c3b03e3c017_29261721')) {function content_582c3b03e3c017_29261721($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wscd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?>
<li class="jdal_one" uid='<?php echo $_smarty_tpl->tpl_vars['sc']->value['id'];?>
'>
	<input type="checkbox">
	<div style="width:80%;padding-left:30px;box-sizing:border-box">
	   <p class="jdal_tit"><?php echo $_smarty_tpl->tpl_vars['sc']->value['zhuti']['biaoti'];?>
</p>
	   <p class="jdal_nr"><?php echo $_smarty_tpl->tpl_vars['sc']->value['zhuti']['neirong'];?>
</p>
	</div>   
	<img src="<?php echo $_smarty_tpl->tpl_vars['sc']->value['user']['touxiang'];?>
" alt="" class="user_tx">
	<p class="user_name" style="padding-right:10px;"><?php echo $_smarty_tpl->tpl_vars['sc']->value['user']['nicheng'];?>
</p>
   <p class="jdal_time" style="margin-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['sc']->value['addtime'];?>
</p>
   <p class="jdal_pl" style="float:right">评论<span class="pls"><?php echo $_smarty_tpl->tpl_vars['sc']->value['total'];?>
</span></p>
</li>
<?php } ?><?php }} ?>