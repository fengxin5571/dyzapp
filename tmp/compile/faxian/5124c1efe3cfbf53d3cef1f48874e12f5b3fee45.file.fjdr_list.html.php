<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 14:39:00
         compiled from ".\tpl\faxian\fjdr_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1499358789fc958cab6-89554256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5124c1efe3cfbf53d3cef1f48874e12f5b3fee45' => 
    array (
      0 => '.\\tpl\\faxian\\fjdr_list.html',
      1 => 1486956858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1499358789fc958cab6-89554256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58789fc95e8371_97526417',
  'variables' => 
  array (
    'list' => 0,
    'total' => 0,
    'row' => 0,
    'uid' => 0,
    'yh' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58789fc95e8371_97526417')) {function content_58789fc95e8371_97526417($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['list']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="fjdr_total">
<div class="fjdr_one">
    <div class="fjdr_left" onclick="open_biaoqian(<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['id'];?>
)" tapmode='tap-active'>                         
        <div class="fjdr_img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['touxiang'];?>
" alt="">
        </div>
        <div class="fjdr_user">
            <p><span class="yhm"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['nicheng'];?>
</span><span class="juli">距您<?php echo $_smarty_tpl->tpl_vars['row']->value['juli'];?>
米</span></p>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['user']['quanxian']==1){?>
            <p class="gft_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['tuan'];?>
·购房团  团主</p>
			<?php }elseif($_smarty_tpl->tpl_vars['row']->value['user']['quanxian']==2){?>
            <p class="gft_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['tuan']['tuan'];?>
·购房团  团员</p>
			<?php }else{ ?>
			<?php }?>
        </div>
    </div>
	<?php if ($_smarty_tpl->tpl_vars['uid']->value>0){?>
	<?php if ($_smarty_tpl->tpl_vars['yh']->value['quanxian']==1){?>
		<?php if ($_smarty_tpl->tpl_vars['row']->value['user']['quanxian']>0){?>
		<p class="yaoqing_right cur">邀请入团</p>
		<?php }else{ ?>
		<p class="yaoqing_right" onclick="yaoqing(<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['id'];?>
,this)" tapmode='tap-active' user='<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['nicheng'];?>
'>邀请入团</p>
		<?php }?>
	<?php }?>
	<?php }?>
</div>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/ku3.png">
	<span>报告老板，<br>没发现任何内容</span>
</p>
<?php }?><?php }} ?>