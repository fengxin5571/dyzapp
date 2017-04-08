<?php /* Smarty version Smarty-3.1.12, created on 2017-02-15 10:29:12
         compiled from ".\tpl\gz\gonggao.html" */ ?>
<?php /*%%SmartyHeaderCode:3213758a3bcf8a8d1a7-89309377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01a4116199353ba718e3b93fa79f8f6e4174cc29' => 
    array (
      0 => '.\\tpl\\gz\\gonggao.html',
      1 => 1487125737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3213758a3bcf8a8d1a7-89309377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gg_tuijian' => 0,
    'total' => 0,
    'gg' => 0,
    'ggrow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a3bcf8ac2810_45030595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3bcf8ac2810_45030595')) {function content_58a3bcf8ac2810_45030595($_smarty_tpl) {?><p class='gglb_tit'>公告列表</p>
<div class="gglb_big" onclick="open_ggxq(<?php echo $_smarty_tpl->tpl_vars['gg_tuijian']->value['id'];?>
)" tapmode='tap-active'>
	<img src="<?php echo $_smarty_tpl->tpl_vars['gg_tuijian']->value['img'];?>
">
	<p><?php echo $_smarty_tpl->tpl_vars['gg_tuijian']->value['title'];?>
</p>
</div>
<div class="gg_list">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="gg_total">
	<?php  $_smarty_tpl->tpl_vars['ggrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ggrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ggrow']->key => $_smarty_tpl->tpl_vars['ggrow']->value){
$_smarty_tpl->tpl_vars['ggrow']->_loop = true;
?>
	<div class="gglb_box">
		<div class="xgtj_list clearfix" onclick="open_ggxq(<?php echo $_smarty_tpl->tpl_vars['ggrow']->value['id'];?>
)" tapmode='tap-active'>
			<img src="<?php echo $_smarty_tpl->tpl_vars['ggrow']->value['img'];?>
" class="xgtj_list_img">
			<div>
				<p class="xgtj_list_info"><?php echo $_smarty_tpl->tpl_vars['ggrow']->value['title'];?>
</p>
				<span class="time"><?php echo $_smarty_tpl->tpl_vars['ggrow']->value['addtime'];?>
</span>
			</div>
		</div>
	</div>
	<?php } ?>
</div><?php }} ?>