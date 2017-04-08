<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 16:01:30
         compiled from ".\tpl\zygw\qianbao_bank.html" */ ?>
<?php /*%%SmartyHeaderCode:292125832a9dac0e1c0-54562576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbdab0460d884ca47cd09f79dd05ecc28592213b' => 
    array (
      0 => '.\\tpl\\zygw\\qianbao_bank.html',
      1 => 1479287140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292125832a9dac0e1c0-54562576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bank' => 0,
    'ba' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5832a9dac43837_03405392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832a9dac43837_03405392')) {function content_5832a9dac43837_03405392($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['ba'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ba']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bank']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ba']->key => $_smarty_tpl->tpl_vars['ba']->value){
$_smarty_tpl->tpl_vars['ba']->_loop = true;
?>
<li>
<p>
<span><?php echo $_smarty_tpl->tpl_vars['ba']->value['kaihuhang'];?>
：</span><i class="wh">(尾号<?php echo $_smarty_tpl->tpl_vars['ba']->value['bank_card'];?>
)</i>
<img src="../../image/img-qm/X.png" alt="" class="x_img" onclick="jcyhk(this,<?php echo $_smarty_tpl->tpl_vars['ba']->value['id'];?>
);" tapmode='tap-active'>
</p>
</li>
<?php } ?><?php }} ?>