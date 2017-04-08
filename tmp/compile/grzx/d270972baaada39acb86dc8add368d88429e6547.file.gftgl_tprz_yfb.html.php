<?php /* Smarty version Smarty-3.1.12, created on 2017-02-04 14:10:53
         compiled from ".\tpl\grzx\gftgl_tprz_yfb.html" */ ?>
<?php /*%%SmartyHeaderCode:27224587355d024cf79-44892223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd270972baaada39acb86dc8add368d88429e6547' => 
    array (
      0 => '.\\tpl\\grzx\\gftgl_tprz_yfb.html',
      1 => 1486180566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27224587355d024cf79-44892223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587355d028a001_37849171',
  'variables' => 
  array (
    'tprz' => 0,
    'total' => 0,
    'rz' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587355d028a001_37849171')) {function content_587355d028a001_37849171($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['rz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tprz']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rz']->key => $_smarty_tpl->tpl_vars['rz']->value){
$_smarty_tpl->tpl_vars['rz']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='tprzyfb_total'/>
<li onclick="tprz_xq1(<?php echo $_smarty_tpl->tpl_vars['rz']->value['id'];?>
)" tapmode='tap-active'>
    <p class="tit"><?php echo $_smarty_tpl->tpl_vars['rz']->value['biaoti'];?>
</p>
    <p class="time">发布时间：<?php echo $_smarty_tpl->tpl_vars['rz']->value['addtime'];?>
</p>
</li>
<?php } ?><?php }} ?>