<?php /* Smarty version Smarty-3.1.12, created on 2015-11-03 14:22:26
         compiled from ".\tpl\p2p\usermessage_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:114656382707f3a9e3-65798701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e846150570671dddab32a8392bba7ae3cc61d68f' => 
    array (
      0 => '.\\tpl\\p2p\\usermessage_edit.htm',
      1 => 1446531743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114656382707f3a9e3-65798701',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56382708057bc1_16720008',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56382708057bc1_16720008')) {function content_56382708057bc1_16720008($_smarty_tpl) {?>

<div class="page">
	<div class="pageContent">
		<form method="post" id="Myform" action="?action=usermessage&do=update&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent">
				<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
" />
				<h2 align="center"><<个人信息>></h2><br>
				<dl style="width:900px;">
					<dt>真实姓名：</dt>
					<dd style="width:350px;"><input type="text" size="15" class="readonly" readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
" /></dd>
					<dt>手机号：</dt>
					<dd><input type="text" size="15" class="readonly" readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
"/></dd>
				</dl>
				<dl style="width:900px;">
					<dt>身份证号：</dt>
					<dd style="width:350px;"><input type="text" size="20" class="readonly" readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCardNo'];?>
"/></dd>
					<dt>职业：</dt>
					<dd><input type="text" size="15" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['profession'];?>
"/></dd>
				</dl>
				<dl style="width:900px;">
					<dt>性别：</dt>
					<dd style="width:350px;"><input type="text" size="10" class="readonly" readonly="true"  value="<?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['row']->value['sex']==2){?>女<?php }?>"/></dd>
					<dt>婚否：</dt>
					<dd><input type="text" size="10" class="readonly" readonly="true"  value="<?php if ($_smarty_tpl->tpl_vars['row']->value['marry']==1){?>已婚<?php }elseif($_smarty_tpl->tpl_vars['row']->value['marry']==2){?>未婚<?php }?>"/></dd>
				</dl>
				<dl style="width:900px;">
					<dt>学历：</dt>
					<dd style="width:350px;"><input type="text" size="10" class="readonly" readonly="true"  value="<?php if ($_smarty_tpl->tpl_vars['row']->value['edu']==1){?>高中或以下<?php }elseif($_smarty_tpl->tpl_vars['row']->value['edu']==2){?>大专<?php }elseif($_smarty_tpl->tpl_vars['row']->value['edu']==3){?>本科<?php }elseif($_smarty_tpl->tpl_vars['row']->value['edu']==4){?>研究生或以上<?php }?>"/></dd>
					<dt>月收入：</dt>
					<dd><input type="text" size="10" class="readonly" readonly="true"  value="<?php if ($_smarty_tpl->tpl_vars['row']->value['wages']==1){?>1000元以下<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==2){?>1001-2000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==3){?>2000-5000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==4){?>5000-10000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==5){?>10000-20000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==6){?>20000-50000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==7){?>50000元以上<?php }?>"></dd>
				</dl>
				<dl style="width:900px;">
					<dt>居住地区：</dt>
					<dd><input type="text" size="80" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['area'];?>
"/></dd>
				</dl>
			</div>
			<div class="pageFormContent">	
				<h2 align="center"><<联系方式>></h2><br>
				<dl style="width:900px;">
					<dt>第一联系人：</dt>
					<dd style="width:150px;"><input type="text" size="10" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['oneperson'];?>
"/></dd>
					<dt>电话：</dt>
					<dd style="width:150px;"><input type="text" size="15" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['onephone'];?>
"/></dd>
					<dt>关系：</dt>
					<dd style="width:150px;"><input type="text" size="10" class="readonly" readonly="true"  value="<?php if ($_smarty_tpl->tpl_vars['row']->value['relation1']==1){?>家庭成员<?php }elseif($_smarty_tpl->tpl_vars['row']->value['relation1']==2){?>朋友<?php }elseif($_smarty_tpl->tpl_vars['row']->value['relation1']==3){?>商业伙伴<?php }?>"/></dd>			
				</dl>

				<dl style="width:900px;">
					<dt>第二联系人：</dt>
					<dd style="width:150px;"><input type="text" size="10" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['twoperson'];?>
"/></dd>
					<dt>电话：</dt>
					<dd style="width:150px;"><input type="text" size="15" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['twophone'];?>
"/></dd>
					<dt>关系：</dt>
					<dd style="width:150px;"><input type="text" size="10" class="readonly" readonly="true"  value="<?php if ($_smarty_tpl->tpl_vars['row']->value['relation2']==1){?>家庭成员<?php }elseif($_smarty_tpl->tpl_vars['row']->value['relation2']==2){?>朋友<?php }elseif($_smarty_tpl->tpl_vars['row']->value['relation2']==3){?>商业伙伴<?php }?>"/></dd>
				</dl>
			</div>
			
			<div class="pageFormContent">	
				<h2 align="center"><<单位资料>></h2><br>
				<dl style="width:900px;">
					<dt>单位名称：</dt>
					<dd style="width:350px;"><input type="text" size="40" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['unitname'];?>
"/></dd>
					<dt>电话：</dt>
					<dd><input type="text" size="15" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['unitphone'];?>
"/></dd>
				</dl>
				<dl style="width:800px;">
					<dt>地址：</dt>
					<dd><input type="text" size="80" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['unitarea'];?>
"/></dd>
				</dl>
				<dl style="width:900px;">
					<dt>证明人：</dt>
					<dd style="width:150px;"><input type="text" size="10" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['proveperson'];?>
"/></dd>
					<dt>手机号：</dt>
					<dd style="width:150px;"><input type="text" size="15" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['provephone'];?>
"/></dd>
					<dt>工作年限：</dt>
					<dd style="width:150px;"><input type="text" size="10" class="readonly" readonly="true"  value="<?php if ($_smarty_tpl->tpl_vars['row']->value['workyears']==1){?>1年以下<?php }elseif($_smarty_tpl->tpl_vars['row']->value['workyears']==2){?>1-3年<?php }elseif($_smarty_tpl->tpl_vars['row']->value['workyears']==3){?>3-5年<?php }elseif($_smarty_tpl->tpl_vars['row']->value['workyears']==4){?>5-10年<?php }elseif($_smarty_tpl->tpl_vars['row']->value['workyears']==5){?>10年以上<?php }?>"/></dd>
				</dl>
			
			</div>
	
			<div class="pageFormContent">		
				<h2 align="center"><<财务状况>></h2><br>
				<dl style="width:900px;">
					<dt>收入：</dt>
					<dd style="width:350px;"><input type="text" size="15" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['income'];?>
"/>元</dd>
					<dt>支出：</dt>
					<dd><input type="text" size="15" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pay'];?>
"/>元</dd>
				</dl>
				<dl style="width:900px;">
					<dt>收入描述：</dt>
					<dd><input type="text" size="120" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['incomedesc'];?>
"/></dd>
				</dl>
				<dl style="width:900px;">
					<dt>支出描述：</dt>
					<dd><input type="text" size="120" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['paydesc'];?>
"/></dd>
				</dl>
				<dl style="width:900px;">
					<dt>住房：</dt>
					<dd style="width:350px;"><input type="text" size="15" class="readonly" readonly="true" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['house']==1){?>有商品房<?php }elseif($_smarty_tpl->tpl_vars['row']->value['house']==2){?>有房（非商品房）<?php }elseif($_smarty_tpl->tpl_vars['row']->value['house']==2){?>无房<?php }?>"/></dd>
					<dt>价值：</dt>
					<dd><input type="text" size="15" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['housemoney'];?>
"/></dd>
				</dl>			
				<dl style="width:900px;">
					<dt>购车：</dt>
					<dd style="width:350px;"><input type="text" size="15" class="readonly" readonly="true" value="<?php if ($_smarty_tpl->tpl_vars['row']->value['car']==1){?>已购车<?php }elseif($_smarty_tpl->tpl_vars['row']->value['car']==2){?>未购车<?php }?>"/></dd>
					<dt>价值：</dt>
					<dd><input type="text" size="15" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['carmoney'];?>
"/></dd>
				</dl>			
				<dl style="width:900px;">
					<dt>资产描述：</dt>
					<dd><input type="text" size="120" class="readonly" readonly="true"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['moneydesc'];?>
"/></dd>
			</div>
			<div class="formBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">审核</button></div></div></li>
				</ul>
			</div>
		</form>
	</div>
</div>


<?php }} ?>