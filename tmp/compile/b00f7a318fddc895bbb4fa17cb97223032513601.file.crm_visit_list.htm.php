<?php /* Smarty version Smarty-3.1.12, created on 2015-12-23 10:00:07
         compiled from ".\tpl\crm\crm_visit_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:34165679fb5826dcb5-38626757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b00f7a318fddc895bbb4fa17cb97223032513601' => 
    array (
      0 => '.\\tpl\\crm\\crm_visit_list.htm',
      1 => 1450836000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34165679fb5826dcb5-38626757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5679fb582b6462_50874164',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679fb582b6462_50874164')) {function content_5679fb582b6462_50874164($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=crm_visit">
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
		<form onsubmit="return navTabSearch(this);" action="index.php?action=crm_visit" method="post">
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
				<li><a class="add" href="?action=crm_visit&do=new" target="dialog" mask="true" rel="visitAdd" height="350"><span>添加</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center">ID</th>
					<th align="center">姓名</th>
					<th align="center">公司</th>
					<th align="center">职业</th>
					<th align="center">电话</th>
					<th align="center">拜访时间</th>
					<th align="center">备注</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['company'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['zhiye'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</td>
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