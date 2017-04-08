<?php /* Smarty version Smarty-3.1.12, created on 2015-10-20 15:21:24
         compiled from ".\tpl\p2p\p2plink_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:227415625e8547cee62-79377737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fc10d4b3b3b8fd38098a2ecd36ff5b9603a4658' => 
    array (
      0 => '.\\tpl\\p2p\\p2plink_new.htm',
      1 => 1445325565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227415625e8547cee62-79377737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5625e85480bef4_70432652',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625e85480bef4_70432652')) {function content_5625e85480bef4_70432652($_smarty_tpl) {?>
<script type="text/javascript">	
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
		<form method="post" id="Myform" action="?action=p2plink&do=add" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layouth="56">
				<dl style="width:500px;">
					<dt>网站名称：</dt>
					<dd><input type="text" name="title" class="required" size="30" value=""/></dd>
				</dl>			
				<dl style="width:500px;">
					<dt>网站URL地址：</dt>
					<dd><input type="text" name="url" class="required" size="30" value=""/></dd>
				</dl>
				
				<dl style="width:500px;">
					<dt>上传图片：</dt>
					<dd><input type="text" name="pic" id="url1" class="required" value="" /> <input type="button" id="image1" value="选择图片" /></dd>
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