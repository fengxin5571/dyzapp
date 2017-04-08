<?php /* Smarty version Smarty-3.1.12, created on 2017-01-17 14:29:25
         compiled from ".\tpl\bgft\bgft_txfz.html" */ ?>
<?php /*%%SmartyHeaderCode:26623582934557eb5c4-09514769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c5f9242ff83f0373efb94b5aacaa8f86104f6bd' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_txfz.html',
      1 => 1484618003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26623582934557eb5c4-09514769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58293455828648_57283437',
  'variables' => 
  array (
    'row' => 0,
    'total' => 0,
    'lou' => 0,
    'lo' => 0,
    'fy' => 0,
    'fyy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58293455828648_57283437')) {function content_58293455828648_57283437($_smarty_tpl) {?><!-- <p class="qbhx_tit">全部户型：<span class="blue_font" tapmode='tap-active' onclick="open_qbhx(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)">点击查看</span></p>
<div class="txfz">
	<i class="txfz_tit">挑选房子：</i>
	<div class="qiao_num">
		<span class="is_qiao"><i></i>已销(<?php echo $_smarty_tpl->tpl_vars['total']->value['yx_total'];?>
)</span>
		<span class="is_qiao"><i class="cur"></i>待销(<?php echo $_smarty_tpl->tpl_vars['total']->value['dx_total'];?>
)</span>
		<span class="is_qiao">总数(<?php echo $_smarty_tpl->tpl_vars['total']->value['total'];?>
)</span>
	</div>
</div> -->
<div class="qiao_num clearfix">
	<span><i class="yixiao"></i>已销(10000)</span>
	<span><i class="daixiao"></i>待销(10)</span>
	<span><i class="yuding"></i>已预订(10)</span>
	<span>总数(10)</span>
</div>
<div class="txfz_select">
	<select name="" class="louhao" onchange='louhao()'>
		<option value="0">全部楼号</option>
		<?php  $_smarty_tpl->tpl_vars['lo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lou']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lo']->key => $_smarty_tpl->tpl_vars['lo']->value){
$_smarty_tpl->tpl_vars['lo']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['lo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lo']->value['name'];?>
</option>
		<?php } ?>
	</select>
	<select name="" class="danyuan" onchange='danyuan()'>
		<option value="0">全部单元</option>
	</select>
	<select name="" class="ceng">
		<option value="0">全部户型</option>
	</select>
	<p class="fanghao_box">
		<input type="" name="" class="fanghao" placeholder="在此输入房号">
		<span class="chacun" tapmode='tap-active' onclick="chacun(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)">查询</span>
	</p>
</div>
<p class="txfz_list_tit">1<sup>#</sup><span style="font-size:14px;">1单元</span></p>
<div class="txfz_list clearfix">
	<?php  $_smarty_tpl->tpl_vars['fyy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fyy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fyy']->key => $_smarty_tpl->tpl_vars['fyy']->value){
$_smarty_tpl->tpl_vars['fyy']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['fyy']->value['status']==0){?>
		<span class="org" onclick="hxxq(<?php echo $_smarty_tpl->tpl_vars['fyy']->value['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['fyy']->value['name'];?>
</span>
		<?php }elseif($_smarty_tpl->tpl_vars['fyy']->value['status']==2){?>
		<span class="gray"><?php echo $_smarty_tpl->tpl_vars['fyy']->value['name'];?>
</span>
		<?php }else{ ?>
		<?php }?>
	<?php } ?>
</div><?php }} ?>