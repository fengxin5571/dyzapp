<?php /* Smarty version Smarty-3.1.12, created on 2015-12-30 17:54:45
         compiled from ".\tpl\crm\crm_hfjl_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:15264567e0ac99ffa95-38128944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0341fb4487d501ee16688129289631e4ebe22271' => 
    array (
      0 => '.\\tpl\\crm\\crm_hfjl_new.htm',
      1 => 1451469262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15264567e0ac99ffa95-38128944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_567e0ac9a3cb27_44037214',
  'variables' => 
  array (
    'row' => 0,
    'name' => 0,
    'id' => 0,
    'list' => 0,
    'rowa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567e0ac9a3cb27_44037214')) {function content_567e0ac9a3cb27_44037214($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="?action=crm_hfjl&do=<?php if ($_smarty_tpl->tpl_vars['row']->value==''){?>add<?php }else{ ?>updata&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php }?>" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone<?php if ($_smarty_tpl->tpl_vars['name']->value!=''){?>Father<?php }?>);">		
			<div class="pageFormContent" layoutH="56">
			<input type="hidden" name="crm_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
				<dl>
					<dt>公司名称：</dt>
					<dd><input readonly="true" type="text" name="gongshimingcheng" class="required textInput valid readonly" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['gongshimingcheng'];?>
<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/></dd>
				</dl>
				<dl>
					<dt>回访日期：</dt>
					<dd><input type="text" name="huifangriq" class="date textInput valid" size="30" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['chenglishijian']!='0000-00-00'){?><?php echo $_smarty_tpl->tpl_vars['row']->value['huifangriq'];?>
<?php }?>"/></dd>
				</dl>
				<dl class="nowrap">
					<dt>回访情况：</dt>
					<dd><textarea name="huifangqingkuang" cols="60" rows="6" class="textInput"><?php echo $_smarty_tpl->tpl_vars['row']->value['huifangqingkuang'];?>
</textarea></dd>
				</dl>
				<dl>
					<dt>回访人：</dt>
					<dd>
						<select name="huifangren" class="input required combox required">
							<?php  $_smarty_tpl->tpl_vars['rowa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowa']->key => $_smarty_tpl->tpl_vars['rowa']->value){
$_smarty_tpl->tpl_vars['rowa']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['rowa']->value['name'];?>
"  <?php if ($_smarty_tpl->tpl_vars['row']->value['huifangren']=='<{$rowa.name}>'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['rowa']->value['name'];?>
</option>
							<?php } ?>
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