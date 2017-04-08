<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 17:04:55
         compiled from ".\tpl\bgft\bgft_chengyuan.html" */ ?>
<?php /*%%SmartyHeaderCode:1969558292217152287-03529507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bd4abfe51bb7f258f54fcb7d35e64f9cc759d19' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_chengyuan.html',
      1 => 1486976560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1969558292217152287-03529507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5829221719aa21_46386062',
  'variables' => 
  array (
    'chengyuan' => 0,
    'cy' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829221719aa21_46386062')) {function content_5829221719aa21_46386062($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['chengyuan']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['cy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chengyuan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cy']->key => $_smarty_tpl->tpl_vars['cy']->value){
$_smarty_tpl->tpl_vars['cy']->_loop = true;
?>
<div class="cy_list">
	<span class="num"></span>
	<div class="cy_tx">
		<img src="<?php echo $_smarty_tpl->tpl_vars['cy']->value['user']['touxiang'];?>
" onclick="open_biaoqian(<?php echo $_smarty_tpl->tpl_vars['cy']->value['user']['id'];?>
)" tapmode='tap-active'>
	</div>
	<span class="cy_user"><?php echo $_smarty_tpl->tpl_vars['cy']->value['user']['nicheng'];?>
</span>
	<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['cy']->value['user']['id']){?><?php }else{ ?>
	<div class="fjdr_btn">
		<?php if ($_smarty_tpl->tpl_vars['cy']->value['is_guanzhu']<1){?>
		<span onclick="guanzhu(this,<?php echo $_smarty_tpl->tpl_vars['cy']->value['user']['id'];?>
)" tapmode='tap-active' style="font-size: 12px;color:#ff0000;float:right;padding:0 10px;border-left: 1px solid #ff0000;">关注</span>
		<?php }else{ ?>
		<span onclick="quxiaoguanzhu(this,<?php echo $_smarty_tpl->tpl_vars['cy']->value['user']['id'];?>
)" tapmode='tap-active' style="font-size: 12px;color:#ff0000;float:right;padding:0 10px;border-left: 1px solid #ff0000;">已关注</span>
		<?php }?>
		<span onclick="open_sixin_dhk(<?php echo $_smarty_tpl->tpl_vars['cy']->value['user']['id'];?>
)" tapmode='tap-active' style="font-size: 12px;color:#ff0000;float:right;padding:0 10px;">私信</span>
	</div>
	<?php }?>
</div>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../../image/img-cll/wuxiaoxi.png">
	<span>啊哦~<br>这个团还没人参加了。</span>
</p>
<?php }?><?php }} ?>