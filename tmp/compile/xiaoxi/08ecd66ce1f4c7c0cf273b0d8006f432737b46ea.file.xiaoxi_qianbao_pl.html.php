<?php /* Smarty version Smarty-3.1.12, created on 2017-02-04 09:05:12
         compiled from ".\tpl\xiaoxi\xiaoxi_qianbao_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:2075658300f0df307f4-20150949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08ecd66ce1f4c7c0cf273b0d8006f432737b46ea' => 
    array (
      0 => '.\\tpl\\xiaoxi\\xiaoxi_qianbao_pl.html',
      1 => 1486115781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2075658300f0df307f4-20150949',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58300f0e03a8b3_41772780',
  'variables' => 
  array (
    'xiaoxi' => 0,
    'total' => 0,
    'xiao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58300f0e03a8b3_41772780')) {function content_58300f0e03a8b3_41772780($_smarty_tpl) {?><!-- <label class="quanxuan"><input type='checkbox' onchange='quanxuan(this)'>全选</label> -->
<?php  $_smarty_tpl->tpl_vars['xiao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xiao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xiaoxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xiao']->key => $_smarty_tpl->tpl_vars['xiao']->value){
$_smarty_tpl->tpl_vars['xiao']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="qianbao_total">
<div class="xx_list">
	<div class="del_check">
		<input type='checkbox' class="xz_check" value="<?php echo $_smarty_tpl->tpl_vars['xiao']->value['id'];?>
">
	</div>
	<div class="xx_list_tx icon_img1"></div>
	<div class="xx_list_info">
	<?php if ($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==17){?>
	  <p class='info'>
		您已支付<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['jilu']['ftb']+$_smarty_tpl->tpl_vars['xiao']->value['jilu']['ftb_song'];?>
房团币</span>成功参加<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['name'];?>
·购房团（官方），<span onclick="" tapmode='tap-active'>点击查看团购认购书</span>
	  </p>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==18){?>
		<p class='info'>
		您充值 金币<span class="red_font" style="margin-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['jilu']['ftb'];?>
币</span>。
		</p>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==19){?>
		<p class='info'>
		您成功领取 <i class="red_font"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['jilu']['ftb_song'];?>
房团币</i>。
		</p>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==20){?>
		<p class='info'>
		  您参加的恒大绿洲·购房团已散团，收到退款<span class="red_font">2000币</span>。
		</p>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==21){?>
		<p class='info'>
		您已支付<i class="red_font">2000房团币</i>。
		成功参加<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
·购房团（民间）
		</p>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==22){?>
		<p class='info'>
		您退出<?php echo $_smarty_tpl->tpl_vars['xiao']->value['tuan']['tuan'];?>
·购房团（民间），
		系统扣除<i class="red_font">1000房团币</i>，
		返还<i class="red_font">1000房团币</i>
		</p>
	<?php }elseif($_smarty_tpl->tpl_vars['xiao']->value['neirong_type']==23){?>
		<p class='info'>
		<?php echo $_smarty_tpl->tpl_vars['xiao']->value['user']['nicheng'];?>
打赏了您发布的房八卦
		《<?php echo $_smarty_tpl->tpl_vars['xiao']->value['zhuti']['biaoti'];?>
》
		<i class="red_font"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['ds']['ftb']+$_smarty_tpl->tpl_vars['xiao']->value['ds']['ftb_song'];?>
房团币</i>。
		</p>
	<?php }?>
	<p class="time"><?php echo $_smarty_tpl->tpl_vars['xiao']->value['addtime'];?>
</p>
	</div>
</div>
<?php } ?><?php }} ?>