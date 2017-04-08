<?php /* Smarty version Smarty-3.1.12, created on 2017-01-16 10:38:07
         compiled from ".\tpl\appindex\chatuan.html" */ ?>
<?php /*%%SmartyHeaderCode:4384587c2ed3bcac07-24416196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb980cbc881ce5cc863047fb7303dcbc3a6e03ad' => 
    array (
      0 => '.\\tpl\\appindex\\chatuan.html',
      1 => 1484534259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4384587c2ed3bcac07-24416196',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587c2ed3c170c5_50026899',
  'variables' => 
  array (
    'tuan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c2ed3c170c5_50026899')) {function content_587c2ed3c170c5_50026899($_smarty_tpl) {?><div class="tuan_box">
    <div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['tuan']->value['id'];?>
,1,0)' tapmode='tap-active'>
            <p class="youhui">优惠 <?php echo $_smarty_tpl->tpl_vars['tuan']->value['youhui'];?>
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
                <p class="p3">地址：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['dizhi'];?>
</p>
        </div>
    </div>
    <div style="padding:0 10px">
        <p class="tp_btn" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['tuan']->value['id'];?>
,1,0);" tapmode='tap-active'>进入该团</p>
    </div>
</div>
<?php }} ?>