<?php /* Smarty version Smarty-3.1.12, created on 2015-11-02 12:42:19
         compiled from ".\tpl\p2p\shenhe_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:315265636e54e7f8dc0-95196498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6bb047e37fb21d5d485f6fba3ff4b4829252835' => 
    array (
      0 => '.\\tpl\\p2p\\shenhe_edit.htm',
      1 => 1446439333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315265636e54e7f8dc0-95196498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5636e54e832151_46877511',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5636e54e832151_46877511')) {function content_5636e54e832151_46877511($_smarty_tpl) {?><script type="text/javascript">
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
		<form method="post" id="Myform" action="?action=enterpriseborrow&do=update" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layouth="56">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
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
					<dt>标号：</dt>
					<dd><input type="text" name="tenderAmount" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderOrderNo'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款金额：</dt>
					<dd><input type="text" name="tenderAmount" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款标题：</dt>
					<dd><input type="text" name="tenderName" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderName'];?>
"/></dd>
				</dl>
				<dl style="width:800px;height:60px;">
					<dt>借款说明：</dt>
					<dd><textarea type="text" name="tenderDescription" style="width: 450px; height:50px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderDescription'];?>
</textarea></dd>
				</dl>
				<dl style="width:800px;">
					<dt>年化利率：</dt>
					<dd style="width:350px;"><input type="text" name="rate" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['rate'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款周期：</dt>
					<dd style="width:350px;"><input type="text" name="borrowTime" class="required" size="30" value="1"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>利息：</dt>
					<dd style="width:350px;"><input type="text" name="rateAmount" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['rateAmount'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>还款方式：</dt>
					<dd style="width:350px;"><input type="text" name="repaymentType" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['repaymentType'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款服务费：</dt>
					<dd style="width:350px;"><input type="text" name="serviceAmount" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['serviceAmount'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款服务费：</dt>
					<dd style="width:350px;"><input type="text" name="guaranteeAmount" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['guaranteeAmount'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>起投金额：</dt>
					<dd style="width:350px;"><input type="text" name="minMoney" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['minMoney'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>投标奖励：</dt>
					<dd style="width:350px;"><input type="text" name="moneyAward" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['moneyAward'];?>
"/></dd>
				</dl>
				<?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>
				<dl style="width:800px;">
					<dt>车标</dt>
					<dd style="width:350px;"><input type="text" name="logo" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
"/></dd>
				</dl>
				<?php }?>
				<dl  style="width:800px;height:20px;vertical-align:middle;">
					<dt>标题图片：</dt>
					<dd><input type="text" name="pic" id="url1" value="" /> <input type="button" id="image1" value="选择图片" />
					<?php if ($_smarty_tpl->tpl_vars['row']->value['pic']!=''){?>
					<a target="dialog" href="?action=enterpriseborrow&do=location&lo=<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" style="vertical-align:middle" mask="true" rel="enterpriseborrowpic" ><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" height="50px"/></a>
					<?php }?>
					</dd>
				</dl>
				<dl style="width:800px;">
					<dt>相关图片</dt>
					<dd><input type="button" id="J_selectImage" value="批量上传" /></dd>
				</dl>
				<dl id='picall' style="width:820px;height:120px;display:none;"></dl>

			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">审核</button></div></div></li>
				</ul>
			</div>
		</form>
	</div>
</div><?php }} ?>