<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:39:58
         compiled from ".\tpl\grzx\wdhy_gzw.html" */ ?>
<?php /*%%SmartyHeaderCode:186295875957f390889-99616508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd94afba1bdd6c7b4d0e9fc5da92da8548d84b90' => 
    array (
      0 => '.\\tpl\\grzx\\wdhy_gzw.html',
      1 => 1486966871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186295875957f390889-99616508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5875957f3e8467_69811101',
  'variables' => 
  array (
    'szm' => 0,
    's' => 0,
    'z' => 0,
    'gzwd' => 0,
    'gz' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875957f3e8467_69811101')) {function content_5875957f3e8467_69811101($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['szm']->value)<1){?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>别灰心，<br>总有人会发现你的好的。</span>
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
		<?php  $_smarty_tpl->tpl_vars['gz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gzwd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gz']->key => $_smarty_tpl->tpl_vars['gz']->value){
$_smarty_tpl->tpl_vars['gz']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['gz']->value['szm']==$_smarty_tpl->tpl_vars['z']->value['szm']){?>
        <li uid='<?php echo $_smarty_tpl->tpl_vars['gz']->value['uid'];?>
' onclick="open_user_page(<?php echo $_smarty_tpl->tpl_vars['gz']->value['uid'];?>
)" tapmode='tap-active'>
            <img src="<?php echo $_smarty_tpl->tpl_vars['gz']->value['touxiang'];?>
" alt="">
			<p class="yhm_p"><?php echo $_smarty_tpl->tpl_vars['gz']->value['nicheng'];?>
</p>
        </li>
		<?php }?>
		<?php } ?>
    </ul>          
</div>
<?php } ?>
<?php }?><?php }} ?>