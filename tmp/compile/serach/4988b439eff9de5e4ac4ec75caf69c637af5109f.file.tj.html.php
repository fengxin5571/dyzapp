<?php /* Smarty version Smarty-3.1.12, created on 2016-12-20 17:40:25
         compiled from ".\tpl\serach\tj.html" */ ?>
<?php /*%%SmartyHeaderCode:12419582524474c4971-13657482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4988b439eff9de5e4ac4ec75caf69c637af5109f' => 
    array (
      0 => '.\\tpl\\serach\\tj.html',
      1 => 1482225123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12419582524474c4971-13657482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582524474fdd02_35244812',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582524474fdd02_35244812')) {function content_582524474fdd02_35244812($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="shoye_gft clearfix" onclick='tuan_detail("<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
","<?php echo $_smarty_tpl->tpl_vars['row']->value['t_type'];?>
","<?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
")' tapmode='tap-active'>
	<div class="gf_icon">
		<p class="gf_font">房企</p>
		<p class="gf_sj"></p>
	</div>
	<!-- <div class="mj_icon">
		<p class="mj_font">民间</p>
		<p class="mj_sj"></p>
	</div> -->
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan'];?>
</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
		<p class="p3">距您参加购房团<?php echo $_smarty_tpl->tpl_vars['row']->value['juli'];?>
公里</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage'];?>
</em>元</p>
	</div>
</div>
<?php } ?><?php }} ?>