<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 20:54:46
         compiled from ".\tpl\grzx\zhuti_whfd.html" */ ?>
<?php /*%%SmartyHeaderCode:27032582c387484c911-21287538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba4a554e22cd257d81639774eaccd9f78979996' => 
    array (
      0 => '.\\tpl\\grzx\\zhuti_whfd.html',
      1 => 1486989979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27032582c387484c911-21287538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c387487e298_94950708',
  'variables' => 
  array (
    'total' => 0,
    'huifu' => 0,
    'hui' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c387487e298_94950708')) {function content_582c387487e298_94950708($_smarty_tpl) {?><input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='whfd_total'/>
<?php if (count($_smarty_tpl->tpl_vars['huifu']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['hui'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hui']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['huifu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hui']->key => $_smarty_tpl->tpl_vars['hui']->value){
$_smarty_tpl->tpl_vars['hui']->_loop = true;
?>
<li class="jdal_one">
    <div class="one_left">
       <p class="p1">
           <span class="jdal_tit"><?php echo $_smarty_tpl->tpl_vars['hui']->value['neirong'];?>
</span>
           <span class="jdal_time"><?php echo $_smarty_tpl->tpl_vars['hui']->value['addtime'];?>
</span>
       </p>
       <p class="jdal_nr">回复的房八卦：<?php echo $_smarty_tpl->tpl_vars['hui']->value['zhuti']['biaoti'];?>
</p>
    </div>
    <div class="one_right" onclick="shanchu(this,<?php echo $_smarty_tpl->tpl_vars['hui']->value['id'];?>
)" tapmode='tap-active'>删除记录</div>
</li>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>老装哑巴，<br>早晚没人和你玩儿。</span>
</p>
<?php }?><?php }} ?>