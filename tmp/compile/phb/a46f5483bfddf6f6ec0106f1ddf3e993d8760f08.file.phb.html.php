<?php /* Smarty version Smarty-3.1.12, created on 2017-02-16 14:35:22
         compiled from ".\tpl\phb\phb.html" */ ?>
<?php /*%%SmartyHeaderCode:1209158a50d39352054-37226822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46f5483bfddf6f6ec0106f1ddf3e993d8760f08' => 
    array (
      0 => '.\\tpl\\phb\\phb.html',
      1 => 1487226912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1209158a50d39352054-37226822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a50d39392de3_75760074',
  'variables' => 
  array (
    'phb' => 0,
    'total' => 0,
    'n' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a50d39392de3_75760074')) {function content_58a50d39392de3_75760074($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['phb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']++;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="phb_total">
<li>
	<?php if ($_smarty_tpl->tpl_vars['n']->value==0){?>
	<p style="width:30px;font-size:24px;color:#676767;margin-right:12px">
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration']==1){?><img src="../../image/img-qm/xh1.png" alt="" class="img_1">
	<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration']==2){?><img src="../../image/img-qm/xh2.png" alt="" class="img_1">
	<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration']==3){?><img src="../../image/img-qm/xh3.png" alt="" class="img_1">
	<?php }else{ ?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>

	<?php }?>
	</p>
	<?php }elseif($_smarty_tpl->tpl_vars['n']->value==1){?>
	<p style="width:30px;font-size:24px;color:#676767;margin-right:12px">
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration']==1){?><img src="../../image/img-qm/js1.png" alt="" class="img_1">
	<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration']==2){?><img src="../../image/img-qm/js2.png" alt="" class="img_1">
	<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration']==3){?><img src="../../image/img-qm/js3.png" alt="" class="img_1">
	<?php }else{ ?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>

	<?php }?>
	</p>
	<?php }?>
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