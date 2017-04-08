<?php /* Smarty version Smarty-3.1.12, created on 2016-01-03 10:44:55
         compiled from ".\tpl\crm\crm_user_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:4976566e6c453dfd21-83853312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44633dc43559c306c9726c35975e77991d3d2ebe' => 
    array (
      0 => '.\\tpl\\crm\\crm_user_list.htm',
      1 => 1451789092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4976566e6c453dfd21-83853312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_566e6c45420ab3_58693082',
  'variables' => 
  array (
    'shuoshuhangye' => 0,
    'guishuren' => 0,
    'shifoudachenghezhuo' => 0,
    'lista' => 0,
    'rowa' => 0,
    'orderDirection' => 0,
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566e6c45420ab3_58693082')) {function content_566e6c45420ab3_58693082($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=crm_user">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="gongshimingcheng" value="<?php echo $_REQUEST['gongshimingcheng'];?>
"/>
	<input type="hidden" name="shuoshuhangye" value="<?php echo $_smarty_tpl->tpl_vars['shuoshuhangye']->value;?>
"/>
	<input type="hidden" name="guishuren" value="<?php echo $_smarty_tpl->tpl_vars['guishuren']->value;?>
"/>
	<input type="hidden" name="shifoudachenghezhuo" value="<?php echo $_smarty_tpl->tpl_vars['shifoudachenghezhuo']->value;?>
"/>
	<input type="hidden" name="time_start" value="<?php echo $_REQUEST['time_start'];?>
"/>
	<input type="hidden" name="time_over" value="<?php echo $_REQUEST['time_over'];?>
"/>
	<input type="hidden" name="orderField" 	value="" />
	<input type="hidden" name="orderDirection"  value="" />
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=crm_user" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						公司名称：<input type="text" name="gongshimingcheng" size="10" value="<?php echo $_REQUEST['gongshimingcheng'];?>
"/>
					</td>
					<td>
						所属行业：
						<select name="shuoshuhangye" class="input requiredcombox required">
							<option value="" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value==''){?>selected<?php }?>>请选择</option>
							<option value="制造业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='制造业'){?>selected<?php }?>>制造业</option>
							<option value="金融业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='金融业'){?>selected<?php }?>>金融业</option>
							<option value="建筑业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='建筑业'){?>selected<?php }?>>建筑业</option>
							<option value="教育" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='教育'){?>selected<?php }?>>教育</option>
							<option value="文化传媒、体育和娱乐业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='文化传媒、体育和娱乐业'){?>selected<?php }?>>文化传媒、体育和娱乐业</option>
							<option value="农、林、牧、渔业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='农、林、牧、渔业'){?>selected<?php }?>>农、林、牧、渔业</option>
							<option value="批发和零售业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='批发和零售业'){?>selected<?php }?>>批发和零售业</option>
							<option value="房地产" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='房地产'){?>selected<?php }?>>房地产</option>
							<option value="交通运输、仓储和邮政业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='交通运输、仓储和邮政业'){?>selected<?php }?>>交通运输、仓储和邮政业</option>
							<option value="服务业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='服务业'){?>selected<?php }?>>服务业</option>
							<option value="餐饮业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='餐饮业'){?>selected<?php }?>>餐饮业</option>
							<option value="互联网相关行业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='互联网相关行业'){?>selected<?php }?>>互联网相关行业</option>
							<option value="电力、热力、燃气业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='电力、热力、燃气业'){?>selected<?php }?>>电力、热力、燃气业</option>
							<option value="采矿业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='采矿业'){?>selected<?php }?>>采矿业</option>
							<option value="水利、环境和公共设施管理业" <?php if ($_smarty_tpl->tpl_vars['shuoshuhangye']->value=='水利、环境和公共设施管理业'){?>selected<?php }?>>水利、环境和公共设施管理业</option>
						</select>
					</td>
					<td>
						归属人：
						<select name="guishuren" class="input requiredcombox required">
							<?php  $_smarty_tpl->tpl_vars['rowa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rowa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rowa']->key => $_smarty_tpl->tpl_vars['rowa']->value){
$_smarty_tpl->tpl_vars['rowa']->_loop = true;
?>
								<option value=""  <?php if ($_smarty_tpl->tpl_vars['guishuren']->value==''){?>selected<?php }?>>请选择</option>
								<option value="<?php echo $_smarty_tpl->tpl_vars['rowa']->value['name'];?>
"  <?php if ($_smarty_tpl->tpl_vars['guishuren']->value==$_smarty_tpl->tpl_vars['rowa']->value['name']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['rowa']->value['name'];?>
</option>
							<?php } ?>
						</select>
					</td>
					<td>是否达成合作：
						<select name="shifoudachenghezhuo" class="input requiredcombox required">
							<option value="" <?php if ($_smarty_tpl->tpl_vars['shifoudachenghezhuo']->value==''){?>selected<?php }?>>请选择</option>
							<option value="已达成" <?php if ($_smarty_tpl->tpl_vars['shifoudachenghezhuo']->value=='已达成'){?>selected<?php }?>>已达成</option>
							<option value="未达成" <?php if ($_smarty_tpl->tpl_vars['shifoudachenghezhuo']->value=='未达成'){?>selected<?php }?>>未达成</option>
							<option value="正在跟近" <?php if ($_smarty_tpl->tpl_vars['shifoudachenghezhuo']->value=='正在跟近'){?>selected<?php }?>>正在跟近</option>
						</select>
					</td>
					<td>
						<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
					</td>
				</tr>
			</table>
		</div>
		</form>
	</div>
	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">
				<li><a class="add" href="?action=crm_user&do=new" target="dialog" mask="true" height="350"><span>添加</span></a></li>
				<li class="line">line</li>
				<li><a class="edit" href="?action=crm_user&do=edit&id={id}" target="dialog" mask="true" height="350"><span>修改</span></a></li>
				<li class="line">line</li>
				<li><a class="edit" href="?action=crm_user&do=bzxx&id={id}" target="dialog" mask="true" height="310"><span>备注</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center" width="20">ID</th>
					<th align="center">公司名称</th>
					<th align="center" orderField="shuoshuhangye" class="<?php if ($_smarty_tpl->tpl_vars['orderDirection']->value=='desc'){?>desc<?php }elseif($_smarty_tpl->tpl_vars['orderDirection']->value=='asc'){?>asc<?php }?>">所属行业</th>
					<th align="center" width="65">负责人</th>
					<th align="center" width="60">职位</th>
					<th align="center">电话</th>
					<th align="center" width="65">归属人</th>
					<th align="center">企业需求</th>
					<th align="center">客户意向</th>
					<th align="center">是否达成合作</th>
					<th align="center">备注</th>
					<th align="center" width="70">跟进情况</th>
				</tr>
			</thead>
			<tbody>			
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" >
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td align="center"><a class="add" href="?action=crm_user&do=gsxq&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="dialog" mask="true" rel="gsxq" height="550" width="800" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['gongshimingcheng'];?>
" ><span><?php echo $_smarty_tpl->tpl_vars['row']->value['gongshimingcheng'];?>
</span></a></td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['shuoshuhangye'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['fuzheren'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['zhiwei'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['guishuren'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['qiyexuqiu'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['kehuyixiang'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['shifoudachenghezhuo'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['beizhu'];?>
</td>
					<td align="center"><a class="add" href="?action=crm_hfjl&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="dialog" mask="true" rel="crm_hfjl" height="550" width="800" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['gongshimingcheng'];?>
跟进情况"><span>查看</span></a></td>
				</tr>			
			<?php } ?>
			</tbody>
		</table>
		<div class="panelBar">
			<div class="pages">
				<span>共<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
条</span>
			</div>
			
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" numPerPage="20" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>

		</div>
	</div>
</div><?php }} ?>