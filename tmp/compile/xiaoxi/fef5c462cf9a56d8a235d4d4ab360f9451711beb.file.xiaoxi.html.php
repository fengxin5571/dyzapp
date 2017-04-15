<?php /* Smarty version Smarty-3.1.12, created on 2017-04-15 10:21:17
         compiled from ".\tpl\xiaoxi\xiaoxi.html" */ ?>
<?php /*%%SmartyHeaderCode:2172058a42078623c81-80551899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef5c462cf9a56d8a235d4d4ab360f9451711beb' => 
    array (
      0 => '.\\tpl\\xiaoxi\\xiaoxi.html',
      1 => 1492222836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2172058a42078623c81-80551899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a4207865d012_16864592',
  'variables' => 
  array (
    'total' => 0,
    'xiaoxi' => 0,
    'row' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a4207865d012_16864592')) {function content_58a4207865d012_16864592($_smarty_tpl) {?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="xiaoxi_total">
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xiaoxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<div class="xiaoxi_list" onclick="open_xxdhk(<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['id'];?>
,this)" tapmode='tap-active'>
	<div class="xiaoxi_tx cur1">
		<span class="name"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['zz'];?>
</span><p class="shuxian"></p>
		<?php if ($_smarty_tpl->tpl_vars['row']->value['weidu']==0){?><span class="num" style="display:none;">0</span><?php }else{ ?><span class="num hongdian"><?php echo $_smarty_tpl->tpl_vars['row']->value['weidu'];?>
</span><?php }?>
	</div>
	<div class="xiaoxi_info">
		<p class="xiaoxi_info1"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['name'];?>
</p>
		<?php if ($_smarty_tpl->tpl_vars['row']->value['content_type']==0){?>
		<p class="xiaoxi_info2"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</p>
		<?php }else{ ?>
		<p class="xiaoxi_info2">您收到一条消息</p>
		<?php }?>
	</div>
	<div class="xiaoxi_time"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime1'];?>
</div>
</div>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['xiaoxi']||$_smarty_tpl->tpl_vars['row']->value['admin']){?>
<div class="xiaoxi_list" onclick="open_qlxxdhk(<?php echo $_smarty_tpl->tpl_vars['row']->value['ug_id'];?>
,this)" tapmode='tap-active'>
	<div class="xiaoxi_tx cur2">
		<span class="name">群聊</span><p class="shuxian"></p>
		<?php if ($_smarty_tpl->tpl_vars['row']->value['weidu']==0){?><span class="num" style="display:none;">0</span><?php }else{ ?><span class="num hongdian"><?php echo $_smarty_tpl->tpl_vars['row']->value['weidu'];?>
</span><?php }?>
	</div>
	<div class="xiaoxi_info">
		<p class="xiaoxi_info1"><?php echo $_smarty_tpl->tpl_vars['row']->value['ug_name'];?>
</p>
		<?php if ($_smarty_tpl->tpl_vars['row']->value['xiaoxi']){?>
		<?php if ($_smarty_tpl->tpl_vars['row']->value['xiaoxi']['content_type']==0){?>
		<p class="xiaoxi_info2"><?php echo $_smarty_tpl->tpl_vars['row']->value['xiaoxi']['from_name'];?>
 : <?php echo $_smarty_tpl->tpl_vars['row']->value['xiaoxi']['content'];?>
</p>
		<?php }else{ ?>
		<p class="xiaoxi_info2"><?php echo $_smarty_tpl->tpl_vars['row']->value['xiaoxi']['from_name'];?>
发了一张图片</p>
		<?php }?>
		<?php }?>
	</div>
	<div class="xiaoxi_time"><?php if ($_smarty_tpl->tpl_vars['row']->value['xiaoxi']){?><?php echo $_smarty_tpl->tpl_vars['row']->value['xiaoxi']['addtime1'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime1'];?>
<?php }?></div>
</div>
<?php }?>
<?php } ?>
<?php }} ?>