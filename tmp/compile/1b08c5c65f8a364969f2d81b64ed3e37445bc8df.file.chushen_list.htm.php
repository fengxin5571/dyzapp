<?php /* Smarty version Smarty-3.1.12, created on 2015-12-02 16:57:55
         compiled from ".\tpl\p2p\borrow\chushen_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:185325642ddd6a852d2-58183457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b08c5c65f8a364969f2d81b64ed3e37445bc8df' => 
    array (
      0 => '.\\tpl\\p2p\\borrow\\chushen_list.htm',
      1 => 1449044556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185325642ddd6a852d2-58183457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5642ddd6ae85b0_68605620',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642ddd6ae85b0_68605620')) {function content_5642ddd6ae85b0_68605620($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=chushen">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="20" />
	<input type="hidden" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
"/>

</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=chushen" method="post">
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
				<li><a class="edit" href="?action=chushen&do=edit&id={id}" target="dialog" width="1000" height="750" rel="chushenedit" mask="true"><span>审核</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr  align="center" >
					<th width="20">ID</th>
					<th align="center">借款人编号</th>
					<th width="50">发标类型</th>	
					<th width="80">借款金额</th>
					<th width="200">项目名称</th>
					<th align="center">年化利率</th>
					<th align="center">利息</th>
					<th align="center">还款类型</th>
					<th align="center">借款周期</th>
					<th align="center">投标奖励</th>
					<th align="center">起投金额</th>
					<th align="center">发标时间</th>
					<th width="50">状态</th>
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
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1){?>车利宝<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']==2){?>房利宝<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']==3){?>企业宝<?php }?></td>
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['moneyAward'];?>
%</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['minMoney'];?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
					<td><a href="index.php?action=chushen&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="dialog" width="1000" height="750" rel="chushenedit" mask="true"><span style="color:red">初审</span></a></td>
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