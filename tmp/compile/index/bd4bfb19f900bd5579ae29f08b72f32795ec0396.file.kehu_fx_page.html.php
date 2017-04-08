<?php /* Smarty version Smarty-3.1.12, created on 2016-10-20 11:12:32
         compiled from ".\tpl\index\kehu_fx_page.html" */ ?>
<?php /*%%SmartyHeaderCode:2046657ecd499ae6cc5-74480539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd4bfb19f900bd5579ae29f08b72f32795ec0396' => 
    array (
      0 => '.\\tpl\\index\\kehu_fx_page.html',
      1 => 1476436762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046657ecd499ae6cc5-74480539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ecd499b2f464_07719646',
  'variables' => 
  array (
    'row' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecd499b2f464_07719646')) {function content_57ecd499b2f464_07719646($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
	<ul class="tr2 clearfix">
		<a href='index.php?action=fx_index&do=kh_edit&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
'>
			<li class="td1"><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</li>
			<li class="td2"><?php echo $_smarty_tpl->tpl_vars['a']->value['tel'];?>
</li>
			<li class="td3"><?php echo $_smarty_tpl->tpl_vars['a']->value['sex'];?>
</li>
			<li class="td4"><?php if ($_smarty_tpl->tpl_vars['a']->value['type']==0){?>未成交<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['a']->value['jine'];?>
元<?php }?></li>
		</a>
	</ul>
<?php } ?><?php }} ?>