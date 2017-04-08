<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 17:01:10
         compiled from ".\tpl\cgft\cgft_chengyuan.html" */ ?>
<?php /*%%SmartyHeaderCode:247558291f24638af6-74209118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5df618a2d11faef21dcd1f9c6ed8db40701da838' => 
    array (
      0 => '.\\tpl\\cgft\\cgft_chengyuan.html',
      1 => 1486976467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247558291f24638af6-74209118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58291f2466e161_06436127',
  'variables' => 
  array (
    'row' => 0,
    'cylb' => 0,
    'uid' => 0,
    'cy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58291f2466e161_06436127')) {function content_58291f2466e161_06436127($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['row']->value['tzid']!=''||count($_smarty_tpl->tpl_vars['cylb']->value)>0){?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['tzid']==''){?><?php }else{ ?>
<div class="cy_list">
	<span class="num1"></span>
	<div class="cy_tx">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tz']['touxiang'];?>
" onclick="open_biaoqian(<?php echo $_smarty_tpl->tpl_vars['row']->value['tz']['id'];?>
)" tapmode='tap-active'>
	</div>
	<span class="cy_user"><?php echo $_smarty_tpl->tpl_vars['row']->value['tz']['nicheng'];?>
</span><span class='org_font'>团主</span>
	<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['row']->value['tz']['id']){?><?php }else{ ?>
	<div class="fjdr_btn">
		<?php if ($_smarty_tpl->tpl_vars['row']->value['is_guanzhu']<1){?>
		<span onclick="guanzhu(this,<?php echo $_smarty_tpl->tpl_vars['row']->value['tz']['id'];?>
)" tapmode='tap-active' style="font-size: 12px;color:#ff0000;float:right;padding:0 10px;border-left: 1px solid #ff0000;">关注</span>
		<?php }else{ ?>
		<span onclick="quxiaoguanzhu(this,<?php echo $_smarty_tpl->tpl_vars['row']->value['tz']['id'];?>
)" tapmode='tap-active' style="font-size: 12px;color:#ff0000;float:right;padding:0 10px;border-left: 1px solid #ff0000;">已关注</span>
		<?php }?>
		<span onclick="open_sixin_dhk(<?php echo $_smarty_tpl->tpl_vars['row']->value['tz']['id'];?>
)" tapmode='tap-active' style="font-size: 12px;color:#ff0000;float:right;padding:0 10px;">私信</span>
	</div>
	<?php }?>
</div>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['cy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cylb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cy']->key => $_smarty_tpl->tpl_vars['cy']->value){
$_smarty_tpl->tpl_vars['cy']->_loop = true;
?>
<div class="cy_list">
	<span class="num"></span>
	<div class="cy_tx">
		<img src="<?php echo $_smarty_tpl->tpl_vars['cy']->value['user']['touxiang'];?>
">
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