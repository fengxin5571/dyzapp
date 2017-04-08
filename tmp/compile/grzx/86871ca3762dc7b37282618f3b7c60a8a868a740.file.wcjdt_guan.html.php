<?php /* Smarty version Smarty-3.1.12, created on 2017-02-05 09:56:37
         compiled from ".\tpl\grzx\wcjdt_guan.html" */ ?>
<?php /*%%SmartyHeaderCode:9954587c33505c1e71-64765141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86871ca3762dc7b37282618f3b7c60a8a868a740' => 
    array (
      0 => '.\\tpl\\grzx\\wcjdt_guan.html',
      1 => 1486258778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9954587c33505c1e71-64765141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587c3350625169_04043414',
  'variables' => 
  array (
    'gf' => 0,
    'tj' => 0,
    'total' => 0,
    'row' => 0,
    'fq' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c3350625169_04043414')) {function content_587c3350625169_04043414($_smarty_tpl) {?><!-- 无团 -->
<?php if (count($_smarty_tpl->tpl_vars['gf']->value)<1){?>
<div class="ct_box">
    <span class="gantanhao">!</span>
    <p>抱歉，您还未参加任何房企团！</p>
</div>
<div style="padding:20px 10px 4px;border-bottom: solid 1px #eaeaea;">推荐购房团</div>
<div class="tjgft_ajax">
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="tj_total">
    <div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['id'];?>
,1,0)' tapmode='tap-active'>
        <p class="youhui">目标优惠 <?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['jiage_min']*1;?>
元</p>
        <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['tu'];?>
"></div>
        <div class="bsgft_list_info">
            <p class="p1">
                <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['tuan'];?>
</span>
                <span class="ming_bg biaoshi">民</span>
                <span class="re_bg biaoshi">热</span>
            </p>
            <p class="p2">
                参团人数：<i class="red_font"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['total'];?>
</i>人
            </p>
            <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['junjia']*1;?>
元/平方米</p>
            <p class="p3">项目地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['dizhi'];?>
</p>
            <span class="cantuan_btn">我要参团</span>
        </div>
    </div>
    <?php } ?>
</div>
<p class="jiazai">老板别着急，正在给你找</p>
<p class="jiazai1">后边没有了，就剩我了</p>
<?php }else{ ?>
<!-- 有团 -->
<?php  $_smarty_tpl->tpl_vars['fq'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fq']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fq']->key => $_smarty_tpl->tpl_vars['fq']->value){
$_smarty_tpl->tpl_vars['fq']->_loop = true;
?>
<div class="bsgft_list">
    <p class="youhui">目标优惠 <?php echo $_smarty_tpl->tpl_vars['fq']->value['loupan']['pjyhj']*1;?>
元</p>
    <div class="bsgft_list_img" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['fq']->value['tuan'];?>
,2,0)' tapmode='tap-active'><img src="<?php echo $_smarty_tpl->tpl_vars['fq']->value['tupian'];?>
"></div>
    <div class="bsgft_list_info">
        <p class="p1">
            <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['fq']->value['loupan']['name'];?>
</span>
           <span class="ming_bg qi_bg biaoshi">企</span>
            <span class="re_bg biaoshi">热</span>
        </p>
        <p class="p2">
            <?php echo $_smarty_tpl->tpl_vars['fq']->value['fangyuan']['louname'];?>
 <?php echo $_smarty_tpl->tpl_vars['fq']->value['fangyuan']['danyuanname'];?>
 <?php echo $_smarty_tpl->tpl_vars['fq']->value['fangyuan']['name'];?>

        </p>
        <p class="p3">地址：<?php echo $_smarty_tpl->tpl_vars['fq']->value['loupan']['dizhi'];?>
</p>
		<p class="p3">该房源需支付：<?php echo $_smarty_tpl->tpl_vars['fq']->value['fangyuan']['zongjia']*1;?>
房团币</p>
		<?php if ($_smarty_tpl->tpl_vars['fq']->value['status']==1){?>
        <span class="qzf" onclick="qzf(<?php echo $_smarty_tpl->tpl_vars['fq']->value['id'];?>
)" tapmode='tap-active'>去支付</span>
        <span class="qzf" onclick="qxdd(<?php echo $_smarty_tpl->tpl_vars['fq']->value['id'];?>
)" tapmode='tap-active'>取消订单</span>
		<?php }elseif($_smarty_tpl->tpl_vars['fq']->value['status']==2){?>
		<span class="qzf" onclick="ckdd(<?php echo $_smarty_tpl->tpl_vars['fq']->value['id'];?>
)" tapmode='tap-active'>查看订单</span>
        <span class="qzf" onclick="ewm(<?php echo $_smarty_tpl->tpl_vars['fq']->value['id'];?>
)" tapmode='tap-active'>二维码</span>
		<?php }?>
    </div>
</div>
<?php } ?>
<?php }?><?php }} ?>