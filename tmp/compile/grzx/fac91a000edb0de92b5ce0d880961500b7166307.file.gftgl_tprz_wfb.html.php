<?php /* Smarty version Smarty-3.1.12, created on 2017-02-04 14:10:53
         compiled from ".\tpl\grzx\gftgl_tprz_wfb.html" */ ?>
<?php /*%%SmartyHeaderCode:1398458735618801678-62023876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac91a000edb0de92b5ce0d880961500b7166307' => 
    array (
      0 => '.\\tpl\\grzx\\gftgl_tprz_wfb.html',
      1 => 1486180434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1398458735618801678-62023876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58735618842424_05762345',
  'variables' => 
  array (
    'tprz' => 0,
    'total' => 0,
    'rz' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58735618842424_05762345')) {function content_58735618842424_05762345($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['rz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tprz']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rz']->key => $_smarty_tpl->tpl_vars['rz']->value){
$_smarty_tpl->tpl_vars['rz']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='tprzwfb_total'/>
<li onclick="tprz_xq2(<?php echo $_smarty_tpl->tpl_vars['rz']->value['id'];?>
)" tapmode='tap-active'>
    <p class="tit"><?php echo $_smarty_tpl->tpl_vars['rz']->value['biaoti'];?>
</p>
    <p class="time">发布时间：<?php echo $_smarty_tpl->tpl_vars['rz']->value['addtime'];?>
</p>
</li>
<?php } ?><?php }} ?>