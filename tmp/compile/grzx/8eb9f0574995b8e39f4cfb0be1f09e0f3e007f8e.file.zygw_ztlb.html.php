<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 14:27:59
         compiled from ".\tpl\grzx\zygw_ztlb.html" */ ?>
<?php /*%%SmartyHeaderCode:14175583271aa1800e6-09635951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb9f0574995b8e39f4cfb0be1f09e0f3e007f8e' => 
    array (
      0 => '.\\tpl\\grzx\\zygw_ztlb.html',
      1 => 1479709483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14175583271aa1800e6-09635951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_583271aa1c4b74_94307016',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'tu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583271aa1c4b74_94307016')) {function content_583271aa1c4b74_94307016($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<li class="jdal_one" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)">
   <p class="jdal_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoti'];?>
</p>
   <p class="jdal_nr"><?php echo $_smarty_tpl->tpl_vars['row']->value['neirong'];?>
</p>
   <div class="img_box">
	   <?php  $_smarty_tpl->tpl_vars['tu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['tupian']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tu']->key => $_smarty_tpl->tpl_vars['tu']->value){
$_smarty_tpl->tpl_vars['tu']->_loop = true;
?>
	   <img src="<?php echo $_smarty_tpl->tpl_vars['tu']->value;?>
" alt="">
	   <?php } ?>
   </div>
   <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['touxiang'];?>
" alt="" class="user_tx">
	<p class="user_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['nicheng'];?>
</p>
   <p class="jdal_time"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</p>
   <p class="jdal_pl">评论<span class="pls"><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
</span></p>
</li>
<?php } ?><?php }} ?>