<?php /* Smarty version Smarty-3.1.12, created on 2015-11-02 12:45:20
         compiled from ".\tpl\p2p\shenhe_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:160495636db01da6431-87644094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f63ee7e5481fbace97947dee9299f8271c40713' => 
    array (
      0 => '.\\tpl\\p2p\\shenhe_list.htm',
      1 => 1446439515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160495636db01da6431-87644094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5636db01e11131_31375101',
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
<?php if ($_valid && !is_callable('content_5636db01e11131_31375101')) {function content_5636db01e11131_31375101($_smarty_tpl) {?><form id="pagerForm" method="post" action="index.php?action=gsnews">
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
		<form onsubmit="return navTabSearch(this);" action="index.php?action=gsnews" method="post">
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
	
	
	
	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="?action=shenhe&do=edit&id={id}" target="dialog" width="1000" height="750" rel="carborrowedit" mask="true"><span>审核</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr>
					<th align="center">ID</th>
					<th align="center">借款人编号</th>
					<th align="center">标号</th>
					<th align="center">发标类型</th>	
					<th align="center">借款金额</th>
					<th align="center">项目名称</th>
					<th align="center">年化利率</th>
					<th align="center">利息</th>
					<th align="center">还款类型</th>
					<th align="center">借款周期</th>
					<th align="center">投标奖励</th>
					<th align="center">起投金额</th>
					<th align="center">服务费</th>
					<th align="center">服务费2</th>
					<th align="center">初审人员</th>
					<th align="center">逾期金额</th>
					<th align="center">发标时间</th>
					<th align="center">操作</th>
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
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>车利宝<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']==2){?>房利宝<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']==3){?>企业宝<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rate'];?>
%</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rateAmount'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['repaymentType'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['borrowTime'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['moneyAward'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['minMoney'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['serviceAmount'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['guaranteeAmount'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['firstUid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['expiredMoney'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['status']==1){?>请审核<?php }elseif($_smarty_tpl->tpl_vars['row']->value['status']==3){?><a href="index.php?action=shenhe&do=fushen&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajaxTodo">复审</a><?php }?></td>		
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