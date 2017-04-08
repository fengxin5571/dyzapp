<?php /* Smarty version Smarty-3.1.12, created on 2016-12-18 20:35:08
         compiled from ".\tpl\grzx\fjdt.html" */ ?>
<?php /*%%SmartyHeaderCode:31129582e669f084ab5-34743535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '702b5ba9f9c6ef34929bcacf9f04ad389ad4f908' => 
    array (
      0 => '.\\tpl\\grzx\\fjdt.html',
      1 => 1481943728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31129582e669f084ab5-34743535',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582e669f0ba131_82241070',
  'variables' => 
  array (
    'fjdbt' => 0,
    'fjb' => 0,
    'fjdct' => 0,
    'fj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582e669f0ba131_82241070')) {function content_582e669f0ba131_82241070($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['fjb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fjb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fjdbt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fjb']->key => $_smarty_tpl->tpl_vars['fjb']->value){
$_smarty_tpl->tpl_vars['fjb']->_loop = true;
?>
		<div class="rmgft" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['fjb']->value['id'];?>
','2','<?php echo $_smarty_tpl->tpl_vars['fjb']->value['sldh'];?>
')" tapmode='tap-active'>
			<div class="gf_icon">
				<p class="gf_font">官方</p>
				<p class="gf_sj"></p>
			</div>
			<!-- <div class="mj_icon">
				<p class="mj_font">民间</p>
				<p class="mj_sj"></p>
			</div> -->
			<div class="rmgft_img">
				<img src="<?php echo $_smarty_tpl->tpl_vars['fjb']->value['user']['touxiang'];?>
" alt="">
			</div>
			<div class="rmgft_sm">
				<div class="gf_icon">
					<div class="gf_font">官方</div>
					<div class="gf_sj"></div>
				</div>
				<p class="p1"><?php echo $_smarty_tpl->tpl_vars['fjb']->value['user']['loupan'];?>
购房团</p>
				<p class="rmgft_r"><?php echo $_smarty_tpl->tpl_vars['fjb']->value['juli'];?>
米</p>
				<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['fjb']->value['dizhi'];?>
</p>
				<p class="p3">参团平均价：<em><?php if ($_smarty_tpl->tpl_vars['fjb']->value['pjyhj']==''){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['fjb']->value['pjyhj'];?>
<?php }?></em>元/套</p>
			</div>
		</div>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['fj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fjdct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fj']->key => $_smarty_tpl->tpl_vars['fj']->value){
$_smarty_tpl->tpl_vars['fj']->_loop = true;
?>
		<div class="rmgft" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['fj']->value['id'];?>
','2','<?php echo $_smarty_tpl->tpl_vars['fj']->value['sldh'];?>
')" tapmode='tap-active'>
			<div class="gf_icon">
				<p class="gf_font">官方</p>
				<p class="gf_sj"></p>
			</div>
			<!-- <div class="mj_icon">
				<p class="mj_font">民间</p>
				<p class="mj_sj"></p>
			</div> -->
			<div class="rmgft_img">
				<img src="<?php echo $_smarty_tpl->tpl_vars['fj']->value['user']['touxiang'];?>
" alt="">
			</div>
			<div class="rmgft_sm">
				<div class="mj_icon">
					<div class="mj_font">民间</div>
					<div class="mj_sj"></div>
				</div>
				<p class="p1"><?php echo $_smarty_tpl->tpl_vars['fj']->value['user']['loupan'];?>
购房团</p>
				<p class="rmgft_r"><?php echo $_smarty_tpl->tpl_vars['fj']->value['juli'];?>
米</p>
				<p class="p2">地址：<?php echo $_smarty_tpl->tpl_vars['fj']->value['dizhi'];?>
</p>
				<p class="p3">目标最低优惠：<em><?php if ($_smarty_tpl->tpl_vars['fj']->value['pjyhj']==''){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['fj']->value['pjyhj'];?>
<?php }?></em>元/套</p>
			</div>
		</div>
<?php } ?><?php }} ?>