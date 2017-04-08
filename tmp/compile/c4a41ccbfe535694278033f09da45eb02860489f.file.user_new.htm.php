<?php /* Smarty version Smarty-3.1.12, created on 2015-11-25 09:28:45
         compiled from ".\tpl\user_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:1956656550ecd026255-55636953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4a41ccbfe535694278033f09da45eb02860489f' => 
    array (
      0 => '.\\tpl\\user_new.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1956656550ecd026255-55636953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'select_role_cn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56550ecd04c4b6_66467757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56550ecd04c4b6_66467757')) {function content_56550ecd04c4b6_66467757($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="?action=user&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<dl>
					<dt>用户名：</dt>
					<dd><input type="text" name="username" class="required" size="30" value=""/></dd>
				</dl>
				<dl>
					<dt>姓名：</dt>
					<dd><input type="text" name="name" class="required" size="30" value=""/></dd>
				</dl>
				<dl>
					<dt>密 码：</dt>
					<dd><input name="password" class="required" type="password" size="30"/></dd>
				</dl>
				<dl>
					<dt>角 色：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['select_role_cn']->value;?>
</dd>
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