<?php /* Smarty version Smarty-3.1.12, created on 2015-12-23 10:08:12
         compiled from ".\tpl\crm\crm_visit_user.htm" */ ?>
<?php /*%%SmartyHeaderCode:83615679fe231443f5-45512453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff29a54771ba19ae68c3088018e9eb94d6bbffbb' => 
    array (
      0 => '.\\tpl\\crm\\crm_visit_user.htm',
      1 => 1450836480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83615679fe231443f5-45512453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5679fe23188e90_47335525',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679fe23188e90_47335525')) {function content_5679fe23188e90_47335525($_smarty_tpl) {?><form id="pagerForm" method="post" action="?action=crm_visit&do=user">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="name" value="<?php echo $_REQUEST['name'];?>
"/>
	<input type="hidden" name="time_start" value="<?php echo $_REQUEST['time_start'];?>
"/>
	<input type="hidden" name="time_over" value="<?php echo $_REQUEST['time_over'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return dwzSearch(this, 'dialog');" action="?action=crm_visit&do=user" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						姓名:<input type="text" name="name" size="10" value="<?php echo $_REQUEST['name'];?>
"/>
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
				
			</ul>
		</div>
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center">ID</th>
					<th align="center">姓名</th>
					<th align="center">年龄</th>
					<th align="center">行业</th>
					<th align="center">公司</th>
					<th align="center">职业</th>
					<th align="center">电话</th>
					<th align="center">意向服务</th>
					<th width="50">操作</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ages'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['hangye'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['company'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['zhiye'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['yixiangfuwu'];?>
</td>
					<td><a class="btnSelect" href="javascript:" onclick="$.bringBack({id:'<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
', name:'<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
', company:'<?php echo $_smarty_tpl->tpl_vars['row']->value['company'];?>
', zhiye:'<?php echo $_smarty_tpl->tpl_vars['row']->value['zhiye'];?>
', mobile:'<?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
'})"></a></td>
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