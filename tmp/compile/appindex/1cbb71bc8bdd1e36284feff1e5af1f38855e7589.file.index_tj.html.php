<?php /* Smarty version Smarty-3.1.12, created on 2017-01-16 17:14:16
         compiled from ".\tpl\appindex\index_tj.html" */ ?>
<?php /*%%SmartyHeaderCode:14655586c553faf2b17-96051131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cbb71bc8bdd1e36284feff1e5af1f38855e7589' => 
    array (
      0 => '.\\tpl\\appindex\\index_tj.html',
      1 => 1484557984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14655586c553faf2b17-96051131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_586c553fb1ca82_91214285',
  'variables' => 
  array (
    'tjlist' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c553fb1ca82_91214285')) {function content_586c553fb1ca82_91214285($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tjlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
<?php } ?><?php }} ?>