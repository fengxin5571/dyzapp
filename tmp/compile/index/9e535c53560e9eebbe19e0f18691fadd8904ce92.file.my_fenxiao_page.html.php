<?php /* Smarty version Smarty-3.1.12, created on 2016-09-30 16:23:39
         compiled from ".\tpl\index\my_fenxiao_page.html" */ ?>
<?php /*%%SmartyHeaderCode:351357ecca517a44e2-72855647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e535c53560e9eebbe19e0f18691fadd8904ce92' => 
    array (
      0 => '.\\tpl\\index\\my_fenxiao_page.html',
      1 => 1475146301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '351357ecca517a44e2-72855647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57ecca517d9b69_42730446',
  'variables' => 
  array (
    'row' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecca517d9b69_42730446')) {function content_57ecca517d9b69_42730446($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
	<ul class="clearfix">
		<a href='index.php?action=zygw_index&do=kh_list&id=<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
'>
			<li class="td1"><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</li>
			<li class="td2"><?php echo $_smarty_tpl->tpl_vars['a']->value['tel'];?>
</li>
		</a>
		<li class="td3" onclick='xiugai(<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
)'><span>修改密码</span></li>
	</ul>
<?php } ?><?php }} ?>