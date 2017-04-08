<?php /* Smarty version Smarty-3.1.12, created on 2017-02-15 10:31:50
         compiled from ".\tpl\gz\gonggao_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2921358a3bd969dcf00-01105937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5becf8f9970ff14fb5cf0c0e92b04b27bd618f3b' => 
    array (
      0 => '.\\tpl\\gz\\gonggao_list.html',
      1 => 1487125879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2921358a3bd969dcf00-01105937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gg' => 0,
    'ggrow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a3bd96a0ab84_23017594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3bd96a0ab84_23017594')) {function content_58a3bd96a0ab84_23017594($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['ggrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ggrow']->_loop = false;
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
<?php } ?><?php }} ?>