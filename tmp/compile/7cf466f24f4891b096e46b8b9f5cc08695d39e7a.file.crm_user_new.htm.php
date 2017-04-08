<?php /* Smarty version Smarty-3.1.12, created on 2015-12-30 17:54:28
         compiled from ".\tpl\crm\crm_user_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:11458566faf5f221800-83477407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf466f24f4891b096e46b8b9f5cc08695d39e7a' => 
    array (
      0 => '.\\tpl\\crm\\crm_user_new.htm',
      1 => 1451469236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11458566faf5f221800-83477407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566faf5f240049_72467019',
  'variables' => 
  array (
    'row' => 0,
    'list' => 0,
    'rowa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566faf5f240049_72467019')) {function content_566faf5f240049_72467019($_smarty_tpl) {?><div class="page">
	<div class="pageContent">
		<form method="post" action="?action=crm_user&do=<?php if ($_smarty_tpl->tpl_vars['row']->value==''){?>add<?php }else{ ?>updata&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
<?php }?>" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">		
			<div class="pageFormContent" layoutH="56">
				<dl>
					<dt>公司名称：</dt>
					<dd><input type="text" name="gongshimingcheng" class="required textInput valid" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['gongshimingcheng'];?>
"/></dd>
				</dl>
				<dl>
					<dt>所属行业：</dt>
					<dd>
						<select name="shuoshuhangye" class="input required combox required">
							<option value="制造业" <?php if ($_smarty_tpl->tpl_vars['row']->value==''||$_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='制造业'){?>selected<?php }?>>制造业</option>
							<option value="金融业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='金融业'){?>selected<?php }?>>金融业</option>
							<option value="建筑业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='建筑业'){?>selected<?php }?>>建筑业</option>
							<option value="教育" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='教育'){?>selected<?php }?>>教育</option>
							<option value="文化传媒、体育和娱乐业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='文化传媒、体育和娱乐业'){?>selected<?php }?>>文化传媒、体育和娱乐业</option>
							<option value="农、林、牧、渔业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='农、林、牧、渔业'){?>selected<?php }?>>农、林、牧、渔业</option>
							<option value="批发和零售业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='批发和零售业'){?>selected<?php }?>>批发和零售业</option>
							<option value="房地产" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='房地产'){?>selected<?php }?>>房地产</option>
							<option value="交通运输、仓储和邮政业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='交通运输、仓储和邮政业'){?>selected<?php }?>>交通运输、仓储和邮政业</option>
							<option value="服务业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='服务业'){?>selected<?php }?>>服务业</option>
							<option value="餐饮业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='餐饮业'){?>selected<?php }?>>餐饮业</option>
							<option value="互联网相关行业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='互联网相关行业'){?>selected<?php }?>>互联网相关行业</option>
							<option value="电力、热力、燃气业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='电力、热力、燃气业'){?>selected<?php }?>>电力、热力、燃气业</option>
							<option value="采矿业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='采矿业'){?>selected<?php }?>>采矿业</option>
							<option value="水利、环境和公共设施管理业" <?php if ($_smarty_tpl->tpl_vars['row']->value['shuoshuhangye']=='水利、环境和公共设施管理业'){?>selected<?php }?>>水利、环境和公共设施管理业</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt>负责人：</dt>
					<dd><input type="text" name="fuzheren" class="required textInput valid" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['fuzheren'];?>
"/></dd>
				</dl>
				<dl>
					<dt>职位：</dt>
					<dd>
						<select name="zhiwei" class="input required combox required">
							<option value="董事长" <?php if ($_smarty_tpl->tpl_vars['row']->value==''||$_smarty_tpl->tpl_vars['row']->value['zhiwei']=='董事长'){?>selected<?php }?>>董事长</option>
							<option value="总经理" <?php if ($_smarty_tpl->tpl_vars['row']->value['zhiwei']=='总经理'){?>selected<?php }?>>总经理</option>
							<option value="副总" <?php if ($_smarty_tpl->tpl_vars['row']->value['zhiwei']=='副总'){?>selected<?php }?>>副总</option>
							<option value="股东" <?php if ($_smarty_tpl->tpl_vars['row']->value['zhiwei']=='股东'){?>selected<?php }?>>股东</option>
							<option value="高管" <?php if ($_smarty_tpl->tpl_vars['row']->value['zhiwei']=='高管'){?>selected<?php }?>>高管</option>
							<option value="其他成员" <?php if ($_smarty_tpl->tpl_vars['row']->value['zhiwei']=='其他成员'){?>selected<?php }?>>其他成员</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt>电话：</dt>
					<dd><input type="text" name="dianhua" class="required textInput valid" alt="请输入电话" size="30" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
"/></dd>
				</dl>
				<dl>
					<dt>归属人：</dt>
					<dd>
						<select name="guishuren" class="input required combox required">
							<?php  $_smarty_tpl->tpl_vars['rowa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowa']->key => $_smarty_tpl->tpl_vars['rowa']->value){
$_smarty_tpl->tpl_vars['rowa']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['rowa']->value['name'];?>
"  <?php if ($_smarty_tpl->tpl_vars['row']->value['guishuren']=='<{$rowa.name}>'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['rowa']->value['name'];?>
</option>
							<?php } ?>
						</select>
					</dd>
				</dl>
				<dl class="nowrap">
					<dt>备注：</dt>
					<dd><textarea name="beizhu" cols="40" rows="3" class="textInput"><?php echo $_smarty_tpl->tpl_vars['row']->value['beizhu'];?>
</textarea></dd>
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