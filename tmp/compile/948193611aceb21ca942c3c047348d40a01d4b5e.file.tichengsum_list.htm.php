<?php /* Smarty version Smarty-3.1.12, created on 2015-11-28 16:12:28
         compiled from ".\tpl\p2p\tongji\tichengsum_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:30892565961ec1d1649-85852077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '948193611aceb21ca942c3c047348d40a01d4b5e' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tichengsum_list.htm',
      1 => 1448698083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30892565961ec1d1649-85852077',
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
  'unifunc' => 'content_565961ec219df9_33613504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565961ec219df9_33613504')) {function content_565961ec219df9_33613504($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=tichengsum">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="18" />
	<input type="hidden" name="user" value="<?php echo $_REQUEST['user'];?>
"/>
	<input type="hidden" name="date1" value="<?php echo $_REQUEST['date1'];?>
"/>
	<input type="hidden" name="date2" value="<?php echo $_REQUEST['date2'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=tichengsum" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>投标用户：<input type="text" name="user" value="<?php echo $_REQUEST['user'];?>
" /></span>	</td>
					<td><span>起始时间: <input type="text" name="date1" class="date" value="<?php echo $_REQUEST['date1'];?>
" readonly="true"/></span></td>
					<td><span>结束时间: <input type="text" name="date2" class="date" value="<?php echo $_REQUEST['date2'];?>
" readonly="true"/></span>	</td>
					<td><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></td>
				</tr>
			</table>
		</div>
		</form>
	</div>
	

	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="index.php?action=tichengsum&do=chaxun&id={id}" target="dialog" width="1000" height="750" rel="tichengsumchaxun" mask="true"><span>查询用户优惠券</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center" align="center">
					<th width="150">姓名1编号</th>
					<th width="50">姓名1</th>
					<th width="70">提成总金额</th>
					<th width="70">标总总次数</th>		
					<th width="50">操作</th>							
				</tr>
			</thead>
			<tbody>		
			
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['user'];?>
"  align="center">
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['amount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['num'];?>
期</td>
					<td><a class="edit" href="index.php?action=tichengsum&do=chaxun&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['user'];?>
" target="dialog" width="1000" height="750" rel="tichengsumchaxun" mask="true">查询用户</a></td>
	
				</tr>			
			<?php } ?>	
			</tbody>

		</table>

		<div class="panelBar">
			<div class="pages"><span style="color:red">共<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" numPerPage="18" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div>


<?php }} ?>