<?php /* Smarty version Smarty-3.1.12, created on 2016-11-20 17:27:27
         compiled from ".\tpl\zygw\fwlp.html" */ ?>
<?php /*%%SmartyHeaderCode:2207458316801533a53-89988136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c4afccf51c6545ac7c7ca99f3282c425487374' => 
    array (
      0 => '.\\tpl\\zygw\\fwlp.html',
      1 => 1479633758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2207458316801533a53-89988136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5831680158f310_48315230',
  'variables' => 
  array (
    'type' => 0,
    'loupan' => 0,
    'pingjia' => 0,
    'pin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5831680158f310_48315230')) {function content_5831680158f310_48315230($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>
<div style="height:200px;text-align: center;font-size: 18px;width:100%;background-color: #fff;overflow: hidden;margin-top: 10px;">
    <p style="color:#333333;font-weight: bold;margin:50px 0 20px">您还未加入任何楼盘<br/>请先添加楼盘</p>
    <div class="btn" onclick="sys()" tapmode='tap-active'>扫一扫</div>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==2){?>
<div style="height:170px;text-align: center;font-size: 18px;width:100%;background-color: #fff;overflow: hidden;margin-top: 10px;">
    <p style="color:#333333;font-weight: bold;margin:50px 0 20px"><span style="color:#2878b9;padding-right: 20px"><?php echo $_smarty_tpl->tpl_vars['loupan']->value['yqlp']['name'];?>
</span>邀请您来合作</p>
    <div class="btn" onclick="jsqy(<?php echo $_smarty_tpl->tpl_vars['loupan']->value['yqlp']['uid'];?>
)" tapmode='tap-active' style="display: inline-block;margin:0;margin-right: 20px;">接受签约</div>
    <div class="btn" onclick="jjqy(<?php echo $_smarty_tpl->tpl_vars['loupan']->value['yqlp']['uid'];?>
)" tapmode='tap-active' style="display: inline-block;margin:0">拒绝签约</div>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['type']->value==3){?>
<div style="height:170px;width:100%;background-color: #fff;overflow: hidden;margin-top: 10px;padding:10px;box-sizing:border-box">
    <img src="<?php echo $_smarty_tpl->tpl_vars['loupan']->value['fwlp']['tupian'];?>
" alt="" class="lp_img">
    <div>
        <p style="font-weight: bold;font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['loupan']->value['fwlp']['name'];?>
</p>
        <p style="font-size: 12px;color:#666666;overflow:hidden;
        white-space:nowrap;text-overflow:ellipsis;width:150px;line-height:20px;"><?php echo $_smarty_tpl->tpl_vars['loupan']->value['fwlp']['dizhi'];?>
</p>
        <p style="font-size: 12px;color:#666666;line-height:20px;">售楼部均价：<?php echo $_smarty_tpl->tpl_vars['loupan']->value['fwlp']['slbjj'];?>
元/m<sup style="font-size: 8px;">2</sup></p>
        <p style="font-size: 12px;color:#666666;line-height:20px;">优惠价格：<?php echo $_smarty_tpl->tpl_vars['loupan']->value['fwlp']['pjyhj'];?>
元</p>
        <p style="font-size: 12px;color:#666666;line-height:20px;">售楼热线：<?php echo $_smarty_tpl->tpl_vars['loupan']->value['fwlp']['sldh'];?>
</p>
    </div>
    <div class="btn" onclick="jcwf(<?php echo $_smarty_tpl->tpl_vars['loupan']->value['fwlp']['uid'];?>
)" tapmode='tap-active' style="width:100%;margin-top: 10px;">解除服务</div>
</div>
<?php }?>
<ul style="overflow: hidden;background-color: #fff;margin-top: 10px;">
    <p style="clear:both;font-size: 16px;line-height: 20px;width:190px; overflow:hidden;white-space:nowrap;text-overflow:ellipsis;padding: 10px 0 0 10px;font-weight: bold;">我曾经服务的楼盘</p>
	<?php  $_smarty_tpl->tpl_vars['pin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pingjia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pin']->key => $_smarty_tpl->tpl_vars['pin']->value){
$_smarty_tpl->tpl_vars['pin']->_loop = true;
?>
    <li class="zyxq_div">
        <p style="clear:both;font-size: 16px;line-height: 20px;width:190px; overflow:hidden;white-space:nowrap;text-overflow:ellipsis;padding-top: 10px;"><?php if ($_smarty_tpl->tpl_vars['pin']->value['type']==0){?><?php echo $_smarty_tpl->tpl_vars['pin']->value['loupan']['nicheng'];?>
楼盘对您的评价<?php }else{ ?>您对<?php echo $_smarty_tpl->tpl_vars['pin']->value['loupan']['nicheng'];?>
楼盘的评价<?php }?></p>
        <p class="pingfen" score="<?php echo $_smarty_tpl->tpl_vars['pin']->value['fen'];?>
">
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
            <span class="star1"></span>
        </p>
        <p class="pj_time">
            <?php echo $_smarty_tpl->tpl_vars['pin']->value['cont'];?>

        </p>
        <p class="pj_time"><?php echo $_smarty_tpl->tpl_vars['pin']->value['addtime'];?>
</p>
    </li>
	<?php } ?> 
</ul><?php }} ?>