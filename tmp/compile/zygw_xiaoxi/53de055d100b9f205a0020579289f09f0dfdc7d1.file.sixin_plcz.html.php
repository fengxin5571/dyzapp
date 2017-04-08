<?php /* Smarty version Smarty-3.1.12, created on 2016-11-20 15:11:15
         compiled from ".\tpl\zygw_xiaoxi\sixin_plcz.html" */ ?>
<?php /*%%SmartyHeaderCode:17887583149bf8c4693-21318621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53de055d100b9f205a0020579289f09f0dfdc7d1' => 
    array (
      0 => '.\\tpl\\zygw_xiaoxi\\sixin_plcz.html',
      1 => 1479625867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17887583149bf8c4693-21318621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_583149bf8fda11_79402649',
  'variables' => 
  array (
    'sixin' => 0,
    'si' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583149bf8fda11_79402649')) {function content_583149bf8fda11_79402649($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sixin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
?>
<div class="xx_list">
	<div class="del_check">
		<input type='checkbox' class="xz_check" value="<?php echo $_smarty_tpl->tpl_vars['si']->value['toid'];?>
">
	</div>
	<div class="xx_list_tx">
		<img src="<?php echo $_smarty_tpl->tpl_vars['si']->value['user']['touxiang'];?>
">
		<span class="hongdian"></span>
	</div>
	<div class="xx_list_info">
		<p class="p1">
			<span class="xx_list_info_user"><?php echo $_smarty_tpl->tpl_vars['si']->value['user']['nicheng'];?>
</span>
			<span class="xx_list_info_time"><?php echo $_smarty_tpl->tpl_vars['si']->value['addtime'];?>
</span>
		</p>
		<p class="txt"><?php echo $_smarty_tpl->tpl_vars['si']->value['neirong'];?>
</p>
	</div>
</div>
<?php } ?>

<?php }} ?>