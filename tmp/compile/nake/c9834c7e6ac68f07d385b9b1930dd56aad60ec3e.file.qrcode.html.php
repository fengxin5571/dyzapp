<?php /* Smarty version Smarty-3.1.12, created on 2017-04-06 14:35:02
         compiled from ".\tpl\nake\qrcode.html" */ ?>
<?php /*%%SmartyHeaderCode:520158da1476b0bce2-97954302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9834c7e6ac68f07d385b9b1930dd56aad60ec3e' => 
    array (
      0 => '.\\tpl\\nake\\qrcode.html',
      1 => 1491460417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '520158da1476b0bce2-97954302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58da1476b10c51_66932798',
  'variables' => 
  array (
    'flag' => 0,
    'QRWXCode' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58da1476b10c51_66932798')) {function content_58da1476b10c51_66932798($_smarty_tpl) {?><meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<style>
.qrcode,.qrwxcode{
	width:100%;
	margin:0 auto;
	margin-top: 30%;
}
.qrwxcode img{
	width:100%
}
.sub_title,.sub_desc{
	text-align: center;
}
.login_box .action {
    display: block;
    margin:  0 auto;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    line-height: 2.55555556;
    border-radius: 6px;
    color: #000;
    width: 220px;
    border: 1px solid rgba(0,0,0,.2);
}
</style>
<script src="/dyzapp/themes/js/jquery.min.js"></script>
<div class="login_box">
      <?php if ($_smarty_tpl->tpl_vars['flag']->value=="qrwxcode"){?>
      <div class="qrwxcode" ng-class="{hide: isScan || isAssociationLogin || isBrokenNetwork}">
          <?php echo $_smarty_tpl->tpl_vars['QRWXCode']->value;?>

          <div ng-show="!isNeedRefresh" class="">
              <p class="sub_title">使用手机微信扫码登录</p>
              <p class="sub_desc">网页版微信需要配合手机使用</p>
              <a href="http://192.168.2.143/dyzapp/index.php?action=qrcode&dir=nake&do=success_login" ng-click="isScan = false;" class="action" style="display:none" id="send_btn">点击发送</a>
          </div>
       
      </div>
      
      <?php }elseif($_smarty_tpl->tpl_vars['flag']->value=='done'){?>
      <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

      <?php }?>
</div><?php }} ?>