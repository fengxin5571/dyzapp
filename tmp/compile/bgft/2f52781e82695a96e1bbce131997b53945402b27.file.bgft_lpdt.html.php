<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 09:50:34
         compiled from ".\tpl\bgft\bgft_lpdt.html" */ ?>
<?php /*%%SmartyHeaderCode:28614587f354511eec7-85894330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f52781e82695a96e1bbce131997b53945402b27' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_lpdt.html',
      1 => 1486950319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28614587f354511eec7-85894330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587f3545185ec9_49414684',
  'variables' => 
  array (
    'zt' => 0,
    'total' => 0,
    'zhu' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f3545185ec9_49414684')) {function content_587f3545185ec9_49414684($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['zt']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['zhu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zhu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zhu']->key => $_smarty_tpl->tpl_vars['zhu']->value){
$_smarty_tpl->tpl_vars['zhu']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="lpdt_total">
<li class="fx_one" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['zhu']->value['id'];?>
)" tapmode='tap-active'>
    <div class="tx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['zhu']->value['user']['touxiang'];?>
"></div>
    <div class="one_left">
        <p class="fx_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['user']['nicheng'];?>
</span>
            <span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['pl_total'];?>
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
 $_from = $_smarty_tpl->tpl_vars['zhu']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/ku3.png">
	<span>报告老板，<br>没发现任何内容</span>
</p>
<?php }?><?php }} ?>