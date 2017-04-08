<?php /* Smarty version Smarty-3.1.12, created on 2017-04-08 15:28:28
         compiled from ".\tpl\txl\txl.html" */ ?>
<?php /*%%SmartyHeaderCode:2482658a41112840166-67915359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d7161633ec70084efd3c17c779f4d9eb81eb679' => 
    array (
      0 => '.\\tpl\\txl\\txl.html',
      1 => 1491636464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2482658a41112840166-67915359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a41112880ef5_17295714',
  'variables' => 
  array (
    'zb_user' => 0,
    'zbrow' => 0,
    'szm' => 0,
    's' => 0,
    'txl' => 0,
    'txlrow' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a41112880ef5_17295714')) {function content_58a41112880ef5_17295714($_smarty_tpl) {?><li onclick="zhankai(this)" tapmode='tap-active' zk='1'>
	<div class="cir"><span>总部</span><div class="shuxian"></div></div>
	<p>总部</p>
</li>
<div class="ej_box">
	<?php  $_smarty_tpl->tpl_vars['zbrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zbrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zb_user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zbrow']->key => $_smarty_tpl->tpl_vars['zbrow']->value){
$_smarty_tpl->tpl_vars['zbrow']->_loop = true;
?>
	<div class="ej_tx" tapmode='tap-active'>
		<div class="cir" onclick="open_dhk(<?php echo $_smarty_tpl->tpl_vars['zbrow']->value['id'];?>
)">
			<span><?php echo $_smarty_tpl->tpl_vars['zbrow']->value['name'];?>
</span>
			<div class="shuxian"></div>
		</div>
		<p class="check"><?php echo $_smarty_tpl->tpl_vars['zbrow']->value['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['zbrow']->value['zbname']!=''){?>- <?php echo $_smarty_tpl->tpl_vars['zbrow']->value['zbname'];?>
<?php }else{ ?><?php }?></p>
	</div>
	<?php } ?>
</div>
<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['szm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
<p class="zm_a"><?php echo $_smarty_tpl->tpl_vars['s']->value['szm'];?>
</p>
	<?php  $_smarty_tpl->tpl_vars['txlrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['txlrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['txl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['txlrow']->key => $_smarty_tpl->tpl_vars['txlrow']->value){
$_smarty_tpl->tpl_vars['txlrow']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['txlrow']->value['szm']==$_smarty_tpl->tpl_vars['s']->value['szm']){?>
	<li onclick="zhankai(this)" tapmode='tap-active' zk='1'>
		<div class="cir"><span><?php echo $_smarty_tpl->tpl_vars['txlrow']->value['name'];?>
</span><div class="shuxian"></div></div>
		<p><?php echo $_smarty_tpl->tpl_vars['txlrow']->value['fgsname'];?>
-<?php echo $_smarty_tpl->tpl_vars['txlrow']->value['name'];?>
</p>
	</li>
		<div class="ej_box">   
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['txlrow']->value['yh_user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<div class="ej_tx"  tapmode='tap-active'>
				<div class="cir" onclick="open_dhk(<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['id'];?>
)">
					<span><?php if ($_smarty_tpl->tpl_vars['row']->value['user']['roleid']==3){?>负责人<?php }else{ ?>专员<?php }?></span>
					<div class="shuxian"></div>
				</div>
				<p class='check'><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['name'];?>
</p>
			</div>
			<?php } ?>
		</div> 
	<?php }?>
	<?php } ?>
<?php } ?><?php }} ?>