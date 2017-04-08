<?php /* Smarty version Smarty-3.1.12, created on 2015-11-07 09:35:36
         compiled from ".\tpl\p2p\usermessage_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:1817956381ac3f09073-47202894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fbedd3e1a9fff3c3acdb789b33766741bf8aa6c' => 
    array (
      0 => '.\\tpl\\p2p\\usermessage_list.htm',
      1 => 1446860133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817956381ac3f09073-47202894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56381ac3f3a9e2_67012191',
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
<?php if ($_valid && !is_callable('content_56381ac3f3a9e2_67012191')) {function content_56381ac3f3a9e2_67012191($_smarty_tpl) {?><!--

<form id="pagerForm" method="post" action="index.php?action=gsnews">
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
	
-->	
<div class="page">
	<div class="pageHeader"><br/></div>
	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">				
				<li><a class="edit" href="?action=usermessage&do=edit&id={id}" target="dialog" width="1000" height="800" rel="carborrowedit" mask="true"><span>审核详情</span></a></li>
				<li class="line">line</li>
			</ul>
		</div>
		
		<table class="list" layouth="90" style="table-layout: fixed;">
			<thead>
				<tr>
					<th width="30">ID</th>
					<th width="50">真实姓名</th>
					<th width="100">身份证号</th>
					<th width="60">手机号</th>
					<th width="150">居住地区</th>	
					<th width="30">性别</th>
					<th width="30">婚否</th>
					<th width="80">学历</th>
					<th width="80">月收入</th>
					<th width="80">职业</th>
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
"  align="center">
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['realName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idCardNo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['area'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['row']->value['sex']==2){?>女<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['marry']==1){?>已婚<?php }elseif($_smarty_tpl->tpl_vars['row']->value['marry']==2){?>未婚<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['edu']==1){?>高中或以下<?php }elseif($_smarty_tpl->tpl_vars['row']->value['edu']==2){?>大专<?php }elseif($_smarty_tpl->tpl_vars['row']->value['edu']==3){?>本科<?php }elseif($_smarty_tpl->tpl_vars['row']->value['edu']==4){?>研究生或以上<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['row']->value['wages']==1){?>1000元以下<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==2){?>1001-2000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==3){?>2000-5000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==4){?>5000-10000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==5){?>10000-20000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==6){?>20000-50000元<?php }elseif($_smarty_tpl->tpl_vars['row']->value['wages']==7){?>50000元以上<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['profession'];?>
</td>
					<td><a href="index.php?action=usermessage&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="dialog" width="1000" height="750" rel="carborrowedit" mask="true">审核</a></td>		
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