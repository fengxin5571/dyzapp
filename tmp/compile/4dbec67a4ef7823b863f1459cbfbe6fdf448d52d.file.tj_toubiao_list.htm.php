<?php /* Smarty version Smarty-3.1.12, created on 2015-11-24 11:28:10
         compiled from ".\tpl\p2p\tongji\tj_toubiao_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:14474564451ba5ea6f1-69315326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dbec67a4ef7823b863f1459cbfbe6fdf448d52d' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_toubiao_list.htm',
      1 => 1448335688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14474564451ba5ea6f1-69315326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564451ba645fc0_19556126',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564451ba645fc0_19556126')) {function content_564451ba645fc0_19556126($_smarty_tpl) {?>

<form id="pagerForm" method="post" action="index.php?action=tj_toubiao">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="18" />
	<input type="hidden" name="mob" value="<?php echo $_REQUEST['mob'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=tj_toubiao" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>会员手机号: <input type="text" name="mob"  value="<?php echo $_REQUEST['mob'];?>
" /></span></td>
					<td><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></td>
				</tr>
			</table>
		</div>
		</form>
	</div>
	

	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="index.php?action=tj_toubiao&do=chaxun&id={id}" target="dialog" width="1000" height="700" rel="tj_touzirankchaxun" mask="true"><span>查询用户投资记录</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center"  align="center">
					<th width="50">ID</th>
					<th width="80">真实姓名</th>
					<th width="100">手机号</th>
					<th width="130">投资标号</th>
					<th width="130">投资金额</th>
					<th width="200">借款标题</th>
					<th width="100">借款金额</th>
					<th width="130">投资时间</th>
					<th width="100">操作</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderOrderNo'];?>
</td>
					<td><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['row']->value['amount']*1;?>
元</span></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderName'];?>
</td>
					<td><span style="color:blue;"><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount']*1;?>
元</span></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['starttime'];?>
</td>	
					<td><a class="edit" href="index.php?action=tj_toubiao&do=chaxun&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['platformUserNo'];?>
" target="dialog" width="1000" height="700" rel="tj_toubiaochaxun" mask="true">用户投标记录</a></td>
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