<?php /* Smarty version Smarty-3.1.12, created on 2017-03-06 09:54:05
         compiled from ".\tpl\gz\wodexuqiu.html" */ ?>
<?php /*%%SmartyHeaderCode:294058acf8279ee223-74291532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '491c51ee8e5d9cc4314bdf09ea9cd84279fdb7df' => 
    array (
      0 => '.\\tpl\\gz\\wodexuqiu.html',
      1 => 1488765228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294058acf8279ee223-74291532',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58acf827a2efc1_92280742',
  'variables' => 
  array (
    'user' => 0,
    'total' => 0,
    'mdxq' => 0,
    'row' => 0,
    'tu' => 0,
    'pl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58acf827a2efc1_92280742')) {function content_58acf827a2efc1_92280742($_smarty_tpl) {?><div class="md_name"><?php echo $_smarty_tpl->tpl_vars['user']->value['zz'];?>
</div>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="qdxq_total">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mdxq']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="one" style="margin-bottom:8px;">
	<div class="one_inner">
		<div><p style="font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</p></div>
		<div style="flex:1;-webkit-box-flex:1;-webkit-flex:1;margin:0 14px;color:#333333">
			<p class="md_nr"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['img']!=''){?>
			<div class="img_box">
				<?php  $_smarty_tpl->tpl_vars['tu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
			<p class="md_time"><span><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</span></p>
			<p class="md_11 md_11_wd"><?php if ($_smarty_tpl->tpl_vars['row']->value['is_pl']==1){?><span onclick="pl(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)"><img src="../../image/img-qm/plbg.png" alt="">评论</span><?php }?>	<!-- <span onclick="liulan(id,this)" class="zan"><img src="../../image/img-qm/liulan.png" alt="">浏览</span>--><?php if ($_smarty_tpl->tpl_vars['row']->value['jiejue']==0){?><span onclick="jiejue(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
,this)" class="zan"><img src="../../image/img-qm/jiejue.png" alt=""><i>解决</i></span><?php }else{ ?><span class="zan"><img src="../../image/img-qm/jiejue1.png" alt=""><i class="cur">已解决</i></span><?php }?></p>
			<?php  $_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['pl']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->key => $_smarty_tpl->tpl_vars['pl']->value){
$_smarty_tpl->tpl_vars['pl']->_loop = true;
?>
			<div class="pl_box_wd">
				<p class="p1"> <?php echo $_smarty_tpl->tpl_vars['pl']->value['user']['zz'];?>
 <?php echo $_smarty_tpl->tpl_vars['pl']->value['user']['name'];?>
</p>
				<p class="p2"><?php echo $_smarty_tpl->tpl_vars['pl']->value['content'];?>
</p>
			</div> 
			<?php } ?>           
		</div>
	</div>
</div>
<?php } ?><?php }} ?>