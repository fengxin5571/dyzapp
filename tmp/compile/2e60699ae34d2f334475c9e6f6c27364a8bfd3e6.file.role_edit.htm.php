<?php /* Smarty version Smarty-3.1.12, created on 2015-11-07 09:45:43
         compiled from ".\tpl\role_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:252735624a83e49abd1-73072639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e60699ae34d2f334475c9e6f6c27364a8bfd3e6' => 
    array (
      0 => '.\\tpl\\role_edit.htm',
      1 => 1446860642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252735624a83e49abd1-73072639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5624a83e4bd122_83476052',
  'variables' => 
  array (
    'row' => 0,
    'checkbox_role_action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624a83e4bd122_83476052')) {function content_5624a83e4bd122_83476052($_smarty_tpl) {?><script type="text/javascript" > 
$("document").ready(function(){     
     $("#action_all").click(function(){   
		if(this.checked){   
			$("input[name='action[]']").each(function(){this.checked=true;});
			$("#btn1").html("反选");   
		}else{   
			$("input[name='action[]']").each(function(){this.checked=false;});   
			$("#btn1").html("全选"); 
		}   
	 }); 
});
</script>

<div class="page">
	<div class="pageContent">
		<form method="post" action="?action=role&do=updata" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
			<input type="hidden" style="display:none;" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
			<div class="pageFormContent" layoutH="56">
				<dl>
					<dt>角色名称：</dt>
					<dd><input type="text" name="title" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" readonly/></dd>
				</dl>
				<dl>
					<dt>页面权限：</dt>
					<dd><input type="checkbox" id="action_all"><span id="btn1">全选</span></dd>
				</dl>
				<dl style="width:450px">
					<?php echo $_smarty_tpl->tpl_vars['checkbox_role_action']->value;?>

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