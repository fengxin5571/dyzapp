<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 20:12:47
         compiled from ".\tpl\appindex\main.html" */ ?>
<?php /*%%SmartyHeaderCode:988558a1a2bf348117-75874525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c64b70e7f958e52f87f6e62fb93e55cb97646d13' => 
    array (
      0 => '.\\tpl\\appindex\\main.html',
      1 => 1486987966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '988558a1a2bf348117-75874525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cityarr' => 0,
    'sh' => 0,
    'type' => 0,
    'tjtuanlist' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a1a2bf39fcf4_52913861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a1a2bf39fcf4_52913861')) {function content_58a1a2bf39fcf4_52913861($_smarty_tpl) {?>

<ul class="main_nav clearfix">
	<li onclick="qiehuan_xx(1)" tapmode='xxx'>
		<dl>
			<dt class="bd_img"></dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['cityarr']->value['area'];?>
<br><span>购房团</span></dd>
		</dl>
	</li>
	<li onclick="qiehuan_xx(2)">
		<dl>
			<dt class="bs_img"></dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['cityarr']->value['city'];?>
<br><span>购房团</span></dd>
		</dl>
	</li>
	<?php if ($_smarty_tpl->tpl_vars['sh']->value['cityid']!=$_smarty_tpl->tpl_vars['cityarr']->value['cityid']){?>
	<li onclick="qiehuan_xx(3)" tapmode=''>
		<dl>
			<dt class="bsg_img"></dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['sh']->value['city'];?>
<br><span>购房团</span></dd>
		</dl>
	</li>
	<?php }?> 
	<li onclick="qiehuan_xx(4)" tapmode=''>
		<dl>
			<dt class="hn_img"></dt>
			<dd>海南专区<br><span>购房团</span></dd>
		</dl>
	</li>
	<li onclick="qiehuan_xx(5)" tapmode='tap-active'>
		<dl>
			<dt class="qg_img"></dt>
			<dd>省外/海外<br><span>购房团</span></dd>
		</dl>
	</li>
</ul>
<div class="shouye_gfttj">
	<p class="bsgft_tit">
		<?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>
			<?php echo $_smarty_tpl->tpl_vars['cityarr']->value['area'];?>
购房团
		<?php }elseif($_smarty_tpl->tpl_vars['type']->value==2){?>
			<?php echo $_smarty_tpl->tpl_vars['cityarr']->value['city'];?>
购房团
		<?php }elseif($_smarty_tpl->tpl_vars['type']->value==3){?>
			<?php echo $_smarty_tpl->tpl_vars['cityarr']->value['city'];?>
购房团
		<?php }elseif($_smarty_tpl->tpl_vars['type']->value==4){?>
			海南专区购房团
		<?php }elseif($_smarty_tpl->tpl_vars['type']->value==5){?>
			省外/海外购房团
		<?php }?>
	</p>
	<?php if (count($_smarty_tpl->tpl_vars['tjtuanlist']->value)!=0){?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tjtuanlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<div class="bsgft_list" onclick='tuan_detail(<?php echo $_smarty_tpl->tpl_vars['row']->value['tid'];?>
,<?php echo $_smarty_tpl->tpl_vars['row']->value['sign'];?>
,0)'>
		<p class="youhui"><?php if ($_smarty_tpl->tpl_vars['row']->value['sign']==1){?>目标<?php }?>优惠 <?php echo $_smarty_tpl->tpl_vars['row']->value['youhui'];?>
元</p>
		<div class="bsgft_list_img"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['tupian'];?>
"></div>
		<div class="bsgft_list_info">
			<p class="p1">
				<span class="bsgft_list_info_tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['row']->value['sign']==1){?>
				<span class="ming_bg biaoshi">民</span>
				<?php }else{ ?>
				<span class="qi_bg biaoshi">企</span>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['row']->value['tuanyuan']>100){?><span class="re_bg biaoshi">热</span><?php }?>
			</p>
			<p class="p2">
				参团人数：<i class="red_font"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuanyuan'];?>
</i>人
			</p>
			<p class="p3">均价：<?php echo $_smarty_tpl->tpl_vars['row']->value['junjia'];?>
元/平方米</p>
			<p class="p3">项目地址：<?php echo $_smarty_tpl->tpl_vars['row']->value['dizhi'];?>
</p>
			<span class="cantuan_btn" >我要参团</span>
		</div>
	</div>
	<?php } ?>
	<p class="chakan_more" tapmode='tap-active' onclick="open_qtgft(<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
)">查看更多</p>
	<?php }else{ ?>
	<div style="width:100%;height:120px;overflow: hidden;position: relative;">
		<p class="wuxiaoxi">
			<img src="../../image/img-cll/wuxiaoxi.png">
			<span>报告老板,<br>该区暂无人推广。</span>
		</p>
	</div>
	
	<?php }?> 
</div>				
<?php }} ?>