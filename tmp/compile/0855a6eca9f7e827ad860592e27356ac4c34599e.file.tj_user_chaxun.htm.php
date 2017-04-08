<?php /* Smarty version Smarty-3.1.12, created on 2015-11-17 17:29:11
         compiled from ".\tpl\p2p\tongji\tj_user_chaxun.htm" */ ?>
<?php /*%%SmartyHeaderCode:235615642bb072c9596-99611358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0855a6eca9f7e827ad860592e27356ac4c34599e' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_user_chaxun.htm',
      1 => 1447752359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235615642bb072c9596-99611358',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5642bb0731d452_73400112',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642bb0731d452_73400112')) {function content_5642bb0731d452_73400112($_smarty_tpl) {?>

<form id="pagerForm" method="post" action="index.php?action=tj_user&do=chaxun">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="15" />
</form>

<div class="page">
	<div class="pageContent">

		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center">
					<th width="30">ID</th>
					<th width="180">身份ID号</th>
					<th width="60">真实姓名</th>
					<th width="150">身份证号</th>
					<th width="100">手机号</th>
					<th width="150">认证时间</th>
					<th width="50">是否成功</th>
					<th width="150">认证成功时间</th>
					<th width="50">费用</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['notifytime'];?>
</td>
					<td>2.00元</td>		
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
" numPerPage="15" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>

		</div>
	</div>
</div>


<?php }} ?>