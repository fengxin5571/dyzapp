<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 18:08:19
         compiled from ".\tpl\zygw\me_kehu_all.html" */ ?>
<?php /*%%SmartyHeaderCode:1001458325a550675d8-62114859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a680ded60099cb09fac7c629949cd109679129' => 
    array (
      0 => '.\\tpl\\zygw\\me_kehu_all.html',
      1 => 1479722890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1001458325a550675d8-62114859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58325a550bb4a3_65030766',
  'variables' => 
  array (
    'szm' => 0,
    's' => 0,
    'z' => 0,
    'list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58325a550bb4a3_65030766')) {function content_58325a550bb4a3_65030766($_smarty_tpl) {?><div class="fx_div">
	<img src="../../image/img-qm/fdj.png" alt="">
	<input type="search" class="sel_all">
</div>
<div class="search_box">
</div>
<ul class="search_zimu">
	<li><img src="../../image/img-qm/fdj.png" alt=""></li>
	<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['szm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
		<a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['s']->value['szm'];?>
</a>
	<?php } ?>
</ul>
<div id="cont_tongxunlu">
	<?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['szm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
?>
		<h6 id="<?php echo $_smarty_tpl->tpl_vars['z']->value['szm'];?>
" name='<?php echo $_smarty_tpl->tpl_vars['z']->value['szm'];?>
'><?php echo $_smarty_tpl->tpl_vars['z']->value['szm'];?>
</h6>
		<ul class="sel_friend">
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['row']->value['szm']==$_smarty_tpl->tpl_vars['z']->value['szm']){?>
					<li uid='<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
' onclick="open_sixin_dhk(<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
)" tapmode='tap-active'>
						<?php if ($_smarty_tpl->tpl_vars['row']->value['touxiang']==''){?>
							<img src="http://img.51fth.com/themes/images/img-qm/mrtx.jpg" alt="">
						<?php }else{ ?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['touxiang'];?>
" alt="">
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['row']->value['nicheng']==''){?>
							<p class="yhm_p"><?php echo substr_replace($_smarty_tpl->tpl_vars['row']->value['tel'],'******',3,6);?>
</p>
						<?php }else{ ?>
							<p class="yhm_p"><?php echo $_smarty_tpl->tpl_vars['row']->value['nicheng'];?>
</p>
						<?php }?>
					</li>
				<?php }?>
			<?php } ?>
		</ul>
	<?php } ?>
</div>
    <?php }} ?>