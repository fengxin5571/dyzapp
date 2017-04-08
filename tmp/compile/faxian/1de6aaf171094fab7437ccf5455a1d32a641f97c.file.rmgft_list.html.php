<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 09:28:26
         compiled from ".\tpl\faxian\rmgft_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1770658787811558d79-09885576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1de6aaf171094fab7437ccf5455a1d32a641f97c' => 
    array (
      0 => '.\\tpl\\faxian\\rmgft_list.html',
      1 => 1486948693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770658787811558d79-09885576',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587878115acc26_22113509',
  'variables' => 
  array (
    'rmgft' => 0,
    'total' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587878115acc26_22113509')) {function content_587878115acc26_22113509($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['rmgft']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rmgft']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="rmgft_total">
<div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['id'];?>
,1,0)'>
    <p class="youhui">优惠<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['jiage_min']*1;?>
元</p>
    <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['tu'];?>
"></div>
    <div class="bsgft_list_info">
        <p class="p1">
            <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['tuan'];?>
</span>
            <span class="ming_bg biaoshi">民</span>
            <span class="re_bg biaoshi">热</span>
        </p>
        <p class="p2">
            参团人数：<i class="red_font"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['total'];?>
</i>人
        </p>
        <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['junjia'];?>
元/平方米</p>
        <p class="p3">项目地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['dizhi'];?>
</p>
        <span class="cantuan_btn" >我要参团</span>
    </div>
</div>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/ku3.png">
	<span>报告老板，<br>没发现任何内容</span>
</p>
<?php }?><?php }} ?>