<?php /* Smarty version Smarty-3.1.12, created on 2017-01-17 14:51:53
         compiled from ".\tpl\bgft\bgft_hxxq.html" */ ?>
<?php /*%%SmartyHeaderCode:208485829363e7674b7-03605448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '726ed7ffb6ca908e7a1945030ced6f4cdbbf6664' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_hxxq.html',
      1 => 1484635851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208485829363e7674b7-03605448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5829363e7a8256_20668845',
  'variables' => 
  array (
    'fy' => 0,
    'hx' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829363e7a8256_20668845')) {function content_5829363e7a8256_20668845($_smarty_tpl) {?><div id="header">
	<div class="header_faxian">
		<div class="faxian_left_btn" onclick="api.closeWin();"></div>
		<h4><?php echo $_smarty_tpl->tpl_vars['fy']->value['name'];?>
</h4>
	</div>
</div>
<div id="main">
	<div class="hxt_img" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['hx']->value['pic'];?>
)"></div>
	<div class="hxt_p">
		<p style="font-size:18px;color:#333333;float:left"><?php echo $_smarty_tpl->tpl_vars['fy']->value['louname'];?>
 <?php echo $_smarty_tpl->tpl_vars['fy']->value['danyuanname'];?>
 <?php echo $_smarty_tpl->tpl_vars['fy']->value['name'];?>
</p>
		<?php if ($_smarty_tpl->tpl_vars['fy']->value['is_gz']<1){?>
		<p class="guanzhu_1" onclick="guanzhu(this,<?php echo $_smarty_tpl->tpl_vars['fy']->value['id'];?>
)"><span class="guanzhu"></span>关注</p>
		<?php }else{ ?>
		<p class="guanzhu_2" onclick="quxiaoguanzhu(this,<?php echo $_smarty_tpl->tpl_vars['fy']->value['id'];?>
)"><span class="yiguanzhu"></span>已关注</p>
		<?php }?>
	</div>
	<div class="hxt_p" style="text-align:center">
		<p>户型 ：<?php echo $_smarty_tpl->tpl_vars['hx']->value['name'];?>
&nbsp;&nbsp;厅室 ：<?php echo $_smarty_tpl->tpl_vars['hx']->value['geju'];?>
&nbsp;&nbsp;面积 ：<?php echo $_smarty_tpl->tpl_vars['hx']->value['mianji'];?>
平方米</p>
	</div>
	<div class="hxt_p" style="color:#333333">
		<p>售楼部最低 ：<?php echo $_smarty_tpl->tpl_vars['fy']->value['danjia']*1;?>
元/平方米</p>
		<p>总价 ：<?php echo $_smarty_tpl->tpl_vars['fy']->value['danjia']*$_smarty_tpl->tpl_vars['hx']->value['mianji'];?>
元</p>
		<p>参团再降 ：<?php echo $_smarty_tpl->tpl_vars['fy']->value['zongjia']*1;?>
元/套</p>
		<p>抢购所需房团币 ：<span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['fy']->value['zongjia']*1;?>
</span>房团币</p>
	</div>
	<ul>
        <li onclick="zjgft(<?php echo $_smarty_tpl->tpl_vars['fy']->value['id'];?>
);" tapmode='tap-active'>真假购房团评价</li>
    </ul>
    <div class="yhje_p">
    	<p>优惠金额=购买房团币数量  房团币：人民币=5:1<br>（例如优惠金额1万元需支付房团币5万个）</p>
    </div>
</div>
<div style="position: fixed;bottom:0;left:0;width:100%;padding:10px;box-sizing:border-box">
	<?php if ($_smarty_tpl->tpl_vars['fy']->value['status']==0&&$_smarty_tpl->tpl_vars['fy']->value['time']>1800){?>
	<div class="red_btn" onclick="ljqg(<?php echo $_smarty_tpl->tpl_vars['fy']->value['id'];?>
)">立即抢购</div>
	<?php }elseif($_smarty_tpl->tpl_vars['fy']->value['status']==2){?>
	<div class="gray_btn">该房源已售出</div>
	<?php }elseif($_smarty_tpl->tpl_vars['fy']->value['status']==0&&$_smarty_tpl->tpl_vars['fy']->value['time']<1800){?>
	<div class="gray_btn">该房源已预订</div>	
	<?php }?>
</div><?php }} ?>