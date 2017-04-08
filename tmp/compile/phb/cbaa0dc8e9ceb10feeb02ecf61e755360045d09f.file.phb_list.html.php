<?php /* Smarty version Smarty-3.1.12, created on 2017-02-16 14:37:29
         compiled from ".\tpl\phb\phb_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1245558a548a98f6a39-60346393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbaa0dc8e9ceb10feeb02ecf61e755360045d09f' => 
    array (
      0 => '.\\tpl\\phb\\phb_list.html',
      1 => 1487216043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1245558a548a98f6a39-60346393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phb' => 0,
    'n' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a548a993b4e0_15854188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a548a993b4e0_15854188')) {function content_58a548a993b4e0_15854188($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['phb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']++;
?>
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