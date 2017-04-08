<?php /* Smarty version Smarty-3.1.12, created on 2015-11-28 16:17:23
         compiled from ".\tpl\p2p\tongji\tichengbiao_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:137105659631333f9a4-95627813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcf17e13f63278419c76b5f46d33da433e67273d' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tichengbiao_list.htm',
      1 => 1448689439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137105659631333f9a4-95627813',
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
  'unifunc' => 'content_5659631339b288_81923592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5659631339b288_81923592')) {function content_5659631339b288_81923592($_smarty_tpl) {?>

<form id="pagerForm" method="post" action="index.php?action=tichengbiao">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="18" />
	<input type="hidden" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
"/>
	<input type="hidden" name="user" value="<?php echo $_REQUEST['user'];?>
"/>
	<input type="hidden" name="date1" value="<?php echo $_REQUEST['date1'];?>
"/>
	<input type="hidden" name="date2" value="<?php echo $_REQUEST['date2'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=tichengbiao" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>投标标号：<input type="text" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
" /></span>	</td>
					<td><span>投标用户：<input type="text" name="user" value="<?php echo $_REQUEST['user'];?>
" /></span>	</td>
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
					<th width="180">时间</th>
					<th width="50">姓名1</th>
					<th width="150">姓名1编号</th>
					<th width="50">姓名2</th>
					<th width="150">姓名2编号</th>
					<th width="130">标号</th>
					<th width="80">投资金额</th>
					<th width="50">提成比例</th>
					<th width="50">提成金额</th>
					<th width="50">标总期数</th>
					<th width="50">提成次数</th>
					
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['notifytime'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user1'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user1a'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user2'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user2a'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderOrderNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['Commission']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['CommissionRate'];?>
‱</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['amount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
期</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['CommissionOrder'];?>
期</td>
	<!--	<td><a class="edit" href="index.php?action=tj_youhuiquan&do=chaxun&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
" target="dialog" width="1000" height="750" rel="tj_youhuiquanchaxun" mask="true">查询用户优惠券</a></td>
	-->
				</tr>			
			<?php } ?>	
			</tbody>

		</table>

		<div class="panelBar">
			<div class="pages"><span style="color:red">共<?php echo $_smarty_tpl->tpl_vars['total']->value['num'];?>
条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span  style="color:red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;共<?php echo $_smarty_tpl->tpl_vars['total']->value['money']*1;?>
元</span></div>
			<div class="pagination" targetType="navTab" totalCount="<?php echo $_smarty_tpl->tpl_vars['total']->value['num'];?>
" numPerPage="18" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div>


<?php }} ?>