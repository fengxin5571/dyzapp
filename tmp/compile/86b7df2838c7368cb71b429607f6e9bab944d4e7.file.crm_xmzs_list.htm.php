<?php /* Smarty version Smarty-3.1.12, created on 2016-01-07 09:21:23
         compiled from ".\tpl\crm\crm_xmzs_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:44255683346d247a69-26265249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86b7df2838c7368cb71b429607f6e9bab944d4e7' => 
    array (
      0 => '.\\tpl\\crm\\crm_xmzs_list.htm',
      1 => 1452129660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44255683346d247a69-26265249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5683346d293f18_60307167',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5683346d293f18_60307167')) {function content_5683346d293f18_60307167($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=crm_xmzs">
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
		<form onsubmit="return navTabSearch(this);" action="index.php?action=crm_xmzs" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						公司名称：<input type="text" name="name" size="10" value="<?php echo $_REQUEST['name'];?>
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
				<li><a class="add" href="?action=crm_xmzs&do=new" target="dialog" mask="true" height="550" width="1350"><span>添加</span></a></li>
				<li class="line">line</li>
				<li><a class="edit" href="?action=crm_xmzs&do=edit&id={id}" target="dialog" mask="true" height="550" width="1350"><span>修改</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center" width="20">ID</th>
					<th align="center">公司名称</th>
					<th align="center" width="100">所属行业</th>
					<th align="center" width="60">地区</th>
					<th align="center">电话</th>
					<th align="center" width="80">状态</th>
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
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td align="center"><a class="add" href="?action=crm_xmzs&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="dialog" mask="true" rel="list_gsxq" height="550" width="1350" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</span></a></td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['area'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td align="center"><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==2){?>对接中<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==3){?>服务中<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==4){?>成功孵化<?php }?></td>
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