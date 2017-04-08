<?php /* Smarty version Smarty-3.1.12, created on 2017-03-06 09:54:00
         compiled from ".\tpl\gz\mendianxuqiu.html" */ ?>
<?php /*%%SmartyHeaderCode:81958a3cd7507f2f6-43837905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6a21f983550cf705d705ba3a35acba88287aa68' => 
    array (
      0 => '.\\tpl\\gz\\mendianxuqiu.html',
      1 => 1488765219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81958a3cd7507f2f6-43837905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a3cd750c3da3_45327437',
  'variables' => 
  array (
    'mdxq' => 0,
    'total' => 0,
    'mdxqrow' => 0,
    'tu' => 0,
    'pl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a3cd750c3da3_45327437')) {function content_58a3cd750c3da3_45327437($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['mdxqrow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mdxqrow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mdxq']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mdxqrow']->key => $_smarty_tpl->tpl_vars['mdxqrow']->value){
$_smarty_tpl->tpl_vars['mdxqrow']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="mdxq_total">
<div class="one" style="margin-bottom:8px;">
	<div class="one_inner">
		<div style="width:40px;">
			<div class="cir"><span><?php echo $_smarty_tpl->tpl_vars['mdxqrow']->value['user']['name'];?>
</span><div class="shuxian"></div></div>
			<!-- <p class="area_1">内蒙古</p> -->
		</div>
		<div style="flex: 1;-webkit-box-flex: 1;-webkit-flex: 1;margin:0 14px;color:#333333">
			<p class="md_tit"><?php echo $_smarty_tpl->tpl_vars['mdxqrow']->value['user']['zz'];?>
</p>
			<p class="md_time"><?php echo $_smarty_tpl->tpl_vars['mdxqrow']->value['date'];?>
 <span><?php echo $_smarty_tpl->tpl_vars['mdxqrow']->value['time'];?>
</span></p>
			<p class="md_nr"><?php echo $_smarty_tpl->tpl_vars['mdxqrow']->value['content'];?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['mdxqrow']->value['img']!=''){?>
			<div class="img_box">
				<?php  $_smarty_tpl->tpl_vars['tu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mdxqrow']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tu']->key => $_smarty_tpl->tpl_vars['tu']->value){
$_smarty_tpl->tpl_vars['tu']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['tu']->value;?>
" alt="" onclick='chakan_img(this,<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index'];?>
)'>
				<?php } ?>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['mdxqrow']->value['is_pl']==1){?>
			<p class="md_11">
				<span onclick="pl(<?php echo $_smarty_tpl->tpl_vars['mdxqrow']->value['id'];?>
)" tapmode='tap-active'><img src="../../image/img-qm/plbg.png" alt="">评论</span>
			</p>
			<?php }?>			
		</div>
	</div>
	<?php  $_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mdxqrow']->value['pl']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
<?php } ?><?php }} ?>