<?php /* Smarty version Smarty-3.1.12, created on 2017-02-04 14:17:27
         compiled from ".\tpl\grzx\gftgl_thd_gl.html" */ ?>
<?php /*%%SmartyHeaderCode:14557582d6506b98843-65787498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76cdcf10724dbd5c36450a90327e1ac6a56b9212' => 
    array (
      0 => '.\\tpl\\grzx\\gftgl_thd_gl.html',
      1 => 1486189017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14557582d6506b98843-65787498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582d6506bcdeb3_41395535',
  'variables' => 
  array (
    'thd' => 0,
    'total' => 0,
    'hd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d6506bcdeb3_41395535')) {function content_582d6506bcdeb3_41395535($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['hd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hd']->key => $_smarty_tpl->tpl_vars['hd']->value){
$_smarty_tpl->tpl_vars['hd']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='thd_total'/>
<li onclick="thd_xq(<?php echo $_smarty_tpl->tpl_vars['hd']->value['id'];?>
)" tapmode='tap-active'>
    <p class="tit"><?php echo $_smarty_tpl->tpl_vars['hd']->value['biaoti'];?>
</p>
    <p class="time"><?php echo $_smarty_tpl->tpl_vars['hd']->value['neirong'];?>
</p>
</li>
<?php } ?><?php }} ?>