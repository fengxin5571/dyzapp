<?php /* Smarty version Smarty-3.1.12, created on 2017-01-10 17:29:18
         compiled from ".\tpl\grzx\zhuti_wfbd_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:29675874a90845ccd9-08516549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f188742dd9497842ba0ab168bfb744ec76fbe111' => 
    array (
      0 => '.\\tpl\\grzx\\zhuti_wfbd_edit.html',
      1 => 1484040557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29675874a90845ccd9-08516549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5874a908492368_82418944',
  'variables' => 
  array (
    'zhuti' => 0,
    'im' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874a908492368_82418944')) {function content_5874a908492368_82418944($_smarty_tpl) {?><p class="bjzt_tit">
    <input type='text' class="biaoti" onpropertychange="zsxz(this)" oninput="zsxz(this)" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['zhuti']->value['biaoti'];?>
">
    <span class="jishu"><i class="num"><?php echo mb_strlen($_smarty_tpl->tpl_vars['zhuti']->value['biaoti']);?>
</i>/30</span>
</p>
<p class="bjzt_text">
    <textarea class="zt_txt" onpropertychange="zsxz(this)" oninput="zsxz(this)" maxlength="1000"><?php echo $_smarty_tpl->tpl_vars['zhuti']->value['neirong'];?>
</textarea>
    <span class="jishu"><i class="num"><?php echo mb_strlen($_smarty_tpl->tpl_vars['zhuti']->value['neirong']);?>
</i>/1000</span>
</p>
<div class="img_box clearfix">
	<?php if ($_smarty_tpl->tpl_vars['zhuti']->value['tupian']!=''){?>
    <div class="img_box_inner">
		<?php  $_smarty_tpl->tpl_vars['im'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['im']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuti']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['im']->key => $_smarty_tpl->tpl_vars['im']->value){
$_smarty_tpl->tpl_vars['im']->_loop = true;
?>
        <p class="zt_img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['im']->value;?>
">
            <span class="chahao" onclick="chahao_del(this)" tapmode="tap-active"></span>
        </p>
		<?php } ?>
    </div>
	<?php }?>
    <p class="sc_btn" onclick="sc_img()" tapmode='tap-active'></p>
</div>
<p class="tp_btn" onclick="qrxg();" tapmode='tap-active'>确认修改</p><?php }} ?>