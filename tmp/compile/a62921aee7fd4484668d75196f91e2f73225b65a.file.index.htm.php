<?php /* Smarty version Smarty-3.1.12, created on 2016-01-27 13:20:44
         compiled from ".\tpl\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:21543561e014dc3bdd8-64435724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a62921aee7fd4484668d75196f91e2f73225b65a' => 
    array (
      0 => '.\\tpl\\index.htm',
      1 => 1453871367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21543561e014dc3bdd8-64435724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_561e014dc65d48_17399863',
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561e014dc65d48_17399863')) {function content_561e014dc65d48_17399863($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['cfg']->value['webname'];?>
</title>
<link href="./themes/default/style.css" rel="stylesheet" type="text/css" />
<link href="./themes/css/core.css" rel="stylesheet" type="text/css" />
<link href="./themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<!--[if IE]>
<link href="./themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->
<script src="./themes/javascripts/speedup.js" type="text/javascript"></script>
<script src="./themes/javascripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="./themes/javascripts/jquery.cookie.js" type="text/javascript"></script>
<script src="./themes/javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="./themes/javascripts/jquery.bgiframe.js" type="text/javascript"></script>
<script src="./themes/javascripts/dwz.min.js" type="text/javascript"></script>
<script src="./themes/xheditor/xheditor-1.1.12-zh-cn.min.js" type="text/javascript"></script>
<script src="./themes/javascripts/money.js" type="text/javascript"></script>
<script src="./themes/javascripts/sender.js" type="text/javascript"></script>
<link href="./kindeditor/themes/default/default.css" rel="stylesheet" type="text/css"/>
<link href="./kindeditor/plugins/code/prettify.css" rel="stylesheet" type="text/css"/>
<script src="./kindeditor/kindeditor-all-min.js" type="text/javascript"></script>
<script src="./kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="./kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script type="text/javascript">
var GV = {}
GV.kindeditor={basePath:'./kindeditor/',upload:'./kindeditor/php/upload_json.php',filemanager:'./kindeditor/php/file_manager_json.php'};
$(function(){
	DWZ.init("./themes/dwz.frag.xml", {
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"themes"});
		}
	});
});
//清理浏览器内存,只对IE起效,FF不需要
if ($.browser.msie) {
	window.setInterval("CollectGarbage();", 10000);
}
KindEditor.ready(function(K) {
	var editor = K.editor({
		allowFileManager : true
	});
	K('#image1').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				imageUrl : K('#url1').val(),
				clickFn : function(url, title, width, height, border, align) {
					K('#url1').val(url);
					editor.hideDialog();
				}
			});
		});
	});
});
</script>
</head>

<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<a class="logo" href="javascript:void(0)">标志</a>
				<ul class="nav">
					<li><a href="#">用户:<?php echo $_SESSION['username'];?>
</a></li>
					<li><a href="index.php?action=user&do=editpass" target="dialog" mask="true">修改密码</a></li>
					<li><a href="index.php?action=user&do=logout">退出</a></li>
				</ul>
			</div>		
		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

				<div class="accordion" fillSpace="sidebar">					
					<div class="accordionHeader">
						<h2><span>Folder</span>系统管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder ">
							<li><a>用户管理</a>
								<ul>
									<li><a href="index.php?action=user" target="navTab" rel="user">用户列表</a></li>
								</ul>
							</li>
							<li><a>角色管理</a>
								<ul>
									<li><a href="index.php?action=role" target="navTab" rel="role">角色列表</a></li>								
								</ul>
							</li>
							<li><a>日志查看</a>
								<ul>
									<li><a href="index.php?action=log" target="navTab" rel="log">日志列表</a></li>									
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:;">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							<p><span><?php echo $_smarty_tpl->tpl_vars['cfg']->value['webname'];?>
</span></p>
							<p>开发者 : 于惊涛</p>
						</div>
						<div class="pageFormContent" layoutH="80">
<pre style="margin:5px;line-height:1.4em">???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
</pre>

<div class="divider"></div>
<h2>功能描述:</h2>
<pre style="margin:5px;line-height:1.4em">
1.????????????????
2.????????????????
3.????????????????
4.????????????????
5.????????????????
6.????????????????
7.????????????????
8.????????????????
9.????????????????
10:????????????????
</pre>

<div class="divider"></div>
<h2>??????????:</h2>
<p style="color:red"><br/>
????????: ????????????????<br/><br/>
????????: <a href="#" target="_blank">????????</a><br/><br/>
????????: ????????????????????????<br/><br/>????????: ????????????????</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>

	</div>

	<div id="footer">Copyright &copy; 2014 <a href="#" target="_blank">???????? ????????</a> ????????:????????</div>


</body>
</html><?php }} ?>