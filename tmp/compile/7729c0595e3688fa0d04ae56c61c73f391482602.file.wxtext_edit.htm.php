<?php /* Smarty version Smarty-3.1.12, created on 2015-10-21 09:09:44
         compiled from ".\tpl\wx\wxtext_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:80635626e5d83fa867-08240078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7729c0595e3688fa0d04ae56c61c73f391482602' => 
    array (
      0 => '.\\tpl\\wx\\wxtext_edit.htm',
      1 => 1439175040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80635626e5d83fa867-08240078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'state_arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5626e5d842c1d8_94029808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5626e5d842c1d8_94029808')) {function content_5626e5d842c1d8_94029808($_smarty_tpl) {?><script language="javascript"> 
function show(aa){ 
if(aa==4){
document.getElementById('aa').style.display="";
}else{
document.getElementById('aa').style.display="none";
}
} 
</script>
<div class="page">
	<div class="pageContent">
		<form method="post" action="?action=wxtext&do=updata" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
			<input type="hidden" style="display:none;" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
			<div class="pageFormContent" layoutH="56">
				<dl>
					<dt>所属微信：</dt>
					<dd><input type="text" name="wxuser" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['wxuser'];?>
"/></dd>
				</dl>
				<dl>
					<dt>状态：</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['state_arr']->value;?>
</dd>
				</dl>
				<dl id="aa" style="display:<?php if ($_smarty_tpl->tpl_vars['row']->value['state']!=4){?>none<?php }?>">
					<dt>收到内容：</dt>
					<dd><input type="text" name="keyword" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['keyword'];?>
"/></dd>
				</dl>
				<dl>
					<dt>内容：</dt>
					<dd><textarea name="content" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</textarea></dd>
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