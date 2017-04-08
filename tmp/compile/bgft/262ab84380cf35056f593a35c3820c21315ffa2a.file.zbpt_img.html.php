<?php /* Smarty version Smarty-3.1.12, created on 2016-11-19 14:45:48
         compiled from ".\tpl\bgft\zbpt_img.html" */ ?>
<?php /*%%SmartyHeaderCode:27301582ff51c395908-81631868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '262ab84380cf35056f593a35c3820c21315ffa2a' => 
    array (
      0 => '.\\tpl\\bgft\\zbpt_img.html',
      1 => 1479536627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27301582ff51c395908-81631868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zbpt_img' => 0,
    'a' => 0,
    'loupan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582ff51c3caf84_21540928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582ff51c3caf84_21540928')) {function content_582ff51c3caf84_21540928($_smarty_tpl) {?><div class="swiper-container">
	<div class="swiper-wrapper">
	<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zbpt_img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
		<div class="swiper-slide">
			<div class="img_bg" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
);"></div>
		</div>
	<?php } ?>
	</div>
	<div class="swiper-pagination"></div>
</div>
<p class="zbpt_info"><?php echo $_smarty_tpl->tpl_vars['loupan']->value['zbpt_txt'];?>
</p><?php }} ?>