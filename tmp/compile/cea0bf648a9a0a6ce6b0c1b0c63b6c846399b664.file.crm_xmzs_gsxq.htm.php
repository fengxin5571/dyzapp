<?php /* Smarty version Smarty-3.1.12, created on 2016-01-05 14:50:50
         compiled from ".\tpl\crm\crm_xmzs_gsxq.htm" */ ?>
<?php /*%%SmartyHeaderCode:241455683403893d1c4-11931630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea0bf648a9a0a6ce6b0c1b0c63b6c846399b664' => 
    array (
      0 => '.\\tpl\\crm\\crm_xmzs_gsxq.htm',
      1 => 1451976628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241455683403893d1c4-11931630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5683403896ae33_66079809',
  'variables' => 
  array (
    'row' => 0,
    'picarr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5683403896ae33_66079809')) {function content_5683403896ae33_66079809($_smarty_tpl) {?><script type="text/javascript">
	KindEditor.ready(function(K) {
		var editor = K.editor({
			allowFileManager : true
		});
		K('#J_selectImage').click(function() {
			editor.loadPlugin('multiimage', function() {
				editor.plugin.multiImageDialog({
					clickFn : function(urlList) {
						//$('#picall').slideDown("slow");
						K.each(urlList, function(i, data) {
							$('#picall').append('<div style="border:solid 1px #ccc;display:inline-block;position:relative;width:137px;margin:1px"><a href="javascript:void(0)" onclick="$(this).parent(\'div\').remove()" style="position:absolute;right:5px;top:5px;font-siz:12px;">删除</a><input type="hidden" name="picarr[]" value="' + data.url + '" /><a href="?action=crm_list&do=pic&id=' + data.url + '" target="dialog" mask=true rel="pic" width="600"><img src="' + data.url + '" style="width:100%;height:100%"></a></div>');
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
		<form method="post" action="?action=crm_list&do=gsxq_add&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<div style="overflow:hidden;width:60%;float:left">
				<dl class="nowrap">
					<dt>公司信息：</dt>
					<dd><textarea name="message" class="kindeditor" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['message'];?>
</textarea></dd>
				</dl>
				<dl>
					<dt>咨询电话：</dt>
					<dd><input type="text" name="mobile" class="textInput valid" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
"/></dd>
				</dl>
				<dl class="nowrap">
					<dt>可提供资源：</dt>
					<dd><textarea name="need" readonly="true" cols="50" rows="4"><?php echo $_smarty_tpl->tpl_vars['row']->value['need'];?>
</textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>可提供资源描述：</dt>
					<dd><textarea name="needtext" cols="50" class="kindeditor" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['needtext'];?>
</textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>需求资源：</dt>
					<dd><textarea name="provide" readonly="true" cols="50" rows="4" ><?php echo $_smarty_tpl->tpl_vars['row']->value['provide'];?>
</textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>需求资源描述：</dt>
					<dd><textarea name="providetext" cols="50" class="kindeditor" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['providetext'];?>
</textarea></dd>
				</dl>
			</div>
			<div style="border:solid 1px #ccc;width:38%;overflow:hidden;float:right">
				<input type="button" id="J_selectImage" value="批量上传" />
				<div id="picall" style="-webkit-column-width:140px;-moz-column-width:140px;-o-colum-width:140px;-webkit-column-gap:1px;-moz-column-gap:1px;-o-column-gap:1px;">
				<?php echo $_smarty_tpl->tpl_vars['picarr']->value;?>

				</div>
			</div>
			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				</ul>
			</div>
			
			
		</form>
	</div>
</div><?php }} ?>