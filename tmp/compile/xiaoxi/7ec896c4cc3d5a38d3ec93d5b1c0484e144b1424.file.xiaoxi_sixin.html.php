<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 11:20:59
         compiled from ".\tpl\xiaoxi\xiaoxi_sixin.html" */ ?>
<?php /*%%SmartyHeaderCode:2243058299173732572-64121332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ec896c4cc3d5a38d3ec93d5b1c0484e144b1424' => 
    array (
      0 => '.\\tpl\\xiaoxi\\xiaoxi_sixin.html',
      1 => 1486956035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2243058299173732572-64121332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58299173767bf2_75223818',
  'variables' => 
  array (
    'sixin' => 0,
    'total' => 0,
    'si' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58299173767bf2_75223818')) {function content_58299173767bf2_75223818($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['sixin']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sixin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="sixin_total">
<div class="xx_box_inner clearfix">
	<div class="xx_list" onclick="open_sixin_dhk(<?php echo $_smarty_tpl->tpl_vars['si']->value['user']['id'];?>
,this)" tapmode='tap-active'>
		<div class="xx_list_tx">
			<?php if ($_smarty_tpl->tpl_vars['si']->value['user_type']['type']==1){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['si']->value['user']['touxiang'];?>
">
			<?php }elseif($_smarty_tpl->tpl_vars['si']->value['user_type']['type']==3){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['si']->value['user']['touxiang'];?>
">
			<?php }?>
			<span class="hongdian <?php if ($_smarty_tpl->tpl_vars['si']->value['is_du']==0){?>hongdian2<?php }?>" <?php if ($_smarty_tpl->tpl_vars['si']->value['is_du']!=0){?>style='display:none'<?php }?>></span>
		</div>
		<div class="xx_list_info">
			<p class="xx_list_info_p1">
				<?php if ($_smarty_tpl->tpl_vars['si']->value['user_type']['type']==1){?>
				<span class="xx_list_info_user"><?php echo $_smarty_tpl->tpl_vars['si']->value['user']['nicheng'];?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['si']->value['user_type']['type']==3){?>
				<span class="xx_list_info_user"><?php echo $_smarty_tpl->tpl_vars['si']->value['user']['nicheng'];?>
</span>
				<span class="xx_list_info_zygw">置业顾问</span>
				<?php }?>
				<span class="xx_list_info_time"><?php echo $_smarty_tpl->tpl_vars['si']->value['addtime'];?>
</span>
			</p>
			<p class="txt"><?php echo $_smarty_tpl->tpl_vars['si']->value['neirong'];?>
</p>
		</div>
	</div>
	<p class="del_btn" onclick="sixin_del(this,<?php echo $_smarty_tpl->tpl_vars['si']->value['user']['id'];?>
)" tapmode='tap-active'>删除记录</p>
</div>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>报告老板，<br>没发现任何内容</span>
</p>
<?php }?><?php }} ?>