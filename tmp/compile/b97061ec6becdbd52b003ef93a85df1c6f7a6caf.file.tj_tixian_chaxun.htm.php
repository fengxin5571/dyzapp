<?php /* Smarty version Smarty-3.1.12, created on 2015-11-19 11:03:49
         compiled from ".\tpl\p2p\tongji\tj_tixian_chaxun.htm" */ ?>
<?php /*%%SmartyHeaderCode:2810856431167e78125-87789373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97061ec6becdbd52b003ef93a85df1c6f7a6caf' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_tixian_chaxun.htm',
      1 => 1447752411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2810856431167e78125-87789373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56431167ec82e4_50906738',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56431167ec82e4_50906738')) {function content_56431167ec82e4_50906738($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=tj_tixian&do=chaxun">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="18" />
</form>

<div class="page">
	<div class="pageContent">
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center"  align="center">
					<th width="30">ID</th>
					<th width="80">真实姓名</th>
					<th width="100">手机号</th>
					<th width="180">流水号</th>
					<th width="100">提现金额</th>
					<th width="100">提现模式</th>
					<th width="80">手续费</th>
					<th width="150">充值时间</th>
					<th width="80">是否成功</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['requestNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['amount']*1;?>
元</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['withdrawType']=="NORMAL"){?>普通模式<?php }elseif($_smarty_tpl->tpl_vars['row']->value['withdrawType']=="URGENT"){?><span style="color:red;">加急模式</span><?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fee']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['starttime'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['callcode']==1){?><span style="color:red;">成功</span><?php }else{ ?><span style="color:blue;">未成功</span><?php }?></td>	
				</tr>			
			<?php } ?>
			</tbody>
		</table>
		
		<div class="panelBar">
			<div class="pages">
				<span>共<?php echo $_smarty_tpl->tpl_vars['total']->value[0]['a'];?>
条</span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总计：</span><span style="color:red">手续费&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['total']->value[0]['b'];?>
元</span>
			</div>		
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" numPerPage="18" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div>


<?php }} ?>