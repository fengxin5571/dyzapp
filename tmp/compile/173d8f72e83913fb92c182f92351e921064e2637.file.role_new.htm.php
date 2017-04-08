<?php /* Smarty version Smarty-3.1.12, created on 2015-11-07 09:27:45
         compiled from ".\tpl\role_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:37255626f0a1443001-94949139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '173d8f72e83913fb92c182f92351e921064e2637' => 
    array (
      0 => '.\\tpl\\role_new.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37255626f0a1443001-94949139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5626f0a1469261_67890619',
  'variables' => 
  array (
    'checkbox_role_action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5626f0a1469261_67890619')) {function content_5626f0a1469261_67890619($_smarty_tpl) {?><script type="text/javascript" > 
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
		<form method="post" action="?action=role&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<dl>
					<dt>角色名称：</dt>
					<dd><input type="text" name="title" class="required" size="30" value=""/></dd>
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