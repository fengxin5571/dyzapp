<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 16:25:13
         compiled from ".\tpl\grzx\wdhy_cjgft.html" */ ?>
<?php /*%%SmartyHeaderCode:264305875d36aef46d4-05651049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9686f637ff81ef5cc0fede7b7aa5e6494c7ec9b2' => 
    array (
      0 => '.\\tpl\\grzx\\wdhy_cjgft.html',
      1 => 1486966692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264305875d36aef46d4-05651049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5875d36b0118c6_42627759',
  'variables' => 
  array (
    'buy' => 0,
    'tuan' => 0,
    'btuan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875d36b0118c6_42627759')) {function content_5875d36b0118c6_42627759($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['buy']->value!=''||$_smarty_tpl->tpl_vars['tuan']->value!=''){?>
<?php if ($_smarty_tpl->tpl_vars['buy']->value!=''){?>
<?php  $_smarty_tpl->tpl_vars['btuan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btuan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btuan']->key => $_smarty_tpl->tpl_vars['btuan']->value){
$_smarty_tpl->tpl_vars['btuan']->_loop = true;
?>
<div class="bsgft_list bsgft_list1" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['btuan']->value['tuan']['id'];?>
,2,0)'>
    <p class="youhui">目标优惠 <?php echo $_smarty_tpl->tpl_vars['btuan']->value['tuan']['pjyhj'];?>
元</p>
    <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['btuan']->value['tuan']['img'];?>
"></div>
    <div class="bsgft_list_info">
        <p class="p1">
            <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['btuan']->value['tuan']['name'];?>
</span>
            <span class="qi_bg biaoshi">企</span>
            <span class="re_bg biaoshi">热</span>
        </p>
        <p class="p2">
            参团人数：<i class="red_font"><?php echo $_smarty_tpl->tpl_vars['btuan']->value['tuan']['total'];?>
</i>人
        </p>
        <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['btuan']->value['tuan']['slbjj'];?>
元/平方米</p>
        <p class="p3">地址：<?php echo $_smarty_tpl->tpl_vars['btuan']->value['tuan']['dizhi'];?>
</p>
        <span class="cantuan_btn">我要参团</span>
    </div>
</div>
<?php } ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tuan']->value!=''){?>
<div class="bsgft_list bsgft_list1" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['tuan']->value['id'];?>
,1,0)'>
    <p class="youhui">目标优惠 <?php echo $_smarty_tpl->tpl_vars['tuan']->value['jiage_min']*1;?>
元</p>
    <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['tu'];?>
"></div>
    <div class="bsgft_list_info">
        <p class="p1">
            <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan'];?>
</span>
            <span class="ming_bg biaoshi">民</span>
            <span class="re_bg biaoshi">热</span>
        </p>
        <p class="p2">
            参团人数：<i class="red_font"><?php if ($_smarty_tpl->tpl_vars['tuan']->value['tzid']>0){?><?php echo $_smarty_tpl->tpl_vars['tuan']->value['total']+1;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['tuan']->value['total'];?>
<?php }?></i>人
        </p>
        <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['junjia']*1;?>
元/平方米</p>
        <p class="p3">地址：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['dizhi'];?>
</p>
        <span class="cantuan_btn">我要参团</span>
    </div>
</div>
<?php }?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>不参团，<br>闲的没事上来玩啊？！</span>
</p>
<?php }?><?php }} ?>