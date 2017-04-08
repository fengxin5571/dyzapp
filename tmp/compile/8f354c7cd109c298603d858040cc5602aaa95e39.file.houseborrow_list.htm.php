<?php /* Smarty version Smarty-3.1.12, created on 2015-11-17 16:16:28
         compiled from ".\tpl\p2p\borrow\houseborrow_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:110125642ddd62ef7e3-94715253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f354c7cd109c298603d858040cc5602aaa95e39' => 
    array (
      0 => '.\\tpl\\p2p\\borrow\\houseborrow_list.htm',
      1 => 1447748152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110125642ddd62ef7e3-94715253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5642ddd636d618_26554502',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642ddd636d618_26554502')) {function content_5642ddd636d618_26554502($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=houseborrow">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
"/>
	<input type="hidden" name="date1" value="<?php echo $_REQUEST['date1'];?>
"/>
	<input type="hidden" name="date2" value="<?php echo $_REQUEST['date2'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=houseborrow" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>查询标号：<input type="text" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
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
				<li class="line">line</li>
			</ul>
		</div>
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr>
					<th width="20">ID</th>
					<th width="80">借款人</th>
					<th align="100">标号</th>
					<th align="60">借款金额</th>
					<th align="150">项目名称</th>
					<th align="40">年化</th>
					<th align="40">利息</th>
					<th align="50">还款类型</th>
					<th align="50">借款周期</th>
					<th align="50">起投金额</th>
					<th align="50">服务费</th>
					<th align="80">已投金额</th>
					<th align="100">发标时间</th>
					<th align="40">状态</th>
					<th align="100">初审时间</th>
					<th align="20">初审操作员</th>
					<th align="100">复审时间</th>
					<th align="20">复审操作员</th>	
					
				</tr>
			</thead>
			<tbody>			
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"  align="center">
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderOrderNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rate']*1;?>
%</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rateAmount']*1;?>
元</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['repaymentType']==1){?>等额本息<?php }elseif($_smarty_tpl->tpl_vars['row']->value['repaymentType']==2){?>每月还息<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['borrowTime'];?>
个月</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['minMoney']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['serviceAmount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['hasBorrow']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1){?><span style="color:red;">未审核</span><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==2){?>初审通过<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==3){?> 复审通过<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==5){?>投标已结束<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['firstVerifyTime'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['firstUid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['secondVerifyTime'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['secondUid'];?>
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
" numPerPage="20" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div><?php }} ?>