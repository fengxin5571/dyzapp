<?php /* Smarty version Smarty-3.1.12, created on 2017-02-05 09:38:11
         compiled from ".\tpl\grzx\wcjdt_min_tjfy.html" */ ?>
<?php /*%%SmartyHeaderCode:1492458968203463876-56716787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af95ce5a056e5a41d629d7d87b2b7c56ff05c14c' => 
    array (
      0 => '.\\tpl\\grzx\\wcjdt_min_tjfy.html',
      1 => 1486258142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1492458968203463876-56716787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tj' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58968203498ef4_27692268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58968203498ef4_27692268')) {function content_58968203498ef4_27692268($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['id'];?>
,1,0)' tapmode='tap-active'>
    <p class="youhui">目标优惠 <?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['jiage_min']*1;?>
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
        <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['junjia']*1;?>
元/平方米</p>
        <p class="p3">项目地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['dizhi'];?>
</p>
        <span class="cantuan_btn">我要参团</span>
    </div>
</div>
<?php } ?><?php }} ?>