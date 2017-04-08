<?php /* Smarty version Smarty-3.1.12, created on 2015-11-19 11:07:16
         compiled from ".\tpl\p2p\tongji\tj_jiekuan_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:3046856440920e92c65-15243284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48a63a53841d4e0f4a742161995cde53527486ad' => 
    array (
      0 => '.\\tpl\\p2p\\tongji\\tj_jiekuan_list.htm',
      1 => 1447752426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3046856440920e92c65-15243284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56440920f10a89_55112348',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'total' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56440920f10a89_55112348')) {function content_56440920f10a89_55112348($_smarty_tpl) {?>

<form id="pagerForm" method="post" action="index.php?action=tj_jiekuan&do=yes">
	<input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="18" />
	<input type="hidden" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=tj_jiekuan&do=yes" method="post">
		<div class="searchBar">
			<table class="searchContent">
				<tr>
					<td><span>借款标号：<input type="text" name="biaohao" value="<?php echo $_REQUEST['biaohao'];?>
" /></span>	</td>
					<td><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></td>
				</tr>
			</table>
		</div>
		</form>
	</div>
	

	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="index.php?action=tj_jiekuan&do=chaxun&id={id}" target="dialog" width="1000" height="750" rel="tj_jiekuan" mask="true"><span>查询标号投资记录</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr align="center"  align="center">
					<th width="50">会员姓名</th>
					<th width="80">会员手机</th>
					<th width="140">借标标号</th>
					<th width="50">借标种类</th>
					<th width="60">借款金额</th>
					<th width="200">借标标题</th>
					<th width="60">借款期限</th>
					<th width="60">借款利息</th>
					<th width="60">手续费1</th>
					<th width="150">借款时间</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>		
			
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<tr target="id" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderOrderNo'];?>
"  align="center">
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderOrderNo'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['type']=="1"){?>车利宝<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']=="2"){?>房利宝<?php }elseif($_smarty_tpl->tpl_vars['row']->value['type']=="3"){?>企业宝<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderAmount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tenderName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['borrowType'];?>
个月</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['rateAmount']*1;?>
元</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['serviceAmount'];?>
%</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
					<td><a href="index.php?action=tj_jiekuan&do=chaxun&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['tenderOrderNo'];?>
" target="dialog" width="1000" height="750" rel="carborrowedit" mask="true">查询标号投资记录</a></td>	
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
" numPerPage="18" pageNumShown="10" currentPage="<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
"></div>
		</div>
	</div>
</div>


<?php }} ?>