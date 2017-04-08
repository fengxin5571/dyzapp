<?php /* Smarty version Smarty-3.1.12, created on 2015-11-25 10:33:36
         compiled from ".\tpl\p2p\tongji\tj_youhuiquan_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:92535644695a420ab7-37826475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f696ed956dd3c69ee1e6d4f884b7cce2edaf284e' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_youhuiquan_list.htm',
      1 => 1448418802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92535644695a420ab7-37826475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5644695a483da3_54911991',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5644695a483da3_54911991')) {function content_5644695a483da3_54911991($_smarty_tpl) {?>

<form id="pagerForm" method="post" action="index.php?action=tj_youhuiquan">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="18" />
	<input type="hidden" name="date1" value="<?php echo $_REQUEST['date1'];?>
"/>
	<input type="hidden" name="date2" value="<?php echo $_REQUEST['date2'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=tj_youhuiquan" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>起始时间: <input type="text" name="date1" class="date" value="<?php echo $_REQUEST['date1'];?>
" readonly="true"/></span></td>
					<td><span>结束时间: <input type="text" name="date2" class="date" value="<?php echo $_REQUEST['date2'];?>
" readonly="true"/></span>	</td>
					<td><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></td>
				</tr>
			</table>
		</div>
		</form>
	</div>
	

	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="index.php?action=tj_youhuiquan&do=chaxun&id={id}" target="dialog" width="1000" height="750" rel="tj_youhuiquanchaxun" mask="true"><span>查询用户优惠券</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center" align="center">
					<th width="30">优惠券ID</th>
					<th width="30">用户ID</th>
					<th width="60">真实姓名</th>
					<th width="100">手机号</th>
					<th width="80">优惠券金额</th>
					<th width="180">添加时间</th>
					<th width="50">状态</th>
					<th width="220">类型</th>
					<th width="150">操作</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['money']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['addTime'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['cc']==1){?>已过期<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1){?>未使用<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==2){?>已使用<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==3){?>未生效<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==4){?>使用中<?php }?><?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>通过注册获得<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']==2){?>填写推荐人<?php echo $_smarty_tpl->tpl_vars['row']->value['sourceUid'];?>
获得<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']==6){?>作为用户<?php echo $_smarty_tpl->tpl_vars['row']->value['sourceUid'];?>
推荐人获得<?php }?></td>
					<td><a class="edit" href="index.php?action=tj_youhuiquan&do=chaxun&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
" target="dialog" width="1000" height="750" rel="tj_youhuiquanchaxun" mask="true">查询用户优惠券</a></td>
				</tr>			
			<?php } ?>	
			</tbody>

		</table>

		<div class="panelBar">
			<div class="pages"><span>共<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
条</span></div>
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" numPerPage="18" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div>


<?php }} ?>