<?php /* Smarty version Smarty-3.1.12, created on 2016-01-13 11:37:43
         compiled from ".\tpl\qyz\lunbo_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:122605625ab1dedb408-82616089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabca96def243faa59942644586914412392c483' => 
    array (
      0 => '.\\tpl\\qyz\\lunbo_new.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122605625ab1dedb408-82616089',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5625ab1df01668_26832180',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625ab1df01668_26832180')) {function content_5625ab1df01668_26832180($_smarty_tpl) {?><script type="text/javascript">
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
		<form method="post" id="Myform" action="?action=lunbo&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layouth="56">
				<dl style="width:500px;">
					<dt>新闻标题：</dt>
					<dd><input type="text" name="title" class="required" size="30" value=""/></dd>
				</dl>
				<dl style="width:500px;">
					<dt>上传图片：</dt>
					<dd><input type="text" name="pic" id="url1" value="" /> <a class="button" id="image1" href="javascript:;"><span>选择图片</span></a></dd>
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