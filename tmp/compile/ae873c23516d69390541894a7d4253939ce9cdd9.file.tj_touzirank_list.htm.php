<?php /* Smarty version Smarty-3.1.12, created on 2015-11-19 11:06:51
         compiled from ".\tpl\p2p\tongji\tj_touzirank_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:122785643ebfc510ff5-54323310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae873c23516d69390541894a7d4253939ce9cdd9' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_touzirank_list.htm',
      1 => 1447752367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122785643ebfc510ff5-54323310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5643ebfc55d4a5_81151069',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643ebfc55d4a5_81151069')) {function content_5643ebfc55d4a5_81151069($_smarty_tpl) {?>

<form id="pagerForm" method="post" action="index.php?action=tj_touzirank">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="18" />
	<input type="hidden" name="date1" value="<?php echo $_REQUEST['date1'];?>
"/>
	<input type="hidden" name="date2" value="<?php echo $_REQUEST['date2'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=tj_touzirank" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>起始时间：<input type="text" name="date1" class="date" value="<?php echo $_REQUEST['date1'];?>
" readonly="true"/></span></td>
					<td><span>结束时间：<input type="text" name="date2" class="date" value="<?php echo $_REQUEST['date2'];?>
" readonly="true"/></span></td>	
					<td><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></td>
				</tr>
			</table>
		</div>
		</form>
	</div>

	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="index.php?action=tj_touzirank&do=chaxun&id={id}" target="dialog" width="1000" height="800" rel="tj_touzirankchaxun" mask="true"><span>查询用户投资记录</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center"  align="center">
					<th width="160">认证ID</th>
					<th width="80">真实姓名</th>
					<th width="100">手机号</th>
					<th width="130">投资金额金额</th>
					<th width="110">操作</th>
				</tr>
			</thead>
			
			<tbody>		
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['platformUserNo'];?>
"  align="center">
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['platformUserNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['sumAount']*1;?>
 元</td>
					<td><a href="index.php?action=tj_touzirank&do=chaxun&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['platformUserNo'];?>
" target="dialog" width="1000" height="750"  rel="tj_touzirankchaxun" mask="true">此用户投资记录</a></td>	
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
" numPerPage="18" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div>


<?php }} ?>