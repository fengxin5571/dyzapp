<?php /* Smarty version Smarty-3.1.12, created on 2017-04-14 14:30:03
         compiled from ".\tpl\groups\test.html" */ ?>
<?php /*%%SmartyHeaderCode:1038558e8759ad42f76-19435989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e289dc0c743c38660e2924e1d012326f1e15fa8e' => 
    array (
      0 => '.\\tpl\\groups\\test.html',
      1 => 1492151373,
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
<script src="/dyzapp/themes/js/socket.io.js"></script>
<button onclick="test()" >test</button>

</body>
<script>
function getQueryString(e) {
    var t = new RegExp("(^|&)" + e + "=([^&]*)(&|$)");
    var a = window.location.search.substr(1).match(t);
    if (a != null) return a[2];
    return ""
}
var uid=getQueryString('uid');
var socket = io('http://192.168.2.143:4001');
socket.on('connect', function(){
	socket.emit('login', uid);
	socket.emit('join',uid,"group1");
});

socket.on('sixin_to_groups',function(msg){
	alert(msg);
});
function test(){
	$.ajax({
		url:'http://192.168.2.143/dyzapp/index.php?action=user_groups&dir=groups&do=fasixin&gid=55&uid=173&groups_room=group1&txt=123',
	    type:'get',
		
		dataType:'json',
		success:function(data){
			console.log(data.code)
			
			
		}
		
	}); 
}
</script>
</html><?php }} ?>