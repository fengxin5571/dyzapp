<?php /* Smarty version Smarty-3.1.12, created on 2015-11-19 11:07:19
         compiled from ".\tpl\p2p\tongji\tj_jiekuan_chaxun.htm" */ ?>
<?php /*%%SmartyHeaderCode:523256442e506c7af6-54988138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e6bd3813f1346e3974ffc041d0d57e00799f61e' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_jiekuan_chaxun.htm',
      1 => 1447752446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '523256442e506c7af6-54988138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56442e50745924_62913188',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56442e50745924_62913188')) {function content_56442e50745924_62913188($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=tj_jiekuan&do=chaxun">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="15" />
</form>

<div class="page">

	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="index.php?action=tj_jiekuan&do=chaxun&id={id}" target="dialog" width="1000" height="800" rel="tj_jiekuan" mask="true"><span>查询标号投资记录</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center"  align="center">
					<th width="50">ID</th>
					<th width="50">会员姓名</th>
					<th width="80">会员手机</th>
					<th width="60">借款金额</th>
					<th width="200">借标标题</th>
					<th width="60">投标金额</th>
					<th width="150">投标时间</th>
				</tr>
			</thead>
			<tbody>		
			
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderOrderNo'];?>
"  align="center">
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['amount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['starttime'];?>
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
" numPerPage="15" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div>


<?php }} ?>