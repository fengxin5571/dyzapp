<?php /* Smarty version Smarty-3.1.12, created on 2015-12-02 15:26:20
         compiled from ".\tpl\p2p\borrow\qybsq_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:5088565e9c871cd947-22467058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb7eeee148fab5c4763fb11f635f847bae932b2' => 
    array (
      0 => '.\\tpl\\p2p\\borrow\\qybsq_list.htm',
      1 => 1449041179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5088565e9c871cd947-22467058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_565e9c87219df6_00532675',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e9c87219df6_00532675')) {function content_565e9c87219df6_00532675($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=qybsq">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
"/>
	<input type="hidden" name="date1" value="<?php echo $_REQUEST['date1'];?>
"/>
	<input type="hidden" name="date2" value="<?php echo $_REQUEST['date2'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		
	</div>

	
	
	
	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				
			</ul>
		</div>
		
		<table class="list" layouth="67" style="table-layout: fixed;">
			<thead>
				<tr align="center">
					<th width="20">ID</th>
					<th width="80">借款人</th>
					<th width="80">借款金额</th>
					<th align="50">借款周期</th>
					<th align="100">借款时间</th>
					<th align="40">状态</th>
					<th align="40">操作</th>
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Amount'];?>
%</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
期</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['starttime'];?>
</td>
						<td><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==''){?>新申请<?php }else{ ?>以处理<?php }?></td>		
						<td><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==''){?><a href="index.php?action=qybsq&do=status&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajaxTodo"><span style="color:red">处理</span></a><?php }?></td>
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