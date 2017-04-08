<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 20:43:47
         compiled from ".\tpl\zhuti\faxian_ztxq.html" */ ?>
<?php /*%%SmartyHeaderCode:3326582e75514400c6-01566736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '610431e7c935092bd4183f8e621e6b6d1311bdea' => 
    array (
      0 => '.\\tpl\\zhuti\\faxian_ztxq.html',
      1 => 1486989815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3326582e75514400c6-01566736',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582e7551475732_20248119',
  'variables' => 
  array (
    'zhuti' => 0,
    'img' => 0,
    'pl' => 0,
    'z' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582e7551475732_20248119')) {function content_582e7551475732_20248119($_smarty_tpl) {?><div class="card_tit">
	<div>
		<p onclick="guanbi_ztxq();" tapmode='tap-active'><img src="../../image/img-qm/left.png" alt="" class="back_img"></p>
		<?php if ($_smarty_tpl->tpl_vars['zhuti']->value['type']==5){?>小道消息<?php }else{ ?>房八卦<?php }?>正文 <?php if ($_smarty_tpl->tpl_vars['zhuti']->value['is_jubao']>0){?><?php }else{ ?><img src="../../image/img-cll/jubao_red.png" alt="" class="jubao_img" onclick="jubao();" tapmode='tap-active'><?php }?>
	</div>
</div>
<div id="main">
	<div class="zygw_fx">
	    <div class="fx_one">
	        <div class="tx_img"><img src="<?php if ($_smarty_tpl->tpl_vars['zhuti']->value['type']==5){?>http://img.51fth.com/themes/images/img_rtt/user.png<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['zhuti']->value['user']['touxiang'];?>
<?php }?>"></div>
	        <div class="one_left">
	            <p class="fx_yhxx">
					<?php if ($_smarty_tpl->tpl_vars['zhuti']->value['type']==5){?>
					<span class="user">匿名用户</span>
					<?php }else{ ?>
	                <span class="user"><?php echo $_smarty_tpl->tpl_vars['zhuti']->value['user']['nicheng'];?>
</span>
					<?php }?>
                    <span class="fenxiang_bg" onclick="fenxiang()" tapmode='tap-active'>分享</span>
					<?php if ($_smarty_tpl->tpl_vars['zhuti']->value['is_shoucang']>0){?>
					 <span class="xdxx_sc"><img src="../../image/img-qm/guanzhu_red1.png">收藏
					 </span>
					<?php }else{ ?>
                     <span class="xdxx_sc" onclick="shoucang_zhengwen(this)" tapmode='tap-active'><img src="../../image/img-cll/shoucang_ccc.png">收藏
					 </span>
					<?php }?>
	            </p>
	            <p class="fx_time">
	                <span><?php echo $_smarty_tpl->tpl_vars['zhuti']->value['addtime'];?>
</span>
	            </p>
	            <p class="tit"><?php echo $_smarty_tpl->tpl_vars['zhuti']->value['biaoti'];?>
</p>
	            <p class="fx_nr"><?php echo $_smarty_tpl->tpl_vars['zhuti']->value['neirong'];?>
</p>
	            <div class="lp_img_box clearfix">
				<?php if ($_smarty_tpl->tpl_vars['zhuti']->value['tupian']!=''){?>
	                <div class="lp_img_box_inner">
						<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuti']->value['tupian']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
	                    <div class="lp_img_one"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="" class="lp_one_img"></div>
						<?php } ?>
	                </div>
				<?php }?>
	            </div>
	        </div>
	    </div>
	    <p class="pl_nums">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['zhuti']->value['pinglun_total'];?>
</i></p>
		<?php  $_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuti']->value['pinglun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->key => $_smarty_tpl->tpl_vars['pl']->value){
$_smarty_tpl->tpl_vars['pl']->_loop = true;
?>
	   	<div class="pinglun_one">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pl']->value['user']['touxiang'];?>
" alt="" class="user_img">
			<div style="flex:1;-webkit-box-flex: 1;-webkit-flex: 1;padding-right:10px;box-sizing:border-box;" class="clearfix">
				<p class="pinglun_right">
					<span class="pinglun_name"><?php echo $_smarty_tpl->tpl_vars['pl']->value['user']['nicheng'];?>
</span>
					<i class="zan_number"><?php echo count($_smarty_tpl->tpl_vars['pl']->value['zan_uid']);?>
</i>
					<?php if ($_smarty_tpl->tpl_vars['pl']->value['is_zan']>0){?>
					<span class="zan_pl" style="float:right"></span>
					<?php }else{ ?>
					<span class="zan_pl" onclick="pl_zan(<?php echo $_smarty_tpl->tpl_vars['pl']->value['id'];?>
,this)" tapmode='tap-active' style="float:right"></span>
					<?php }?>
					<span class="thd_pl" onclick="pl_huifu(<?php echo $_smarty_tpl->tpl_vars['pl']->value['user']['id'];?>
)" tapmode='tap-active' style="float:right;margin-right:10px;"></span>
				</p>
				<p style="width:100%;line-height:16px;font-size:10px;color:#666666">
					<?php echo $_smarty_tpl->tpl_vars['pl']->value['neirong'];?>

				</p>
				<p style="font-size: 10px;color:#999999;line-height: 20px;">
					<?php echo $_smarty_tpl->tpl_vars['pl']->value['addtime'];?>

				</p>
				<p class="zan_box">
					<?php if (count($_smarty_tpl->tpl_vars['pl']->value['zan_uid'])>0){?>
						<?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pl']->value['zan_uid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['yh']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['yh']['index']++;
?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['yh']['index']<3){?>
								<span><?php echo $_smarty_tpl->tpl_vars['z']->value['user']['nicheng'];?>
</span>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['yh']['index']>1||$_smarty_tpl->getVariable('smarty')->value['foreach']['yh']['index']==count($_smarty_tpl->tpl_vars['pl']->value['zan_uid'])-1){?>
									等
								<?php }else{ ?>
									、
								<?php }?>
							<?php }?>
						<?php } ?>
						<span><?php echo count($_smarty_tpl->tpl_vars['pl']->value['zan_uid']);?>
人</span>觉得很赞
					<?php }?>
				</p>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<ul class="btm_fixed">
	<li class="li1"><span class="guanzhu_bg" onclick="shang_bg()" tapmode='tap-active'>(<?php echo $_smarty_tpl->tpl_vars['zhuti']->value['dashang_total'];?>
)</span></li>
	<?php if ($_smarty_tpl->tpl_vars['zhuti']->value['is_zan']>0){?>
	<li class="li1"><span class="zan_bg">(<i><?php echo $_smarty_tpl->tpl_vars['zhuti']->value['zan_total'];?>
</i>)</span></li>
	<?php }else{ ?>
	<li class="li1"><span class="zan_bg" onclick="zan_bg(this)" tapmode='tap-active'>(<i><?php echo $_smarty_tpl->tpl_vars['zhuti']->value['zan_total'];?>
</i>)</span></li>
	<?php }?>
	<li class="li2"><span class="pinglun_bg" onclick="pl_huifu(0)" tapmode='tap-active'>评论一下</span></li>
</ul><?php }} ?>