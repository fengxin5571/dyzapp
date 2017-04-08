<?php /* Smarty version Smarty-3.1.12, created on 2015-11-16 10:00:01
         compiled from ".\tpl\p2p\web\lunboimg_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:26290564938a186b4d8-83507500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d8225769a74701699d6a9e565f9b57adfd1fd4e' => 
    array (
      0 => '.\\tpl\\p2p\\web\\lunboimg_new.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26290564938a186b4d8-83507500',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564938a1889d22_78507552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564938a1889d22_78507552')) {function content_564938a1889d22_78507552($_smarty_tpl) {?><script type="text/javascript">
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
		<form method="post" id="Myform" action="?action=lunboimg&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layouth="56">
				<dl style="width:500px;">
					<dt>新闻标题：</dt>
					<dd><input type="text" name="title" class="required" size="30" value=""/></dd>
				</dl>
				<dl style="width:500px;">
					<dt>上传图片：</dt>
					<dd><input type="text" name="pic" id="url1" value="" /> <input type="button" id="image1" value="选择图片" /></dd>
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