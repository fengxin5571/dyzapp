<?php /* Smarty version Smarty-3.1.12, created on 2015-11-19 16:09:52
         compiled from ".\tpl\p2p\borrow\chushen_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:291156440ca91443f7-07029346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ca3d27ce4ced90077892517b4bdaec1436fc023' => 
    array (
      0 => '.\\tpl\\p2p\\borrow\\chushen_edit.htm',
      1 => 1447920184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291156440ca91443f7-07029346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56440ca91ba815_43178042',
  'variables' => 
  array (
    'row' => 0,
    'picarr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56440ca91ba815_43178042')) {function content_56440ca91ba815_43178042($_smarty_tpl) {?><script type="text/javascript">
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
			$(".jkfwf").keyup(function(){
				var jkfwf=$(".jkfwf").val()*<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount'];?>
/100;
				$("#jkfwf").html(jkfwf+"元");
			});
</script>
<div class="page">
	<div class="pageContent">
		<form method="post" id="Myform" action="?action=chushen&do=update" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layouth="56">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" />
				<input type="hidden" name="type" class="required readonly"  readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
" />
				<input type="hidden" name="password" class="readonly"  readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['password'];?>
" />	
				<dl style="width:800px;">
					<dt>借款人</dt>
					<dd><input type="text" name="borrowerPlatformUserNo" class="readonly" size="30" readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['borrowerPlatformUserNo'];?>
" /></dd>
				</dl>
				<dl style="width:800px;">
					<dt>标号：</dt>
					<dd><input type="text" name="tenderOrderNo" class="readonly" readonly="true" size="30" value="系统会自动生成表号"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款金额：</dt>
					<dd><input type="text" name="tenderAmount" class="readonly" size="10" readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount'];?>
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
					<dd style="width:350px;"><input type="text" name="rate" class="required" size="10" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['rate'];?>
"/>%</dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款周期：</dt>
					<dd style="width:350px;"><input type="text" name="borrowTime" class="required readonly"  readonly="true" size="10" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['borrowTime'];?>
"/>个月</dd>
				</dl>
				<dl style="width:800px;">
					<dt>利息：</dt>
					<dd style="width:350px;"><input type="text" name="rateAmount" class="required readonly" size="10" readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['rateAmount'];?>
"/>元</dd>
				</dl>
				<dl style="width:800px;">
					<dt>还款方式：</dt>
					<dd style="width:350px;"><input type="hidden" name="repaymentType" class="required readonly" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['repaymentType'];?>
"/><span></dd>
					<dd style="width:350px;"><input type="text"  class="required readonly" size="30" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['repaymentType']==1){?>等额本息<?php }elseif($_smarty_tpl->tpl_vars['row']->value['repaymentType']==2){?>每月还息到期还本<?php }?>"/><span></dd>
				</dl>
				<dl style="width:800px;">
					<dt>借款服务费：</dt>
					<dd style="width:350px;"><input type="text" name="serviceAmount" class="required jkfwf" size="10" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['serviceAmount'];?>
"/>% <span id="jkfwf"></span></dd>
				</dl>
				<dl style="width:800px;">
					<dt>风险备用金：</dt>
					<dd style="width:350px;"><input type="text" class="required readonly" size="10" readonly="true" value="2%"/><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount']*2/100;?>
元</dd>
				</dl>
				<dl style="width:800px;">
					<dt>起投金额：</dt>
					<dd style="width:350px;"><input type="text" name="minMoney" class="required" size="10" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['minMoney'];?>
"/>元</dd>
				</dl>
				<dl style="width:800px;">
					<dt>投标奖励：</dt>
					<dd style="width:350px;"><input type="text" name="moneyAward" class="readonly"  readonly="true" size="10" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['moneyAward'];?>
"/>%</dd>
				</dl>
				<?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>
				<dl style="width:800px;">
					<dt>车标</dt>
					<dd style="width:350px;"><input type="text" name="logo" class="" size="20" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
"/></dd>
				</dl>
				<?php }?>
				<dl style="width:800px;height:20px;vertical-align:middle;">
					<dt>标题图片：</dt>
					<dd><input type="text" name="pic" id="url1" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" /> <input type="button" id="image1" value="选择图片" /></dd>
					<?php if ($_smarty_tpl->tpl_vars['row']->value['pic']!=''){?>
					<p><a target="dialog" href="?action=chushen&do=location&lo=<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" style="vertical-align:middle" mask="true" rel="chushenpic" ><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
" height="50px"/></a></p>
					<?php }?>
				</dl>
				<dl style="width:800px;">
					<dt>相关图片</dt>
					<dd><input type="button" id="J_selectImage" value="批量上传" /></dd>
				</dl>	
				<dl id='picall' style="width:820px;height:120px;<?php if ($_smarty_tpl->tpl_vars['picarr']->value==''){?>display:none;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['picarr']->value;?>
</dl>

			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">审核</button></div></div></li>
				</ul>
			</div>
		</form>
	</div>
</div><?php }} ?>