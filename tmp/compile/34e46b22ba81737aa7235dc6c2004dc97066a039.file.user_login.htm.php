<?php /* Smarty version Smarty-3.1.12, created on 2015-11-07 08:59:34
         compiled from ".\tpl\user_login.htm" */ ?>
<?php /*%%SmartyHeaderCode:187675620a771e01d03-02234048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34e46b22ba81737aa7235dc6c2004dc97066a039' => 
    array (
      0 => '.\\tpl\\user_login.htm',
      1 => 1446800651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187675620a771e01d03-02234048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5620a771e24258_61495531',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5620a771e24258_61495531')) {function content_5620a771e24258_61495531($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['cfg']->value['webname'];?>
</title>
<link rel='stylesheet' href='./themes/css/login.css' type='text/css' />
</head>
<body>

<div id="login">
<h1><a href="#" title=""><?php echo $_smarty_tpl->tpl_vars['cfg']->value['webname'];?>
</a></h1> 
<form accept-charset="utf-8" action="?action=user&do=loginok" method="post">
	<p>
		<label>帐号：</label>
		<input class="input" name="username" size="20" type="text" />
	</p>
	<p>
		<label>密码：</label>
		<input class="input" name="password" size="20" type="password" />
	</p>
	<p class="submit">
		<input class="button-primary" name="commit" type="submit" value="登录" />
	</p>
</form>

</div>
</body>
</html>


<?php }} ?>