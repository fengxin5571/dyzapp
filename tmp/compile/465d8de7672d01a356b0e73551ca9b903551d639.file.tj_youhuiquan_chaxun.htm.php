<?php /* Smarty version Smarty-3.1.12, created on 2015-11-20 09:32:37
         compiled from ".\tpl\p2p\tongji\tj_youhuiquan_chaxun.htm" */ ?>
<?php /*%%SmartyHeaderCode:64155645462e2aad40-67621542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '465d8de7672d01a356b0e73551ca9b903551d639' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_youhuiquan_chaxun.htm',
      1 => 1447752306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64155645462e2aad40-67621542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5645462e30a326_78852255',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5645462e30a326_78852255')) {function content_5645462e30a326_78852255($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=youhuiquan&do=chaxun">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="15" />
</form>

<div class="page">

	<div class="pageContent">
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center">
					<th width="50">优惠券ID</th>
					<th width="60">真实姓名</th>
					<th width="100">手机号</th>
					<th width="80">优惠券金额</th>
					<th width="180">添加时间</th>
					<th width="50">状态</th>
					<th width="220">类型</th>
				</tr>
			</thead>
			<tbody>		
			
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"  align="center">
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['money']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['addTime'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['status']!=1){?>已使用<?php }elseif($_smarty_tpl->tpl_vars['row']->value['cc']==1){?>已过期<?php }elseif($_smarty_tpl->tpl_vars['row']->value['cc']==2){?>未使用<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>通过注册获得<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']==2){?>填写推荐人<?php echo $_smarty_tpl->tpl_vars['row']->value['sourceUid'];?>
获得<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']==6){?>作为用户<?php echo $_smarty_tpl->tpl_vars['row']->value['sourceUid'];?>
推荐人获得<?php }?></td>	
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