<?php /* Smarty version Smarty-3.1.12, created on 2017-02-04 16:30:44
         compiled from ".\tpl\grzx\zygw_kfty.html" */ ?>
<?php /*%%SmartyHeaderCode:22848582d77bcdfc154-64982617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfa096e42bea3aa5a3bcc638488967602dd3411' => 
    array (
      0 => '.\\tpl\\grzx\\zygw_kfty.html',
      1 => 1486196960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22848582d77bcdfc154-64982617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582d77bce260b3_54155734',
  'variables' => 
  array (
    'list' => 0,
    'total' => 0,
    'kf' => 0,
    'is_kan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d77bce260b3_54155734')) {function content_582d77bce260b3_54155734($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['kf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kf']->key => $_smarty_tpl->tpl_vars['kf']->value){
$_smarty_tpl->tpl_vars['kf']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='kfty_total'>
<li class="kfty_one">
    <div class="tx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['kf']->value['user']['touxiang'];?>
"></div>
    <div class="one_left">
        <p class="kfty_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['kf']->value['user']['nicheng'];?>
</span>
            <span class="pl_time"><?php echo $_smarty_tpl->tpl_vars['kf']->value['addtime'];?>
</span>
        </p>
        <p class="kfty_fwpjs">
            <span><?php echo $_smarty_tpl->tpl_vars['kf']->value['kanfangtime'];?>
在<?php echo $_smarty_tpl->tpl_vars['kf']->value['loupan'];?>
看房</span>
        </p>
        <p class="pingfen" score="<?php echo $_smarty_tpl->tpl_vars['kf']->value['pingjia']['fen'];?>
">
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
        </p>
        <p class="kfty_nr"><?php echo $_smarty_tpl->tpl_vars['kf']->value['pingjia']['cont'];?>
</p>
    </div>
</li>
<?php } ?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['is_kan']->value;?>
" class="is_kan"><?php }} ?>