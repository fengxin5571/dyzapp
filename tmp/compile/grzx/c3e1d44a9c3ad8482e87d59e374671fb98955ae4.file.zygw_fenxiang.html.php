<?php /* Smarty version Smarty-3.1.12, created on 2017-02-04 17:12:18
         compiled from ".\tpl\grzx\zygw_fenxiang.html" */ ?>
<?php /*%%SmartyHeaderCode:163095875e909100404-70349346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3e1d44a9c3ad8482e87d59e374671fb98955ae4' => 
    array (
      0 => '.\\tpl\\grzx\\zygw_fenxiang.html',
      1 => 1486199483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163095875e909100404-70349346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5875e90912a357_49066003',
  'variables' => 
  array (
    'list' => 0,
    'total' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875e90912a357_49066003')) {function content_5875e90912a357_49066003($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='fenxiang_total'>
<li class="fx_one">
    <div class="tx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['touxiang'];?>
"></div>
    <div class="one_left">
        <p class="fx_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['nicheng'];?>
</span>
            <span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
</i></span>
        </p>
        <p class="fx_time">
            <span><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</span>
        </p>
        <p class="tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoti'];?>
</p>
        <p class="fx_nr"><?php echo $_smarty_tpl->tpl_vars['row']->value['neirong'];?>
</p>
    </div>
</li>
<?php } ?><?php }} ?>