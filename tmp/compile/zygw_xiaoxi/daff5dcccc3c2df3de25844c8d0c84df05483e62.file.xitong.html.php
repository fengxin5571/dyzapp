<?php /* Smarty version Smarty-3.1.12, created on 2016-11-20 15:51:10
         compiled from ".\tpl\zygw_xiaoxi\xitong.html" */ ?>
<?php /*%%SmartyHeaderCode:214095831553f333a76-62644981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daff5dcccc3c2df3de25844c8d0c84df05483e62' => 
    array (
      0 => '.\\tpl\\zygw_xiaoxi\\xitong.html',
      1 => 1479628208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214095831553f333a76-62644981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5831553f378509_23732652',
  'variables' => 
  array (
    'xitong' => 0,
    'xi' => 0,
    'tx' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5831553f378509_23732652')) {function content_5831553f378509_23732652($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['xi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xitong']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xi']->key => $_smarty_tpl->tpl_vars['xi']->value){
$_smarty_tpl->tpl_vars['xi']->_loop = true;
?>
<div class="xx_box_inner">
	<div class="xx_list">
		<div class="xx_list_tx icon_img6"></div>
		<div class="xx_list_info xx_list_info1">
			<p><span class="org_font"><?php echo $_smarty_tpl->tpl_vars['xi']->value['user']['loupan'];?>
</span>邀请您合作。</p>
			<p class="time"><?php echo $_smarty_tpl->tpl_vars['xi']->value['addtime'];?>
</p>
		</div>
	</div>
	<p class="del_btn" onclick="del_qianyue(<?php echo $_smarty_tpl->tpl_vars['xi']->value['id'];?>
,this)" tapmode='tap-active'>删除记录</p>
</div>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['ti'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ti']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tx']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ti']->key => $_smarty_tpl->tpl_vars['ti']->value){
$_smarty_tpl->tpl_vars['ti']->_loop = true;
?>
<div class="xx_box_inner">
	<div class="xx_list">
		<div class="xx_list_tx icon_img6"></div>
		<div class="xx_list_info xx_list_info1">
			<p>您提取赏金<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['ti']->value['lingqian'];?>
元</span>成功！</p>
			<p class="time"><?php echo $_smarty_tpl->tpl_vars['ti']->value['addtime'];?>
</p>
		</div>
	</div>
	<p class="del_btn" onclick="del_xinxi(<?php echo $_smarty_tpl->tpl_vars['ti']->value['id'];?>
,this)" tapmode='tap-active'>删除记录</p>
</div>
<?php } ?><?php }} ?>