<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 20:53:15
         compiled from ".\tpl\sixin\sixin_dhk.html" */ ?>
<?php /*%%SmartyHeaderCode:32697582a768cd6f4f2-72659652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b36c20a5a78dbe6855bf99b4192360b73d7841ee' => 
    array (
      0 => '.\\tpl\\sixin\\sixin_dhk.html',
      1 => 1486990395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32697582a768cd6f4f2-72659652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582a768cd95759_51878367',
  'variables' => 
  array (
    'sixin' => 0,
    'si' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a768cd95759_51878367')) {function content_582a768cd95759_51878367($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sixin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
?>
<div class="dh clearfix">
	<span class="dh_time"><?php echo $_smarty_tpl->tpl_vars['si']->value['addtime'];?>
</span>
	<div class="dh_tx dh_tx<?php if ($_smarty_tpl->tpl_vars['si']->value['status']==1){?>2<?php }else{ ?>1<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['si']->value['status']==1){?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['si']->value['wo']['touxiang'];?>
">
		<?php }else{ ?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['si']->value['to']['touxiang'];?>
" onclick="open_biaoqian(<?php echo $_smarty_tpl->tpl_vars['si']->value['to']['id'];?>
)" tapmode='tap-active'>
		<?php }?>
	</div>
	<div class="dh_con dh_con<?php if ($_smarty_tpl->tpl_vars['si']->value['status']==1){?>2<?php }else{ ?>1<?php }?> <?php if ($_smarty_tpl->tpl_vars['si']->value['neirong_type']==0){?><?php }else{ ?>dh_con_img<?php }?>">
		<i class="xiaosanjiao"></i>
		<?php if ($_smarty_tpl->tpl_vars['si']->value['type']==1){?>
			<?php if ($_smarty_tpl->tpl_vars['si']->value['neirong_type']==0){?>
			<p><?php echo $_smarty_tpl->tpl_vars['si']->value['neirong'];?>
</p>
			<?php }else{ ?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['si']->value['neirong'];?>
">
			<?php }?>
		<?php }else{ ?>
			<p>你好！我是<?php echo $_smarty_tpl->tpl_vars['si']->value['tuan']['tuan'];?>
购房团的团主，诚挚邀请您加入我团，一起来优惠地买房！</p>
			<div class="yqrt_xxbox">
				<img src="<?php echo $_smarty_tpl->tpl_vars['si']->value['tuan']['img'];?>
" class="yqrt_xxbox_img">
				<div class="yqrt_xxbox_info">
					<p><?php echo $_smarty_tpl->tpl_vars['si']->value['tuan']['tuan'];?>
购房团</p>
					<p><span>邀您入团</span><span class="jinru_btn" onclick="tuan_detail(<?php echo $_smarty_tpl->tpl_vars['si']->value['tuan']['id'];?>
,1,0)">| 进入</span></p>
				</div>
			</div>
		<?php }?>
	</div>
</div>
<?php } ?><?php }} ?>