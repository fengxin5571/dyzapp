<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 14:38:41
         compiled from ".\tpl\xiaoxi\xiaoxi_xitong.html" */ ?>
<?php /*%%SmartyHeaderCode:227958298c4d8c4941-86908565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db43715800c92fea1e67cfca8e25cac7999da513' => 
    array (
      0 => '.\\tpl\\xiaoxi\\xiaoxi_xitong.html',
      1 => 1486956401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227958298c4d8c4941-86908565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58298c4d92f623_94456983',
  'variables' => 
  array (
    'xiaoxi' => 0,
    'total' => 0,
    'xiao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58298c4d92f623_94456983')) {function content_58298c4d92f623_94456983($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['xiaoxi']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['xiao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xiao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xiaoxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xiao']->key => $_smarty_tpl->tpl_vars['xiao']->value){
$_smarty_tpl->tpl_vars['xiao']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="xitong_total">
<div class="xx_box_inner">
	<div class="xx_list">
	<?php if ($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==1){?>
		<div class="xx_list_tx icon_img6"></div>
		<div class="xx_list_info">
			<p class='info'>
			您是否按约定时间到达<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,2)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['name'];?>
</span>？若看房完成，请填写看房评价。
			</p>
			<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
<span class='orgbtn'>评价</span>
			</p>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==2){?>
		<div class="xx_list_tx icon_img7"></div>
		<div class="xx_list_info">
			<p class='info'>
			您预约在<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,2)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['name'];?>
·购房团</span>置业顾问<?php echo $_smarty_tpl->tpl_vars['xiao']->value['zygw']['nicheng'];?>
已为您安排好看房时间，请您准时赴约看房。
			</p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
</p>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==3){?>
		<div class="xx_list_tx icon_img8"></div>
		<div class="xx_list_info">
			<p class='info'>
			您连续七日未登陆，您已由<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
</span>团主降级为团员。
			</p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
</p>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==4){?>
		<div class="xx_list_tx icon_img8"></div>
		<div class="xx_list_info">
			<p class='info'>
			恭喜您成功竞选为<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
·购房团</span>团主。
			</p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
</p>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==5){?>
		<div class="xx_list_tx icon_img8"></div>
		<div class="xx_list_info">
			您之前参加的<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['loupan'];?>
·购房团</span>，因无人竞选新的团主，已于今日解散。如有疑问，请联系房团惠客服。
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
</p>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==6){?>
		<div class="xx_list_tx icon_img8"></div>
		<div class="xx_list_info">
			<p class='info'>
			您参加的<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
·购房团</span>无团主，请在七日内竞选新的团主，逾期将自动解散
			</p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
</p>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==7){?>
		<div class="xx_list_tx icon_img8"></div>
		<div class="xx_list_info">
			<p class='info'>
			您已退出<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
·购房团</span>。
			</p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
<span class='orgbtn' onclick="shouye();">更多房团</span></p>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==8){?>
		<div class="xx_list_tx icon_img8"></div>
		<div class="xx_list_info">
			<p class='info'>
			您已成功参加<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
·购房团</span>，请及时关注本站点最新消息
			</p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
</p>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==9){?>
		<div class="xx_list_tx icon_img8"></div>
		<div class="xx_list_info">
			<p class='info'>
			您申请创建的<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
·购房团</span>已成功通过审核。
			</p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
<span class='orgbtn' onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)">查看</span></p>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==10){?>
		<div class="xx_list_tx icon_img8"></div>
		<div class="xx_list_info">
			<p class='info'>
			您申请创建的<span class="blue_font" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
·购房团</span>未通过审核。
			</p>
		<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
<span class='orgbtn' onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['id'];?>
,1,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['dianhua'];?>
)">查看</span></p>
		</div>
	<?php }?>
	</div>
	<p class="del_btn" onclick="xiaoxi_del(this,<?php echo $_smarty_tpl->tpl_vars['xiao']->value['id'];?>
)" tapmode='tap-active'>删除记录</p>
</div>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>报告老板，<br>没发现任何内容</span>
</p>
<?php }?><?php }} ?>