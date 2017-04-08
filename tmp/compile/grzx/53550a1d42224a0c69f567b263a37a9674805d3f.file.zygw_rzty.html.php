<?php /* Smarty version Smarty-3.1.12, created on 2017-02-04 17:13:39
         compiled from ".\tpl\grzx\zygw_rzty.html" */ ?>
<?php /*%%SmartyHeaderCode:10998582d7a28ef8b38-64002659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53550a1d42224a0c69f567b263a37a9674805d3f' => 
    array (
      0 => '.\\tpl\\grzx\\zygw_rzty.html',
      1 => 1486196984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10998582d7a28ef8b38-64002659',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582d7a28f398d3_63151414',
  'variables' => 
  array (
    'list' => 0,
    'total' => 0,
    'rz' => 0,
    'is_ruzhu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d7a28f398d3_63151414')) {function content_582d7a28f398d3_63151414($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['rz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rz']->key => $_smarty_tpl->tpl_vars['rz']->value){
$_smarty_tpl->tpl_vars['rz']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='rzty_total'>
<li class="rzty_one">
    <div class="tx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['rz']->value['user']['touxiang'];?>
"></div>
    <div class="one_left">
        <p class="rzty_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['rz']->value['user']['nicheng'];?>
</span>
            <span class="pl_time"><?php echo $_smarty_tpl->tpl_vars['rz']->value['user']['addtime'];?>
</span>
        </p>
		<p class="rzty_fwpjs">
            <span><?php echo $_smarty_tpl->tpl_vars['rz']->value['kanfangtime'];?>
在<?php echo $_smarty_tpl->tpl_vars['rz']->value['loupan'];?>
入住</span>
        </p>
        <p class="pingfen" score="<?php echo $_smarty_tpl->tpl_vars['rz']->value['pingjia']['fen'];?>
">
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
        </p>
        <p class="rzty_nr"><?php echo $_smarty_tpl->tpl_vars['rz']->value['pingjia']['cont'];?>
</p>
    </div>
</li>
<?php } ?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['is_ruzhu']->value;?>
" class="is_ruzhu"><?php }} ?>