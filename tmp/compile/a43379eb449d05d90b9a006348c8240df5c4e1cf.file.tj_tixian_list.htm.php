<?php /* Smarty version Smarty-3.1.12, created on 2015-11-20 08:57:20
         compiled from ".\tpl\p2p\tongji\tj_tixian_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:215985643048a63e5b3-00306795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a43379eb449d05d90b9a006348c8240df5c4e1cf' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_tixian_list.htm',
      1 => 1447981027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215985643048a63e5b3-00306795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5643048a696181_18811607',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643048a696181_18811607')) {function content_5643048a696181_18811607($_smarty_tpl) {?>

<form id="pagerForm" method="post" action="index.php?action=tj_tixian">
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
		<form onsubmit="return navTabSearch(this);" action="index.php?action=tj_tixian" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>查询用户：<input type="text" name="user" value="<?php echo $_REQUEST['user'];?>
"/></span></td>
					<td><span>起始时间：<input type="text" name="date1" class="date" value="<?php echo $_REQUEST['date1'];?>
" readonly="true"/></span></td>
					<td><span>结束时间：<input type="text" name="date2" class="date" value="<?php echo $_REQUEST['date2'];?>
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
				<li><a class="edit" href="index.php?action=tj_tixian&do=chaxun&id={id}" target="dialog" width="1000" height="750" rel="carborrowedit" mask="true"><span>查询用户充值记录</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center"  align="center">
					<th width="30">ID</th>
					<th width="80">真实姓名</th>
					<th width="100">手机号</th>
					<th width="200">流水号</th>
					<th width="130">提现金额</th>
					<th width="130">提现模式</th>
					<th width="100">手续费</th>
					<th width="150">充值时间</th>
					<th width="80">是否成功</th>
					<th width="110">操作</th>
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
					<td><a href="index.php?action=tj_tixian&do=chaxun&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['platformUserNo'];?>
" target="dialog" width="1000" height="750" rel="carborrowedit" mask="true">此用户提现记录</a></td>
					
				</tr>			
			<?php } ?>
			</tbody>
		</table>

		<div class="panelBar">
			<div class="pages">
				<span>共<?php echo $_smarty_tpl->tpl_vars['total']->value['num'];?>
条</span> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总计：</span><span style="color:red">提现成功手续费&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['total']->value['money'];?>
元</span>
			</div>
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value['num'];?>
" numPerPage="18" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
		

	</div>
</div>


<?php }} ?>