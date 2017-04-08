<?php /* Smarty version Smarty-3.1.12, created on 2015-11-19 08:48:20
         compiled from ".\tpl\p2p\wangzhan_sum.htm" */ ?>
<?php /*%%SmartyHeaderCode:470356458b04989688-18608722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b7cc69f90d2bd92f1d759aadffa1c268478b18f' => 
    array (
      0 => '.\\tpl\\p2p\\wangzhan_sum.htm',
      1 => 1447752608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '470356458b04989688-18608722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56458b049e4f51_30750105',
  'variables' => 
  array (
    'user' => 0,
    'user2' => 0,
    'youhui' => 0,
    'recharge' => 0,
    'withdraw' => 0,
    'borrow' => 0,
    'che' => 0,
    'che1' => 0,
    'che2' => 0,
    'che3' => 0,
    'fang' => 0,
    'fang1' => 0,
    'fang2' => 0,
    'fang3' => 0,
    'qiye' => 0,
    'qiye1' => 0,
    'qiye2' => 0,
    'qiye3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56458b049e4f51_30750105')) {function content_56458b049e4f51_30750105($_smarty_tpl) {?>
<form id="pagerForm" method="post" action="index.php?action=wangzhan">
	<input type="hidden" name="date1" value="<?php echo $_REQUEST['date1'];?>
"/>
	<input type="hidden" name="date2" value="<?php echo $_REQUEST['date2'];?>
"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="index.php?action=wangzhan" method="post">
			<div class="searchBar">
				<table class="searchContent">
					<tr>
						<td><span>起始时间：<input type="text" name="date1" class="date" value="<?php echo $_REQUEST['date1'];?>
" readonly="true"/></span></td>
						<td><span>结束时间：<input type="text" name="date2" class="date" value="<?php echo $_REQUEST['date2'];?>
" readonly="true"/></span></td>	
						<td><div class="buttonActive"><div class="buttonContent"><button type="submit">搜索</button></div></div></td>
					</tr>
				</table>
			</div>
		</form>
	</div>
	
	<div class="pageContent">
		<table class="list" layouth="90" style="table-layout: fixed;boder:0px ">	
				<tr align="center" color="#000">&nbsp;</tr>
				<tr align="center" color="#000">
					<th width="200">会员人数</th><th width="150"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</th>
					<th width="200">认证会员人数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['user2']->value;?>
</th>
					<th width="200">认证费用</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['user2']->value*2;?>
元</th>
				</tr>
				<tr><th colspan="4" height="20"></th></tr>
				<tr align="center">
					<th width="200">优惠券总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['youhui']->value['num'];?>
</th>
					<th width="200">优惠券金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['youhui']->value['money']*1;?>
元</th>
				</tr>
				<tr><th colspan="4" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">充值总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['recharge']->value['amount']*1;?>
元</th>
					<th width="200">充值手续费</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['recharge']->value['fee']*1;?>
元</th>
				</tr>
				<tr><th colspan="4" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">提现总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['withdraw']->value['amount']*1;?>
元</th>
					<th width="200">提现手续费</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['withdraw']->value['fee']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>

				<tr align="center">
					<th width="200">借款标总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['borrow']->value['num'];?>
</th>
					<th width="200">借款总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['borrow']->value['money']*1;?>
元</th>
					<th width="200">借款总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['borrow']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>

				<tr align="center">
					<th width="200">车利宝总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che']->value['num'];?>
</th>
					<th width="200">车利宝总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che']->value['money']*1;?>
元</th>
					<th width="200">车利宝总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">车利宝(完结)总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che1']->value['num'];?>
</th>
					<th width="200">车利宝(完结)总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che1']->value['money']*1;?>
元</th>
					<th width="200">车利宝(完结)总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che1']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">车利宝(还款中)总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che2']->value['num'];?>
</th>
					<th width="200">车利宝(还款中)总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che2']->value['money']*1;?>
元</th>
					<th width="200">车利宝(还款中)总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che2']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">车利宝(筹集中)总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che3']->value['num'];?>
</th>
					<th width="200">车利宝(筹集中)总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che3']->value['money']*1;?>
元</th>
					<th width="200">车利宝(筹集中)总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['che3']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">房利宝 总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang']->value['num'];?>
</th>
					<th width="200">房利宝 总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang']->value['money']*1;?>
元</th>
					<th width="200">房利宝 总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">房利宝(完结)总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang1']->value['num'];?>
</th>
					<th width="200">房利宝(完结)总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang1']->value['money']*1;?>
元</th>
					<th width="200">房利宝(完结)总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang1']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
				<th width="200">房利宝(还款中)总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang2']->value['num'];?>
</th>
				<th width="200">房利宝(还款中)总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang2']->value['money']*1;?>
元</th>
				<th width="200">房利宝(还款中)总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang2']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">房利宝(筹集中)总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang3']->value['num'];?>
</th>
					<th width="200">房利宝(筹集中)总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang3']->value['money']*1;?>
元</th>
					<th width="200">房利宝(筹集中)总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['fang3']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">企业宝总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye']->value['num'];?>
</th>
					<th width="200">企业宝总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye']->value['money']*1;?>
元</th>
					<th width="200">企业宝总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">企业宝(完结)总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye1']->value['num'];?>
</th>
					<th width="200">企业宝(完结)总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye1']->value['money']*1;?>
元</th>
					<th width="200">企业宝(完结)总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye1']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">企业宝(还款中)总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye2']->value['num'];?>
</th>
					<th width="200">企业宝(还款中)总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye2']->value['money']*1;?>
元</th>
					<th width="200">企业宝(还款中)总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye2']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
				
				<tr align="center">
					<th width="200">企业宝(筹集中)总数</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye3']->value['num'];?>
</th>
					<th width="200">企业宝(筹集中)总金额</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye3']->value['money']*1;?>
元</th>
					<th width="200">企业宝(筹集中)总利息</th> <th width="150"><?php echo $_smarty_tpl->tpl_vars['qiye3']->value['lixi']*1;?>
元</th>
				</tr>
				<tr><th colspan="6" height="20"></th></tr>
		
		</table>
	</div>
</div><?php }} ?>