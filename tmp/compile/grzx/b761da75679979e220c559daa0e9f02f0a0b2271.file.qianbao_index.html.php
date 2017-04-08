<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:40:22
         compiled from ".\tpl\grzx\qianbao_index.html" */ ?>
<?php /*%%SmartyHeaderCode:31342582c0d90d462a8-95963423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b761da75679979e220c559daa0e9f02f0a0b2271' => 
    array (
      0 => '.\\tpl\\grzx\\qianbao_index.html',
      1 => 1486957047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31342582c0d90d462a8-95963423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c0d90dad282_16642776',
  'variables' => 
  array (
    'total' => 0,
    'mingxi' => 0,
    'type' => 0,
    'zong' => 0,
    'chong' => 0,
    'ti' => 0,
    'da' => 0,
    'qi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c0d90dad282_16642776')) {function content_582c0d90dad282_16642776($_smarty_tpl) {?><input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='mingxi_total'>
<!-- 全部 -->
<?php if (count($_smarty_tpl->tpl_vars['mingxi']->value)>0){?>
<?php if ($_smarty_tpl->tpl_vars['type']->value==0){?>
<?php  $_smarty_tpl->tpl_vars['zong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mingxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zong']->key => $_smarty_tpl->tpl_vars['zong']->value){
$_smarty_tpl->tpl_vars['zong']->_loop = true;
?>
<li class="jymx_one" onclick="tymx_popup(<?php echo $_smarty_tpl->tpl_vars['zong']->value['id'];?>
)"  tapmode='tap-active'>
	<p style="color:#333333"><?php if ($_smarty_tpl->tpl_vars['zong']->value['type']==3){?>充值<?php }elseif($_smarty_tpl->tpl_vars['zong']->value['type']==4){?>提现<?php }elseif($_smarty_tpl->tpl_vars['zong']->value['type']==1){?><?php if ($_smarty_tpl->tpl_vars['zong']->value['status']==1){?>收到打赏<?php }else{ ?>打赏他人<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['zong']->value['type']==2){?>参团<?php }elseif($_smarty_tpl->tpl_vars['zong']->value['type']==5){?>创团<?php }elseif($_smarty_tpl->tpl_vars['zong']->value['type']==7){?>退团<?php }elseif($_smarty_tpl->tpl_vars['zong']->value['type']==10){?>购房源<?php }?><?php }?><span></span></p>
	<p style="color:#999999;font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['zong']->value['addtime'];?>
</p>
	<p style="clear:both">
	<?php if ($_smarty_tpl->tpl_vars['zong']->value['type']==3){?>
	金币：+<?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb'];?>
元<span></span>金额：<?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb']/5;?>
元<span></span>交易成功
	<?php }elseif($_smarty_tpl->tpl_vars['zong']->value['type']==4){?>
	金币：-<?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb'];?>
元<span></span>金额：<?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb']/5;?>
元
	<?php }elseif($_smarty_tpl->tpl_vars['zong']->value['type']==1){?>
	房团币总额：<?php if ($_smarty_tpl->tpl_vars['zong']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb']+$_smarty_tpl->tpl_vars['zong']->value['ftb_song'];?>
币<span></span>金币：<?php if ($_smarty_tpl->tpl_vars['zong']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb'];?>
币<span></span>银币：<?php if ($_smarty_tpl->tpl_vars['zong']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb_song'];?>
币
	<?php }else{ ?>
	房团币总额：<?php if ($_smarty_tpl->tpl_vars['zong']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb']+$_smarty_tpl->tpl_vars['zong']->value['ftb_song'];?>
币<span></span>金币：<?php if ($_smarty_tpl->tpl_vars['zong']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb'];?>
币<span></span>银币：<?php if ($_smarty_tpl->tpl_vars['zong']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['zong']->value['ftb_song'];?>
币
	<?php }?>
	</p>
</li>
<?php } ?>

<!-- 充值 -->
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==1){?>
<?php  $_smarty_tpl->tpl_vars['chong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mingxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chong']->key => $_smarty_tpl->tpl_vars['chong']->value){
$_smarty_tpl->tpl_vars['chong']->_loop = true;
?>
<li class="jymx_one" onclick="tymx_popup(<?php echo $_smarty_tpl->tpl_vars['chong']->value['id'];?>
)"  tapmode='tap-active'>
	<p style="color:#333333">充值<span></span></p>
	<p style="color:#999999;font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['chong']->value['addtime'];?>
</p>
	<p style="clear:both">金币：+<?php echo $_smarty_tpl->tpl_vars['chong']->value['ftb'];?>
元<span></span>金额：<?php echo $_smarty_tpl->tpl_vars['chong']->value['ftb']/5;?>
元<span></span>交易成功</p>
</li>
<?php } ?>

<!-- 提现 -->
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==2){?>
<?php  $_smarty_tpl->tpl_vars['ti'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ti']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mingxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ti']->key => $_smarty_tpl->tpl_vars['ti']->value){
$_smarty_tpl->tpl_vars['ti']->_loop = true;
?>
<li class="jymx_one" onclick="tymx_popup(<?php echo $_smarty_tpl->tpl_vars['ti']->value['id'];?>
)"  tapmode='tap-active'>
	<p style="color:#333333">提现<span></span></p>
	<p style="color:#999999;font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['ti']->value['addtime'];?>
</p>
	<p style="clear:both">金币：-<?php echo $_smarty_tpl->tpl_vars['ti']->value['ftb'];?>
元<span></span>金额：<?php echo $_smarty_tpl->tpl_vars['ti']->value['ftb']/5;?>
元</p>
</li>
<?php } ?>

<!-- 打赏 -->
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==3){?>
<?php  $_smarty_tpl->tpl_vars['da'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['da']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mingxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['da']->key => $_smarty_tpl->tpl_vars['da']->value){
$_smarty_tpl->tpl_vars['da']->_loop = true;
?>
<li class="jymx_one" onclick="tymx_popup(<?php echo $_smarty_tpl->tpl_vars['da']->value['id'];?>
)"  tapmode='tap-active'>
	<p style="color:#333333"><?php if ($_smarty_tpl->tpl_vars['da']->value['status']==1){?>收到打赏<?php }else{ ?>打赏他人<?php }?><span></span></p>
	<p style="color:#999999;font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['da']->value['addtime'];?>
</p>
	<p style="clear:both">房团币总额：<?php if ($_smarty_tpl->tpl_vars['da']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['da']->value['ftb']+$_smarty_tpl->tpl_vars['da']->value['ftb_song'];?>
币<span></span>金币：<?php if ($_smarty_tpl->tpl_vars['da']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['da']->value['ftb'];?>
币<span></span>银币：<?php if ($_smarty_tpl->tpl_vars['da']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['da']->value['ftb_song'];?>
币</p>
</li>
<?php } ?>

<!-- 其他 -->
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==4){?>
<?php  $_smarty_tpl->tpl_vars['qi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['qi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mingxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['qi']->key => $_smarty_tpl->tpl_vars['qi']->value){
$_smarty_tpl->tpl_vars['qi']->_loop = true;
?>
<li class="jymx_one" onclick="tymx_popup(<?php echo $_smarty_tpl->tpl_vars['qi']->value['id'];?>
)"  tapmode='tap-active'>
	<p style="color:#333333"><?php if ($_smarty_tpl->tpl_vars['qi']->value['type']==2){?>参团<?php }elseif($_smarty_tpl->tpl_vars['qi']->value['type']==5){?>创团<?php }elseif($_smarty_tpl->tpl_vars['qi']->value['type']==7){?>退团<?php }elseif($_smarty_tpl->tpl_vars['qi']->value['type']==10){?>购房源<?php }?><span></span></p>
	<p style="color:#999999;font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['qi']->value['addtime'];?>
</p>
	<p style="clear:both">房团币总额：<?php if ($_smarty_tpl->tpl_vars['qi']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['qi']->value['ftb']+$_smarty_tpl->tpl_vars['qi']->value['ftb_song'];?>
币<span></span>金币：<?php if ($_smarty_tpl->tpl_vars['qi']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['qi']->value['ftb'];?>
币<span></span>银币：<?php if ($_smarty_tpl->tpl_vars['qi']->value['status']==1){?>+<?php }else{ ?>-<?php }?><?php echo $_smarty_tpl->tpl_vars['qi']->value['ftb_song'];?>
币</p>
</li>
<?php } ?>
<?php }?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>古话说得好：<br>人没了，钱还在！</span>
</p>
<?php }?><?php }} ?>