<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 17:26:57
         compiled from ".\tpl\bgft\bgft_zygw.html" */ ?>
<?php /*%%SmartyHeaderCode:176435829297ac5daf1-53480840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e2d96058b026eb005b18ea972a91bb8a365c51' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_zygw.html',
      1 => 1486950282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176435829297ac5daf1-53480840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5829297ac93182_97159894',
  'variables' => 
  array (
    'zygw' => 0,
    'zy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829297ac93182_97159894')) {function content_5829297ac93182_97159894($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['zygw']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['zy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zygw']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zy']->key => $_smarty_tpl->tpl_vars['zy']->value){
$_smarty_tpl->tpl_vars['zy']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['zy']->value['user']['is_deng']==1){?>
<div class="zygw_list" uid="<?php echo $_smarty_tpl->tpl_vars['zy']->value['user']['id'];?>
">
	<div class="zygw_tx" onclick="open_zygw_xq(<?php echo $_smarty_tpl->tpl_vars['zy']->value['user']['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['zy']->value['user']['nicheng'];?>
')" tapmode='tap-active'>
		<img src="<?php echo $_smarty_tpl->tpl_vars['zy']->value['user']['touxiang'];?>
">
	</div>
	<div class="zygw_user">
		<p>
			<span class="user"><?php echo $_smarty_tpl->tpl_vars['zy']->value['user']['nicheng'];?>
</span>
			<span><i class="zaixian"></i>在线</span>
			<span class="sixin" onclick="open_sixin_dhk(<?php echo $_smarty_tpl->tpl_vars['zy']->value['user']['id'];?>
)" tapmode='tap-active'>私信</span>
		</p>
		<p class="xmdz pingfen" score='<?php echo $_smarty_tpl->tpl_vars['zy']->value['user']['fen'];?>
'>
			<span class="star1"></span>
			<span class="star1"></span>
			<span class="star1"></span>
			<span class="star1"></span>
			<span class="star1"></span>
		</p>
	</div>
</div>
<?php }?>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/ku3.png">
	<span>报告老板，<br>没发现任何内容</span>
</p>
<?php }?><?php }} ?>