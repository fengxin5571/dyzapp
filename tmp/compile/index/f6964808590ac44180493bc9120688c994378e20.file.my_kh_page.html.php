<?php /* Smarty version Smarty-3.1.12, created on 2016-10-17 17:33:14
         compiled from ".\tpl\index\my_kh_page.html" */ ?>
<?php /*%%SmartyHeaderCode:209165800b2eb102097-49203503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6964808590ac44180493bc9120688c994378e20' => 
    array (
      0 => '.\\tpl\\index\\my_kh_page.html',
      1 => 1476696779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209165800b2eb102097-49203503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5800b2eb13f119_20659398',
  'variables' => 
  array (
    'row' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800b2eb13f119_20659398')) {function content_5800b2eb13f119_20659398($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
	<ul class="tr2 clearfix">
		<a href='index.php?action=zygw_index&do=kh_edit&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
'>
			<li class="td1"><?php if ($_smarty_tpl->tpl_vars['a']->value['sex']==1){?><span class="tx1"><?php }else{ ?><span class="tx2"><?php }?></span><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</li>
			<li class="td2"><?php echo $_smarty_tpl->tpl_vars['a']->value['tel'];?>
</li>
		</a>
		<li class="td3"><?php if ($_smarty_tpl->tpl_vars['a']->value['type']==0){?><span onclick="chengjiao(<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
)">成交</span><?php }else{ ?><i class="i1"><?php echo $_smarty_tpl->tpl_vars['a']->value['jine'];?>
元</i><?php }?></li>
	</ul>
<?php } ?><?php }} ?>