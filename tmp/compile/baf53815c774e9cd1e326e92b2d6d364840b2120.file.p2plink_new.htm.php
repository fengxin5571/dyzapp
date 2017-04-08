<?php /* Smarty version Smarty-3.1.12, created on 2015-11-16 11:10:04
         compiled from ".\tpl\p2p\web\p2plink_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:6395649490c96eb49-68641098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baf53815c774e9cd1e326e92b2d6d364840b2120' => 
    array (
      0 => '.\\tpl\\p2p\\web\\p2plink_new.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6395649490c96eb49-68641098',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5649490c989688_51875988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649490c989688_51875988')) {function content_5649490c989688_51875988($_smarty_tpl) {?>
<script type="text/javascript">	
			KindEditor.ready(function(K) {
				var editor = K.editor({
					allowFileManager : true
				});
				K('#image1').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							imageUrl : K('#url1').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url1').val(url);
								editor.hideDialog();
							}
						});
					});
				});
			});
</script>

<div class="page">
	<div class="pageContent">
		<form method="post" id="Myform" action="?action=p2plink&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layouth="56">
				<dl style="width:500px;">
					<dt>网站名称：</dt>
					<dd><input type="text" name="title" class="required" size="30" value=""/></dd>
				</dl>			
				<dl style="width:500px;">
					<dt>网站URL地址：</dt>
					<dd><input type="text" name="url" class="required" size="30" value=""/></dd>
				</dl>
				
				<dl style="width:500px;">
					<dt>上传图片：</dt>
					<dd><input type="text" name="pic" id="url1" class="required" value="" /> <input type="button" id="image1" value="选择图片" /></dd>
				</dl>					
	
				<dl style="width:500px;">
					<dt>位置排序：</dt>
					<dd style="width:350px;"><input type="text" name="paixu" class="required" size="30" value=""/>如：排在第一位写"1"</dd>
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