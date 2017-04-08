<?php /* Smarty version Smarty-3.1.12, created on 2017-01-17 09:15:24
         compiled from ".\tpl\bgft\bgft_lpxq.html" */ ?>
<?php /*%%SmartyHeaderCode:24397587caab9bfd2b5-93542615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bb41e33c29b3e7537e0c03fdc12c7fc9adf3f02' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_lpxq.html',
      1 => 1484565829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24397587caab9bfd2b5-93542615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587caab9c95c34_71993712',
  'variables' => 
  array (
    'jbxx' => 0,
    'loupan' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587caab9c95c34_71993712')) {function content_587caab9c95c34_71993712($_smarty_tpl) {?><p style="margin-top: 20px;">开发公司名称 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['jbxx']->value['gongsi']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['jbxx']->value['gongsi'];?>
<?php }?></span></p>
<p style="margin-top: 20px;">项目地址 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['dizhi']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['dizhi'];?>
<?php }?></span></p>
<p>开盘时间 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['kpsj']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['kpsj'];?>
<?php }?></span></p>
<p>预设交房时间 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['jfsj']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['jfsj'];?>
<?php }?></span></p>
<p>产权年限 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['cqnx']==0){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['cqnx'];?>
<?php }?></span></p>
<p>施工单位 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['sgdw']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['sgdw'];?>
<?php }?></span></p>
<p>物业类别 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['wylb']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['wylb'];?>
<?php }?></span></p>
<p>装修状况 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['zx']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['zx'];?>
<?php }?></span></p>
<p style="margin-top: 20px;">项目简介 :&nbsp;<span><?php if ($_smarty_tpl->tpl_vars['loupan']->value['wyjj']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['wyjj'];?>
<?php }?></span></p>
<p>项目特色 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['xmts']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['xmts'];?>
<?php }?></span></p>
<p>物业公司 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['wygsmc']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['wygsmc'];?>
<?php }?></span></p>
<p>物业简介 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['wyjj']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['wyjj'];?>
<?php }?></span></p>
<p>周边配套 :&nbsp;<span> <?php if ($_smarty_tpl->tpl_vars['loupan']->value['zbpt']==''){?>暂无<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['loupan']->value['zbpt'];?>
<?php }?></span></p>
<p>项目图册 :&nbsp;
	<span>
		<?php if ($_smarty_tpl->tpl_vars['jbxx']->value['zzzs']==''){?>
		暂无
		<?php }else{ ?>
		<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jbxx']->value['tu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
			<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
">
		<?php } ?>
		<?php }?>
	</span>
</p><?php }} ?>