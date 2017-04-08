<?php /* Smarty version Smarty-3.1.12, created on 2015-12-30 17:54:35
         compiled from ".\tpl\crm\crm_user_bzxx.htm" */ ?>
<?php /*%%SmartyHeaderCode:3508567cd33842fee3-60477381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72b56ba8d457b68022ef932532c0acc08e2f5e9e' => 
    array (
      0 => '.\\tpl\\crm\\crm_user_bzxx.htm',
      1 => 1451469250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3508567cd33842fee3-60477381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_567cd338459e48_17624021',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567cd338459e48_17624021')) {function content_567cd338459e48_17624021($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="?action=crm_user&do=bzxx_add&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<dl class="nowrap">
					<dt>备注：</dt>
					<dd><textarea name="beizhu" cols="40" rows="3" class="textInput"><?php echo $_smarty_tpl->tpl_vars['row']->value['beizhu'];?>
</textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>企业需求：</dt>
					<dd><textarea name="qiyexuqiu" cols="40" rows="3" class="textInput"><?php echo $_smarty_tpl->tpl_vars['row']->value['qiyexuqiu'];?>
</textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>客户意向：</dt>
					<dd><textarea name="kehuyixiang" cols="40" rows="3" class="textInput"><?php echo $_smarty_tpl->tpl_vars['row']->value['kehuyixiang'];?>
</textarea></dd>
				</dl>
				<dl>
					<dt>是否达成合作：</dt>
					<dd>
						<select name="shifoudachenghezhuo" class="input required combox required">
							<option value="已达成" <?php if ($_smarty_tpl->tpl_vars['row']->value==''||$_smarty_tpl->tpl_vars['row']->value['shifoudachenghezhuo']=='已达成'){?>selected<?php }?>>已达成</option>
							<option value="未达成" <?php if ($_smarty_tpl->tpl_vars['row']->value['shifoudachenghezhuo']=='未达成'){?>selected<?php }?>>未达成</option>
							<option value="正在跟近" <?php if ($_smarty_tpl->tpl_vars['row']->value['shifoudachenghezhuo']=='正在跟近'){?>selected<?php }?>>正在跟近</option>
						</select>
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