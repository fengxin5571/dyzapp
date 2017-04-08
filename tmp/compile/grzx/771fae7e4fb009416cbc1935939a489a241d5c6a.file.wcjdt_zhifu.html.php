<?php /* Smarty version Smarty-3.1.12, created on 2017-01-19 10:33:50
         compiled from ".\tpl\grzx\wcjdt_zhifu.html" */ ?>
<?php /*%%SmartyHeaderCode:32170587c3e15bc4021-55064801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '771fae7e4fb009416cbc1935939a489a241d5c6a' => 
    array (
      0 => '.\\tpl\\grzx\\wcjdt_zhifu.html',
      1 => 1484722061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32170587c3e15bc4021-55064801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587c3e15bfd393_33665170',
  'variables' => 
  array (
    'fy' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c3e15bfd393_33665170')) {function content_587c3e15bfd393_33665170($_smarty_tpl) {?><div class="tgrzs_sj">
	房源已锁定，请在30 分钟内进行支付<br>支付剩余时间：<span class="daojishi"><?php echo 1800-$_smarty_tpl->tpl_vars['fy']->value['timediff'];?>
</span>
	<span style="color:#ff0000;font-size: 10px;margin-left: 10px;" onclick="quxiao()" tapmode='tap-active'>取消订单</span>
</div>
<div class="tgrzs_xy">
	<p>1.团购认购书团购认购书团购认购书团购认购书 团购认购书团购认购书团购认购书团购认购书.</p>
	<p>1.团购认购书团购认购书团购认购书团购认购书 团购认购书团购认购书团购认购书团购认购书.</p>
	<p>1.团购认购书团购认购书团购认购书团购认购书 团购认购书团购认购书团购认购书团购认购书.</p>
	<p>1.团购认购书团购认购书团购认购书团购认购书 团购认购书团购认购书团购认购书团购认购书.</p>
</div>
<div class="tongyi">
	<label><input type="checkbox" onchange="ty(this)" checked>同意《团购认购书协议》及《参团协议》</label>
</div>
<div style="padding:0 10px;box-sizing:border-box;margin-top:10px;">
	<a href="javascript:;" class="zhifu" tapmode='tap-active' onclick="zhifu(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)">前往支付</a>
</div><?php }} ?>