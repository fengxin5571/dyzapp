<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 16:28:05
         compiled from ".\tpl\cgft\cgft_fjdt.html" */ ?>
<?php /*%%SmartyHeaderCode:3240858258ba9959465-86035424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31d61bf8ff0ebbe90e72b2a07b93452fe14daa4f' => 
    array (
      0 => '.\\tpl\\cgft\\cgft_fjdt.html',
      1 => 1486974483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3240858258ba9959465-86035424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58258ba99870c8_14330285',
  'variables' => 
  array (
    'tuan_list' => 0,
    'total' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58258ba99870c8_14330285')) {function content_58258ba99870c8_14330285($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['tuan_list']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tuan_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="fjdt_total">
<div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
,<?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>1<?php }else{ ?>2<?php }?>,0)'>
    <p class="youhui">优惠<?php echo $_smarty_tpl->tpl_vars['row']->value['jiage_min']*1;?>
元</p>
    <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
"></div>
    <div class="bsgft_list_info">
        <p class="p1">
            <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['loupan'];?>
</span>
            <span class="ming_bg biaoshi">民</span>
            <span class="re_bg biaoshi">热</span>
        </p>
        <p class="p2">
            参团人数：<i class="red_font"><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
</i>人
        </p>
        <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['row']->value['junjia']*1;?>
元/平方米</p>
        <p class="p3">项目地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
        <span class="cantuan_btn" >我要参团</span>
    </div>
</div>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../../image/img-cll/wuxiaoxi.png">
	<span>暂未发现附近购房团</span>
</p>
<?php }?><?php }} ?>