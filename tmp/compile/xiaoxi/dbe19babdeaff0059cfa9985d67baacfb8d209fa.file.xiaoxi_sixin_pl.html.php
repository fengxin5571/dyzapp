<?php /* Smarty version Smarty-3.1.12, created on 2017-02-05 10:04:40
         compiled from ".\tpl\xiaoxi\xiaoxi_sixin_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:237885829927dde3159-76272288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbe19babdeaff0059cfa9985d67baacfb8d209fa' => 
    array (
      0 => '.\\tpl\\xiaoxi\\xiaoxi_sixin_pl.html',
      1 => 1486260216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237885829927dde3159-76272288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5829927de23ed4_16717677',
  'variables' => 
  array (
    'sixin' => 0,
    'total' => 0,
    'si' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829927de23ed4_16717677')) {function content_5829927de23ed4_16717677($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sixin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="sixin_total">
<div class="xx_list">
	<div class="del_check">
		<input type='checkbox' class="xz_check" value="<?php echo $_smarty_tpl->tpl_vars['si']->value['user']['id'];?>
">
	</div>
	<div class="xx_list_tx">
		<img src="<?php echo $_smarty_tpl->tpl_vars['si']->value['user']['touxiang'];?>
">
		<?php if ($_smarty_tpl->tpl_vars['si']->value['is_du']==0){?>
		<span class="hongdian"></span>
		<?php }?>
	</div>
	<div class="xx_list_info">
		<p class="xx_list_info_p1">
			<?php if ($_smarty_tpl->tpl_vars['si']->value['user_type']['type']==1){?>
			<span class="xx_list_info_user"><?php echo $_smarty_tpl->tpl_vars['si']->value['user']['nicheng'];?>
</span>
			<?php }elseif($_smarty_tpl->tpl_vars['si']->value['user_type']['type']==3){?>
			<span class="xx_list_info_user"><?php echo $_smarty_tpl->tpl_vars['si']->value['user']['nicheng'];?>
</span>
			<span class="xx_list_info_zygw">置业顾问</span>
			<?php }?>
			<span class="xx_list_info_time"><?php echo $_smarty_tpl->tpl_vars['si']->value['addtime'];?>
</span>
		</p>
		<p class="txt"><?php echo $_smarty_tpl->tpl_vars['si']->value['neirong'];?>
</p>
	</div>
</div>
<?php } ?><?php }} ?>