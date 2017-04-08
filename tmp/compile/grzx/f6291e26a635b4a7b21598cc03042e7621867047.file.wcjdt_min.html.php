<?php /* Smarty version Smarty-3.1.12, created on 2017-02-05 09:38:01
         compiled from ".\tpl\grzx\wcjdt_min.html" */ ?>
<?php /*%%SmartyHeaderCode:26656587c293ec661e0-52865122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6291e26a635b4a7b21598cc03042e7621867047' => 
    array (
      0 => '.\\tpl\\grzx\\wcjdt_min.html',
      1 => 1486258676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26656587c293ec661e0-52865122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587c293ecb63b4_07854690',
  'variables' => 
  array (
    'tuan' => 0,
    'tj' => 0,
    'total' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c293ecb63b4_07854690')) {function content_587c293ecb63b4_07854690($_smarty_tpl) {?><!-- 无团 -->
<?php if ($_smarty_tpl->tpl_vars['tuan']->value['id']<1){?>
<div class="ct_box">
    <p>抱歉，您还未参加任何民间团！<br><span>您可以选择自行创团成为团主或者参加以下推荐购房团！</span></p>
    <div class="ct" onclick="cantuan()" tapmode='tap-active'>立即参团</div>
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
<div class="bsgft_list">
    <p class="youhui">目标优惠 <?php echo $_smarty_tpl->tpl_vars['tuan']->value['jiage_min']*1;?>
元</p>
    <div class="bsgft_list_img"  onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['tuan']->value['id'];?>
,1,0)' tapmode='tap-active'><img src="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['tupian'];?>
"></div>
    <div class="bsgft_list_info">
        <p class="p1">
            <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan'];?>
</span>
            <span class="ming_bg biaoshi">民</span>
            <span class="re_bg biaoshi">热</span>
        </p>
        <p class="p2">
            参团人数：<i class="red_font"><?php echo $_smarty_tpl->tpl_vars['tuan']->value['total'];?>
</i>人
        </p>
        <p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['junjia']*1;?>
元/平方米</p>
        <p class="p3">项目地址：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['dizhi'];?>
</p>
        <span class="cantuan_btn" onclick="tuichugaituan()" tapmode='tap-active'>退出该团</span>
    </div>
</div>
<?php }?><?php }} ?>