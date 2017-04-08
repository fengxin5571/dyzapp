<?php /* Smarty version Smarty-3.1.12, created on 2015-11-11 10:47:40
         compiled from ".\tpl\p2p\carborrow_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:267225636c26c91e984-06940809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d6100fe4aefc996d8d2b67d1c4eaf3a7251e78f' => 
    array (
      0 => '.\\tpl\\p2p\\carborrow_list.htm',
      1 => 1447209346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267225636c26c91e984-06940809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5636c26c97df65_14663055',
  'variables' => 
  array (
    'sort' => 0,
    'select_sort' => 0,
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5636c26c97df65_14663055')) {function content_5636c26c97df65_14663055($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=carborrow">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="shijian" value="<?php echo $_REQUEST['shijian'];?>
"/>
	<input type="hidden" name="time_start" value="<?php echo $_REQUEST['time_start'];?>
"/>
	<input type="hidden" name="time_over" value="<?php echo $_REQUEST['time_over'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=carborrow" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td>
						新闻类别：:
						<?php echo $_smarty_tpl->tpl_vars['select_sort']->value;?>

					</td>
					<td>
						<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
					</td>
				</tr>
			</table>
		</div>
		</form>
	</div>

	
	
<div class="page">	
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
					<th width="80">借款人编号</th>
					<th align="center">标号</th>
					<th align="center">借款金额</th>
					<th align="center">项目名称</th>
					<th align="center">年化利率</th>
					<th align="center">利息</th>
					<th align="center">还款类型</th>
					<th align="center">借款周期</th>
					<th align="center">起投金额</th>
					<th align="center">服务费</th>
					<th align="center">服务费2</th>
					<th align="center">已投金额</th>
					<th align="center">发标时间</th>
					<th align="center">状态</th>
					<th align="center">初审时间</th>
					<th align="center">初审操作员</th>
					<th align="center">复审时间</th>
					<th align="center">复审操作员</th>
					
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['borrowerPlatformUserNo'];?>
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
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['minMoney']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['serviceAmount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['guaranteeAmount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['hasBorrow']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1){?><span style="color:red;">未审核</span><?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==2){?>初审通过<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==3){?>投标已满<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==4){?>复审通过<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==5){?>投标已结算<?php }?></td>
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