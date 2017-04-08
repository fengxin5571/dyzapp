<?php /* Smarty version Smarty-3.1.12, created on 2015-11-19 11:07:57
         compiled from ".\tpl\p2p\tongji\tj_touzirank_chaxun.htm" */ ?>
<?php /*%%SmartyHeaderCode:62185643f8ef456134-70381120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '182a03e01c5899467a77835adf064f77baf50d80' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_touzirank_chaxun.htm',
      1 => 1447752377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62185643f8ef456134-70381120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5643f8ef4aa001_59393498',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643f8ef4aa001_59393498')) {function content_5643f8ef4aa001_59393498($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=tj_touzirank&do=chaxun">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="15" />
</form>

<div class="page">
	<div class="pageContent">
		<table class="list" layouth="90" style="table-layout: fixed;">
			
			<thead>
				<tr align="center"  align="center">
					<th width="80">真实姓名</th>
					<th width="100">手机号</th>
					<th width="130">投资标号</th>
					<th width="130">投资金额</th>
					<th width="200">借款标题</th>
					<th width="130">借款金额</th>
					<th width="130">投资时间</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount']*1;?>
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