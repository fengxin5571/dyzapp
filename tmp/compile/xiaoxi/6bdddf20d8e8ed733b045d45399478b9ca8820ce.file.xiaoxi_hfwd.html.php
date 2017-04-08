<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 14:38:39
         compiled from ".\tpl\xiaoxi\xiaoxi_hfwd.html" */ ?>
<?php /*%%SmartyHeaderCode:2798558297da02b1ca2-35314770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bdddf20d8e8ed733b045d45399478b9ca8820ce' => 
    array (
      0 => '.\\tpl\\xiaoxi\\xiaoxi_hfwd.html',
      1 => 1486956329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2798558297da02b1ca2-35314770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58297da02eb037_21832596',
  'variables' => 
  array (
    'xiaoxi' => 0,
    'total' => 0,
    'xiao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58297da02eb037_21832596')) {function content_58297da02eb037_21832596($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['xiaoxi']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['xiao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xiao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xiaoxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xiao']->key => $_smarty_tpl->tpl_vars['xiao']->value){
$_smarty_tpl->tpl_vars['xiao']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="hfwd_total">
<div class="xx_box_inner clearfix id1">
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
            <p class="hwde_nr">回复你的<?php if ($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']!=13){?>评论<?php }else{ ?>房八卦<?php }?>：<?php echo $_smarty_tpl->tpl_vars['xiao']->value['pl']['neirong'];?>
</p>
            <p class="txt">来自于：<?php if ($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==11){?><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
购房团<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['xiao']->value['zhuti']['biaoti'];?>
<?php }?></p>
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