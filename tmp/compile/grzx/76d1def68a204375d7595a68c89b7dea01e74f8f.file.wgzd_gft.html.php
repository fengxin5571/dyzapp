<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:38:13
         compiled from ".\tpl\grzx\wgzd_gft.html" */ ?>
<?php /*%%SmartyHeaderCode:9530582c3063b78951-86211347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76d1def68a204375d7595a68c89b7dea01e74f8f' => 
    array (
      0 => '.\\tpl\\grzx\\wgzd_gft.html',
      1 => 1486971459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9530582c3063b78951-86211347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c3063bbd3f9_59314204',
  'variables' => 
  array (
    'total' => 0,
    'list' => 0,
    'tj' => 0,
    'tuan' => 0,
    'gft' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c3063bbd3f9_59314204')) {function content_582c3063bbd3f9_59314204($_smarty_tpl) {?><input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='gft_total'/>
<?php if (count($_smarty_tpl->tpl_vars['list']->value)<1){?>
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
<?php  $_smarty_tpl->tpl_vars['gft'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gft']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gft']->key => $_smarty_tpl->tpl_vars['gft']->value){
$_smarty_tpl->tpl_vars['gft']->_loop = true;
?>
<div class="bsgft_list_one">
    <div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['gft']->value['id'];?>
,<?php if ($_smarty_tpl->tpl_vars['gft']->value['type']==1){?>1<?php }else{ ?>2<?php }?>,0)'>
        <p class="youhui">优惠 <?php echo $_smarty_tpl->tpl_vars['gft']->value['jiage_min']*1;?>
元</p>
        <div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['gft']->value['tupian'];?>
"></div>
        <div class="bsgft_list_info">
            <p class="p1">
                <span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['gft']->value['loupan'];?>
购房团</span>
				<?php if ($_smarty_tpl->tpl_vars['gft']->value['type']==1){?>
                <span class="ming_bg biaoshi">民</span>
				<?php }else{ ?>
                <span class="qi_bg biaoshi">企</span>
				<?php }?>
                <span class="re_bg biaoshi">热</span>
            </p>
            <p>地址：<?php echo $_smarty_tpl->tpl_vars['gft']->value['dizhi'];?>
</p>
            <p>售楼均价：<?php echo $_smarty_tpl->tpl_vars['gft']->value['junjia']*1;?>
元/平方米</p>
            <p><?php if ($_smarty_tpl->tpl_vars['gft']->value['type']==1){?>目标最低优惠价<?php }else{ ?>参团平均价<?php }?>：<?php echo $_smarty_tpl->tpl_vars['gft']->value['jiage_min']*1;?>
元/套</p>  
        </div>
    </div>
    <p class="quxiaoguanzhu" onclick="qxgz(<?php echo $_smarty_tpl->tpl_vars['gft']->value['gzid'];?>
,<?php echo $_smarty_tpl->tpl_vars['gft']->value['type'];?>
,this,'<?php echo $_smarty_tpl->tpl_vars['gft']->value['loupan'];?>
')" tapmode='tap-active'>| 取消关注</p>
</div>
<?php } ?>
<?php }?><?php }} ?>