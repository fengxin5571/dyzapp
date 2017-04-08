<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:42:55
         compiled from ".\tpl\faxian\fbg_xdxx.html" */ ?>
<?php /*%%SmartyHeaderCode:4052587894d64e3aa4-94996202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '855e111c7e8463c83462241062e1a8a38bc1d6c9' => 
    array (
      0 => '.\\tpl\\faxian\\fbg_xdxx.html',
      1 => 1486970860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4052587894d64e3aa4-94996202',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587894d652ff67_24669737',
  'variables' => 
  array (
    'zhuti' => 0,
    'total' => 0,
    'zt' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587894d652ff67_24669737')) {function content_587894d652ff67_24669737($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['zhuti']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['zt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zt']->key => $_smarty_tpl->tpl_vars['zt']->value){
$_smarty_tpl->tpl_vars['zt']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='xdxx_total'/>
<li class="fx_one" onclick="open_zhengwen(<?php echo $_smarty_tpl->tpl_vars['zt']->value['id'];?>
)" tapmode='tap-active'>
    <div class="tx_img"><img src="http://img.51fth.com/themes/images/img_rtt/user.png"></div>
    <div class="one_left">
        <p class="fx_yhxx">
            <span class="user">匿名用户</span>
            <span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['zt']->value['total'];?>
</i></span>
        </p>
        <p class="fx_time">
            <span><?php echo $_smarty_tpl->tpl_vars['zt']->value['addtime'];?>
</span>
        </p>
        <p class="tit"><?php echo $_smarty_tpl->tpl_vars['zt']->value['biaoti'];?>
</p>
        <p class="fx_nr"><?php echo $_smarty_tpl->tpl_vars['zt']->value['neirong'];?>
</p>
        <div class="lp_img_box clearfix">
			<?php if ($_smarty_tpl->tpl_vars['zt']->value['tupian']!=''){?>
            <div class="lp_img_box_inner">
				<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zt']->value['tup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                <div class="lp_img_one"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="" class="lp_one_img"></div>
				<?php } ?>
            </div>
			<?php }?>
        </div>
    </div>
</li>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>小道消息被风刮跑了。</span>
</p>
<?php }?><?php }} ?>