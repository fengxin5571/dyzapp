<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 11:32:32
         compiled from ".\tpl\p2p\companynews_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:1439456249c3cb9f762-99022078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37fabddd2aa4fc33cc182606c1ac2c7fc23d8ae9' => 
    array (
      0 => '.\\tpl\\p2p\\companynews_new.htm',
      1 => 1447126151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1439456249c3cb9f762-99022078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56249c3cbba2a2_96298139',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56249c3cbba2a2_96298139')) {function content_56249c3cbba2a2_96298139($_smarty_tpl) {?><script type="text/javascript">
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
				K('#J_selectImage').click(function() {
					editor.loadPlugin('multiimage', function() {
						editor.plugin.multiImageDialog({
							clickFn : function(urlList) {
								
								$('#picall').slideDown("slow");
								K.each(urlList, function(i, data) {
									$('#picall').append('<input type="hidden" name="picarr[]" value="' + data.url + '" /><img width="120px" height="120px" src=' + data.url + '>');
								});
								editor.hideDialog();
							}
						});
					});
				});
			});
</script>
<div class="page">
	<div class="pageContent">
		<form method="post" id="Myform" action="?action=companynews&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layouth="56">
				<dl style="width:800px;">
					<dt>新闻类别：</dt>
					<dd>
						<select name="sort" class="input requiredcombox required">
							<option value="3" selected>网站公告</option>
							<option value="4">行业新闻</option>
							<option value="5">投标公告</option>
							<option value="6">资费说明</option>
							<option value="7">政策法规</option>
						</select>
					</dd>
				</dl>
				<dl style="width:800px;">
					<dt>新闻标题：</dt>
					<dd><input type="text" name="title" class="required" size="30" value=""/></dd>
				</dl>
				
		
				<dl style="width:800px;">
					<dt>标签：</dt>
					<dd><input type="text" name="biaoqian" size="30" value=""/></dd>
				</dl>
				<dl style="width:800px;height:60px;">
					<dt>新闻简介：</dt>
					<dd><textarea type="text" name="jianjie" style="width: 450px; height:50px;" value=""></textarea></dd>
				</dl>
				<dl style="width:800px;">
					<dt>上传图片：</dt>
					<dd><input type="text" name="pic" id="url1" value="" /> <input type="button" id="image1" value="选择图片" /></dd>
				</dl>
		<!--		
				<dl style="width:800px;">
					<dt>新闻内容轮播图</dt>
					<dd><input type="button" id="J_selectImage" value="批量上传" /></dd>
				</dl>
				<dl id='picall' style="width:820px;height:120px;display:none;">
	
				</dl>
		-->
		
				<dl style="width:800px;">
					<dt>位置排序：</dt>
					<dd style="width:350px;"><input type="text" name="paixu" class="required" size="30" value="1"/>如：排在第一位写"1"</dd>
				</dl>
				<dl style="width:800px;">
					<dt>新闻内容：</dt>
					<dd><textarea name="contenta" class="kindeditor" style="width: 800px; height:500px;"></textarea></dd>
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