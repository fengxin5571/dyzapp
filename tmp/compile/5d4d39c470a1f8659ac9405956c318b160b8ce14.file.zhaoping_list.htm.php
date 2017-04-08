<?php /* Smarty version Smarty-3.1.12, created on 2015-11-11 09:25:42
         compiled from ".\tpl\qyz\zhaoping_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:547856248c38683055-64499507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d4d39c470a1f8659ac9405956c318b160b8ce14' => 
    array (
      0 => '.\\tpl\\qyz\\zhaoping_list.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '547856248c38683055-64499507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56248c386cf514_71934571',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56248c386cf514_71934571')) {function content_56248c386cf514_71934571($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=zhaoping">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="shijian" value="<?php echo $_REQUEST['shijian'];?>
"/>
	<input type="hidden" name="time_start" value="<?php echo $_REQUEST['time_start'];?>
"/>
	<input type="hidden" name="time_over" value="<?php echo $_REQUEST['time_over'];?>
"/>
</form>

<div class="page">
	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="add" href="?action=zhaoping&do=new" width="840" height="550" target="dialog" mask="true"><span>添加</span></a></li>
				<li><a class="edit" href="?action=zhaoping&do=edit&id={id}" width="840" height="550" target="dialog" mask="true"><span>修改</span></a></li>
				<li><a class="delete" href="?action=zhaoping&do=del&id={id}" target="ajaxTodo"  title="确定要删除吗?"><span>删除</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="54" width="610px" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center" width="30px">ID</th>
					<th align="center" width="150px">职位</th>
					<th align="center" width="200px">岗位职责</th>
					<th align="center" width="200px">任职资格</th>
					<th align="center" width="150px">操作时间</th>
					<th align="center" width="80px">操作者</th>
					<th align="center" width="80px">选项</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['gwzz'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rzzg'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==0){?><a href="index.php?action=zhaoping&do=qy&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target=岗位"ajaxTodo">启用</a><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==1){?><a href="index.php?action=zhaoping&do=jy&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajaxTodo" title="确定要起用此招聘信息吗?">停用</a><?php }?></td>
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