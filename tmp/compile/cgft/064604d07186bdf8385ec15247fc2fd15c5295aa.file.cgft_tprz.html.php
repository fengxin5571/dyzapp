<?php /* Smarty version Smarty-3.1.12, created on 2017-01-17 17:56:16
         compiled from ".\tpl\cgft\cgft_tprz.html" */ ?>
<?php /*%%SmartyHeaderCode:2647058257998105af2-80729300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '064604d07186bdf8385ec15247fc2fd15c5295aa' => 
    array (
      0 => '.\\tpl\\cgft\\cgft_tprz.html',
      1 => 1484646939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2647058257998105af2-80729300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5825799812bd53_04496610',
  'variables' => 
  array (
    'tprz' => 0,
    'tz' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825799812bd53_04496610')) {function content_5825799812bd53_04496610($_smarty_tpl) {?><div id="header">
	<div class="header_faxian">
		<div class="faxian_left_btn" onclick="api.closeWin()"></div>
		<h4><?php echo $_smarty_tpl->tpl_vars['tprz']->value['biaoti'];?>
</h4>
	</div>
</div>
<div id="main">
	<div class="tprz_box">
		<div class="tprz_oo" style="margin-top: 20px;">
			<p style="border:none"><?php echo $_smarty_tpl->tpl_vars['tprz']->value['biaoti'];?>
</p>
			<p style="border:none;font-size: 12px;color:#999999">发布人 : 团主 <?php echo $_smarty_tpl->tpl_vars['tz']->value['nicheng'];?>
</p>
			<p style="font-size: 12px;color:#999999">发布时间 : <?php echo $_smarty_tpl->tpl_vars['tprz']->value['addtime'];?>
</p>
		</div>
		<div class="tprz_oo">
			<p>开发公司名称 ：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['kaifashang'];?>
</p>
			<p>谈判时间 ：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['tanpantime'];?>
</p>
			<p>谈判优惠价格 ：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['money'];?>
<?php if ($_smarty_tpl->tpl_vars['tprz']->value['dw']==0){?>元/平方米<?php }else{ ?>元/套<?php }?></p>
		</div>
		<div class="tprz_oo">
			<p>开团时间 ：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['kaituantime'];?>
</p>
			<p>开团要求 ：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['renshu'];?>
人</p>
			<p>本团参与 ：<?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
人</p>
		</div>
		<div class="tprz_oo" style="padding-bottom: 10px;">
			<p style="border:none">谈判内容 ：</p>
			<i><?php echo $_smarty_tpl->tpl_vars['tprz']->value['neirong'];?>
</i>
		</div>
		<div class="pinglun_box">
		</div>
	</div>
</div><?php }} ?>