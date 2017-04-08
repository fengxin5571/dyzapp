<?php /* Smarty version Smarty-3.1.12, created on 2017-01-18 11:39:02
         compiled from ".\tpl\bgft\bgft_fyxq.html" */ ?>
<?php /*%%SmartyHeaderCode:31624587ed3292cf196-59616655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6404db85c4a0afb1d2cd4a1d4beb42c8fec17661' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_fyxq.html',
      1 => 1484710740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31624587ed3292cf196-59616655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587ed32931b636_14060504',
  'variables' => 
  array (
    'lh' => 0,
    'lou' => 0,
    'hx' => 0,
    'hu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587ed32931b636_14060504')) {function content_587ed32931b636_14060504($_smarty_tpl) {?><div class="fyxq_h1">
	<div style="border-left: none;">
		<select name="" id="lh" onchange="xzlh()">
			<option value="0">选择楼号</option>
			<?php  $_smarty_tpl->tpl_vars['lou'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lou']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lou']->key => $_smarty_tpl->tpl_vars['lou']->value){
$_smarty_tpl->tpl_vars['lou']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['lou']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lou']->value['name'];?>
</option>
			<?php } ?>
		</select>
	</div>
	<div style="text-align: center">
		<select name="" id="dy" onchange="xzdy()">
			<option value="">选择单元</option>
		</select>
	</div>
	<div style="text-align:right">
		<select name="" id="hx" onchange="xzhx()">
			<option value="">选择户型</option>
			<?php  $_smarty_tpl->tpl_vars['hu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hx']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hu']->key => $_smarty_tpl->tpl_vars['hu']->value){
$_smarty_tpl->tpl_vars['hu']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['hu']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['hu']->value['name'];?>
</option>
			<?php } ?>
		</select>
	</div>
</div>
<div class="fyxq_h2">
	<div style="flex: 2-webkit-box-flex: 2;-webkit-flex:2; ">
		<input type="search" placeholder="请输入要查询的房号" class="fh_qm">
	</div>
	<div style="flex: 1;-webkit-flex: 1;-webkit-box-flex: 1; border-left: 1px solid #a6a6a6" onclick="sqfy(id)">
		<p style="text-align:center;line-height: 20px;color:#ff0000">申请房源</p>
	</div>
</div><?php }} ?>