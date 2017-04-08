<?php /* Smarty version Smarty-3.1.12, created on 2017-02-16 10:20:06
         compiled from ".\tpl\phb\xhb.html" */ ?>
<?php /*%%SmartyHeaderCode:2453258a50c2c0b3082-35918424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '522928aecdae9ff403392d7fbe0ef128cab85a68' => 
    array (
      0 => '.\\tpl\\phb\\xhb.html',
      1 => 1487211603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2453258a50c2c0b3082-35918424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a50c2c0f3e23_84737930',
  'variables' => 
  array (
    'xhb' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a50c2c0f3e23_84737930')) {function content_58a50c2c0f3e23_84737930($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xhb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']++;
?>
<li>
	<p style="width:30px;font-size:24px;color:#676767;margin-right:12px">
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration']==1){?><img src="../../image/img-qm/xh1.png" alt="" class="img_1">
	<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration']==2){?><img src="../../image/img-qm/xh2.png" alt="" class="img_1">
	<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration']==3){?><img src="../../image/img-qm/xh3.png" alt="" class="img_1">
	<?php }else{ ?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>

	<?php }?>
	</p>
	<div style="-webkit-box-flex: 1;-webkit-flex: 1;flex:1;display: -webkit-box;display: -webkit-flex;display: flex;">
		<div class="cir"><span><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['name'];?>
</span><div class="shuxian"></div></div>
		<div class="xssj_span">
			<?php echo $_smarty_tpl->tpl_vars['row']->value['xxdz'];?>

		</div>
	</div>
	<p style="width:65px;color:#676767;font-size: 12px"><?php echo $_smarty_tpl->tpl_vars['row']->value['zj'];?>
元</p>
</li>
<?php } ?><?php }} ?>