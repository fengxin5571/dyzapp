<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 17:49:06
         compiled from ".\tpl\zygw_xiaoxi\pinglun_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:165905832bf7f1c0b16-74728467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '718b3cbc7dbdda88343c25ea3e3a0a002aac687e' => 
    array (
      0 => '.\\tpl\\zygw_xiaoxi\\pinglun_pl.html',
      1 => 1479721676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165905832bf7f1c0b16-74728467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5832bf7f1e3061_38178851',
  'variables' => 
  array (
    'xiaoxi' => 0,
    'xi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832bf7f1e3061_38178851')) {function content_5832bf7f1e3061_38178851($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['xi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xiaoxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xi']->key => $_smarty_tpl->tpl_vars['xi']->value){
$_smarty_tpl->tpl_vars['xi']->_loop = true;
?>
<div class="xx_list">
    <div class="del_check">
        <input type='checkbox' class="xz_check" value="<?php echo $_smarty_tpl->tpl_vars['xi']->value['id'];?>
">
    </div>
    <div class="xx_list_info">
        <p class="p1"><?php echo $_smarty_tpl->tpl_vars['xi']->value['neirong'];?>
</p>
        <p class="hwde_nr"><?php echo $_smarty_tpl->tpl_vars['xi']->value['zt']['biaoti'];?>
</p>
        <p class="txt"><?php echo $_smarty_tpl->tpl_vars['xi']->value['addtime'];?>
</p>
    </div>
</div>
<?php } ?><?php }} ?>