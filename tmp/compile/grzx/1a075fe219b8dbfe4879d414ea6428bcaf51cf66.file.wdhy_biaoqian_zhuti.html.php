<?php /* Smarty version Smarty-3.1.12, created on 2017-02-14 10:24:51
         compiled from ".\tpl\grzx\wdhy_biaoqian_zhuti.html" */ ?>
<?php /*%%SmartyHeaderCode:197385895a7d5c0b6c9-38392555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a075fe219b8dbfe4879d414ea6428bcaf51cf66' => 
    array (
      0 => '.\\tpl\\grzx\\wdhy_biaoqian_zhuti.html',
      1 => 1486971125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197385895a7d5c0b6c9-38392555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5895a7d5c53e86_26967794',
  'variables' => 
  array (
    'zhuti' => 0,
    'user' => 0,
    'zt' => 0,
    'im' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5895a7d5c53e86_26967794')) {function content_5895a7d5c53e86_26967794($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['zhuti']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['zt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zt']->key => $_smarty_tpl->tpl_vars['zt']->value){
$_smarty_tpl->tpl_vars['zt']->_loop = true;
?>
<li class="jdal_one">
	<div class="tx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['touxiang'];?>
"></div>
	<div class="one_left">
		<p class="jdal_yhxx">
			<span class="user"><?php echo $_smarty_tpl->tpl_vars['user']->value['nicheng'];?>
</span>
			<span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['zt']->value['total'];?>
</i></span>
		</p>
		<p class="jdal_time">
			<span><?php echo $_smarty_tpl->tpl_vars['zt']->value['addtime'];?>
</span>
		</p>
		<p class="tit" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['zt']->value['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['zt']->value['biaoti'];?>
</p>
		<p class="jdal_nr" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['zt']->value['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['zt']->value['neirong'];?>
</p>
		<?php if ($_smarty_tpl->tpl_vars['zt']->value['tupian']!=''){?>
		<p class="img_box clearfix">
			<?php  $_smarty_tpl->tpl_vars['im'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['im']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zt']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['im']->key => $_smarty_tpl->tpl_vars['im']->value){
$_smarty_tpl->tpl_vars['im']->_loop = true;
?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['im']->value;?>
">
			<?php } ?>
		</p>
		<?php }?>
	</div>
</li>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>这个人好懒，<br>啥八卦也没发布过。</span>
</p>
<?php }?><?php }} ?>