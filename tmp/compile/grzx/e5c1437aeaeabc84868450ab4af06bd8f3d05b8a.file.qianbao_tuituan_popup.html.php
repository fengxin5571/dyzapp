<?php /* Smarty version Smarty-3.1.12, created on 2017-01-12 12:03:02
         compiled from ".\tpl\grzx\qianbao_tuituan_popup.html" */ ?>
<?php /*%%SmartyHeaderCode:154325876fff68882c3-00643289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5c1437aeaeabc84868450ab4af06bd8f3d05b8a' => 
    array (
      0 => '.\\tpl\\grzx\\qianbao_tuituan_popup.html',
      1 => 1484192565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154325876fff68882c3-00643289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'tuan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5876fff68bd942_43743859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5876fff68bd942_43743859')) {function content_5876fff68bd942_43743859($_smarty_tpl) {?><p style="text-align:center;font-size: 16px;color:#333333;line-height: 22px;margin:10px 0">
	退团返还<span style="color:#e6001a"><?php echo $_smarty_tpl->tpl_vars['row']->value['ftb']+$_smarty_tpl->tpl_vars['row']->value['ftb_song'];?>
</span>房团币 <br/>
	<span style="font-size: 12px;">其中  金币<?php echo $_smarty_tpl->tpl_vars['row']->value['ftb'];?>
币  银币<?php echo $_smarty_tpl->tpl_vars['row']->value['ftb_song'];?>
币<br/>
	退出了 <?php echo $_smarty_tpl->tpl_vars['tuan']->value;?>
·购房团（民间）</span>
</p>
<p style="font-size: 10px;color:#999999;float:right"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</p><?php }} ?>