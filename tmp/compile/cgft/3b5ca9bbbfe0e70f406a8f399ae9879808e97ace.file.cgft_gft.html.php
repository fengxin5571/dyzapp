<?php /* Smarty version Smarty-3.1.12, created on 2017-01-24 18:37:14
         compiled from ".\tpl\cgft\cgft_gft.html" */ ?>
<?php /*%%SmartyHeaderCode:358858253bab8f1257-53697287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5ca9bbbfe0e70f406a8f399ae9879808e97ace' => 
    array (
      0 => '.\\tpl\\cgft\\cgft_gft.html',
      1 => 1485254217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358858253bab8f1257-53697287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58253bab9174b3_14631110',
  'variables' => 
  array (
    'row' => 0,
    'img' => 0,
    'uid' => 0,
    'tz' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58253bab9174b3_14631110')) {function content_58253bab9174b3_14631110($_smarty_tpl) {?><div id="main">
	<div class="swiper-container">
        <div class="swiper-wrapper">
			<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
            <div class="swiper-slide">
            	<div class="img_bg" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
);"></div>
            </div>
			<?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['tzid']>0){?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['tzid']==$_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['row']->value['jieshu']-$_smarty_tpl->tpl_vars['row']->value['time']<4){?>
    <div class="xuqi">
    	<span class="xuqi_text">您创团30天还未成团，距系统解散该团还剩72小时，是否申请续期？</span>
    	<span class="xuqi_btn" onclick="xuqi(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" tapmode='tap-active'>续期该团</span>
    </div>
	<?php }?>
	<?php }?>
	<div class="gft_info">
		<p>
			<span class="gft_info_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan'];?>
·购房团</span>
			
			<span class="guan_qm" style="float:right;margin-left:6px;"></span>
			<span class="hot_qm" style="float:right"></span>
			<span class="gray_font" style="float:right;margin-right:6px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</span>
		</p>
		<p style="color:#999;font-size:12px;">目标优惠：<em class="red_font"><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage_min']*1;?>
</em>元</p>
		<p class="gft_info_jg">
			<span style="color:#999;">参团人数：<em class="red_font"><?php echo $_smarty_tpl->tpl_vars['row']->value['total_ty'];?>
</em>人</span>
			<span style="color:#ff0000;font-size:12px;float:right;margin:0" onclick="cylb(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" tapmode='tap-active'>查看团成员列表</span>
		</p>
		<p class="gray_font">楼盘均价：<?php echo $_smarty_tpl->tpl_vars['row']->value['junjia']*1;?>
元/平方米</p>
		<p class="gray_font">售楼热线：<?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
</p>
		<p class="gray_font">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['tzid']>0){?>
	<div class="tuanzhu">
		<img src="<?php echo $_smarty_tpl->tpl_vars['tz']->value['touxiang'];?>
">
		<div>
			<span style="font-size: 14px;color:#353535"><?php echo $_smarty_tpl->tpl_vars['tz']->value['nicheng'];?>
</span>
			<span style="font-size: 14px;color:#353535">团主</span>
			<?php if ($_smarty_tpl->tpl_vars['tz']->value['is_deng']==1){?>
			<!-- 在线样式 big god补充 -->
			<?php }elseif($_smarty_tpl->tpl_vars['tz']->value['is_deng']==0){?>
			<p class="gray_font"><?php echo $_smarty_tpl->tpl_vars['tz']->value['zuihou_deng'];?>
离线</p>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['row']->value['tzid']!=$_smarty_tpl->tpl_vars['uid']->value){?>
		<span onclick="guanzhu_tz(this,<?php echo $_smarty_tpl->tpl_vars['tz']->value['id'];?>
)" tapmode='tap-active' style="font-size: 12px;color:#ff0000;float:right;padding:0 10px;border-left: 1px solid #ff0000;">关注</span>
		<span onclick="open_sixin_dhk(<?php echo $_smarty_tpl->tpl_vars['tz']->value['id'];?>
)" tapmode='tap-active' style="font-size: 12px;color:#ff0000;float:right;padding:0 10px;">私信</span>
		<?php }else{ ?>
		<span onclick="tzqc()" tapmode='tap-active' style="font-size: 12px;color:#ff0000;float:right;padding:0 10px;">团主请辞</span>
		<?php }?>
		<div class="tzxy" style="margin-top: 5px;">
			<p class="tzxy_tit">目标最低优惠 ：<span><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage_min']*1;?>
</span>元/套</p>
			<p class="tzxy_tit">目标最高优惠 ：<span><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage_max']*1;?>
</span>元/套</p>
			<p class="tzxy_tit">团主宣言：</p>
			<p class="tzxy_con"><?php echo $_smarty_tpl->tpl_vars['row']->value['tzxy'];?>
</p>
			<p class="zhankai_shouqi" onclick="zhankai(this)" canshu='0' tapmode='tap-active'>查看全部</p>
		</div>
	</div>
	<?php }else{ ?>
	<div class="tzxy" style="padding: 10px;padding-bottom:0;background-color: #fff;margin-top: 10px;">
		<p class="tzxy_tit">目标最低优惠 ：<span><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage_min']*1;?>
</span>元/套</p>
		<p class="tzxy_tit">目标最高优惠 ：<span><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage_max']*1;?>
</span>元/套</p>
		<div class="tzkq">
			<p>团主空缺，想成为团主，快速点击右侧按钮<br>每套优惠<span>50</span>%，不是梦！</p>
			<img src="../../../image/img-cll/jiantou_right.png" alt="">
			<?php if ($_smarty_tpl->tpl_vars['row']->value['is_jx']==0){?>
			<div onclick="sqtz(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" class="sqtz" tapmode='tap-active'></div>
			<?php }elseif($_smarty_tpl->tpl_vars['row']->value['is_jx']==1){?>
			<div onclick="jxtz(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" class="jxtz" tapmode='tap-active'></div>
			<?php }?>
		</div>			
	</div>
	<?php }?>
	<div class="thd" style="margin-top: 10px;">
		
	</div>
</div>
<ul class="btm_fixed">
	<?php if ($_smarty_tpl->tpl_vars['row']->value['is_gzft']>0){?>
	<!-- 已关注房团实心桃心 big god补充 -->
	<li class="li1" onclick="qxgzft(this,<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" tapmode='tap-active'><span class="guanzhu_bg1">已关注</span></li>
	<?php }else{ ?>
	<li class="li1" onclick="gzft(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
,this)" tapmode='tap-active'><span class="guanzhu_bg">关注</span></li>
	<?php }?>
	<li class="li1"><span class="fenxiang_bg" onclick="fenxiang()" tapmode='tap-active'>分享</span></li>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['tzid']==$_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['row']->value['tzid']>0){?>
	<li class="li2 cur1">已参团</li>
	<?php }elseif($_smarty_tpl->tpl_vars['row']->value['is_ct']<1&&$_smarty_tpl->tpl_vars['row']->value['tzid']!=$_smarty_tpl->tpl_vars['uid']->value||$_smarty_tpl->tpl_vars['uid']->value<1){?>
	<li class="li2" onclick="wyct(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)"><span>立即参团</span></li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['tzid']!=$_smarty_tpl->tpl_vars['uid']->value&&$_smarty_tpl->tpl_vars['row']->value['tzid']>0){?>
	<li class="li2 cur1"><span>已参团</span></li>
	<!-- <li class="li2 cur1">已参团</li> -->
	<!-- <li class="li2 cur1">已申请</li> -->
	<?php }else{ ?>
	<li class="li2 cur1"><span>暂无团主</span></li>
	<?php }?>
</ul><?php }} ?>