<?php /* Smarty version Smarty-3.1.12, created on 2017-02-03 17:56:57
         compiled from ".\tpl\xiaoxi\xiaoxi_hfwd_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:2002858297eb97ce784-44134490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb5a95e1f323b95eb3efaeaad95605d81ca1c83' => 
    array (
      0 => '.\\tpl\\xiaoxi\\xiaoxi_hfwd_pl.html',
      1 => 1486115765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2002858297eb97ce784-44134490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58297eb9807b17_33087359',
  'variables' => 
  array (
    'xiaoxi' => 0,
    'total' => 0,
    'xiao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58297eb9807b17_33087359')) {function content_58297eb9807b17_33087359($_smarty_tpl) {?><!-- <label class="quanxuan"><input type='checkbox' onchange='quanxuan(this)'>全选</label> -->
<?php  $_smarty_tpl->tpl_vars['xiao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xiao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xiaoxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xiao']->key => $_smarty_tpl->tpl_vars['xiao']->value){
$_smarty_tpl->tpl_vars['xiao']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="hfwd_total">
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
		<p class="hwde_nr">回复你的<?php if ($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']!=13){?>评论<?php }else{ ?>房八卦<?php }?>：<?php echo $_smarty_tpl->tpl_vars['xiao']->value['pl']['neirong'];?>
</p>
		<p class="txt">来自于：<?php if ($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==11){?><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
购房团<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['xiao']->value['zhuti']['biaoti'];?>
<?php }?></p>
	</div>
</div>
<?php } ?><?php }} ?>