<?php /* Smarty version Smarty-3.1.12, created on 2017-01-12 12:02:56
         compiled from ".\tpl\grzx\qianbao_ctzf_mj_popup.html" */ ?>
<?php /*%%SmartyHeaderCode:68625876fff0462bf9-68789438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3afc3514138232ef5ac9ed2dde3cd7aff08d045d' => 
    array (
      0 => '.\\tpl\\grzx\\qianbao_ctzf_mj_popup.html',
      1 => 1484192082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68625876fff0462bf9-68789438',
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
  'unifunc' => 'content_5876fff0498276_52081703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5876fff0498276_52081703')) {function content_5876fff0498276_52081703($_smarty_tpl) {?><p style="text-align:center;font-size: 16px;color:#333333;line-height: 22px;margin:10px 0">
	参团支付 <span style="color:#e6001a"><?php echo $_smarty_tpl->tpl_vars['row']->value['ftb']+$_smarty_tpl->tpl_vars['row']->value['ftb_song'];?>
</span>房团币<br/>
	<span style="font-size: 12px;">其中  金币<?php echo $_smarty_tpl->tpl_vars['row']->value['ftb'];?>
币  银币<?php echo $_smarty_tpl->tpl_vars['row']->value['ftb_song'];?>
币<br/>参加了 <?php echo $_smarty_tpl->tpl_vars['tuan']->value;?>
·购房团（民间）</span>
</p>
<p style="font-size: 10px;color:#999999;float:right"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</p><?php }} ?>