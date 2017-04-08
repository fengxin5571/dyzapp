<?php /* Smarty version Smarty-3.1.12, created on 2015-11-11 15:46:31
         compiled from ".\tpl\qyz\gsnews_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2849256248c3a8a4861-19007636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5273742747fb25d84886cdf04cc378d44f260244' => 
    array (
      0 => '.\\tpl\\qyz\\gsnews_edit.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2849256248c3a8a4861-19007636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56248c3a8e55f2_31852793',
  'variables' => 
  array (
    'row' => 0,
    'picarr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56248c3a8e55f2_31852793')) {function content_56248c3a8e55f2_31852793($_smarty_tpl) {?><script type="text/javascript">
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
								$('#picall').html('');
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
		<form method="post" action="?action=gsnews&do=update" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
			<div class="pageFormContent" layoutH="56">
				<dl style="width:800px;">
					<dt>新闻类别：</dt>
					<dd>
						<select name="sort" class="input requiredcombox required">
							<option value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['sort']==1){?>selected<?php }?>>公司新闻</option>
							<option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value['sort']==2){?>selected<?php }?>>行业动态</option>
						</select>
					</dd>
				</dl>
				<dl style="width:800px;">
					<dt>新闻标题：</dt>
					<dd><input type="text" name="title" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>标签：</dt>
					<dd><input type="text" name="biaoqian" size="30" value=""/></dd>
				</dl>
				<dl style="width:800px;height:60px;">
					<dt>新闻简介：</dt>
					<dd><textarea type="text" name="jianjie" style="width: 450px; height:50px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['jianjie'];?>
</textarea></dd>
				</dl>
				<dl style="width:800px;height:70px;vertical-align:middle;">
					<dt>上传图片：</dt>
					<dd style="width:350px;"><input type="text" name="pic" id="url1" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" /><a class="button" id="image1" href="javascript:;"><span>选择图片</span></a>
					<?php if ($_smarty_tpl->tpl_vars['row']->value['pic']!=''){?>
					<a target="dialog" href="?action=gsnews&do=location&lo=<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" style="vertical-align:middle" rel="gsnewspic" mask="true"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" height="50px"/></a>
					<?php }?>
					</dd>
				</dl>
				<dl style="width:800px;">
					<dt>新闻内容轮播图</dt>
					<dd><input type="button" id="J_selectImage" value="批量上传" /></dd>
				</dl>
				<dl id='picall' style="width:720px;height:120px;<?php if ($_smarty_tpl->tpl_vars['picarr']->value==''){?>display:none<?php }?>">
					<?php echo $_smarty_tpl->tpl_vars['picarr']->value;?>

				</dl>
				<dl style="width:800px;">
					<dt>位置排序：</dt>
					<dd style="width:350px;"><input type="text" name="paixu" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['paixu'];?>
"/>如：排在第一位写"1"</dd>
				</dl>
				<dl style="width:800px;">
					<dt>新闻内容：</dt>
					<dd><textarea name="contenta" class="kindeditor" style="width: 800px; height: 800px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
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