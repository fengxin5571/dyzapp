<?php /* Smarty version Smarty-3.1.12, created on 2016-11-20 15:11:08
         compiled from ".\tpl\zygw_xiaoxi\sixin.html" */ ?>
<?php /*%%SmartyHeaderCode:19257583149b65056b6-80272522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b5e79789ee9a74f929ce64aabbad8e171c10195' => 
    array (
      0 => '.\\tpl\\zygw_xiaoxi\\sixin.html',
      1 => 1479625862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19257583149b65056b6-80272522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_583149b6542733_35371728',
  'variables' => 
  array (
    'sixin' => 0,
    'si' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583149b6542733_35371728')) {function content_583149b6542733_35371728($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sixin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
?>
<div class="xx_box_inner clearfix id1111">
	<div class="xx_list" onclick="open_sixin_dhk(<?php echo $_smarty_tpl->tpl_vars['si']->value['toid'];?>
)" tapmode='tap-active'>
		<div class="xx_list_tx">
			<img src="<?php echo $_smarty_tpl->tpl_vars['si']->value['user']['touxiang'];?>
">
			<span class="hongdian"></span>
		</div>
		<div class="xx_list_info">
			<p class="p1">
				<span class="xx_list_info_user"><?php echo $_smarty_tpl->tpl_vars['si']->value['user']['nicheng'];?>
</span>
				<span class="xx_list_info_time"><?php echo $_smarty_tpl->tpl_vars['si']->value['user']['addtime'];?>
</span>
			</p>
			<p class="txt"><?php echo $_smarty_tpl->tpl_vars['si']->value['neirong'];?>
</p>
		</div>
	</div>
	<p class="del_btn" onclick="del_xinxi(<?php echo $_smarty_tpl->tpl_vars['si']->value['toid'];?>
,this)" tapmode='tap-active'>删除记录</p>
</div>
<?php } ?>

<?php }} ?>