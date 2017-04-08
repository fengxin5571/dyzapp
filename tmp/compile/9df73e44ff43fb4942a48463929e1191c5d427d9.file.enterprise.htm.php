<?php /* Smarty version Smarty-3.1.12, created on 2015-11-19 14:51:28
         compiled from ".\tpl\p2p\borrow\enterprise.htm" */ ?>
<?php /*%%SmartyHeaderCode:29357564d6597b7d219-84474774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9df73e44ff43fb4942a48463929e1191c5d427d9' => 
    array (
      0 => '.\\tpl\\p2p\\borrow\\enterprise.htm',
      1 => 1447915857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29357564d6597b7d219-84474774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564d6597b9ba65_23617931',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d6597b9ba65_23617931')) {function content_564d6597b9ba65_23617931($_smarty_tpl) {?><form id="pagerForm" method="post" action="?action=enterpriseborrow&do=enterprise">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="realName" value="<?php echo $_REQUEST['realName'];?>
"/>
	<input type="hidden" name="mobile" value="<?php echo $_REQUEST['mobile'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="?action=enterpriseborrow&do=enterprise" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>用户名：<input type="text" name="realName" value="<?php echo $_REQUEST['realName'];?>
"/></span></td>
					<td><span>手机号：<input type="text" name="mobile" value="<?php echo $_REQUEST['mobile'];?>
"/></span></td>
					<td><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></td>
				</tr>
			</table>
		</div>
		</form>
	</div>
	<div class="pageContent">
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center">
					<th width="20">ID</th>
					<th width="80">用户名</th>
					<th width="80">手机号</th>
					<th width="50">操作</th>
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
						<td><a class="btnSelect" href="javascript:" onclick="$.bringBack({borrowerPlatformUserNo:'<?php echo $_smarty_tpl->tpl_vars['row']->value['platformUserNo'];?>
', realName:'<?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
'})"></a></td>	
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