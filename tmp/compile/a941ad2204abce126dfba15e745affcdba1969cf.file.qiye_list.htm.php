<?php /* Smarty version Smarty-3.1.12, created on 2015-11-20 08:58:18
         compiled from ".\tpl\p2p\web\qiye_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:448564da38faf3cd9-00724443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a941ad2204abce126dfba15e745affcdba1969cf' => 
    array (
      0 => '.\\tpl\\p2p\\web\\qiye_list.htm',
      1 => 1447930156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '448564da38faf3cd9-00724443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564da38fb34a73_44706087',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564da38fb34a73_44706087')) {function content_564da38fb34a73_44706087($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=qiye">
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
					<th align="center" width="100px">客户姓名</th>
					<th align="center" width="120px">客户手机号</th>
					<th align="center" width="60px">借款金额 </th>
					<th align="center" width="60px">借款期限</th>		
					<th align="center" width="60px">借款利率</th>
					<th align="center" width="250px">借款信息</th>
					<th align="center" width="150px">申请时间</th>
					<th align="center" width="80px">状态</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Amount'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['borrowTime'];?>
</td>		
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['message'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['starttime'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
</td>
				</tr>			
			<?php } ?>
			</tbody>
		</table>
		<div class="panelBar">
			<div class="pages"><span>共<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
条</span></div>	
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" numPerPage="20" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div>
<?php }} ?>