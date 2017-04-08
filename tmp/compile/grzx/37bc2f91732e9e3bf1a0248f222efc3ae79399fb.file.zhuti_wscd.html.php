<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 14:23:00
         compiled from ".\tpl\grzx\zhuti_wscd.html" */ ?>
<?php /*%%SmartyHeaderCode:31738582c3ae374ac52-66027405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37bc2f91732e9e3bf1a0248f222efc3ae79399fb' => 
    array (
      0 => '.\\tpl\\grzx\\zhuti_wscd.html',
      1 => 1486966553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31738582c3ae374ac52-66027405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c3ae379adf1_21943160',
  'variables' => 
  array (
    'total' => 0,
    'wscd' => 0,
    'sc' => 0,
    'im' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c3ae379adf1_21943160')) {function content_582c3ae379adf1_21943160($_smarty_tpl) {?><input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='wscd_total'/>
<?php if (count($_smarty_tpl->tpl_vars['wscd']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wscd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?>
<li class="jdal_one">
    <div class="tx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['sc']->value['user']['touxiang'];?>
"></div>
    <div class="one_left">
        <p class="jdal_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['sc']->value['user']['nicheng'];?>
</span>
            <span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['sc']->value['total'];?>
</i></span>
        </p>
        <p class="jdal_time">
            <span><?php echo $_smarty_tpl->tpl_vars['sc']->value['addtime'];?>
</span>
            <img src="../../image/img-cll/del.png" alt="" class="del_img" onclick="shanchu(this,<?php echo $_smarty_tpl->tpl_vars['sc']->value['id'];?>
)" tapmode='tap-active'>
        </p>
        <p class="tit" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['sc']->value['zhuti']['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['sc']->value['zhuti']['biaoti'];?>
</p>
        <p class="jdal_nr" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['sc']->value['zhuti']['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['sc']->value['zhuti']['neirong'];?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['sc']->value['zhuti']['tupian']!=''){?>
        <p class="img_box clearfix">
			<?php  $_smarty_tpl->tpl_vars['im'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['im']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sc']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['im']->key => $_smarty_tpl->tpl_vars['im']->value){
$_smarty_tpl->tpl_vars['im']->_loop = true;
?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['im']->value;?>
">
			<?php } ?>
        </p>
		<?php }?>
    </div>
    </div>
</li>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>有好料，藏起来<br>空闲的时候好好看。</span>
</p>
<?php }?><?php }} ?>