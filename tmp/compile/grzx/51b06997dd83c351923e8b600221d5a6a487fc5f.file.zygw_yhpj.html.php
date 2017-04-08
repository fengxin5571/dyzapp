<?php /* Smarty version Smarty-3.1.12, created on 2017-02-04 16:29:11
         compiled from ".\tpl\grzx\zygw_yhpj.html" */ ?>
<?php /*%%SmartyHeaderCode:12337582d1992ea3331-26512188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b06997dd83c351923e8b600221d5a6a487fc5f' => 
    array (
      0 => '.\\tpl\\grzx\\zygw_yhpj.html',
      1 => 1486196760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12337582d1992ea3331-26512188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582d1992ed89b8_97318698',
  'variables' => 
  array (
    'list' => 0,
    'total' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d1992ed89b8_97318698')) {function content_582d1992ed89b8_97318698($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='yhpj_total'>
<li class="yhpj_one">
    <div class="tx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['touxiang'];?>
"></div>
    <div class="one_left">
        <p class="yhpj_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['nicheng'];?>
</span>
            <span class="pl_time"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['addtime'];?>
</span>
        </p>
        <p class="yhpj_fwpjs">
            <span>对您服务的评价</span>
        </p>
        <p class="pingfen" score="<?php echo $_smarty_tpl->tpl_vars['row']->value['fen'];?>
">
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
        </p>
        <p class="yhpj_nr"><?php echo $_smarty_tpl->tpl_vars['row']->value['cont'];?>
</p>
    </div>
</li>
<?php } ?><?php }} ?>