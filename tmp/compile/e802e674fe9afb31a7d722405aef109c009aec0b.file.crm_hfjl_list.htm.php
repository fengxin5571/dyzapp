<?php /* Smarty version Smarty-3.1.12, created on 2015-12-28 16:39:42
         compiled from ".\tpl\crm\crm_hfjl_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:8360567e0a6e188e99-19906342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e802e674fe9afb31a7d722405aef109c009aec0b' => 
    array (
      0 => '.\\tpl\\crm\\crm_hfjl_list.htm',
      1 => 1451291884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8360567e0a6e188e99-19906342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_567e0a6e1be512_85088776',
  'variables' => 
  array (
    'id' => 0,
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567e0a6e1be512_85088776')) {function content_567e0a6e1be512_85088776($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=crm_hfjl">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="gongshimingcheng" value="<?php echo $_REQUEST['gongshimingcheng'];?>
"/>
	<input type="hidden" name="time_start" value="<?php echo $_REQUEST['time_start'];?>
"/>
	<input type="hidden" name="time_over" value="<?php echo $_REQUEST['time_over'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=crm_hfjl" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						公司名称：<input type="text" name="gongshimingcheng" size="10" value="<?php echo $_REQUEST['gongshimingcheng'];?>
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
				<?php if ($_smarty_tpl->tpl_vars['id']->value!=''){?>
					<li><a class="add" href="?action=crm_hfjl&do=new&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" target="dialog" mask="true" height="300"><span>添加</span></a></li>
					<li class="line">line</li>
				<?php }?>
				<li><a class="edit" href="?action=crm_hfjl&do=edit&id={id}" target="dialog" mask="true" height="300"><span>修改</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center">ID</th>
					<th align="center">公司名称</th>
					<th align="center" width="85">回访时间</th>
					<th align="center">回访情况</th>
					<th align="center" width="65">回访人</th>
				</tr>
			</thead>
			<tbody>			
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['gongshimingcheng'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['huifangriq'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['huifangqingkuang'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['huifangren'];?>
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