<?php /* Smarty version Smarty-3.1.12, created on 2015-11-18 15:03:18
         compiled from ".\tpl\p2p\borrow\wanjie_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:18706564c1d2a5b1360-15691685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9de10562e5a33d0f11a443003f1cffbe779ec11' => 
    array (
      0 => '.\\tpl\\p2p\\borrow\\wanjie_list.htm',
      1 => 1447830195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18706564c1d2a5b1360-15691685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564c1d2a62b481_92363553',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c1d2a62b481_92363553')) {function content_564c1d2a62b481_92363553($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=fushen">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=fushen" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>查询标号：<input type="text" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
"/></span></td>	
					<td><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></td>
				</tr>
			</table>
		</div>
		</form>
	</div>

	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="?action=wanjie&do=edit&id={id}" target="ajaxTodo" rel="carborrowedit" mask="true"><span>审核</span></a></li> 
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center">
					<th align="center">ID</th>
					<th align="center">标号</th>
					<th align="center">借款金额</th>
					<th align="center">年化利率</th>
					<th align="center">利息</th>
					<th align="center">还款类型</th>
					<th align="center">借款周期</th>
					<th align="center">还款周期</th>
					<th align="center">投标奖励</th>
					<th align="center">起投金额</th>
					<th align="center">已投金额</th>
					<th align="center">服务费</th>
					<th align="center">初审人员</th>
					<th align="center">初审时间</th>
					<th align="center">复审人员</th>
					<th align="center">复审时间</th>
					<th align="center">发标时间</th>
					<th width="50">操作</th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderOrderNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rate']*1;?>
%</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rateAmount']*1;?>
元</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['repaymentType']==1){?>等额本息<?php }elseif($_smarty_tpl->tpl_vars['row']->value['repaymentType']==2){?>每月还息<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['borrowTime'];?>
个月</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['hasborrowTime'];?>
个月</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['moneyAward']*1;?>
%</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['minMoney']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['hasBorrow']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['serviceAmount'];?>
%</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['firstUid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['firstVerifyTime'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['secondUid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['secondVerifyTime'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['tenderAmount']==$_smarty_tpl->tpl_vars['row']->value['hasBorrow']&&$_smarty_tpl->tpl_vars['row']->value['status']==4){?><a href="index.php?action=wanjie&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajaxTodo"><span style="color:red">完结标</span></a><?php }else{ ?>以完结<?php }?></td>		
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