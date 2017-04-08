<?php /* Smarty version Smarty-3.1.12, created on 2017-02-18 11:36:08
         compiled from ".\tpl\sjfx\sjfx.html" */ ?>
<?php /*%%SmartyHeaderCode:985358a5733d01f089-86317866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ff3575f1f5efabf3570f9641bcd3de690c88ffb' => 
    array (
      0 => '.\\tpl\\sjfx\\sjfx.html',
      1 => 1487388681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '985358a5733d01f089-86317866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a5733d05fe24_48698150',
  'variables' => 
  array (
    'day_total' => 0,
    'daysale' => 0,
    'dayrow' => 0,
    'week_total' => 0,
    'weeksale' => 0,
    'weekrow' => 0,
    'month_total' => 0,
    'monthsale' => 0,
    'monthrow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5733d05fe24_48698150')) {function content_58a5733d05fe24_48698150($_smarty_tpl) {?><div class="shuju_one">
   <p class="shuju_tit"><?php echo $_smarty_tpl->tpl_vars['day_total']->value['addtime'];?>
销售总额 | <span><?php echo $_smarty_tpl->tpl_vars['day_total']->value['zj'];?>
元</span><b onclick="zonge(0)" tapmode='tap-active'><img src="../../image/img-qm/left.png" alt=""></b></p>
   <div class="shuju1">
	   <div class="zhibiao">
		   <?php  $_smarty_tpl->tpl_vars['dayrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dayrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daysale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dayrow']->key => $_smarty_tpl->tpl_vars['dayrow']->value){
$_smarty_tpl->tpl_vars['dayrow']->_loop = true;
?>
		   <p>
			   <span class="point_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
"></span><?php if ($_smarty_tpl->tpl_vars['dayrow']->value['id']==1){?>独一张老膏药<?php }elseif($_smarty_tpl->tpl_vars['dayrow']->value['id']==2){?>独一张炙骨宁袋<?php }elseif($_smarty_tpl->tpl_vars['dayrow']->value['id']==3){?>独一张温泉<?php }elseif($_smarty_tpl->tpl_vars['dayrow']->value['id']==4){?>仪年堂气血能量养生仪<?php }?><br>
			   <span>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['dayrow']->value['zj']==''){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['dayrow']->value['zj'];?>
<?php }?><i>元</i></span>
		   </p>
		   <?php } ?>
	   </div>
	   <div class="shujubiao">
			<?php  $_smarty_tpl->tpl_vars['dayrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dayrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daysale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dayrow']->key => $_smarty_tpl->tpl_vars['dayrow']->value){
$_smarty_tpl->tpl_vars['dayrow']->_loop = true;
?>
			<dl>
			   <dt>
					<div style="background-color:<?php if ($_smarty_tpl->tpl_vars['dayrow']->value['id']==4){?>#6c95f3<?php }elseif($_smarty_tpl->tpl_vars['dayrow']->value['id']==3){?>#7b6cf3<?php }elseif($_smarty_tpl->tpl_vars['dayrow']->value['id']==2){?>#27cc8d<?php }elseif($_smarty_tpl->tpl_vars['dayrow']->value['id']==1){?>#fcac40<?php }?>;height:<?php echo $_smarty_tpl->tpl_vars['dayrow']->value['bfb'];?>
%"></div>
					<p><span><?php echo $_smarty_tpl->tpl_vars['dayrow']->value['bfb'];?>
</span>%</p>
				</dt>
			   <dd><?php if ($_smarty_tpl->tpl_vars['dayrow']->value['id']==4){?>仪年堂气血能量养生仪<?php }elseif($_smarty_tpl->tpl_vars['dayrow']->value['id']==3){?>独一张温泉<?php }elseif($_smarty_tpl->tpl_vars['dayrow']->value['id']==2){?>独一张炙骨宁袋<?php }elseif($_smarty_tpl->tpl_vars['dayrow']->value['id']==1){?>独一张老膏药<?php }?></dd>
		   </dl>
		   <?php } ?>
	   </div>               
   </div>
</div>
<div class="shuju_one">
   <p class="shuju_tit" style="color:#8ec0e9"><?php echo $_smarty_tpl->tpl_vars['week_total']->value['month'];?>
月第<?php echo $_smarty_tpl->tpl_vars['week_total']->value['week'];?>
周销售总额 | <span><?php echo $_smarty_tpl->tpl_vars['week_total']->value['zj'];?>
元</span><b onclick="zonge(1)" tapmode='tap-active'><img src="../../image/img-qm/left.png" alt=""></b></p>
   <div class="shuju1">
	   <div class="zhibiao">
		   <?php  $_smarty_tpl->tpl_vars['weekrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weekrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weeksale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weekrow']->key => $_smarty_tpl->tpl_vars['weekrow']->value){
$_smarty_tpl->tpl_vars['weekrow']->_loop = true;
?>
		   <p>
			   <span class="point_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
"></span><?php if ($_smarty_tpl->tpl_vars['weekrow']->value['id']==1){?>独一张老膏药<?php }elseif($_smarty_tpl->tpl_vars['weekrow']->value['id']==2){?>独一张炙骨宁袋<?php }elseif($_smarty_tpl->tpl_vars['weekrow']->value['id']==3){?>独一张温泉<?php }elseif($_smarty_tpl->tpl_vars['weekrow']->value['id']==4){?>仪年堂气血能量养生仪<?php }?><br>
			   <span>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['weekrow']->value['zj']==''){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['weekrow']->value['zj'];?>
<?php }?><i>元</i></span>
		   </p>
		   <?php } ?>
	   </div>
	   <div class="shujubiao">
			<?php  $_smarty_tpl->tpl_vars['weekrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weekrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weeksale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weekrow']->key => $_smarty_tpl->tpl_vars['weekrow']->value){
$_smarty_tpl->tpl_vars['weekrow']->_loop = true;
?>
			<dl>
			   <dt>
					<div style="background-color:<?php if ($_smarty_tpl->tpl_vars['weekrow']->value['id']==4){?>#6c95f3<?php }elseif($_smarty_tpl->tpl_vars['weekrow']->value['id']==3){?>#7b6cf3<?php }elseif($_smarty_tpl->tpl_vars['weekrow']->value['id']==2){?>#27cc8d<?php }elseif($_smarty_tpl->tpl_vars['weekrow']->value['id']==1){?>#fcac40<?php }?>;height:<?php echo $_smarty_tpl->tpl_vars['weekrow']->value['bfb'];?>
%"></div>
					<p><span><?php echo $_smarty_tpl->tpl_vars['weekrow']->value['bfb'];?>
</span>%</p>
				</dt>
			   <dd><?php if ($_smarty_tpl->tpl_vars['weekrow']->value['id']==4){?>仪年堂气血能量养生仪<?php }elseif($_smarty_tpl->tpl_vars['weekrow']->value['id']==3){?>独一张温泉<?php }elseif($_smarty_tpl->tpl_vars['weekrow']->value['id']==2){?>独一张炙骨宁袋<?php }elseif($_smarty_tpl->tpl_vars['weekrow']->value['id']==1){?>独一张老膏药<?php }?></dd>
		   </dl>
		   <?php } ?>
	   </div>               
   </div>
</div>
<div class="shuju_one">
   <p class="shuju_tit" style="color:#fcac40"><?php echo $_smarty_tpl->tpl_vars['month_total']->value['month'];?>
月销售总额 | <span><?php echo $_smarty_tpl->tpl_vars['month_total']->value['zj'];?>
元</span><b onclick="zonge(2)" tapmode='tap-active'><img src="../../image/img-qm/left.png" alt=""></b></p>
   <div class="shuju1">
	   <div class="zhibiao">
		   <?php  $_smarty_tpl->tpl_vars['monthrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monthrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['monthsale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monthrow']->key => $_smarty_tpl->tpl_vars['monthrow']->value){
$_smarty_tpl->tpl_vars['monthrow']->_loop = true;
?>
		   <p>
			   <span class="point_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
"></span><?php if ($_smarty_tpl->tpl_vars['monthrow']->value['id']==1){?>独一张老膏药<?php }elseif($_smarty_tpl->tpl_vars['monthrow']->value['id']==2){?>独一张炙骨宁袋<?php }elseif($_smarty_tpl->tpl_vars['monthrow']->value['id']==3){?>独一张温泉<?php }elseif($_smarty_tpl->tpl_vars['monthrow']->value['id']==4){?>仪年堂气血能量养生仪<?php }?><br>
			   <span>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['monthrow']->value['zj']==''){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['monthrow']->value['zj'];?>
<?php }?><i>元</i></span>
		   </p>
		   <?php } ?>
	   </div>
	   <div class="shujubiao">
			<?php  $_smarty_tpl->tpl_vars['monthrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monthrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['monthsale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monthrow']->key => $_smarty_tpl->tpl_vars['monthrow']->value){
$_smarty_tpl->tpl_vars['monthrow']->_loop = true;
?>
			<dl>
			   <dt>
					<div style="background-color:<?php if ($_smarty_tpl->tpl_vars['monthrow']->value['id']==4){?>#6c95f3<?php }elseif($_smarty_tpl->tpl_vars['monthrow']->value['id']==3){?>#7b6cf3<?php }elseif($_smarty_tpl->tpl_vars['monthrow']->value['id']==2){?>#27cc8d<?php }elseif($_smarty_tpl->tpl_vars['monthrow']->value['id']==1){?>#fcac40<?php }?>;height:<?php echo $_smarty_tpl->tpl_vars['monthrow']->value['bfb'];?>
%"></div>
					<p><span><?php echo $_smarty_tpl->tpl_vars['monthrow']->value['bfb'];?>
</span>%</p>
				</dt>
			   <dd><?php if ($_smarty_tpl->tpl_vars['monthrow']->value['id']==4){?>仪年堂气血能量养生仪<?php }elseif($_smarty_tpl->tpl_vars['monthrow']->value['id']==3){?>独一张温泉<?php }elseif($_smarty_tpl->tpl_vars['monthrow']->value['id']==2){?>独一张炙骨宁袋<?php }elseif($_smarty_tpl->tpl_vars['monthrow']->value['id']==1){?>独一张老膏药<?php }?></dd>
		   </dl>
		   <?php } ?>
	   </div>               
   </div>
</div><?php }} ?>