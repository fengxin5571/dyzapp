<?php /* Smarty version Smarty-3.1.12, created on 2017-02-03 17:57:03
         compiled from ".\tpl\xiaoxi\xiaoxi_zwd_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:1950358297fea8257a1-17462953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc4db2b25949afbeea3f91cc04aad32b44554b55' => 
    array (
      0 => '.\\tpl\\xiaoxi\\xiaoxi_zwd_pl.html',
      1 => 1486115721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1950358297fea8257a1-17462953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58297fea862826_64154955',
  'variables' => 
  array (
    'xiaoxi' => 0,
    'total' => 0,
    'xiao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58297fea862826_64154955')) {function content_58297fea862826_64154955($_smarty_tpl) {?><!-- <label class="quanxuan"><input type='checkbox' onchange='quanxuan(this)'>全选</label> -->
<?php  $_smarty_tpl->tpl_vars['xiao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xiao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xiaoxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xiao']->key => $_smarty_tpl->tpl_vars['xiao']->value){
$_smarty_tpl->tpl_vars['xiao']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="zwd_total">
<div class="xx_list">
    <div class="del_check">
        <input type='checkbox' class="xz_check" value="<?php echo $_smarty_tpl->tpl_vars['xiao']->value['id'];?>
">
    </div>
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
<?php } ?><?php }} ?>