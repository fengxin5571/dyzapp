<?php /* Smarty version Smarty-3.1.12, created on 2015-11-17 17:27:53
         compiled from ".\tpl\p2p\tongji\tj_user_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:40955642b66a483da7-77033454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eee963e0d14e2662a045a4bf940c9734cf888dfa' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_user_list.htm',
      1 => 1447752353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40955642b66a483da7-77033454',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5642b66a4db977_11568783',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642b66a4db977_11568783')) {function content_5642b66a4db977_11568783($_smarty_tpl) {?>

<form id="pagerForm" method="post" action="index.php?action=tj_user">
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
		<form onsubmit="return navTabSearch(this);" action="index.php?action=tj_user" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>查询用户：<input type="text" name="user" value="<?php echo $_REQUEST['user'];?>
"/></span></td>
					<td><span>起始时间: <input type="text" name="date1" class="date" value="<?php echo $_REQUEST['date1'];?>
" readonly="true"/></span></td>
					<td><span>结束时间: <input type="text" name="date2" class="date" value="<?php echo $_REQUEST['date2'];?>
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
				<li><a class="edit" href="index.php?action=tj_user&do=chaxun&id={id}" target="dialog" width="1000" height="750" rel="carborrowedit" mask="true"><span>查询</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center">
					<th width="30">ID</th>
					<th width="180">身份ID号</th>
					<th width="60">真实姓名</th>
					<th width="150">身份证号</th>
					<th width="100">手机号</th>
					<th width="150">认证时间</th>
					<th width="80">是否成功</th>
					<th width="150">认证成功时间</th>
					<th width="50">费用</th>
					<th width="60">操作</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['platformUserNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCardNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['starttime'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['callcode']==1){?>成功<?php }else{ ?>未成功<?php }?></td>
					<td><span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['row']->value['notifytime'];?>
</span></td>
					<td>2.00元</td>
					<td><a href="index.php?action=tj_user&do=chaxun&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['platformUserNo'];?>
" target="dialog" width="1000" height="750" rel="carborrowedit" mask="true">查询</a></td>		
				</tr>			
			<?php } ?>
			</tbody>
			

		</table>
		
		<div class="panelBar">
			<div class="pages">
				<span>共<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
条</span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总计：</span><span style="color:red">认证费&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['total']->value*2;?>
.00元</span>
			</div>
			
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" numPerPage="18" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>

		</div>
	</div>
</div>


<?php }} ?>