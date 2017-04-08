<?php /* Smarty version Smarty-3.1.12, created on 2016-01-07 09:21:24
         compiled from ".\tpl\crm\crm_xmzs_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:270025683396bab6c43-59952041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd359adf4816e29b9cea61500bbc5db35af336b9f' => 
    array (
      0 => '.\\tpl\\crm\\crm_xmzs_new.htm',
      1 => 1452129670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270025683396bab6c43-59952041',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5683396bb9ba68_09042709',
  'variables' => 
  array (
    'row' => 0,
    'provideall' => 0,
    'needall' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5683396bb9ba68_09042709')) {function content_5683396bb9ba68_09042709($_smarty_tpl) {?><script type="text/javascript">
	KindEditor.ready(function(K) {
		var editor = K.editor({
			allowFileManager : true
		});
		K('#J_selectImage').click(function() {
			editor.loadPlugin('multiimage', function() {
				editor.plugin.multiImageDialog({
					clickFn : function(urlList) {
						$('#picall').html('');
						K.each(urlList, function(i, data) {
							$('#picall').append('<div style="border:solid 1px #ccc;display:inline-block;position:relative;width:278px;margin:1px"><a href="javascript:void(0)" onclick="$(this).parent(\'div\').remove()" style="position:absolute;right:5px;top:5px;font-siz:12px;">删除</a><input type="hidden" name="picarr" value="' + data.url + '" /><a href="?action=crm_xmzs&do=pic&id=' + data.url + '" target="dialog" mask=true rel="pic" width="600"><img src="' + data.url + '" style="width:100%;height:100%"></a></div>');
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
		<form method="post" action="?action=crm_xmzs&do=<?php if ($_smarty_tpl->tpl_vars['row']->value==''){?>add<?php }else{ ?>updata&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php }?>" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<div style="overflow:hidden;width:60%;float:left">
				<dl>
					<dt>公司名称：</dt>
					<dd><input type="text" name="name" class="required textInput valid" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"/></dd>
				</dl>
				<dl>
					<dt>行业类别：</dt>
					<dd>
						<select class="input required combox required" name="type">
							<option value="电子信息" <?php if ($_smarty_tpl->tpl_vars['row']->value==''||$_smarty_tpl->tpl_vars['row']->value['type']=='电子信息'){?>selected<?php }?>>电子信息</option>
							<option value="环保机械" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='环保机械'){?>selected<?php }?>>环保机械</option>
							<option value="医疗仪器设备" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='医疗仪器设备'){?>selected<?php }?>>医疗仪器设备</option>
							<option value="工程机械" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='工程机械'){?>selected<?php }?>>工程机械</option>
							<option value="半导体设备" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='半导体设备'){?>selected<?php }?>>半导体设备</option>
							<option value="轻纺机械" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='轻纺机械'){?>selected<?php }?>>轻纺机械</option>
							<option value="仪器仪表" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='仪器仪表'){?>selected<?php }?>>仪器仪表</option>
							<option value="生物技术" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='生物技术'){?>selected<?php }?>>生物技术</option>
							<option value="制药" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='制药'){?>selected<?php }?>>制药</option>
							<option value="新材料" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='新材料'){?>selected<?php }?>>新材料</option>
							<option value="光电子" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='光电子'){?>selected<?php }?>>光电子</option>
							<option value="纳米" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='纳米'){?>selected<?php }?>>纳米</option>
							<option value="新能源" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='新能源'){?>selected<?php }?>>新能源</option>
							<option value="环保" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='环保'){?>selected<?php }?>>环保</option>
							<option value="食品与农产品精加工" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='食品与农产品精加工'){?>selected<?php }?>>食品与农产品精加工</option>
							<option value="物流业" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='物流业'){?>selected<?php }?>>物流业</option>
							<option value="金融业" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='金融业'){?>selected<?php }?>>金融业</option>
							<option value="餐饮业" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='餐饮业'){?>selected<?php }?>>餐饮业</option>
							<option value="旅游业" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='旅游业'){?>selected<?php }?>>旅游业</option>
							<option value="广告业" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='广告业'){?>selected<?php }?>>广告业</option>
							<option value="信息咨询服务业" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='信息咨询服务业'){?>selected<?php }?>>信息咨询服务业</option>
							<option value="其他" <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='其他'){?>selected<?php }?>>其他</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt>地区：</dt>
					<dd>
						<select class="input required combox required" name="area">
							<option value="太原" <?php if ($_smarty_tpl->tpl_vars['row']->value==''||$_smarty_tpl->tpl_vars['row']->value['area']=='太原'){?>selected<?php }?>>太原</option>
							<option value="大同" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='大同'){?>selected<?php }?>>大同</option>
							<option value="阳泉" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='阳泉'){?>selected<?php }?>>阳泉</option>
							<option value="长治" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='长治'){?>selected<?php }?>>长治</option>
							<option value="晋城" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='晋城'){?>selected<?php }?>>晋城</option>
							<option value="朔州" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='朔州'){?>selected<?php }?>>朔州</option>
							<option value="晋中" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='晋中'){?>selected<?php }?>>晋中</option>
							<option value="运城" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='运城'){?>selected<?php }?>>运城</option>
							<option value="忻州" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='忻州'){?>selected<?php }?>>忻州</option>
							<option value="临汾" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='临汾'){?>selected<?php }?>>临汾</option>
							<option value="吕梁" <?php if ($_smarty_tpl->tpl_vars['row']->value['area']=='吕梁'){?>selected<?php }?>>吕梁</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt>状态：</dt>
					<dd>
						<select class="input required combox required" name="status">
							<option value="2" <?php if ($_smarty_tpl->tpl_vars['row']->value==''||$_smarty_tpl->tpl_vars['row']->value['status']=='2'){?>selected<?php }?>>对接中</option>
							<option value="3" <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='3'){?>selected<?php }?>>服务中</option>
							<option value="4" <?php if ($_smarty_tpl->tpl_vars['row']->value['status']=='4'){?>selected<?php }?>>成功孵化</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt>联系方式：</dt>
					<dd><input type="text" name="mobile" class="required textInput valid" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
"/></dd>
				</dl>
				<dl class="nowrap">
					<dt>公司简介：</dt>
					<dd><textarea class="kindeditor" name="message" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['message'];?>
</textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>我需要的资源：</dt>
					<dd style="width:300px">
						<label>
							<input type="checkbox" value="资金" <?php if (in_array('资金',$_smarty_tpl->tpl_vars['provideall']->value)){?>checked="checked"<?php }?> name="provide[]"> 资金
						</label>
						<label>
							<input type="checkbox" value="项目" <?php if (in_array('项目',$_smarty_tpl->tpl_vars['provideall']->value)){?>checked="checked"<?php }?> name="provide[]"> 项目
						</label>
						<label>
							<input type="checkbox" value="渠道平台" <?php if (in_array('渠道平台',$_smarty_tpl->tpl_vars['provideall']->value)){?>checked="checked"<?php }?> name="provide[]"> 渠道平台
						</label>
						<label>
							<input type="checkbox"  value="产品与采购" <?php if (in_array('产品与采购',$_smarty_tpl->tpl_vars['provideall']->value)){?>checked="checked"<?php }?> name="provide[]"> 产品与采购
						</label>
						<label>
							<input type="checkbox" value="人脉" <?php if (in_array('人脉',$_smarty_tpl->tpl_vars['provideall']->value)){?>checked="checked"<?php }?> name="provide[]"> 人脉
						</label>
						<label>
							<input type="checkbox" value="场地资产" <?php if (in_array('场地资产',$_smarty_tpl->tpl_vars['provideall']->value)){?>checked="checked"<?php }?> name="provide[]"> 场地资产
						</label>
						<label>
							<input type="checkbox" value="人才和团队" <?php if (in_array('人才和团队',$_smarty_tpl->tpl_vars['provideall']->value)){?>checked="checked"<?php }?> name="provide[]"> 人才和团队
						</label>
						<label>
							<input type="checkbox" value="商务服务" <?php if (in_array('商务服务',$_smarty_tpl->tpl_vars['provideall']->value)){?>checked="checked"<?php }?> name="provide[]"> 商务服务
						</label>
					</dd>
				</dl>
				<dl class="nowrap">
					<dt>所需资源描述：</dt>
					<dd><textarea name="providetext" class="kindeditor" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['providetext'];?>
</textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>可提供的资源：</dt>
					<dd style="width:300px">
						<label>
							<input type="checkbox" value="资金" <?php if (in_array('资金',$_smarty_tpl->tpl_vars['needall']->value)){?>checked="checked"<?php }?> name="need[]"> 资金
						</label>
						<label>
							<input type="checkbox" value="项目" <?php if (in_array('项目',$_smarty_tpl->tpl_vars['needall']->value)){?>checked="checked"<?php }?> name="need[]"> 项目
						</label>
						<label>
							<input type="checkbox" value="渠道平台" <?php if (in_array('渠道平台',$_smarty_tpl->tpl_vars['needall']->value)){?>checked="checked"<?php }?> name="need[]"> 渠道平台
						</label>
						<label>
							<input type="checkbox"  value="产品与采购" <?php if (in_array('产品与采购',$_smarty_tpl->tpl_vars['needall']->value)){?>checked="checked"<?php }?> name="need[]"> 产品与采购
						</label>
						<label>
							<input type="checkbox" value="人脉" <?php if (in_array('人脉',$_smarty_tpl->tpl_vars['needall']->value)){?>checked="checked"<?php }?> name="need[]"> 人脉
						</label>
						<label>
							<input type="checkbox" value="场地资产" <?php if (in_array('场地资产',$_smarty_tpl->tpl_vars['needall']->value)){?>checked="checked"<?php }?> name="need[]"> 场地资产
						</label>
						<label>
							<input type="checkbox" value="人才和团队" <?php if (in_array('人才和团队',$_smarty_tpl->tpl_vars['needall']->value)){?>checked="checked"<?php }?> name="need[]"> 人才和团队
						</label>
						<label>
							<input type="checkbox" value="商务服务" <?php if (in_array('商务服务',$_smarty_tpl->tpl_vars['needall']->value)){?>checked="checked"<?php }?> name="need[]"> 商务服务
						</label>
					</dd>
				</dl>
				<dl class="nowrap">
					<dt>提供资源描述：</dt>
					<dd><textarea name="needtext" class="kindeditor" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['needtext'];?>
</textarea></dd>
				</dl>
				<dl class="nowrap">
					<dt>说明：</dt>
					<dd><textarea name="shuoming" class="kindeditor" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['row']->value['shuoming'];?>
</textarea></dd>
				</dl>
			</div>
			<div style="border:solid 1px #ccc;width:38%;overflow:hidden;float:right">
				<input type="button" id="J_selectImage" value="批量上传" />
				<div id="picall" style="-webkit-column-width:280px;-moz-column-width:280px;-o-colum-width:280px;-webkit-column-gap:1px;-moz-column-gap:1px;-o-column-gap:1px;">
				<div style="border:solid 1px #ccc;display:inline-block;position:relative;width:278px;margin:1px"><a href="javascript:void(0)" onclick="$(this).parent(\'div\').remove()" style="position:absolute;right:5px;top:5px;font-siz:12px;">删除</a><input type="hidden" name="picarr" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['picarr'];?>
" /><a href="?action=crm_list&do=pic&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['picarr'];?>
" target="dialog" mask=true rel="pic" width="600"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['picarr'];?>
" style="width:100%;height:100%"></a></div>
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