<?php /* Smarty version Smarty-3.1.12, created on 2017-01-17 19:28:09
         compiled from ".\tpl\bgft\bgft_hxxq_fy.html" */ ?>
<?php /*%%SmartyHeaderCode:21910587dba4e0c9892-32692510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1a20c5b21eb98eeb8239493140e09efcd1b2f5b' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_hxxq_fy.html',
      1 => 1484652485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21910587dba4e0c9892-32692510',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587dba4e0fef10_81067847',
  'variables' => 
  array (
    'row' => 0,
    'total' => 0,
    'list' => 0,
    'lou' => 0,
    'fy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587dba4e0fef10_81067847')) {function content_587dba4e0fef10_81067847($_smarty_tpl) {?><div class="hxt_img" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
)">
</div>
<div class="hxt_p">
	<p style="font-size:18px;color:#333333;"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</p>
	<p>厅室 ：<?php echo $_smarty_tpl->tpl_vars['row']->value['geju'];?>
&nbsp;&nbsp;面积 ：<?php echo $_smarty_tpl->tpl_vars['row']->value['mianji'];?>
平方米</p>
	<p style="font-size: 10px;"><span style="background-color: #cdcdcd"></span>待销(<?php echo $_smarty_tpl->tpl_vars['total']->value['dx_total'];?>
) <span style="background-color: #f0961e"></span>已预订(<?php echo $_smarty_tpl->tpl_vars['total']->value['yd_total'];?>
) <span style="background-color: #ff0000"></span>已销(<?php echo $_smarty_tpl->tpl_vars['total']->value['yx_total'];?>
) 总数(<?php echo $_smarty_tpl->tpl_vars['total']->value['total'];?>
)</p>
</div>
<div class="fh_box">
	<?php  $_smarty_tpl->tpl_vars['lou'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lou']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lou']->key => $_smarty_tpl->tpl_vars['lou']->value){
$_smarty_tpl->tpl_vars['lou']->_loop = true;
?>
		<div>
			<p class="fh_box_p"><?php echo $_smarty_tpl->tpl_vars['lou']->value['louname'];?>
<sup>#</sup><span><?php echo $_smarty_tpl->tpl_vars['lou']->value['danyuanname'];?>
</span></p>
			<ul class="fh_box_ul">
				<?php  $_smarty_tpl->tpl_vars['fy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lou']->value['fang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fy']->key => $_smarty_tpl->tpl_vars['fy']->value){
$_smarty_tpl->tpl_vars['fy']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['fy']->value['status']==0){?>
						<?php if ($_smarty_tpl->tpl_vars['fy']->value['bd']<1800){?>
							<li class="yyd" onclick="fy_one(<?php echo $_smarty_tpl->tpl_vars['fy']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['fy']->value['name'];?>
</li>
						<?php }else{ ?>
							<li onclick="fy_one(<?php echo $_smarty_tpl->tpl_vars['fy']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['fy']->value['name'];?>
</li>
						<?php }?>
					<?php }else{ ?>
						<li class="yx" onclick="fy_one(<?php echo $_smarty_tpl->tpl_vars['fy']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['fy']->value['name'];?>
</li>
					<?php }?>
				<?php } ?>
			</ul>
		</div>
	<?php } ?>
</div><?php }} ?>