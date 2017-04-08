<?php /* Smarty version Smarty-3.1.12, created on 2015-11-25 14:58:27
         compiled from ".\tpl\p2p\user\p2puser_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:89715642d360c8bf91-22753325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '492ca91042c343fedff606e51ac6a4c94c75783e' => 
    array (
      0 => '.\\tpl\\p2p\\user\\p2puser_list.htm',
      1 => 1448430373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89715642d360c8bf91-22753325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5642d360cd4747_99100215',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642d360cd4747_99100215')) {function content_5642d360cd4747_99100215($_smarty_tpl) {?>

<form id="pagerForm" method="post" action="index.php?action=p2puser">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="time_start" value="<?php echo $_REQUEST['time_start'];?>
"/>
	<input type="hidden" name="time_over" value="<?php echo $_REQUEST['time_over'];?>
"/>
	<input type="hidden" name="mob" value="<?php echo $_REQUEST['mob'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=p2puser" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						手机号 ：<input type="text" name="mob" value="<?php echo $_REQUEST['mob'];?>
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
				<li><a class="edit" href="?action=p2puser&do=editpsd&id={id}" target="ajaxTodo" title="确定要重置用户密码吗？" mask="true"><span>重置用户密码</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center">
					<th width="30">ID</th>
					<th width="80">真实姓名</th>
					<th width="150">身份证号</th>
					<th width="100">手机号</th>
					<th width="80">帐户余额</th>	
					<th width="80">推荐人</th>
					<th width="150">注册时间</th>
					<th width="60">实名认证</th>
				</tr>
			</thead>
			<tbody>			
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" align="center">
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCardNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fee']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['recommendUid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['starttime'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['code']!=1){?><span style="color:red;">没有认证</span><?php }elseif($_smarty_tpl->tpl_vars['row']->value['code']==1){?>成功<?php }?></td>
				</tr>			
				<?php } ?>
			</tbody>
		</table>
		
		<div class="panelBar">
			<div class="pages"><span>共<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
条</span></div>
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" numPerPage="20" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div>

<?php }} ?>