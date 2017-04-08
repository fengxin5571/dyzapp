<?php /* Smarty version Smarty-3.1.12, created on 2017-02-05 09:16:16
         compiled from ".\tpl\bgft\bgft_gft.html" */ ?>
<?php /*%%SmartyHeaderCode:228195826bc41b0d584-06490453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32f5c4b6ab82e18e900dafe5cdbaf8718a8bd9ff' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_gft.html',
      1 => 1486257366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228195826bc41b0d584-06490453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5826bc41b55d40_08159634',
  'variables' => 
  array (
    'row' => 0,
    'tuz' => 0,
    'zy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5826bc41b55d40_08159634')) {function content_5826bc41b55d40_08159634($_smarty_tpl) {?><div id="main">	
	<div class="swiper-container">
	    <div class="swiper-wrapper">
			<?php  $_smarty_tpl->tpl_vars['tuz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tuz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['tu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tuz']->key => $_smarty_tpl->tpl_vars['tuz']->value){
$_smarty_tpl->tpl_vars['tuz']->_loop = true;
?>
	        <div class="swiper-slide">
	        	<div class="img_bg" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['tuz']->value['img'];?>
);"></div>
	        </div>
			<?php } ?>
	    </div>
	    <div class="swiper-pagination"></div>
	</div>
	<div class="djs">
		<p class="jljs_box">
			<span class="juli_kttime" type="<?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
" dif_time="<?php echo $_smarty_tpl->tpl_vars['row']->value['dif_time'];?>
"></span>
			<b class="jljs_qm">距离结束：
				<i class="sy_day"></i>天
				<i class="sy_hour"></i>时
				<i class="sy_minute"></i>分
				<i class="sy_second"></i>秒
			</b>
			<span class="kt_number"></span>开团人数：<?php echo $_smarty_tpl->tpl_vars['row']->value['rs'];?>
人
		</p>
	</div>
	<div class="gft_info">
		<p>
			<span class="gft_info_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
·购房团</span>	
			<span class="guan_qm" style="float:right;margin-left:6px;"></span>
			<span class="hot_qm" style="float:right"></span>
			<span class="gray_font" style="float:right;margin-right:6px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</span>
		</p>
		<p class="pinfen_popup" score="<?php echo $_smarty_tpl->tpl_vars['row']->value['pingfen'];?>
">评分 ：
		    <span class="star1"></span>
		    <span class="star1"></span>
		    <span class="star1"></span>
		    <span class="star1"></span>
		    <span class="star1"></span>
		    <!-- <span class="gray_font" style="float:right" onclick="open_pingfenxq(<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
)" tapmode='tap-active'>详情</span> -->
		</p>
		<p style="color:#999;font-size:12px;">优惠：<em class="red_font"><?php echo $_smarty_tpl->tpl_vars['row']->value['loupan']['pjyhj']*1;?>
</em>元</p>
		<p class="gft_info_jg">
			<span style="color:#999;">参团人数：<em class="red_font"><?php echo $_smarty_tpl->tpl_vars['row']->value['yct'];?>
</em>/<?php echo $_smarty_tpl->tpl_vars['row']->value['rs'];?>
人</span>
			<span style="color:#ff0000;font-size:12px;float:right;margin:0" onclick="cylb(<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
)" tapmode='tap-active'>查看团成员列表</span>
		</p>
		<p class="gray_font">楼盘均价：<?php echo $_smarty_tpl->tpl_vars['row']->value['loupan']['slbjj']*1;?>
元/平方米<span class="gray_font pull_right" onclick="open_loupanxq(<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
)" tapmode='tap-active'>更多</span></p>
		<p class="gray_font">售楼热线：<?php echo $_smarty_tpl->tpl_vars['row']->value['loupan']['sldh'];?>
</p>
		<p class="gray_font">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['loupan']['dizhi'];?>
</p>
		<p class="gray_font">工程进度：<?php if ($_smarty_tpl->tpl_vars['row']->value['gcjd']==1){?>打地基<?php }elseif($_smarty_tpl->tpl_vars['row']->value['gcjd']==2){?>进度到一半<?php }elseif($_smarty_tpl->tpl_vars['row']->value['gcjd']==3){?>封顶<?php }elseif($_smarty_tpl->tpl_vars['row']->value['gcjd']==4){?>交房<?php }else{ ?>建设中<?php }?></p>
		<?php if ($_smarty_tpl->tpl_vars['row']->value['loupan']['zlhx']>0){?>
		<p class="gray_font">主力户型：<?php echo $_smarty_tpl->tpl_vars['row']->value['huxing']['geju'];?>
（建面<?php echo $_smarty_tpl->tpl_vars['row']->value['huxing']['mianji'];?>
平方米）<span class="gray_font pull_right" onclick="open_huxing_more(<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
)" tapmode='tap-active'>更多户型</span></p>
		<?php }else{ ?>
		<p class="gray_font">主力户型：<?php echo $_smarty_tpl->tpl_vars['row']->value['huxing'];?>
</p>
		<?php }?>
	</div>
	<ul>
		<li class="zhiye_li" onclick="zhiyeguwen_page(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
);" tapmode='tap-active' style="margin-top:20px">置业顾问</li>
	</ul>
	<div>
	<?php  $_smarty_tpl->tpl_vars['zy'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zy']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['zygw']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zy']->key => $_smarty_tpl->tpl_vars['zy']->value){
$_smarty_tpl->tpl_vars['zy']->_loop = true;
?>
		<div class="zygw_list" uid="<?php echo $_smarty_tpl->tpl_vars['zy']->value['id'];?>
">
			<div class="zygw_tx" onclick="zhiye_tiao(<?php echo $_smarty_tpl->tpl_vars['zy']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['zy']->value['nicheng'];?>
')" tapmode='tap-active'>
				<img src="<?php echo $_smarty_tpl->tpl_vars['zy']->value['touxiang'];?>
">
			</div>
			<div class="zygw_user">
				<p>
					<span class="user"><?php echo $_smarty_tpl->tpl_vars['zy']->value['nicheng'];?>
</span>
					<span><i class="zaixian"></i></span>
					<span class="sixin" onclick="open_sixin_dhk(<?php echo $_smarty_tpl->tpl_vars['zy']->value['id'];?>
)" tapmode='tap-active'>私信</span>
				</p>
				<p class="xmdz pingfen" score='<?php echo $_smarty_tpl->tpl_vars['zy']->value['fen'];?>
'>
					<span class="star11"></span>
					<span class="star11"></span>
					<span class="star11"></span>
					<span class="star11"></span>
					<span class="star11"></span>
				</p>
			</div>
		</div>	
	<?php } ?>	
	</div>
	<div class="thd" style="margin-top: 20px;"></div>
</div>
<ul class="btm_fixed">
	<?php if ($_smarty_tpl->tpl_vars['row']->value['is_guanzhu']>0){?>
	<li class="li1" onclick="qxgzft(this,<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" tapmode='tap-active'><span class="guanzhu_bg1">已关注</span></li>
	<?php }else{ ?>
	<li class="li1" onclick="gzft(this,<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" tapmode='tap-active'><span class="guanzhu_bg">关注</span></li>
	<?php }?>
	<li class="li1"><span class="fenxiang_bg" onclick="fenxiang()" tapmode='tap-active'>分享</span></li>
	<li class="li2" onclick="wyct()"><span>立即参团</span></li>
</ul><?php }} ?>