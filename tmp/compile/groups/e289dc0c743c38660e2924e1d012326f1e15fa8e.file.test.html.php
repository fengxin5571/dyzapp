<?php /* Smarty version Smarty-3.1.12, created on 2017-04-12 16:08:56
         compiled from ".\tpl\groups\test.html" */ ?>
<?php /*%%SmartyHeaderCode:1038558e8759ad42f76-19435989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e289dc0c743c38660e2924e1d012326f1e15fa8e' => 
    array (
      0 => '.\\tpl\\groups\\test.html',
      1 => 1491984534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1038558e8759ad42f76-19435989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58e8759ae25d27_64213656',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e8759ae25d27_64213656')) {function content_58e8759ae25d27_64213656($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<script src="/dyzapp/themes/js/jquery.min.js"></script>
<button onclick="test()" >test</button>

</body>
<script>
function test(){
	$.ajax({
		url:'http://192.168.2.143/dyzapp/index.php?action=user_groups&dir=groups&do=qlxx&gid=55',
	    type:'get',
		
		dataType:'json',
		success:function(data){
			console.log(data.groups_info)
			alert(data.groups_info[0]['ug_name']);
			
		}
		
	}); 
}
</script>
</html><?php }} ?>