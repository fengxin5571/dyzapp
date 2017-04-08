<?php /* Smarty version Smarty-3.1.12, created on 2015-12-25 11:04:20
         compiled from ".\tpl\crm\crm_khjl_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:31777567cb234e87548-11168292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a33c592ee9b1c8c039caf877db35ceced906313' => 
    array (
      0 => '.\\tpl\\crm\\crm_khjl_new.htm',
      1 => 1451012649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31777567cb234e87548-11168292',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_567cb234ea2081_88819713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567cb234ea2081_88819713')) {function content_567cb234ea2081_88819713($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="?action=crm_khjl&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<dl>
					<dt>姓名：</dt>
					<dd><input type="text" name="name" class="required textInput valid" size="30" value=""/></dd>
				</dl>
				<dl>
					<dt>电话：</dt>
					<dd><input type="text" name="mobile" class="phone required textInput valid" alt="请输入电话" size="30" value=""/></dd>
				</dl>
			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				</ul>
			</div>
		</form>
	</div>
</div><?php }} ?>