<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 14:19:31
         compiled from ".\tpl\wx\wxtext_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:317265625ac3d378d31-01278925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e7411c3b47a43dcc3c08cd00d025cdbc30d8f0' => 
    array (
      0 => '.\\tpl\\wx\\wxtext_list.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317265625ac3d378d31-01278925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5625ac3d3d0902_93406679',
  'variables' => 
  array (
    'state' => 0,
    'state_arr' => 0,
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625ac3d3d0902_93406679')) {function content_5625ac3d3d0902_93406679($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=wxtext">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="wxuser" value="<?php echo $_REQUEST['wxuser'];?>
"/>
	<input type="hidden" name="state" value="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
"/>
	<input type="hidden" name="time_start" value="<?php echo $_REQUEST['time_start'];?>
"/>
	<input type="hidden" name="time_over" value="<?php echo $_REQUEST['time_over'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=wxtext" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						所属微信:<input type="text" name="wxuser" size="10" value="<?php echo $_REQUEST['wxuser'];?>
"/>
					</td>
					<td>
						状态:<?php echo $_smarty_tpl->tpl_vars['state_arr']->value;?>

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
				<li><a class="add" href="?action=wxtext&do=new" target="dialog" mask="true"><span>添加</span></a></li>
				<li><a class="edit" href="?action=wxtext&do=edit&id={id}" target="dialog" mask="true"><span>修改</span></a></li>
				<li><a class="delete" href="?action=wxtext&do=del&id={id}" target="ajaxTodo"  title="确定要删除吗?"><span>删除</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		<table class="list" layouth="90" width="700px" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center" width="40px">ID</th>
					<th align="center" width="400px">内容</th>
					<th align="center" width="160px">状态</th>
					<th align="center" width="100px">所属微信</th>
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
					<td style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['state']==1){?>消息未启用<?php }elseif($_smarty_tpl->tpl_vars['row']->value['state']==2){?>关注后回复<?php }elseif($_smarty_tpl->tpl_vars['row']->value['state']==3){?>取消关注后回复<?php }elseif($_smarty_tpl->tpl_vars['row']->value['state']==4){?>收到"<?php echo $_smarty_tpl->tpl_vars['row']->value['keyword'];?>
"后自动回复<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['wxuser'];?>
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