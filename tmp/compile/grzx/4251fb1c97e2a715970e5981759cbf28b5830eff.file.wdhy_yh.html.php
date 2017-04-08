<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:39:58
         compiled from ".\tpl\grzx\wdhy_yh.html" */ ?>
<?php /*%%SmartyHeaderCode:2318758759348241089-91291448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4251fb1c97e2a715970e5981759cbf28b5830eff' => 
    array (
      0 => '.\\tpl\\grzx\\wdhy_yh.html',
      1 => 1486966815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2318758759348241089-91291448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587593482c2b97_98873076',
  'variables' => 
  array (
    'szm' => 0,
    's' => 0,
    'z' => 0,
    'wgzd' => 0,
    'wg' => 0,
    'is_guanzhu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587593482c2b97_98873076')) {function content_587593482c2b97_98873076($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['szm']->value)<1){?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>多关注别人，<br>才能被别人关注，<br>对不？</span>
</p>
<?php }else{ ?>
<ul class="search_zimu">
	<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['szm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
		<a href="#<?php echo $_smarty_tpl->tpl_vars['s']->value['szm'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['szm'];?>
</a>
	<?php } ?>
</ul>
<?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['szm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
?>
<div id="cont_tongxunlu">
    <h6 id="<?php echo $_smarty_tpl->tpl_vars['z']->value['szm'];?>
" name='<?php echo $_smarty_tpl->tpl_vars['z']->value['szm'];?>
'><?php echo $_smarty_tpl->tpl_vars['z']->value['szm'];?>
</h6>
    <ul class="sel_friend">
		<?php  $_smarty_tpl->tpl_vars['wg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wgzd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wg']->key => $_smarty_tpl->tpl_vars['wg']->value){
$_smarty_tpl->tpl_vars['wg']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['wg']->value['szm']==$_smarty_tpl->tpl_vars['z']->value['szm']){?>
        <li uid='<?php echo $_smarty_tpl->tpl_vars['wg']->value['gzid'];?>
' onclick="open_user_page(<?php echo $_smarty_tpl->tpl_vars['wg']->value['gzid'];?>
)" tapmode='tap-active'>
            <img src="<?php echo $_smarty_tpl->tpl_vars['wg']->value['touxiang'];?>
" alt="">
            <p class="yhm_p"><?php echo $_smarty_tpl->tpl_vars['wg']->value['nicheng'];?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['is_guanzhu']->value==3){?>
            <p class="guanzhu_p">互相关注</p>
			<?php }elseif($_smarty_tpl->tpl_vars['is_guanzhu']->value==2){?>
            <p class="guanzhu_p">已关注</p>
			<?php }?>
        </li>
		<?php }?>
		<?php } ?>
    </ul>  
</div>
<?php } ?>
<?php }?><?php }} ?>