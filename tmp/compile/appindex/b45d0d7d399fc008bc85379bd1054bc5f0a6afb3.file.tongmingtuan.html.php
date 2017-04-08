<?php /* Smarty version Smarty-3.1.12, created on 2017-01-15 15:56:02
         compiled from ".\tpl\appindex\tongmingtuan.html" */ ?>
<?php /*%%SmartyHeaderCode:8587b26ecc623f8-27969478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b45d0d7d399fc008bc85379bd1054bc5f0a6afb3' => 
    array (
      0 => '.\\tpl\\appindex\\tongmingtuan.html',
      1 => 1484466959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8587b26ecc623f8-27969478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587b26ecc9b767_47574051',
  'variables' => 
  array (
    'tuan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587b26ecc9b767_47574051')) {function content_587b26ecc9b767_47574051($_smarty_tpl) {?><div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['tuan']->value['id'];?>
,1,0)' tapmode='tap-active'>
    <p class="youhui">目标优惠 <?php echo $_smarty_tpl->tpl_vars['tuan']->value['youhui'];?>
元</p>
    <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['tupian'];?>
"></div>
    <div class="bsgft_list_info">
        <p class="p1">
            <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan'];?>
</span>
            <span class="ming_bg biaoshi">民</span>
			<?php if ($_smarty_tpl->tpl_vars['tuan']->value['tuanyuan']>100){?>
            <span class="re_bg biaoshi">热</span>
			<?php }?>
        </p>
        <p class="p2">
            参团人数：<i class="red_font"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuanyuan'];?>
</i>人
        </p>
        <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['junjia'];?>
元/平方米</p>
        <p class="p3">项目地址：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['dizhi'];?>
</p>
        <span class="cantuan_btn" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['tuan']->value['id'];?>
,1,0)'>我要参团</span>
    </div>
</div><?php }} ?>