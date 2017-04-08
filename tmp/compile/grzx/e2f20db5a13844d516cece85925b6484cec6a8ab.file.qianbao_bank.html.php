<?php /* Smarty version Smarty-3.1.12, created on 2017-01-12 14:49:33
         compiled from ".\tpl\grzx\qianbao_bank.html" */ ?>
<?php /*%%SmartyHeaderCode:31742582c2131ea7439-81397492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2f20db5a13844d516cece85925b6484cec6a8ab' => 
    array (
      0 => '.\\tpl\\grzx\\qianbao_bank.html',
      1 => 1484203576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31742582c2131ea7439-81397492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c2131edcab5_60867523',
  'variables' => 
  array (
    'yhk' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c2131edcab5_60867523')) {function content_582c2131edcab5_60867523($_smarty_tpl) {?><li>
    <p>
        <span>银行卡号：</span><i class="wh">( <?php echo $_smarty_tpl->tpl_vars['yhk']->value;?>
 )</i>
        <img src="../../image/img-qm/X.png" alt="" class="x_img" onclick="jcyhk(this);" tapmode='tap-active'>
    </p>
</li><?php }} ?>