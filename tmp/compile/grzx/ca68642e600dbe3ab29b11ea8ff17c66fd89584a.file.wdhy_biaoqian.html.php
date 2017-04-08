<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 11:14:20
         compiled from ".\tpl\grzx\wdhy_biaoqian.html" */ ?>
<?php /*%%SmartyHeaderCode:1118158759af2555069-51453486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca68642e600dbe3ab29b11ea8ff17c66fd89584a' => 
    array (
      0 => '.\\tpl\\grzx\\wdhy_biaoqian.html',
      1 => 1486955615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118158759af2555069-51453486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58759af2582cd5_85098066',
  'variables' => 
  array (
    'is_guanzhu' => 0,
    'user' => 0,
    'zhuti' => 0,
    'total' => 0,
    'zt' => 0,
    'im' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58759af2582cd5_85098066')) {function content_58759af2582cd5_85098066($_smarty_tpl) {?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['is_guanzhu']->value;?>
" class="is_guanzhu">
<div class="card_tit" style="background:url(<?php echo $_smarty_tpl->tpl_vars['user']->value['fengmian'];?>
) no-repeat center;background-size:cover">
    <dl>
        <dt><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['touxiang'];?>
" alt="" class="tx1_img"></dt>
        <dd class="bj1"><span class="user_name" style="margin-top:5px;"><?php echo $_smarty_tpl->tpl_vars['user']->value['nicheng'];?>
</span></dd>
		<?php if ($_smarty_tpl->tpl_vars['is_guanzhu']->value==2||$_smarty_tpl->tpl_vars['is_guanzhu']->value==3){?>
        <dd class="bj2"><input type="text" class="bj_name"><p class="bj_btn" onclick="bj_qd();" tapmode='tap-active'>确定
		<?php }?></p></dd>
    </dl>
    <div class="back_img" onclick="guanbi()" tapmode='tap-active'><img src="../../image/img-qm/left.png" alt=""></div>
	<?php if ($_smarty_tpl->tpl_vars['is_guanzhu']->value!=1){?>
    <div class="more_img" onclick="caozuo()" tapmode='tap-active'><img src="../../image/img-qm/more_qm.png" alt=""></div>
	<?php }?>
    <div class="grzx_cen">
        <div style="border-right:solid 2px #d3d1cf" onclick="sixin(<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
);" tapmode='tap-active'>
            <p><span><img src="../../image/img-qm/sixin_red1.png" alt="" style="width:17px"></span>私信</p>
        </div>
        <div>
			<?php if ($_smarty_tpl->tpl_vars['is_guanzhu']->value==1){?>
            <p class="guanzhu_aa guanzhu1" onclick="guanzhu(<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
);" tapmode='tap-active'><span><img src="../../image/img-qm/guanzhu1.png" alt="" style="width:14px;"></span>关注</p>
			<?php }elseif($_smarty_tpl->tpl_vars['is_guanzhu']->value==2){?>
            <p class="guanzhu_aa guanzhu2"><span><img src="../../image/img-qm/yiguanzhu1.png" alt="" style="width:14px;"></span>已关注</p>
			<?php }elseif($_smarty_tpl->tpl_vars['is_guanzhu']->value==3){?>
            <p class="guanzhu_aa guanzhu3"><span><img src="../../image/img-qm/yiguanzhu1.png" alt="" style="width:14px;"></span>互相关注</p>
			<?php }elseif($_smarty_tpl->tpl_vars['is_guanzhu']->value==4){?>
            <p class="guanzhu_aa guanzhu4"><span><img src="../../image/img-qm/heimingdan.png" alt="" style="width:14px;height:14px;vertical-align: text-top;"></span>已拉黑</p>
			<?php }?>
        </div>
    </div>
</div>
<ul class="scjgft">
    <li onclick="my_wgzd();" tapmode='tap-active'>所参加的购房团</li>
</ul>
<ul class="jdal_box">
	<?php  $_smarty_tpl->tpl_vars['zt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zt']->key => $_smarty_tpl->tpl_vars['zt']->value){
$_smarty_tpl->tpl_vars['zt']->_loop = true;
?>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="hyzt_total">
    <li class="jdal_one">
        <div class="tx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['touxiang'];?>
"></div>
        <div class="one_left">
            <p class="jdal_yhxx">
                <span class="user"><?php echo $_smarty_tpl->tpl_vars['user']->value['nicheng'];?>
</span>
                <span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['zt']->value['total'];?>
</i></span>
            </p>
            <p class="jdal_time">
                <span><?php echo $_smarty_tpl->tpl_vars['zt']->value['addtime'];?>
</span>
            </p>
            <p class="tit" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['zt']->value['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['zt']->value['biaoti'];?>
</p>
            <p class="jdal_nr" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['zt']->value['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['zt']->value['neirong'];?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['zt']->value['tupian']!=''){?>
            <p class="img_box clearfix">
				<?php  $_smarty_tpl->tpl_vars['im'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['im']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zt']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['im']->key => $_smarty_tpl->tpl_vars['im']->value){
$_smarty_tpl->tpl_vars['im']->_loop = true;
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['im']->value;?>
">
				<?php } ?>
            </p>
			<?php }?>
        </div>
    </li>
	<?php } ?>
</ul>
<p class="jiazai">老板别着急，正在给你找</p>
<p class="jiazai1">后边没有了，就剩我了</p><?php }} ?>