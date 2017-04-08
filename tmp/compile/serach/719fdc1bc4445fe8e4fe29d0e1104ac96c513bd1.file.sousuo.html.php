<?php /* Smarty version Smarty-3.1.12, created on 2017-01-04 09:48:07
         compiled from ".\tpl\serach\sousuo.html" */ ?>
<?php /*%%SmartyHeaderCode:7590582d9b205ff478-15283245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '719fdc1bc4445fe8e4fe29d0e1104ac96c513bd1' => 
    array (
      0 => '.\\tpl\\serach\\sousuo.html',
      1 => 1482225132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7590582d9b205ff478-15283245',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582d9b20680f87_61981686',
  'variables' => 
  array (
    'is_tuan' => 0,
    'ss_key' => 0,
    'search_arr' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d9b20680f87_61981686')) {function content_582d9b20680f87_61981686($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_tuan']->value==0){?>
<p class="ssgft_no">
	<span class="ssgft_txt">您搜索的<?php echo $_smarty_tpl->tpl_vars['ss_key']->value;?>
购房团不存在</span>
	<span class="chuangtuan_btn" onclick='chuangtuan()' tapmode='tap-active'>我要创团</span>
</p>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['ss_type']==1){?>
<div class="shoye_gft clearfix" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',2,'<?php echo $_smarty_tpl->tpl_vars['row']->value['sldh'];?>
')" tapmode='tap-active'>
	<div class="gf_icon">
		<p class="gf_font">房企</p>
		<p class="gf_sj"></p>
	</div>
	<!-- <div class="mj_icon">
		<p class="mj_font">民间</p>
		<p class="mj_sj"></p>
	</div> -->
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['sldz'];?>
</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['pjyhj'];?>
</em>元</p> 
	</div>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==2){?>
<div class="shoye_gft clearfix" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',1,'<?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
')">
	<div class="gf_icon">
		<p class="gf_font">官方</p>
		<p class="gf_sj"></p>
	</div>
	<!-- <div class="mj_icon">
		<p class="mj_font">民间</p>
		<p class="mj_sj"></p>
	</div> -->
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['loupan'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage'];?>
</em>元</p> 
	</div>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==3){?>
<div class="shoye_gft clearfix" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',1,'<?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
')">
	<div class="gf_icon">
		<p class="gf_font">官方</p>
		<p class="gf_sj"></p>
	</div>
	<!-- <div class="mj_icon">
		<p class="mj_font">民间</p>
		<p class="mj_sj"></p>
	</div> -->
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['loupan'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage'];?>
</em>元</p> 
	</div>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==4){?>
<div class="shoye_gft clearfix" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',1,'<?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
')">
	<div class="gf_icon">
		<p class="gf_font">官方</p>
		<p class="gf_sj"></p>
	</div>
	<!-- <div class="mj_icon">
		<p class="mj_font">民间</p>
		<p class="mj_sj"></p>
	</div> -->
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['loupan'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage'];?>
</em>元</p> 
	</div>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==5){?>
<div class="sousuo_zt" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)">
	<p class="tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoti'];?>
</p>
	<p class="txt"><?php echo $_smarty_tpl->tpl_vars['row']->value['neirong'];?>
</p>
	<!--
	<p class="sousuo_zt_user">
		<img src="../../image/img-cll/tuan.png" alt="">
		<span>靓靓的我</span>
		<span>16年10月25日</span>
		<span class="pull_right">评论99+</span>
	</p>
	-->
</div>

<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==6){?>
<div class="shoye_gft clearfix" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',1,'<?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
')">
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['loupan'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage'];?>
</em>元</p> 
	</div>
</div>

<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==7){?>
<div class="shoye_gft clearfix" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',2,'<?php echo $_smarty_tpl->tpl_vars['row']->value['sldh'];?>
')">
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['sldz'];?>
</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['pjyhj'];?>
</em>元</p> 
	</div>
</div>

<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==8){?>
<div class="shoye_gft clearfix" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',1,'<?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
')">
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['loupan'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage'];?>
</em>元</p> 
	</div>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==9){?>
<div class="shoye_gft clearfix" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',1,'<?php echo $_smarty_tpl->tpl_vars['row']->value['dianhua'];?>
')">
	<div class="shoye_gft_img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
" alt="">
	</div>
	<div class="shoye_gft_ms">
		<p class="p1"><?php echo $_smarty_tpl->tpl_vars['row']->value['loupan'];?>
购房团</p>
		<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
		<p class="p4">优惠价格：<em><?php echo $_smarty_tpl->tpl_vars['row']->value['jiage'];?>
</em>元</p> 
	</div>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==10){?>
<div class="sousuo_zt" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)">
	<p class="tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoti'];?>
</p>
	<p class="txt"><?php echo $_smarty_tpl->tpl_vars['row']->value['neirong'];?>
</p>
</div>

<?php }elseif($_smarty_tpl->tpl_vars['row']->value['ss_type']==11){?>
<div class="sousuo_zt" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)">
	<p class="tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoti'];?>
</p>
	<p class="txt"><?php echo $_smarty_tpl->tpl_vars['row']->value['neirong'];?>
</p>
</div>

<?php }?>
<?php } ?>
<?php }} ?>