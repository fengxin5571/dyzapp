<?php /* Smarty version Smarty-3.1.12, created on 2015-12-30 10:53:25
         compiled from ".\tpl\crm\crm_user_gsxq.htm" */ ?>
<?php /*%%SmartyHeaderCode:15051567cbc7691ac77-52746493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee41fbf2a67ac645a12bb72cf252f6e136e22545' => 
    array (
      0 => '.\\tpl\\crm\\crm_user_gsxq.htm',
      1 => 1451379998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15051567cbc7691ac77-52746493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_567cbc76940ed5_61210127',
  'variables' => 
  array (
    'row' => 0,
    'picarr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567cbc76940ed5_61210127')) {function content_567cbc76940ed5_61210127($_smarty_tpl) {?><script type="text/javascript">
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
							$('#picall').append('<div style="border:solid 1px #ccc;display:inline-block;position:relative;width:137px;margin:1px"><a href="javascript:void(0)" onclick="$(this).parent(\'div\').remove()" style="position:absolute;right:5px;top:5px;font-siz:12px;">删除</a><input type="hidden" name="picarr[]" value="' + data.url + '" /><a href="?action=crm_user&do=pic&id=' + data.url + '" target="dialog" mask=true rel="pic" width="600"><img src="' + data.url + '" style="width:100%;height:100%"></a></div>');
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
		<form method="post" action="?action=crm_user&do=gsxq_add&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<div style="overflow:hidden;width:60%;float:left">
				<dl class="nowrap">
					<dt>公司信息：</dt>
					<dd><textarea name="gongshijianjie" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['gongshijianjie'];?>
</textarea></dd>
				</dl>
				<dl>
					<dt>成立时间：</dt>
					<dd><input type="text" name="chenglishijian" class="date textInput valid" size="30" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['chenglishijian']!='0000-00-00'){?><?php echo $_smarty_tpl->tpl_vars['row']->value['chenglishijian'];?>
<?php }?>"/></dd>
				</dl>
				<dl>
					<dt>注册资本：</dt>
					<dd><input type="text" name="zhuchezhiben" class="number textInput valid" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['zhuchezhiben'];?>
"/>(万元)</dd>
				</dl>
				<dl>
					<dt>咨询电话：</dt>
					<dd><input type="text" name="zhixundianhua" class="textInput valid" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['zhixundianhua'];?>
"/></dd>
				</dl>
				<dl class="nowrap">
					<dt>股东架构：</dt>
					<dd><textarea name="gudongjiagou" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['gudongjiagou'];?>
</textarea></dd>
				</dl>
				<dl>
					<dt>法人代表：</dt>
					<dd><input type="text" name="farendaibiao" class="textInput valid" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['farendaibiao'];?>
"/></dd>
				</dl>
				<dl class="nowrap">
					<dt>商业模式：</dt>
					<dd><textarea name="shangyemoshi" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['shangyemoshi'];?>
</textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>核心竞争力：</dt>
					<dd><textarea name="hexinjinzhengli" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['hexinjinzhengli'];?>
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