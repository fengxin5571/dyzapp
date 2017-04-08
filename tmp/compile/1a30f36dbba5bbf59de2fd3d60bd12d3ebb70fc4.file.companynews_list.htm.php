<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 11:32:28
         compiled from ".\tpl\p2p\companynews_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:2934556249b5ab80f28-02677225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a30f36dbba5bbf59de2fd3d60bd12d3ebb70fc4' => 
    array (
      0 => '.\\tpl\\p2p\\companynews_list.htm',
      1 => 1447126241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2934556249b5ab80f28-02677225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56249b5abd4de2_18559428',
  'variables' => 
  array (
    'sort' => 0,
    'select_sort' => 0,
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56249b5abd4de2_18559428')) {function content_56249b5abd4de2_18559428($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\web\\gsht\\lib\\plugins\\modifier.date_format.php';
?><form id="pagerForm" method="post" action="index.php?action=companynews">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="shijian" value="<?php echo $_REQUEST['shijian'];?>
"/>
	<input type="hidden" name="time_start" value="<?php echo $_REQUEST['time_start'];?>
"/>
	<input type="hidden" name="time_over" value="<?php echo $_REQUEST['time_over'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=companynews" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						新闻类别：:
						<?php echo $_smarty_tpl->tpl_vars['select_sort']->value;?>

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
				<li><a class="add" href="?action=companynews&do=new" target="dialog" width="1000" height="750" rel="companynewsnew" mask="true"><span>添加</span></a></li>
				<li><a class="edit" href="?action=companynews&do=edit&id={id}" target="dialog" width="1000" height="750" rel="companynewsedit" mask="true"><span>修改</span></a></li>
				<li><a class="delete" href="?action=companynews&do=del&id={id}" target="ajaxTodo"  title="确定要删除吗?"><span>删除</span></a></li>
				<!-- <li><a class="add" href="?action=companynews&do=view&id={id}" target="dialog" width="700" height="900" mask="true"><span>文章预览</span></a></li> -->
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" width="970px" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center" width="30px">ID</th>
					<th align="center" width="220px">新闻标题</th>
					<th align="center" width="150px">标签</th>
					<th align="center" width="300px">新闻简介</th>		
					<th align="center" width="100px">类别</th>		
					<th align="center" width="80px">位置排序</th>
					<th align="center" width="150px">操作时间</th>
					<th align="center" width="80px">操作者</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoqian'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['jianjie'];?>
</td>	
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['sort']==3){?>网站公告<?php }elseif($_smarty_tpl->tpl_vars['row']->value['sort']==4){?>行业新闻<?php }elseif($_smarty_tpl->tpl_vars['row']->value['sort']==5){?>投标公告<?php }elseif($_smarty_tpl->tpl_vars['row']->value['sort']==6){?>资费说明<?php }elseif($_smarty_tpl->tpl_vars['row']->value['sort']==7){?>政策法规<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['paixu'];?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
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