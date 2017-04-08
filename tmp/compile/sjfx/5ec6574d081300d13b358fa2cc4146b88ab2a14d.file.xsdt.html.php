<?php /* Smarty version Smarty-3.1.12, created on 2017-02-18 10:24:04
         compiled from ".\tpl\sjfx\xsdt.html" */ ?>
<?php /*%%SmartyHeaderCode:52858a7ab7da47553-02526429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec6574d081300d13b358fa2cc4146b88ab2a14d' => 
    array (
      0 => '.\\tpl\\sjfx\\xsdt.html',
      1 => 1487384585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52858a7ab7da47553-02526429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a7ab7da8fce2_53933273',
  'variables' => 
  array (
    'total' => 0,
    'xsdt' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7ab7da8fce2_53933273')) {function content_58a7ab7da8fce2_53933273($_smarty_tpl) {?><input type="hidden" class="xsdt_total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xsdt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="xsdt">
	<div class="tx cur1"><span><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['name'];?>
</span><p class="shuxian"></p></div>
	<div class="xsdt_right">
		<p class="dizhi"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['zz'];?>
</p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</p>
		<div class="xsdt_info xsdt_info1">
			<i class="yuandian1"></i>
			<span>姓名：<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</span>
			<span>性别：<?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['row']->value['sex']==2){?>女<?php }else{ ?>保密<?php }?></span>
			<span style="margin:0;">年龄：<?php echo $_smarty_tpl->tpl_vars['row']->value['age'];?>
</span>
			<span>联系方式：<?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
</span>
		</div>
		<div class="xsdt_info xsdt_info2">
			<i class="yuandian2"></i>
			<p class="xsdt_info2_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['goods']['name'];?>
</p>
			<p class="shuju">
				<span>数量x<?php echo $_smarty_tpl->tpl_vars['row']->value['shuliang'];?>
</span>
				<span class="money"><i class="red">￥</i><?php echo $_smarty_tpl->tpl_vars['row']->value['goods']['money']*$_smarty_tpl->tpl_vars['row']->value['shuliang'];?>
</span>
			</p>
		</div>
	</div>
</div>
<?php } ?><?php }} ?>