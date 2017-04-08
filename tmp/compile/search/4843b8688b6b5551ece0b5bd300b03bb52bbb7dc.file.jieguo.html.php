<?php /* Smarty version Smarty-3.1.12, created on 2017-02-18 17:59:57
         compiled from ".\tpl\search\jieguo.html" */ ?>
<?php /*%%SmartyHeaderCode:1527258a80e905ebdd7-43618791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4843b8688b6b5551ece0b5bd300b03bb52bbb7dc' => 
    array (
      0 => '.\\tpl\\search\\jieguo.html',
      1 => 1487411958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1527258a80e905ebdd7-43618791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a80e90621452_26492704',
  'variables' => 
  array (
    'total' => 0,
    'mendian' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a80e90621452_26492704')) {function content_58a80e90621452_26492704($_smarty_tpl) {?><input type="hidden" class="jieguo_total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mendian']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']++;
?>
<li onclick="open_xssjfx(<?php echo $_smarty_tpl->tpl_vars['row']->value['mdid'];?>
)" tapmode='tap-active'>
	<p style="width:30px;font-size:24px;color:#676767"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
</p>
	<div style="-webkit-box-flex: 1;-webkit-flex: 1;flex:1;display: -webkit-box;display: -webkit-flex;display: flex;">
		<div class="cir"><span><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['name'];?>
</span><div class="shuxian"></div></div>
		<span class="xssj_span">
			<?php echo $_smarty_tpl->tpl_vars['row']->value['md'];?>

		</span>
	</div>
	<p style="width:65px;color:#676767"><?php echo $_smarty_tpl->tpl_vars['row']->value['zj'];?>
</p>    
</li>
<?php } ?><?php }} ?>