<?php /* Smarty version Smarty-3.1.12, created on 2016-11-14 15:17:56
         compiled from ".\tpl\bgft\bgft_danyuan.html" */ ?>
<?php /*%%SmartyHeaderCode:2778658296076bd7299-62868591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd797ad04083bcfa6389259f0f09f9e4da1027b3' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_danyuan.html',
      1 => 1479107583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2778658296076bd7299-62868591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58296076c0c900_60295828',
  'variables' => 
  array (
    'danyuan' => 0,
    'dan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58296076c0c900_60295828')) {function content_58296076c0c900_60295828($_smarty_tpl) {?><option value="0">全部</option>
<?php  $_smarty_tpl->tpl_vars['dan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danyuan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dan']->key => $_smarty_tpl->tpl_vars['dan']->value){
$_smarty_tpl->tpl_vars['dan']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['dan']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dan']->value['name'];?>
</option>
<?php } ?><?php }} ?>