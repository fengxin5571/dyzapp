<?php /* Smarty version Smarty-3.1.12, created on 2017-01-10 18:10:23
         compiled from ".\tpl\grzx\gftgl_yqhy.html" */ ?>
<?php /*%%SmartyHeaderCode:29983582d6b123a7162-63048338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e2c20609ebf36e8e525dc49ca74ec54c3a9e5c9' => 
    array (
      0 => '.\\tpl\\grzx\\gftgl_yqhy.html',
      1 => 1484036926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29983582d6b123a7162-63048338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582d6b12406755_02253005',
  'variables' => 
  array (
    'szm' => 0,
    's' => 0,
    'z' => 0,
    'yqhy' => 0,
    'yao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d6b12406755_02253005')) {function content_582d6b12406755_02253005($_smarty_tpl) {?><p class='caozuo_box'>
    <label><input type="checkbox" onchange="quanxuan(this)" tapmode='tap-active'>全选</label>
    <span class="yjyq" onclick='yjyq()' tapmode='tap-active'>| 一键邀请</span>
</p>
<ul class="search_zimu">
	<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['szm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
		<a href="#<?php echo $_smarty_tpl->tpl_vars['s']->value['szm'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['szm'];?>
</a>
	<?php } ?>
</ul>
<?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['szm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
?>
<div class="zimu_xunhuan" id='<?php echo $_smarty_tpl->tpl_vars['z']->value['szm'];?>
'><?php echo $_smarty_tpl->tpl_vars['z']->value['szm'];?>
</div>
	<?php  $_smarty_tpl->tpl_vars['yao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['yao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yqhy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['yao']->key => $_smarty_tpl->tpl_vars['yao']->value){
$_smarty_tpl->tpl_vars['yao']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['yao']->value['szm']==$_smarty_tpl->tpl_vars['z']->value['szm']){?>
		<ul class="yqhy_ul">
			<li uid="<?php echo $_smarty_tpl->tpl_vars['yao']->value['gzid'];?>
">
				<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['yao']->value['datime']>24){?><?php }else{ ?>disabled<?php }?>>
				<img src="<?php echo $_smarty_tpl->tpl_vars['yao']->value['touxiang'];?>
" alt="">
				<p class="user_name"><?php echo $_smarty_tpl->tpl_vars['yao']->value['nicheng'];?>
</p>
				<?php if ($_smarty_tpl->tpl_vars['yao']->value['datime']>24){?>
				<p uid="<?php echo $_smarty_tpl->tpl_vars['yao']->value['gzid'];?>
" style="float:right;margin-top:15px;color:#f00;font-size:12px;" onclick="yaoqing_one(<?php echo $_smarty_tpl->tpl_vars['yao']->value['gzid'];?>
,this)" tapmode='tap-active'>邀请</p>
				<?php }else{ ?>
				<p style="float:right;margin-top:15px;color:#ccc;font-size:12px;">已邀请</p>
				<?php }?>
			</li>
		</ul>
		<?php }?>
	<?php } ?>
<?php } ?><?php }} ?>