<?php /* Smarty version Smarty-3.1.12, created on 2017-01-11 18:32:05
         compiled from ".\tpl\grzx\zygw_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:10704582d7de415a6f4-33176981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f30478aeb7e8b180345f2a8be01963671d6a4f72' => 
    array (
      0 => '.\\tpl\\grzx\\zygw_xq.html',
      1 => 1484130666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10704582d7de415a6f4-33176981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582d7de41b22d5_38075776',
  'variables' => 
  array (
    'zygw' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d7de41b22d5_38075776')) {function content_582d7de41b22d5_38075776($_smarty_tpl) {?><div class="zyxq_div clearfix" style="border-top:1px solid #eaeaea">
    <img src="<?php echo $_smarty_tpl->tpl_vars['zygw']->value['user']['touxiang'];?>
" alt="" class="user_tx">
    <div style="float:left;">
        <div class="clearfix">
            <p class="user_name"><?php echo $_smarty_tpl->tpl_vars['zygw']->value['user']['nicheng'];?>
</p>
            <p class="pingfen" score="<?php echo $_smarty_tpl->tpl_vars['zygw']->value['user']['fen'];?>
">
                <span class="star1"></span>
                <span class="star1"></span>
                <span class="star1"></span>
                <span class="star1"></span>
                <span class="star1"></span>
            </p>
        </div>
        <p class="sslp">所属楼盘:<?php echo $_smarty_tpl->tpl_vars['zygw']->value['loupan'];?>
</p>
    </div>
    <!-- <p onclick="qianyue(<?php echo $_smarty_tpl->tpl_vars['zygw']->value['uid'];?>
,this)" tapmode='tap-active' class="jcqy">签约</p>   -->
	<?php if ($_smarty_tpl->tpl_vars['zygw']->value['is_qian']['status']==2){?>
    <p class="jcqy" onclick="zygw_yfw_wyl(<?php echo $_smarty_tpl->tpl_vars['zygw']->value['uid'];?>
,'<?php echo $_smarty_tpl->tpl_vars['zygw']->value['user']['nicheng'];?>
')" tapmode='tap-active'>已服务</p>
	<?php }else{ ?>
	<p class="jcqy">未服务</p>
	<?php }?>
</div>
<div class="zyxq_div">
    <p class="fftc">服务特长：<span><?php echo $_smarty_tpl->tpl_vars['zygw']->value['user']['fuwutechang'];?>
</span></p>
</div>
<div class="zyxq_div">
    <p class="fftc">个人简介<span style="float:right;" onclick="look_grjj()"  tapmode='tap-active'>点击查看</span></p>
</div>
<ul class="fst_nav">
    <li class="cur" onclick="open_faxian(0)"  tapmode='tap-active'>分享</li>
    <li onclick="open_faxian(1)"  tapmode='tap-active'>用户评价</li> 
    <li onclick="open_faxian(2)"  tapmode='tap-active'>看房体验</li>
    <li onclick="open_faxian(3)"  tapmode='tap-active'>入住体验</li>
</ul>
<div class="zygw_xq_btm">
    <div class='zygwxq_sixin_btn' onclick="sixin(<?php echo $_smarty_tpl->tpl_vars['zygw']->value['uid'];?>
)" tapmode='tap-active'>
        <img src="../../image/img-qm/sixin_red.png" alt="" class="small_img">
        <span>私信</span>
    </div>
    <div class='zygwxq_yykf_btn' onclick="kanfang(<?php echo $_smarty_tpl->tpl_vars['zygw']->value['uid'];?>
,this)" tapmode='tap-active'>
        <img src="../../image/img-qm/fang_white.png" alt="" class="small_img">
        <span>预约看房</span>
    </div>
</div><?php }} ?>