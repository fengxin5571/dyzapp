<?php /* Smarty version Smarty-3.1.12, created on 2015-11-19 14:37:29
         compiled from ".\tpl\p2p\user\p2puser_look.htm" */ ?>
<?php /*%%SmartyHeaderCode:25970564d6e29c9f0c2-03790351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86fdecab30d7f627eefd77868881f6431b6497d3' => 
    array (
      0 => '.\\tpl\\p2p\\user\\p2puser_look.htm',
      1 => 1447912304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25970564d6e29c9f0c2-03790351',
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
  'unifunc' => 'content_564d6e29ce7874_27392391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d6e29ce7874_27392391')) {function content_564d6e29ce7874_27392391($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=usermessage">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="mob" value="<?php echo $_REQUEST['mob'];?>
"/>
</form>

<div class="page">	
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
条</span>
			</div>
			
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" numPerPage="20" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>

		</div>
	</div>
</div><?php }} ?>