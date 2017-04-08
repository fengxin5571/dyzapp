<?php /* Smarty version Smarty-3.1.12, created on 2017-01-17 17:39:00
         compiled from ".\tpl\cgft\cgft_thd.html" */ ?>
<?php /*%%SmartyHeaderCode:26320587ddc5f0d9a78-83665552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40c602f14c1d44d2d61d86ce66a5ed5b9b9adfae' => 
    array (
      0 => '.\\tpl\\cgft\\cgft_thd.html',
      1 => 1484645936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26320587ddc5f0d9a78-83665552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587ddc5f140a82_78081743',
  'variables' => 
  array (
    'row' => 0,
    'fl' => 0,
    'pin' => 0,
    'z' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587ddc5f140a82_78081743')) {function content_587ddc5f140a82_78081743($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['row']->value['thd']['id']>0){?>
	<div class="thd_box clearfix">
		<p class="thd_tit">团活动</p>
		<p style="font-size:12px;line-height:22px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['thd']['biaoti'];?>
<span style="float:right;font-size:10px;color:#999999">2016-08-08</span></p>
		<p class="thd_nr"><?php echo $_smarty_tpl->tpl_vars['row']->value['thd']['neirong'];?>
</p>
		<p style="font-size: 12px;float:right;color:#999999" onclick="pl_huifu(0,3,<?php echo $_smarty_tpl->tpl_vars['row']->value['thd']['id'];?>
)" tapmode='tap-active'><span class="thd_pl"></span>评论</p>
	</div>
	<?php  $_smarty_tpl->tpl_vars['pin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pin']->key => $_smarty_tpl->tpl_vars['pin']->value){
$_smarty_tpl->tpl_vars['pin']->_loop = true;
?>
		<div class="pinglun_one">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pin']->value['user']['touxiang'];?>
" alt="" class="user_img">
			<div style="flex:1;-webkit-box-flex:1;-webkit-flex:1;" class='cleearfix'>
				<p class="pinglun_right">
					<span class="pinglun_name"><?php echo $_smarty_tpl->tpl_vars['pin']->value['user']['nicheng'];?>
</span>
					<?php if ($_smarty_tpl->tpl_vars['pin']->value['u_id']>0){?>
						<span style="color:#ff0000;font-size: 12px;line-height: 24px;vertical-align: top;">回复</span>
						<span class="pinglun_name"><?php echo $_smarty_tpl->tpl_vars['pin']->value['u_user']['nicheng'];?>
</span>
					<?php }?>
					<i class="zan_number"><?php echo $_smarty_tpl->tpl_vars['pin']->value['zan_total'];?>
</i>
					<?php if ($_smarty_tpl->tpl_vars['pin']->value['is_zan']>0){?>
						<span class="zan_pl" style="float:right"></span>
					<?php }else{ ?>
						<span class="zan_pl" onclick="zan(<?php echo $_smarty_tpl->tpl_vars['pin']->value['id'];?>
,this)" tapmode='tap-active' style="float:right"></span>
					<?php }?>
					<span class="thd_pl" onclick="pl_huifu(<?php echo $_smarty_tpl->tpl_vars['pin']->value['uid'];?>
,3,<?php echo $_smarty_tpl->tpl_vars['row']->value['thd']['id'];?>
)" tapmode='tap-active' style="float:right;margin-right:10px;"></span>
				</p>
				<p style="width:100%;line-height:16px;font-size: 12px;color:#666666">
					<?php echo $_smarty_tpl->tpl_vars['pin']->value['neirong'];?>

				</p>
				<p style="font-size: 10px;color:#999999;line-height: 20px;">
					<?php echo $_smarty_tpl->tpl_vars['pin']->value['addtime'];?>

				</p>
				<p class="zan_box">
					<?php if (count($_smarty_tpl->tpl_vars['pin']->value['zan_uid'])>0){?>
						<?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pin']->value['zan_uid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['yh']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['yh']['index']++;
?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['yh']['index']<3){?>
								<span><?php echo $_smarty_tpl->tpl_vars['z']->value['user']['nicheng'];?>
</span>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['yh']['index']>1||$_smarty_tpl->getVariable('smarty')->value['foreach']['yh']['index']==count($_smarty_tpl->tpl_vars['pin']->value['zan_uid'])-1){?>
									等
								<?php }else{ ?>
									、
								<?php }?>
							<?php }?>
						<?php } ?>
						<span><?php echo count($_smarty_tpl->tpl_vars['pin']->value['zan_uid']);?>
人</span>觉得很赞
					<?php }?>
				</p>
			</div>
		</div>
	<?php } ?>
<?php }?><?php }} ?>