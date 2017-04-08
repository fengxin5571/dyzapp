<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 18:36:31
         compiled from ".\tpl\cgft\cgft_tprz_list.html" */ ?>
<?php /*%%SmartyHeaderCode:167465879e10c5c36a7-05946943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed6e3e8d87de86294859f7907b7edf99d73f546f' => 
    array (
      0 => '.\\tpl\\cgft\\cgft_tprz_list.html',
      1 => 1486978650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167465879e10c5c36a7-05946943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5879e10c5f8d29_13674104',
  'variables' => 
  array (
    'tanpan' => 0,
    'total' => 0,
    'tan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5879e10c5f8d29_13674104')) {function content_5879e10c5f8d29_13674104($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['tanpan']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['tan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tanpan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tan']->key => $_smarty_tpl->tpl_vars['tan']->value){
$_smarty_tpl->tpl_vars['tan']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="tprz_total">
<li onclick="tanpanrizhi(<?php echo $_smarty_tpl->tpl_vars['tan']->value['id'];?>
);" tapmode='tap-active' class="gftbj">
    <p class="p1"><?php echo $_smarty_tpl->tpl_vars['tan']->value['biaoti'];?>
</p>
    <p class="p2">发布时间 : <?php echo $_smarty_tpl->tpl_vars['tan']->value['addtime'];?>
</p>
</li>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../../image/img-cll/wuxiaoxi.png">
	<span>该团团主还未发布<br>任何谈判日志。</span>
</p>
<?php }?><?php }} ?>