<?php /* Smarty version Smarty-3.1.12, created on 2015-12-03 09:30:49
         compiled from ".\tpl\p2p\borrow\enterpriseborrow_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:6988564ea3f18caab3-53331444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76bb7e32b9521b92261df592b99ae807e3ce5650' => 
    array (
      0 => '.\\tpl\\p2p\\borrow\\enterpriseborrow_edit.htm',
      1 => 1449106242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6988564ea3f18caab3-53331444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564ea3f1916f70_71813373',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ea3f1916f70_71813373')) {function content_564ea3f1916f70_71813373($_smarty_tpl) {?><script type="text/javascript">
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
					<dt>借款金额：</dt>
					<dd><input type="text" name="tenderAmount" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount'];?>
"/></dd>
					<dt></dt>
					<dd >即投即息<input type="checkbox" name="nowRate" <?php if ($_smarty_tpl->tpl_vars['row']->value['nowRate']=='101'){?>checked<?php }?>value="101" /></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款周期：</dt>
					<dd style="width:350px;"><input type="text" name="borrowTime" class="required" size="30" value="1"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款标题：</dt>
					<dd><input type="text" name="tenderName" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderName'];?>
"/></dd>
				</dl>
				<dl  style="width:800px;height:70px;vertical-align:middle;">
					<dt>标题图片：</dt>
					<dd><input type="text" name="pic" id="url1" value="" /> <input type="button" id="image1" value="选择图片" />
					<?php if ($_smarty_tpl->tpl_vars['row']->value['pic']!=''){?>
					<a target="dialog" href="?action=enterpriseborrow&do=location&lo=<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" style="vertical-align:middle" mask="true" rel="enterpriseborrowpic" ><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" height="50px"/></a>
					<?php }?>
					</dd>
				</dl>
				<dl style="width:800px;height:60px;">
					<dt>借款说明：</dt>
					<dd><textarea type="text" name="tenderDescription" style="width: 450px; height:50px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderDescription'];?>
</textarea></dd>
				</dl>
				<dl style="width:800px;">
					<dt>相关图片</dt>
					<dd><input type="button" id="J_selectImage" value="批量上传" /></dd>
				</dl>
				<dl id='picall' style="width:820px;height:120px;display:none;">
	
				</dl>
				<dl style="width:800px;">
					<dt>年化利率：</dt>
					<dd style="width:350px;"><input type="text" name="rate" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['rate'];?>
"/></dd>
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
					<dd style="width:350px;"><input type="text" name="serviceAmount" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount']*$_smarty_tpl->tpl_vars['row']->value['serviceAmount'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>风险备用金：</dt>
					<dd style="width:350px;"><input type="text" name="guaranteeAmount" class="required" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount']*0.02;?>
"/></dd>
				</dl>
				<dl style="width:800px;height:60px;">
					<dt>风险控制：</dt>
					<dd><textarea type="text" name="tenderDescription" style="width: 450px; height:50px;" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderDescription'];?>
"></textarea></dd>
				</dl>
			</div>
			<div class="formBar">
				
			</div>
		</form>
	</div>
</div><?php }} ?>