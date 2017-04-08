<?php /* Smarty version Smarty-3.1.12, created on 2015-12-03 09:26:49
         compiled from ".\tpl\p2p\borrow\enterpriseborrow_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:8092564d1c691406f5-16473513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8bd48e16c8883e11f62397fff5f7932862a7145' => 
    array (
      0 => '.\\tpl\\p2p\\borrow\\enterpriseborrow_new.htm',
      1 => 1449106005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8092564d1c691406f5-16473513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564d1c69166944_38886199',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d1c69166944_38886199')) {function content_564d1c69166944_38886199($_smarty_tpl) {?><script type="text/javascript">
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
		<input type="hidden" name="borrowerPlatformUserNo" lookupname="cid.borrowerPlatformUserNo" size="30" value="" readonly/>
			<div class="pageFormContent" layouth="56">
				<dl style="width:800px;">
					<dt>借款人：</dt>
					<dd><input type="text" name="realName" lookupname="cid.realName" size="30" value="" readonly/></dd>
					<dt><a class="btnLook" href="?action=enterpriseborrow&do=enterprise" lookupGroup="cid" width="500"></a></dt>
				</dl>
				<dl style="width:800px;">
					<dt>借款金额：</dt>
					<dd ><input type="text" name="tenderAmount" class="required" size="30" value=""/></dd>
					<dt></dt>
					<dd >即投即息<input type="checkbox" name="nowRate" value="101" /></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款用途</dt>
					<dd style="width:250px;">
						<select name="borrowType" class="input requiredcombox required">
							<option value="1" selected>短期周转</option>
							<option value="2">生意周转</option>
						</select>
					</dd>
					<dt>还款方式</dt>
					<dd style="width:200px;">
						<select name="repaymentType" class="input requiredcombox required">
							<option value="1" selected>等额本息</option>
							<option value="2">每月还息到期还本</option>
						</select>
					</dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款周期：</dt>
					<dd style="width:250px;"><input type="text" name="borrowTime" class="required" size="30" value=""/></dd>
					<dt>年化利率：</dt>
					<dd style="width:200px;"><input type="text" name="rate" class="required" size="30" value=""/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款服务费：</dt>
					<dd style="width:250px;"><input type="text" name="serviceAmount" class="required" size="30" value=""/></dd>
				
					<dt>投标奖励：</dt>
					<dd style="width:200px;"><input type="text" name="moneyAward" size="30" value=""/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>发标地区：</dt>
					<dd style="width:250px;">
						<select name="area" class="input requiredcombox required">
							<option value="1" selected>太原</option>
							<option value="2">长治</option>
							<option value="3">大同</option>
						</select>
					</dd>
					<dt>定向标密码：</dt>
					<dd style="width:200px;"><input type="text" name="password" size="30" value=""/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款标题：</dt>
					<dd><input type="text" name="tenderName"  class="required"  size="30" value=""/></dd>
				</dl>
				<dl style="width:830px;height:200px;">
					<dt>借款说明：</dt>
					<dd><textarea name="tenderDescription"  class="kindeditor required"  style="width: 450px; height:70px;"></textarea></dd>
				</dl>
				<dl style="width:800px;">
					<dt>标题图片：</dt>
					<dd><input type="text" name="pic" id="url1" value="" /> <input type="button" id="image1" value="选择图片" /></dd>
				</dl>
				
				<dl style="width:800px;">
					<dt>相关图片</dt>
					<dd><input type="button" id="J_selectImage" value="批量上传" /></dd>
				</dl>
				<dl id='picall' style="width:820px;height:120px;display:none;"></dl>

			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				</ul>
			</div>
		</form>
	</div>
</div><?php }} ?>