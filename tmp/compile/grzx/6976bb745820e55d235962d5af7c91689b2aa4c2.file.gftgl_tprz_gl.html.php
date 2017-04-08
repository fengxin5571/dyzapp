<?php /* Smarty version Smarty-3.1.12, created on 2016-11-17 16:02:53
         compiled from ".\tpl\grzx\gftgl_tprz_gl.html" */ ?>
<?php /*%%SmartyHeaderCode:18079582d6151adcd90-54086489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6976bb745820e55d235962d5af7c91689b2aa4c2' => 
    array (
      0 => '.\\tpl\\grzx\\gftgl_tprz_gl.html',
      1 => 1479369618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18079582d6151adcd90-54086489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582d6151b19e28_94378060',
  'variables' => 
  array (
    'tprz' => 0,
    'user' => 0,
    'tan' => 0,
    'tuan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d6151b19e28_94378060')) {function content_582d6151b19e28_94378060($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['tan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tprz']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tan']->key => $_smarty_tpl->tpl_vars['tan']->value){
$_smarty_tpl->tpl_vars['tan']->_loop = true;
?>
<li class="tprz_one">
	<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['touxiang'];?>
" alt="">
	<div class="gft_div">
		<p class="gft_name"><?php echo $_smarty_tpl->tpl_vars['tan']->value['biaoti'];?>
</p>
		<p>发布时间：<?php echo $_smarty_tpl->tpl_vars['tan']->value['addtime'];?>
</p>
		<p>发布:<?php echo $_smarty_tpl->tpl_vars['user']->value['nicheng'];?>
</p>
	</div>
	<label for="">谈判内容 ：</label>
	<p><?php echo $_smarty_tpl->tpl_vars['tan']->value['neirong'];?>
</p>
	<label for="">开团时间：<?php echo $_smarty_tpl->tpl_vars['tan']->value['kaituantime'];?>
</label>
	<label for="">谈定价格：<span><?php echo $_smarty_tpl->tpl_vars['tan']->value['money'];?>
元/m<sup>2</sup></span></label>
	<label for="">开团要求：满<?php echo $_smarty_tpl->tpl_vars['tan']->value['renshu'];?>
人</label>
	<label for="">参团人数：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['total']+1;?>
人</label>
	<p class="cz_tprz">
		<span class="fenxiang_btn" onclick="fenxiang(<?php echo $_smarty_tpl->tpl_vars['tan']->value['id'];?>
)" tapmode='tap-active'>分享</span>
		<span class="shanchu_btn" onclick="shanchu(<?php echo $_smarty_tpl->tpl_vars['tan']->value['id'];?>
,this)" tapmode='tap-active'>删除</span>
	</p>
</li>
<?php } ?><?php }} ?>