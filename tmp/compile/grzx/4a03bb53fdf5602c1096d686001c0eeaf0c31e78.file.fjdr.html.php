<?php /* Smarty version Smarty-3.1.12, created on 2016-12-26 16:51:41
         compiled from ".\tpl\grzx\fjdr.html" */ ?>
<?php /*%%SmartyHeaderCode:6814582e5afcea7ce2-05731011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a03bb53fdf5602c1096d686001c0eeaf0c31e78' => 
    array (
      0 => '.\\tpl\\grzx\\fjdr.html',
      1 => 1482218483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6814582e5afcea7ce2-05731011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582e5afcee1076_95587465',
  'variables' => 
  array (
    'fjdr' => 0,
    'fj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582e5afcee1076_95587465')) {function content_582e5afcee1076_95587465($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['fj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fjdr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fj']->key => $_smarty_tpl->tpl_vars['fj']->value){
$_smarty_tpl->tpl_vars['fj']->_loop = true;
?>
<div class="fjdr_box">
	<div class="fjdr">							
		<div class="fjdr_img">
			<img src="<?php echo $_smarty_tpl->tpl_vars['fj']->value['user']['touxiang'];?>
" alt="">
		</div>
		<div class="fjdr_user">
			<p><span class="yhm"><?php echo $_smarty_tpl->tpl_vars['fj']->value['user']['nicheng'];?>
</span><span class="juli"><?php echo $_smarty_tpl->tpl_vars['fj']->value['juli'];?>
米内</span></p>
			<p class="gft_name"><?php if ($_smarty_tpl->tpl_vars['fj']->value['user']['quanxian']==1){?><?php echo $_smarty_tpl->tpl_vars['fj']->value['tuan']['loupan'];?>
·购房团 团主<?php }elseif($_smarty_tpl->tpl_vars['fj']->value['user']['quanxian']==2){?><?php echo $_smarty_tpl->tpl_vars['fj']->value['tuan']['loupan'];?>
·购房团 团员<?php }?></p>
		</div>
		<div class="fjdr_btn">
			<span class="sixin" onclick="sixin(<?php echo $_smarty_tpl->tpl_vars['fj']->value['user']['id'];?>
)" tapmode='tap-active'>私信</span>	
			<?php if ($_smarty_tpl->tpl_vars['fj']->value['is_guanzhu']<1){?>
			<span class="guanzhu" onclick="guanzhu(this,<?php echo $_smarty_tpl->tpl_vars['fj']->value['user']['id'];?>
)" tapmode='tap-active'>关注</span>
			<?php }else{ ?>
			<span class="guanzhu" onclick="quxiaoguanzhu(this,<?php echo $_smarty_tpl->tpl_vars['fj']->value['user']['id'];?>
)" tapmode='tap-active'>已关注</span>
			<?php }?>
		</div>
	</div>
	<p class="yaoqing hui">邀请入团</p>
	<!-- <p class="yaoqing org" onclick="yaoqing(1,this)" tapmode='tap-active' gftname='恒大绿洲' user='靓靓的你'>邀请入团</p> -->
</div>
<?php } ?><?php }} ?>