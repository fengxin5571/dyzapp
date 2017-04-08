<?php /* Smarty version Smarty-3.1.12, created on 2015-11-02 10:00:34
         compiled from ".\tpl\p2p\carborrow_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:317335636c3c24db975-11277571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '565128697670496b798f4178a23e7ce7140361c6' => 
    array (
      0 => '.\\tpl\\p2p\\carborrow_new.htm',
      1 => 1445393727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317335636c3c24db975-11277571',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5636c3c24fdec9_98009328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5636c3c24fdec9_98009328')) {function content_5636c3c24fdec9_98009328($_smarty_tpl) {?><script type="text/javascript">
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
									$('#picall').append('<input type="hidden" name="picArr[]" value="' + data.url + '" /><img width="120px" height="120px" src=' + data.url + '>');
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
		<form method="post" id="Myform" action="?action=enterpriseborrow&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layouth="56">
				<dl style="width:800px;">
					<dt>借款企业</dt>
					<dd>
						<select name="sort" class="input requiredcombox required">
							<option value="1" selected>公司新闻</option>
							<option value="2">行业动态</option>
						</select>
					</dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款金额：</dt>
					<dd><input type="text" name="tenderAmount" class="required" size="30" value=""/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款周期：</dt>
					<dd style="width:350px;"><input type="text" name="borrowTime" class="required" size="30" value="1"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款标题：</dt>
					<dd><input type="text" name="tenderName" size="30" value=""/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>标题图片：</dt>
					<dd><input type="text" name="pic" id="url1" value="" /> <input type="button" id="image1" value="选择图片" /></dd>
				</dl>
				<dl style="width:800px;height:60px;">
					<dt>借款说明：</dt>
					<dd><textarea type="text" name="tenderDescription" style="width: 450px; height:50px;"></textarea></dd>
				</dl>
				<dl style="width:800px;">
					<dt>相关图片</dt>
					<dd><input type="button" id="J_selectImage" value="批量上传" /></dd>
				</dl>
				<dl id='picall' style="width:820px;height:120px;display:none;">
	
				</dl>
				<dl style="width:800px;">
					<dt>年化利率：</dt>
					<dd style="width:350px;"><input type="text" name="rate" class="required" size="30" value="1"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>利息：</dt>
					<dd style="width:350px;"><input type="text" name="rateAmount" class="required" size="30" value="1"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>还款方式：</dt>
					<dd style="width:350px;"><input type="text" name="repaymentType" class="required" size="30" value="1"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款服务费：</dt>
					<dd style="width:350px;"><input type="text" name="serviceAmount" class="required" size="30" value="1"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>风险备用金：</dt>
					<dd style="width:350px;"><input type="text" name="guaranteeAmount" class="required" size="30" value="1"/></dd>
				</dl>
				<dl style="width:800px;height:60px;">
					<dt>风险控制：</dt>
					<dd><textarea type="text" name="tenderDescription" style="width: 450px; height:50px;" value=""></textarea></dd>
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