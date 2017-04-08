<?php /* Smarty version Smarty-3.1.12, created on 2017-03-07 17:38:22
         compiled from ".\tpl\gz\gonggao_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:991758a3c785cc35f1-54734141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd6de1ccb1cd52fde8fa5c7feb8be2ce8fc68ee3' => 
    array (
      0 => '.\\tpl\\gz\\gonggao_xq.html',
      1 => 1488879240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '991758a3c785cc35f1-54734141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a3c785cf8c71_15506081',
  'variables' => 
  array (
    'gg' => 0,
    'gg_tuijian' => 0,
    'ggrow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3c785cf8c71_15506081')) {function content_58a3c785cf8c71_15506081($_smarty_tpl) {?><p class="tit"><?php echo $_smarty_tpl->tpl_vars['gg']->value['title'];?>
</p>
<p class="time"><?php echo $_smarty_tpl->tpl_vars['gg']->value['addtime'];?>
</p>
<img src="<?php echo $_smarty_tpl->tpl_vars['gg']->value['img'];?>
" class="img">
<p class="con"><?php echo $_smarty_tpl->tpl_vars['gg']->value['content'];?>
</p>
<p class="xian"></p>
<p class="xgtj">相关推荐</p>
<?php  $_smarty_tpl->tpl_vars['ggrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ggrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gg_tuijian']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ggrow']->key => $_smarty_tpl->tpl_vars['ggrow']->value){
$_smarty_tpl->tpl_vars['ggrow']->_loop = true;
?>
<div class="xgtj_list clearfix" onclick="open_xgtj(<?php echo $_smarty_tpl->tpl_vars['ggrow']->value['id'];?>
)" tapmode='tap-active'>
	<img src="<?php echo $_smarty_tpl->tpl_vars['ggrow']->value['img'];?>
" class="xgtj_list_img">
	<p class="xgtj_list_info"><?php echo $_smarty_tpl->tpl_vars['ggrow']->value['title'];?>
</p>
</div>
<?php } ?><?php }} ?>