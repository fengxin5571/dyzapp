<?php /* Smarty version Smarty-3.1.12, created on 2015-11-25 13:27:47
         compiled from ".\tpl\user_edit_pass.htm" */ ?>
<?php /*%%SmartyHeaderCode:23269565546d3b71b01-24380276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c5f5f504eafc8910e10645bf7b9ac4a86692ea' => 
    array (
      0 => '.\\tpl\\user_edit_pass.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23269565546d3b71b01-24380276',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_565546d3b9ba68_40783290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565546d3b9ba68_40783290')) {function content_565546d3b9ba68_40783290($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="?action=user&do=updatapass" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
			<input type="hidden" style="display:none;"  name="id" value="<?php echo $_SESSION['userid'];?>
"/>
			<div class="pageFormContent" layoutH="56">
				<dl>
					<dt>用户名：</dt>
					<dd><input type="text" name="username" class="required" size="30" value="<?php echo $_SESSION['username'];?>
" readonly/></dd>
				</dl>
				<dl>
					<dt>密 码：</dt>
					<dd><input name="password" class="required" type="password" size="30"/></dd>
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