<?php /* Smarty version Smarty-3.1.12, created on 2015-12-23 09:58:46
         compiled from ".\tpl\crm\crm_visit_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:274645679fc33adcea2-08628291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a204d1adb339dbf9461ee5a2e0a1765ba150874' => 
    array (
      0 => '.\\tpl\\crm\\crm_visit_new.htm',
      1 => 1450835915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274645679fc33adcea2-08628291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5679fc33afb6e1_94237930',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679fc33afb6e1_94237930')) {function content_5679fc33afb6e1_94237930($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="?action=crm_visit&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
			<input type="hidden" name="user_id" lookupname="company.id"  value=""/>
				<dl>
					<dt>姓名：</dt>
					<dd><input type="text" name="name" class="textInput readonly" size="30" lookupname="company.name" value=""/><a class="btnLook" href="?action=crm_visit&do=user" lookupGroup="company" fresh="false" width="500"></a></dd>
				</dl>
				<dl>
					<dt>公司：</dt>
					<dd><input type="text" name="company" class="textInput readonly" size="30" lookupname="company.company" value=""/></dd>
				</dl>
				<dl>
					<dt>职业：</dt>
					<dd><input type="text" name="zhiye" class="textInput readonly" size="30" lookupname="company.zhiye" value=""/></dd>
				</dl>
				<dl>
					<dt>电话：</dt>
					<dd><input type="text" name="mobile" class="textInput readonly" size="30" lookupname="company.mobile" value=""/></dd>
				</dl>
				<dl>
					<dt>备注：</dt>
					<dd><textarea name="text" cols="40" rows="5" class="textInput"></textarea></dd>
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