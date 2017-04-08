<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 16:28:23
         compiled from ".\tpl\cgft\cgft_fl.html" */ ?>
<?php /*%%SmartyHeaderCode:124565825862c44eb08-63704617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce41e101b36c378420f8f51686357126773ef21f' => 
    array (
      0 => '.\\tpl\\cgft\\cgft_fl.html',
      1 => 1486974502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124565825862c44eb08-63704617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5825862c487e91_19867104',
  'variables' => 
  array (
    'fl' => 0,
    'total' => 0,
    'pin' => 0,
    'z' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825862c487e91_19867104')) {function content_5825862c487e91_19867104($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['fl']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['pin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pin']->key => $_smarty_tpl->tpl_vars['pin']->value){
$_smarty_tpl->tpl_vars['pin']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="fl_total">
<div class="pinglun_one pinglun_one_bottom">
    <img src="<?php echo $_smarty_tpl->tpl_vars['pin']->value['user']['touxiang'];?>
" alt="" class="user_img" onclick="open_biaoqian(<?php echo $_smarty_tpl->tpl_vars['pin']->value['user']['id'];?>
)" tapmode='tap-active'>
    <div class="pinglun_one_inner">
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
            <span class="zan_pl" onclick="zan(this,<?php echo $_smarty_tpl->tpl_vars['pin']->value['id'];?>
)" tapmode='tap-active' style="float:right"></span>
			<?php }?>
            <span class="thd_pl" onclick="pl_huifu(<?php echo $_smarty_tpl->tpl_vars['pin']->value['user']['id'];?>
,0)" tapmode='tap-active' style="float:right;margin-right:10px;"></span>
        </p>
        <p style="width:100%;line-height:16px;font-size:10px;color:#666666">
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
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../../image/img-cll/wuxiaoxi.png">
	<span>这个团太冷清了,<br>还没人发布评论。</span>
</p>
<?php }?><?php }} ?>