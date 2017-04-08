<?php /* Smarty version Smarty-3.1.12, created on 2017-03-06 10:22:20
         compiled from ".\tpl\gz\gongzuoquan_list.html" */ ?>
<?php /*%%SmartyHeaderCode:393358a2bd2e5757b9-46839526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cd6378b9b69a7467806d741ee847e4f0e9351f5' => 
    array (
      0 => '.\\tpl\\gz\\gongzuoquan_list.html',
      1 => 1488765234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '393358a2bd2e5757b9-46839526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a2bd2e5bdf50_85435497',
  'variables' => 
  array (
    'gzq' => 0,
    'gzqrow' => 0,
    'tu' => 0,
    'pl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a2bd2e5bdf50_85435497')) {function content_58a2bd2e5bdf50_85435497($_smarty_tpl) {?><div class="gzq_list">
	<?php  $_smarty_tpl->tpl_vars['gzqrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gzqrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gzq']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gzqrow']->key => $_smarty_tpl->tpl_vars['gzqrow']->value){
$_smarty_tpl->tpl_vars['gzqrow']->_loop = true;
?>
	<div class="one" style="margin-bottom:8px;">
		<div class="one_inner">
			<div style="width:40px;">
				<div class="cir"><span><?php echo $_smarty_tpl->tpl_vars['gzqrow']->value['user']['name'];?>
</span><div class="shuxian"></div></div>
				<!-- <p class="area_1">内蒙古</p> -->
			</div>
			<div style="flex: 1;-webkit-box-flex: 1;-webkit-flex: 1;margin:0 14px;color:#333333">
				<p class="md_tit"><?php echo $_smarty_tpl->tpl_vars['gzqrow']->value['user']['zz'];?>
</p>
				<p class="md_time"><?php echo $_smarty_tpl->tpl_vars['gzqrow']->value['date'];?>
 <span><?php echo $_smarty_tpl->tpl_vars['gzqrow']->value['time'];?>
</span></p>
				<p class="md_nr"><?php echo $_smarty_tpl->tpl_vars['gzqrow']->value['content'];?>
</p>
				<?php if ($_smarty_tpl->tpl_vars['gzqrow']->value['img']!=''){?>
				<div class="img_box">
					<?php  $_smarty_tpl->tpl_vars['tu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gzqrow']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tu']->key => $_smarty_tpl->tpl_vars['tu']->value){
$_smarty_tpl->tpl_vars['tu']->_loop = true;
?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['tu']->value;?>
" alt="">
					<?php } ?>
				</div>
				<?php }?>
				<p class="md_11">
				<span onclick="pl(<?php echo $_smarty_tpl->tpl_vars['gzqrow']->value['id'];?>
)" tapmode='tap-active'><img src="../../image/img-qm/plbg.png" alt="">评论</span>
				<?php if ($_smarty_tpl->tpl_vars['gzqrow']->value['is_zan']<1){?>
				<span onclick="zan(<?php echo $_smarty_tpl->tpl_vars['gzqrow']->value['id'];?>
,this)" class="zan"><img src="../../image/img-qm/zan.png" alt="">赞</span>
				<?php }else{ ?>
				<span class="zan cur"><img src="../../image/img-qm/zan1.png" alt="">已赞</span>
				<?php }?>
				</p>
				<?php  $_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gzqrow']->value['pl']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->key => $_smarty_tpl->tpl_vars['pl']->value){
$_smarty_tpl->tpl_vars['pl']->_loop = true;
?>
				<div class="pl_box">
					<p class="p1"><?php echo $_smarty_tpl->tpl_vars['pl']->value['user']['zz'];?>
 <?php echo $_smarty_tpl->tpl_vars['pl']->value['user']['name'];?>
</p>
					<p class="p2"><?php echo $_smarty_tpl->tpl_vars['pl']->value['content'];?>
</p>
				</div> 
				<?php } ?>				
			</div>
		</div>
	</div>
	<?php } ?>
</div><?php }} ?>