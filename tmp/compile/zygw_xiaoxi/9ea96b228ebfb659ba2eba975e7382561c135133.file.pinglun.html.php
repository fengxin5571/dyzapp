<?php /* Smarty version Smarty-3.1.12, created on 2016-11-21 17:48:57
         compiled from ".\tpl\zygw_xiaoxi\pinglun.html" */ ?>
<?php /*%%SmartyHeaderCode:134275832bdff445821-07176114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ea96b228ebfb659ba2eba975e7382561c135133' => 
    array (
      0 => '.\\tpl\\zygw_xiaoxi\\pinglun.html',
      1 => 1479721679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134275832bdff445821-07176114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5832bdff46ba85_12766042',
  'variables' => 
  array (
    'xiaoxi' => 0,
    'xi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832bdff46ba85_12766042')) {function content_5832bdff46ba85_12766042($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['xi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xiaoxi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xi']->key => $_smarty_tpl->tpl_vars['xi']->value){
$_smarty_tpl->tpl_vars['xi']->_loop = true;
?>
<div class="xx_box_inner clearfix">
    <div class="xx_list">
        <div class="xx_list_info">
            <p class="p1"><?php echo $_smarty_tpl->tpl_vars['xi']->value['neirong'];?>
</p>
            <p class="hwde_nr"><?php echo $_smarty_tpl->tpl_vars['xi']->value['zt']['biaoti'];?>
</p>
            <p class="txt"><?php echo $_smarty_tpl->tpl_vars['xi']->value['addtime'];?>
</p>
        </div>
    </div>
    <p class="del_btn" onclick="del_xinxi(<?php echo $_smarty_tpl->tpl_vars['xi']->value['id'];?>
,this)" tapmode='tap-active'>删除记录</p>
</div>
<?php } ?><?php }} ?>