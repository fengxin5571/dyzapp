<?php /* Smarty version Smarty-3.1.12, created on 2017-02-14 09:20:35
         compiled from ".\tpl\faxian\fbg_fjdbg.html" */ ?>
<?php /*%%SmartyHeaderCode:2376587896d0bd7519-76449180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a6fdc94c8597d5053ff5b6705753511329674b5' => 
    array (
      0 => '.\\tpl\\faxian\\fbg_fjdbg.html',
      1 => 1487035231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2376587896d0bd7519-76449180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587896d0c32dd3_03396942',
  'variables' => 
  array (
    'user' => 0,
    'total' => 0,
    'zt' => 0,
    'zhu' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587896d0c32dd3_03396942')) {function content_587896d0c32dd3_03396942($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['user']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['zt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zt']->key => $_smarty_tpl->tpl_vars['zt']->value){
$_smarty_tpl->tpl_vars['zt']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='fjdbg_total'/>
	<?php  $_smarty_tpl->tpl_vars['zhu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zhu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zt']->value['zhuti']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zhu']->key => $_smarty_tpl->tpl_vars['zhu']->value){
$_smarty_tpl->tpl_vars['zhu']->_loop = true;
?>
	<li class="fx_one">
		<div class="tx_img" onclick="open_biaoqian(<?php echo $_smarty_tpl->tpl_vars['zhu']->value['user']['id'];?>
)" tapmode='tap-active'><img src="<?php echo $_smarty_tpl->tpl_vars['zhu']->value['user']['touxiang'];?>
"></div>
		<div class="one_left" onclick="open_zhengwen(<?php echo $_smarty_tpl->tpl_vars['zhu']->value['id'];?>
)" tapmode='tap-active'>
			<p class="fx_yhxx">
				<span class="user"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['user']['nicheng'];?>
</span>
				<span class="user_juli"><?php echo $_smarty_tpl->tpl_vars['zt']->value['juli'];?>
米以内</span>
				<span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['total'];?>
</i></span>
			</p>
			<p class="fx_time">
				<span><?php echo $_smarty_tpl->tpl_vars['zhu']->value['addtime'];?>
</span>
			</p>
			<p class="tit"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['biaoti'];?>
</p>
			<p class="fx_nr"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['neirong'];?>
</p>
			<div class="lp_img_box clearfix">
				<?php if ($_smarty_tpl->tpl_vars['zhu']->value['tupian']!=''){?>
				<div class="lp_img_box_inner">
					<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhu']->value['tup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
					<div class="lp_img_one"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="" class="lp_one_img"></div>
					<?php } ?>
				</div>
				<?php }?>
			</div>
		</div>
	</li>
	<?php } ?>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>被提八卦了，<br>一卦都没有。</span>
</p>
<?php }?>
<?php }} ?>