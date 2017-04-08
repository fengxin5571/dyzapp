<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 17:04:53
         compiled from ".\tpl\bgft\bgft_fyxq_jieguo.html" */ ?>
<?php /*%%SmartyHeaderCode:26952587ed689995329-95805917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d68f153be48a62263bb3679afff43e9da72bcc4' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_fyxq_jieguo.html',
      1 => 1486974600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26952587ed689995329-95805917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587ed6899ddac1_57475275',
  'variables' => 
  array (
    'total' => 0,
    'list' => 0,
    'lou' => 0,
    'fy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587ed6899ddac1_57475275')) {function content_587ed6899ddac1_57475275($_smarty_tpl) {?><div class="hxt_p">
	<p style="font-size: 10px;"><span style="background-color: #cdcdcd"></span>待销(<?php echo $_smarty_tpl->tpl_vars['total']->value['dx_total'];?>
) <span style="background-color: #f0961e"></span>已预订(<?php echo $_smarty_tpl->tpl_vars['total']->value['yd_total'];?>
) <span style="background-color: #ff0000"></span>已销(<?php echo $_smarty_tpl->tpl_vars['total']->value['yx_total'];?>
) 总数(<?php echo $_smarty_tpl->tpl_vars['total']->value['total'];?>
)</p>	
</div>
<?php if (count($_smarty_tpl->tpl_vars['list']->value)>0){?>
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
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../../image/img-cll/ku3.png">
	<span>报告老板，<br>没发现任何内容</span>
</p>
<?php }?><?php }} ?>