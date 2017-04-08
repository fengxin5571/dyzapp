<?php /* Smarty version Smarty-3.1.12, created on 2016-11-22 11:58:16
         compiled from ".\tpl\zygw\zhuanti.html" */ ?>
<?php /*%%SmartyHeaderCode:113065831738742b225-66989233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d3a8d560a11925779302c680811e8a14ab9353f' => 
    array (
      0 => '.\\tpl\\zygw\\zhuanti.html',
      1 => 1479786755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113065831738742b225-66989233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5831738746bfc8_12530091',
  'variables' => 
  array (
    'zt' => 0,
    'zhuan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5831738746bfc8_12530091')) {function content_5831738746bfc8_12530091($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['zhuan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zhuan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zhuan']->key => $_smarty_tpl->tpl_vars['zhuan']->value){
$_smarty_tpl->tpl_vars['zhuan']->_loop = true;
?>
<li class="jdal_one">
    <div class="one_left">
        <p class="jdal_tit" onclick='op_xq(<?php echo $_smarty_tpl->tpl_vars['zhuan']->value['id'];?>
)'><?php echo $_smarty_tpl->tpl_vars['zhuan']->value['biaoti'];?>
</p>
        <p class="jdal_nr"><?php echo $_smarty_tpl->tpl_vars['zhuan']->value['neirong'];?>
</p>
        <p class="jdal_time"><?php echo $_smarty_tpl->tpl_vars['zhuan']->value['addtime'];?>
</p>
        <p class="jdal_pl" style="margin-left: 10px;">评论<span class="pls"><?php echo $_smarty_tpl->tpl_vars['zhuan']->value['total'];?>
</span></p>
        <p style="float:right;margin-top:10px;" onclick="bianji(<?php echo $_smarty_tpl->tpl_vars['zhuan']->value['id'];?>
)" tapmode='tap-active'><img src="../../image/img-qm/bianji.png" alt="" class="bianji_img"></p>
    </div>
    <div class="one_right" onclick="shanchu(this,<?php echo $_smarty_tpl->tpl_vars['zhuan']->value['id'];?>
)" tapmode='tap-active'>删除</div>
</li>
<?php } ?><?php }} ?>