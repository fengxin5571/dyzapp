<?php /* Smarty version Smarty-3.1.12, created on 2017-01-12 12:01:55
         compiled from ".\tpl\grzx\qianbao_dashang_shou_popup.html" */ ?>
<?php /*%%SmartyHeaderCode:196575876ffb3f18196-16761261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efecf8e5f6fd39e3b23809be5d7075b126af237f' => 
    array (
      0 => '.\\tpl\\grzx\\qianbao_dashang_shou_popup.html',
      1 => 1484193523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196575876ffb3f18196-16761261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dsuser' => 0,
    'row' => 0,
    'biaoti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5876ffb4025f50_95106092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5876ffb4025f50_95106092')) {function content_5876ffb4025f50_95106092($_smarty_tpl) {?><p style="text-align:center;font-size: 16px;color:#333333;line-height: 22px;margin:10px 0">
	<?php echo $_smarty_tpl->tpl_vars['dsuser']->value['nicheng'];?>
 打赏你<span style="color:#e6001a"><?php echo $_smarty_tpl->tpl_vars['row']->value['ftb']+$_smarty_tpl->tpl_vars['row']->value['ftb_song'];?>
</span>房团币<br/>
	<span style="font-size: 12px;">其中  金币<?php echo $_smarty_tpl->tpl_vars['row']->value['ftb'];?>
币  银币<?php echo $_smarty_tpl->tpl_vars['row']->value['ftb_song'];?>
币<br/>主题：<?php echo $_smarty_tpl->tpl_vars['biaoti']->value;?>
</span>
</p>
<p style="font-size: 10px;color:#999999;float:right"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</p><?php }} ?>