<?php /* Smarty version Smarty-3.1.12, created on 2015-11-16 11:23:48
         compiled from ".\tpl\p2p\web\p2plink_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:291975642dddc0bebc8-49332567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '414d985d0e0c2e4b2c9b9d74639f45cde7f7f6e2' => 
    array (
      0 => '.\\tpl\\p2p\\web\\p2plink_list.htm',
      1 => 1447643998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291975642dddc0bebc8-49332567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5642dddc103665_15908281',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642dddc103665_15908281')) {function content_5642dddc103665_15908281($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=p2plink">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
</form>

<div class="page">
	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="add" href="?action=p2plink&do=new" target="dialog" mask="true"><span>添加</span></a></li>
				<li><a class="delete" href="?action=p2plink&do=del&id={id}" target="ajaxTodo"  title="确定要删除吗?"><span>删除</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="54" width="820px">
			<thead>
				<tr>
					<th align="center" width="50px">ID</th>
					<th align="center" width="180px">网站名称</th>
					<th align="center" width="200px">URL地址</th>
					<th align="center" width="350px">图片</th>		
					<th align="center" width="80px">位置排序</th>
					<th align="center" width="150px">操作时间</th>
					<th align="center" width="120px">操作者</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
</td>		
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['paixu'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
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
</div>
<?php }} ?>