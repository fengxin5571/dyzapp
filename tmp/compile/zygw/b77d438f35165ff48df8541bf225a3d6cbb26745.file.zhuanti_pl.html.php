<?php /* Smarty version Smarty-3.1.12, created on 2016-11-20 18:07:40
         compiled from ".\tpl\zygw\zhuanti_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:987858317433d299f9-02450122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77d438f35165ff48df8541bf225a3d6cbb26745' => 
    array (
      0 => '.\\tpl\\zygw\\zhuanti_pl.html',
      1 => 1479636058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '987858317433d299f9-02450122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58317433d75e97_22124426',
  'variables' => 
  array (
    'zt' => 0,
    'zhuan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58317433d75e97_22124426')) {function content_58317433d75e97_22124426($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['zhuan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zhuan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zhuan']->key => $_smarty_tpl->tpl_vars['zhuan']->value){
$_smarty_tpl->tpl_vars['zhuan']->_loop = true;
?>
<li class="jdal_one" uid='<?php echo $_smarty_tpl->tpl_vars['zhuan']->value['id'];?>
'>
    <input type="checkbox">
    <div style="width:80%;padding-left:30px;box-sizing:border-box;border-bottom:solid 1px #f2f2f2; ">
       <p class="jdal_tit"><?php echo $_smarty_tpl->tpl_vars['zhuan']->value['biaoti'];?>
</p>
       <p class="jdal_nr"><?php echo $_smarty_tpl->tpl_vars['zhuan']->value['neirong'];?>
</p>
    </div>   
   <p class="jdal_time" style="margin-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['zhuan']->value['addtime'];?>
</p>
   <p class="jdal_pl" style="float:right">评论<span class="pls"><?php echo $_smarty_tpl->tpl_vars['zhuan']->value['total'];?>
</span></p>
</li>
<?php } ?><?php }} ?>