<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:32:37
         compiled from ".\tpl\grzx\wgzd_fy.html" */ ?>
<?php /*%%SmartyHeaderCode:13062582c3165d2c1e8-57376921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf6ff2e901ce80ae7a4fa696d4b79d358599255' => 
    array (
      0 => '.\\tpl\\grzx\\wgzd_fy.html',
      1 => 1486967178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13062582c3165d2c1e8-57376921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c3165d5db54_89456329',
  'variables' => 
  array (
    'total' => 0,
    'fangyuan' => 0,
    'tj' => 0,
    'tuan' => 0,
    'fang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c3165d5db54_89456329')) {function content_582c3165d5db54_89456329($_smarty_tpl) {?><input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='fy_total'/>
<?php if (count($_smarty_tpl->tpl_vars['fangyuan']->value)<1){?>
<div class="zanwu">
    <p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>多关注才有得选,<br>一个木有选鬼啊?</span>
</p>
</div>
<p class="tjgft_tit">推荐购房团</p>
<?php  $_smarty_tpl->tpl_vars['tuan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tuan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tuan']->key => $_smarty_tpl->tpl_vars['tuan']->value){
$_smarty_tpl->tpl_vars['tuan']->_loop = true;
?>
<div class="bsgft_list bsgft_list1" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan']['id'];?>
,1,0)'>
    <p class="youhui">目标优惠 <?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan']['jiage_min']*1;?>
元</p>
    <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan']['tu'];?>
"></div>
    <div class="bsgft_list_info">
        <p class="p1">
            <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan']['tuan'];?>
</span>
            <span class="ming_bg biaoshi">民</span>
            <span class="re_bg biaoshi">热</span>
        </p>
        <p class="p2">
            参团人数：<i class="red_font"><?php if ($_smarty_tpl->tpl_vars['tuan']->value['tuan']['tzid']>0){?><?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan']['total']+1;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan']['total'];?>
<?php }?></i>人
        </p>
        <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan']['junjia']*1;?>
元/平方米</p>
        <p class="p3">地址：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan']['dizhi'];?>
</p>
        <span class="cantuan_btn">我要参团</span>
    </div>
</div>
<?php } ?>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['fang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fangyuan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fang']->key => $_smarty_tpl->tpl_vars['fang']->value){
$_smarty_tpl->tpl_vars['fang']->_loop = true;
?>
<div class="bsgft_list_one">
    <div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['fang']->value['tuan']['id'];?>
,2,0)'>
        <p class="youhui">优惠 <?php echo $_smarty_tpl->tpl_vars['fang']->value['zongjia']*1;?>
元</p>
        <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['fang']->value['tupian'];?>
"></div>
        <div class="bsgft_list_info">
            <p class="p1">
                <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['fang']->value['tuan']['name'];?>
</span>
                <span class="qi_bg biaoshi">企</span>
                <span class="re_bg biaoshi">热</span>
            </p>
            <p>地址：<?php echo $_smarty_tpl->tpl_vars['fang']->value['tuan']['dizhi'];?>
</p>
            <p>售楼再降：<?php echo $_smarty_tpl->tpl_vars['fang']->value['zongjia']*1;?>
元/套</p>
            <p>售楼部最低：<?php echo $_smarty_tpl->tpl_vars['fang']->value['danjia']*1;?>
元/平方米</p>  
        </div>
    </div>
    <p class="quxiaoguanzhu">
        <span class="fangxinxi"><?php echo $_smarty_tpl->tpl_vars['fang']->value['louname'];?>
<?php echo $_smarty_tpl->tpl_vars['fang']->value['danyuanname'];?>
<?php echo $_smarty_tpl->tpl_vars['fang']->value['name'];?>
</span>
        <span class="quxiao_btn" onclick="qxgz(<?php echo $_smarty_tpl->tpl_vars['fang']->value['gzid'];?>
,this)" tapmode='tap-active'>| 取消关注</span>
    </p>
</div>
<?php } ?>
<?php }?><?php }} ?>