<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 15:18:59
         compiled from ".\tpl\grzx\zygw_ztlb_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:11993583298e55d39e2-59519326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86977f0e7fcc06cb0ba678f38dc603b511f123d5' => 
    array (
      0 => '.\\tpl\\grzx\\zygw_ztlb_xq.html',
      1 => 1479712732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11993583298e55d39e2-59519326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_583298e5632fd6_31245622',
  'variables' => 
  array (
    'zhuanti' => 0,
    'tu' => 0,
    'pin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583298e5632fd6_31245622')) {function content_583298e5632fd6_31245622($_smarty_tpl) {?><p class="sousuo_zt_user">
	<img src="<?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['user']['touxiang'];?>
" alt="">
	<span><?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['user']['nicheng'];?>
</span>
	<span><?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['addtime'];?>
</span>
	<!-- <span class="pull_right liulan">浏览<em class="liulan_num"><?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['dj'];?>
</em></span> -->
	<span class="pull_right">评论<em class="pl_num"><?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['pinglun_total'];?>
</em></span>
</p>
<div class="ztxq_box" style='padding-top:80px;'>
	<p class="ztxq_tit"><?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['biaoti'];?>
</p>
	<div class="ztxq_con">
		<?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['neirong'];?>

	</div>
	<div class="ztxq_img clearfix">
		<?php  $_smarty_tpl->tpl_vars['tu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuanti']->value['tupian']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tu']->key => $_smarty_tpl->tpl_vars['tu']->value){
$_smarty_tpl->tpl_vars['tu']->_loop = true;
?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['tu']->value;?>
" alt="">
		<?php } ?>
	</div>
</div>
<p class="qbpl">全部评论</p>
<?php  $_smarty_tpl->tpl_vars['pin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuanti']->value['pinglun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pin']->key => $_smarty_tpl->tpl_vars['pin']->value){
$_smarty_tpl->tpl_vars['pin']->_loop = true;
?>
<div class="plnr">
	<div class="plnr_userimg">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pin']->value['user']['touxiang'];?>
" alt="">
	</div>
	<div class="plnr_r">
		<p class="clearfix">
			<span class="plnr_r_user"><?php echo $_smarty_tpl->tpl_vars['pin']->value['user']['nicheng'];?>
</span>
		</p>
		<p class="plnr_txt"><?php echo $_smarty_tpl->tpl_vars['pin']->value['neirong'];?>
</p>
		<p class="plnr_time"><?php echo $_smarty_tpl->tpl_vars['pin']->value['addtime'];?>
</p>
	</div>
</div>
<?php } ?>
<div class="plnr_nav">
	<span class="pl_navbtn" tapmode='tap-active' onclick="ztxq_pl(<?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['id'];?>
)">评论一下</span>
	<span class="shang_navbtn" tapmode='tap-active' onclick="ztxq_dashang(<?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['user']['id'];?>
)"></span>
	<?php if ($_smarty_tpl->tpl_vars['zhuanti']->value['is_zan']<1){?>
	<span class="zan_navbtn" tapmode='tap-active' onclick="ztxq_zan(this,<?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['id'];?>
)"><i><?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['zan_total'];?>
</i></span>
	<?php }else{ ?>
	<span class="zan_navbtn cur"><i><?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['zan_total'];?>
</i></span>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['zhuanti']->value['is_shoucang']<1){?>
	<span class="sc_navbtn" tapmode='tap-active' onclick="ztxq_sc(this,<?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['id'];?>
)"></span>
	<?php }else{ ?>
	<span class="sc_navbtn cur"></span>
	<?php }?>
	<span class="fx_navbtn" tapmode='tap-active' onclick="fenxiang(<?php echo $_smarty_tpl->tpl_vars['zhuanti']->value['id'];?>
)"></span>
</div><?php }} ?>