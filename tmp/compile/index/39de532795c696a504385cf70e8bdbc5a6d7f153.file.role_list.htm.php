<?php /* Smarty version Smarty-3.1.12, created on 2016-03-31 10:07:32
         compiled from ".\tpl\index\role_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:2282156fc86644a1047-01856741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39de532795c696a504385cf70e8bdbc5a6d7f153' => 
    array (
      0 => '.\\tpl\\index\\role_list.htm',
      1 => 1446860727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2282156fc86644a1047-01856741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56fc86644cdcf1_04234998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fc86644cdcf1_04234998')) {function content_56fc86644cdcf1_04234998($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=role">
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
		<form onsubmit="return navTabSearch(this);" action="index.php?action=role" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						角色名称:<input type="text" name="title" size="10" value="<?php echo $_REQUEST['title'];?>
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
				<li><a class="add" href="?action=role&do=new" target="dialog" mask="true"><span>添加</span></a></li>
				<li><a class="edit" href="?action=role&do=edit&id={id}" target="dialog" mask="true"><span>修改</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		<table class="list" layouth="90" width="400px" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center" width="15px">ID</th>
					<th align="center" width="120px">角色名称</th>
					<th align="center" width="800px">页面权限</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
					<td style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?php echo $_smarty_tpl->tpl_vars['row']->value['action'];?>
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