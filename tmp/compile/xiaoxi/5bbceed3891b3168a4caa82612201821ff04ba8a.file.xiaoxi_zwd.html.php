<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 11:26:03
         compiled from ".\tpl\xiaoxi\xiaoxi_zwd.html" */ ?>
<?php /*%%SmartyHeaderCode:2600458297fe0d2d739-23357635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bbceed3891b3168a4caa82612201821ff04ba8a' => 
    array (
      0 => '.\\tpl\\xiaoxi\\xiaoxi_zwd.html',
      1 => 1486956360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2600458297fe0d2d739-23357635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58297fe0d62da2_94252840',
  'variables' => 
  array (
    'xiaoxi' => 0,
    'total' => 0,
    'xiao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58297fe0d62da2_94252840')) {function content_58297fe0d62da2_94252840($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['xiaoxi']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['xiao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xiao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xiaoxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xiao']->key => $_smarty_tpl->tpl_vars['xiao']->value){
$_smarty_tpl->tpl_vars['xiao']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="zwd_total">
	<div class="xx_box_inner">
		<div class="xx_list">
			<div class="xx_list_tx">
				<img src="<?php echo $_smarty_tpl->tpl_vars['xiao']->value['user']['touxiang'];?>
">
			</div>
			<div class="xx_list_info">
				<p class="xx_list_info_p1">
					<span class="xx_list_info_user"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['user']['nicheng'];?>
</span>
					<span class="xx_list_info_time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
</span>
				</p>
				<?php if ($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==14){?>
					<p class="hwde_nr">赞了你的评论</p>
					<p class="txt">来自于：<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
</p>
				<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==15){?>
					<p class="hwde_nr">赞了你的评论</p>
					<p class="txt">来自于房八卦：《<?php echo $_smarty_tpl->tpl_vars['xiao']->value['zhuti']['biaoti'];?>
》</p>
				<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==16){?>
					<p class="hwde_nr">赞了你的房八卦</p>
					<p class="txt">来自于房八卦：《<?php echo $_smarty_tpl->tpl_vars['xiao']->value['zhuti']['biaoti'];?>
》</p>
				<?php }?>
			</div>
		</div>
		<p class="del_btn" onclick="xiaoxi_del(this,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['id'];?>
)" tapmode='tap-active'>删除记录</p>
	</div>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>报告老板，<br>没发现任何内容</span>
</p>
<?php }?><?php }} ?>