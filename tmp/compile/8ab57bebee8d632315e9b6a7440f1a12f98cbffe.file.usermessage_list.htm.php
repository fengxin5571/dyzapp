<?php /* Smarty version Smarty-3.1.12, created on 2015-11-27 10:02:53
         compiled from ".\tpl\p2p\user\usermessage_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:12105642d2ee81f020-73778973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ab57bebee8d632315e9b6a7440f1a12f98cbffe' => 
    array (
      0 => '.\\tpl\\p2p\\user\\usermessage_list.htm',
      1 => 1448589741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12105642d2ee81f020-73778973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5642d2ee899141_28776070',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642d2ee899141_28776070')) {function content_5642d2ee899141_28776070($_smarty_tpl) {?>


<form id="pagerForm" method="post" action="index.php?action=usermessage">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="mob" value="<?php echo $_REQUEST['mob'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=usermessage" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>手机号 ：<input type="text" name="mob" value="<?php echo $_REQUEST['mob'];?>
"/></td>
					<td><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></td>
				</tr>
			</table>
		</div>
		</form>
	</div>
	
	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="?action=usermessage&do=edit&id={id}" target="dialog" width="1000" height="750" rel="usermessageedit" mask="true"><span>审核详情</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center">
					<th width="30">ID</th>
					<th width="80">真实姓名</th>
					<th width="150">身份证号</th>
					<th width="80">手机号</th>
					<th width="150">居住地区</th>	
					<th width="30">性别</th>
					<th width="30">婚否</th>
					<th width="80">学历</th>
					<th width="100">月收入</th>
					<th width="80">职业</th>
					<th width="60">操作</th>
				</tr>
			</thead>
			<tbody>			
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"  align="center">
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCardNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['area'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['row']->value['sex']==2){?>女<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['marry']==1){?>已婚<?php }elseif($_smarty_tpl->tpl_vars['row']->value['marry']==2){?>未婚<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['edu']==1){?>高中或以下<?php }elseif($_smarty_tpl->tpl_vars['row']->value['edu']==2){?>大专<?php }elseif($_smarty_tpl->tpl_vars['row']->value['edu']==3){?>本科<?php }elseif($_smarty_tpl->tpl_vars['row']->value['edu']==4){?>研究生或以上<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['wages']==1){?>1000元以下<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==2){?>1001-2000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==3){?>2000-5000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==4){?>5000-10000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==5){?>10000-20000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==6){?>20000-50000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==7){?>50000元以上<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['profession'];?>
</td>
					<td><a href="index.php?action=usermessage&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="dialog" width="1000" height="750" rel="usermessageedit" mask="true">审核</a></td>		
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