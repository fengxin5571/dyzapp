<?php /* Smarty version Smarty-3.1.12, created on 2017-01-22 10:57:19
         compiled from ".\tpl\appindex\gft_list.html" */ ?>
<?php /*%%SmartyHeaderCode:6708586c66ac8868b1-39093960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b641566758e00040a71241b145eb96bc4db4370' => 
    array (
      0 => '.\\tpl\\appindex\\gft_list.html',
      1 => 1485053818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6708586c66ac8868b1-39093960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_586c66ac8acb15_99532561',
  'variables' => 
  array (
    'pagetotal' => 0,
    'bdlist' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c66ac8acb15_99532561')) {function content_586c66ac8acb15_99532561($_smarty_tpl) {?><input type='hidden' id='pagetotal' value='<?php echo $_smarty_tpl->tpl_vars['pagetotal']->value;?>
'>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bdlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['row']->value['tid'];?>
,<?php echo $_smarty_tpl->tpl_vars['row']->value['sign'];?>
,0)'>
    <p class="youhui"><?php if ($_smarty_tpl->tpl_vars['row']->value['sign']==1){?>目标<?php }?>优惠 <?php echo $_smarty_tpl->tpl_vars['row']->value['youhui'];?>
元</p>
    <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
"></div>
    <div class="bsgft_list_info">
        <p class="p1">
            <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan'];?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['sign']==1){?>
			<span class="ming_bg biaoshi">民</span>
			<?php }else{ ?>
			<span class="qi_bg biaoshi">企</span>
			<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['row']->value['tuanyuan']>100){?><span class="re_bg biaoshi">热</span><?php }?>
        </p>
        <p class="p2">
            参团人数：<i class="red_font"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuanyuan'];?>
</i>人
        </p>
        <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['row']->value['junjia'];?>
元/平方米</p>
        <p class="p3">项目地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
        <span class="cantuan_btn" >我要参团</span>
    </div>
</div>
<?php } ?>
<?php }} ?>