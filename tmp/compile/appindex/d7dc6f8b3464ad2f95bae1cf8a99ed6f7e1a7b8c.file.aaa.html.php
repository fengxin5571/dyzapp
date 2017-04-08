<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 20:10:24
         compiled from ".\tpl\appindex\aaa.html" */ ?>
<?php /*%%SmartyHeaderCode:316558a1a230218518-68101886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7dc6f8b3464ad2f95bae1cf8a99ed6f7e1a7b8c' => 
    array (
      0 => '.\\tpl\\appindex\\aaa.html',
      1 => 1486987816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316558a1a230218518-68101886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a1a23023aa70_94636851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a1a23023aa70_94636851')) {function content_58a1a23023aa70_94636851($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../../css/api.css" />
	<script type="text/javascript" src="../../script/api.js"></script>
	<style>
		html,body{
		    height: 100%;
		    background: transparent;
		}
		#wrap{
		    height: 100%;
		    background: #fff;
		}
		#main{
		    color:#585757;
		    padding-bottom:30px;
		}
		.login_logo{
		    width:100%;
		    height:180px;
		    position: relative;
		    background-image:url(../../image/img-qm/qsjmf_app.png);
		    background-size: 100% 100%;
		    background-position: center;
		    overflow:hidden;
		}
		.login_logo img{
		    width:100%;
		    height:100%;
		}
		.shoye_search{
			width:256px;
			position: absolute;
			top:116px;
			left:50%;
			margin-left: -128px;
			height:26px;
			background-color: #fff;
			border-radius:25px; 
			padding:5px 10px;
			box-sizing:border-box;
			font-size: 12px;
		}
		.search_pos{
			float: left;
			width:56px;
			height:16px;
			color:#333333;
			font-size:12px;	
			box-sizing:border-box;
		}
		.search_pos i{
			display:inline-block;
			vertical-align:middle;
			width:11px;
			height:13px;
			background:url(../../image/img-qm/dingwei_tb.png) no-repeat center center;
			background-size:11px 13px;
		}
		.search_pos span{
			width:44px;
			height:16px;
			line-height:16px;
			text-align:center;
			vertical-align:middle;
			text-overflow:ellipsis;
			overflow: hidden;
			white-space: nowrap;
		}
		.search_end{
			width:100%;
			padding:0 10px;
			box-sizing:border-box;
			outline:none;
		}
		.search_ipt{
			width:158px;
			height:16px;
			box-sizing:border-box;
			float: left;
			border-left:solid 1px #bababa;
			border-right:solid 1px #bababa;
		}
		.sousuo_btn{
			width:12px;
			height:13px;
			background:url(../../image/img-qm/fdj_tb.png) no-repeat center center;
			background-size:12px 13px;
			float:right;
			margin:2px;
		}
		.main_nav{
			position:relative;
			width:100%;
			padding:10px;
			box-sizing:border-box;
			overflow: hidden;
			display:block;
			display: flex;
		}
		.main_nav li{
			flex:1;
		}
		.main_nav li dl{
			width:100%;
			overflow: hidden;
		}
		.main_nav li dl dt{
			width:40px;
			height:40px;
			margin:0 auto;
			border-radius: 50%;
		}
		.main_nav li dl dd{
			font-size: 12px;
			margin-top: 6px;
			width:100%;
			color:#777777;
			text-align: center;
			overflow:hidden;
			white-space:nowrap;
			text-overflow:ellipsis
		}
		.main_nav li dl dd span{
			font-size:8px;
		}
		.bd_img{
			background:#efb958 url(../../image/img-qm/bdgft_app.png) no-repeat center;
			background-size: 22px 20px;
		}
		.bs_img{
			background:#e61f19 url(../../image/img-qm/bsgft_app.png) no-repeat center;
			background-size: 22px 20px;
		}
		.bsg_img{
			background:#3682bc url(../../image/img-qm/bshenggft_app.png) no-repeat center;
			background-size: 22px 20px;
		}
		.hn_img{
			background:#22ab38 url(../../image/img-qm/hainangft_app.png) no-repeat center;
			background-size: 22px 20px;
		}
		.qg_img{
			background:#e8568c url(../../image/img-qm/qggft_app.png) no-repeat center;
			background-size: 22px 20px;
		}
		.search_box{
			width:100%;
			padding:20px 10px 6px;
			box-sizing:border-box;
			height:55px;
			border-bottom:  solid 2px #ededed;
			position: fixed;
			top:0;
			left:0;
			background-color: #fff;
			z-index: 9999999;
			display: none;
		}
		.xhd{
			width:9px;
			height: 9px;
			background-color: #ff0000;
			border-radius: 50%;
			position: absolute;
			right:0;
			top:0;
		}
		.xiaoxi{
			background:url(../../image/img-qm/nav_bottom2.png) no-repeat right center;
			background-size: 22px 20px;
			width:36px;
			height:26px;
			float:right;
			position: relative;
		}
		.bsgft_tit{
		    height:26px;
		    line-height:26px;
		    padding-left:15px;
		   /* margin-top:10px;*/
		    font-size:12px;
		    color:#595757;
		    background:#f2f2f2;
		    box-sizing:border-box;
		}
		.bsgft_list{
		    position:relative;
		    display: -webkit-box;
		    display: -webkit-flex;
		    display: flex;
		    padding:15px;
		    margin-bottom:10px;
		    border-bottom:1px solid #f2f2f2;
		    background:#fff;
		}
		.youhui{
		    position:absolute;
		    left:15px;top:20px;
		    height:12px;
		    color:#fff;
		    background:url(../../image/img-cll/bg1.png) no-repeat center center;
		    background-size:100% 12px;
		    font-size:8px;
		    line-height:12px;
		    text-align:center;
		    padding:0 10px;
		}
		.bsgft_list_img{
		    width:100px;
		    height:75px;
		    margin-right:10px;
		}
		.bsgft_list_img>img{
		    width:100%;
		    height:100%;
		}
		.bsgft_list_info{
		    -webkit-box-flex: 1;
		    -webkit-flex: 1;
		    flex: 1;
		    position:relative;
		}
		.bsgft_list_info p{
		    display:-webkit-box !important;
		    overflow:hidden;
		    text-overflow:ellipsis;
		    word-break:break-all;
		    -webkit-box-orient:vertical;
		    -webkit-line-clamp:1;
		}
		i{
		    font-style:normal;
		}
		.bsgft_list_info .p1{
		    height:20px;
		    line-height:20px;
		    font-size:14px;
		    color:#333333;
		}
		.bsgft_list_info_tit{
		    width:70%;
		    text-overflow:ellipsis;
		    overflow:hidden;
		    white-space:nowrap;
		}
		.biaoshi{
		    width:16px;
		    height:16px;
		    color:#fff;
		    font-size:9px;
		    text-align:center;
		    line-height:16px;
		    float:right;
		}
		.re_bg{
		    background-color:#ff0000;  
		}
		.ming_bg{
		    margin-left:10px;
		    background-color:#29a7de;
		}
		.qi_bg{
		    margin-left:10px;
		    background:#f7ac3b;
		}
		.bsgft_list_info .p2{
		    font-size:12px;
		    color:#808080;
		    height:27px;
		    line-height:27px;
		}
		.bsgft_list_info .p3{
		    height:14px;
		    line-height:14px;
		    font-size:12px;
		    color:#808080;
		}
		.red_font{
		    color:#ff0000;
		    font-size:16px;
		    font-weight:bold;
		}
		.cantuan_btn{
		    position:absolute;
		    top:20px;right:0;
		    width:50px;
		    height:20px;
		    line-height:20px;
		    text-align:center;
		    border:1px solid #ff0000;
		    color:#ff0000;
		    font-size:9px;
		    box-sizing:border-box;
		}
		.chakan_more{
			width:290px;
			height:26px;
			margin:20px auto 0;
			background:#fff;
			text-align:center;
			line-height:26px;
			color:#aca9a5;
			font-size:10px;
			border:1px solid #f2f2f2;
			border-radius:3px;
		}
		.chakan_more:active,.chakan_more.tap-active{
			color:#fff;
			background-color:#ff0000;
			border-color:#ff0000;
		}
		.wuxiaoxi{
            position:absolute;
            top:30%;left:50%;
            margin-left:-75px;
            height:75px;
            font-size:12px;
            color:#666;
            box-sizing:border-box;
        }
        .wuxiaoxi img{
            width:50px;
            height:75px;
            display:inline-block;
            vertical-align:middle;
        }
        .wuxiaoxi span{
            line-height:22px;
            vertical-align:middle;
            margin-left:6px;
        }
	</style>
</head>
<body>
	<div id="wrap">
		
		1111111111111
	</div>
</body>
<script type="text/javascript" src="../../script/api.js"></script>
<script type="text/javascript" src="../../script/zepto.js"></script>
<script>
var is_from=0;
var w;
var tc_qm=0;
var province;
var city;
var district;
var lat;
var lon;
var h1,w1;
var bMap;
apiready=function(){
	bMap = api.require('bMap');
	bMap.getLocation({
	    accuracy: '100m',
	    autoStop: true,
	    filter: 1
	}, function(ret, err) {
	    if (ret.status) {
	    	lat=ret.lat;
	    	lon=ret.lon;
	    	bmp(lat,lon);
	    }else{
	    	lat='37.868062';
	    	lon='112.547448';
	    	bmp(lat,lon);
	    }
	});  			
	var main = $api.byId('main');
	w = $api.offset(main).w;
}
function bmp(t,n){
	bMap.getNameFromCoords({lon:n,lat:t},function(ret_c, err_c) {
	    if (ret_c.status) {
	    	province=ret_c.province;
	        city=ret_c.city;
	        district=ret_c.district;
	        $('.search_pos span').html(district);
	        qiehuan_xx(1);
	    }
	});
}

function qiehuan_xx(n){
	$.ajax({
	    type:"POST",
	    url:"http://api.51fth.com/index.php?dir=appindex&action=index&do=index_nav",
	    data:{province:province,city:city,area:district,type:n},
	    dataType:'html',
	    success:function(msg){
            $('#main1').html(msg);
        }
	});
}

// 打开团详情页
function tuan_detail(id,type,tel){
	var op_tuan_detail = 'op_tuan_detail("'+id+'","'+type+'","root","op()");';
	api.execScript({
		name: 'main',
	    script: op_tuan_detail
	});
}
$(".search_end").keydown(function(event) { 
    if (event.keyCode == 13) {
    	var txt=$(this).val();
    	ssjg(txt); 
	}
});
function open_sou(obj){
	var txt=$(obj).siblings('.search_ipt').find('input').val();
	ssjg(txt);
}
//    function input_end(){
// 	$('.search_end').blur();
// }
// 搜索结果
function ssx_hidden(){
	api.setFrameAttr({
	    name: 'sheng',
	    hidden:true
	});
	api.setFrameAttr({
	    name: 'city',
	    hidden:true
	});
	api.setFrameAttr({
	    name: 'district',
	    hidden:true
	});
}
function ssjg(txt){
	// page=1;
	if(txt!=''){
		ssx_hidden();
		// $.ajax({
		//     type:"POST",
		//     url:"http://api.51fth.com/index.php?dir=appindex&action=search&do=sousuo",
		//     data:{"sousuo":txt,city:city,area:district,province:province},
		//     dataType:'html',
		//     success:function(msg){
		    	// page++;
	            api.execScript({
					name: 'main',
				    script: 'op_ssjg("'+province+'","'+city+'","'+district+'","'+txt+'")'
				});
	        // }
		// });
	}else{
		api.toast({
		    msg: '请先输入内容',
		    duration: 2000,
		    location: 'bottom'
		});
	}
	
}
// 选择省市县
function search_pos(){
	if(tc_qm==0){
		h1=$('.shoye_search').offset().top+26;
		w1=$('.shoye_search').offset().left;			
	}else{
		h1=55;
		w1=$('.search_box').offset().left;			
	}
	if(is_from==0){
		is_from=1;
		api.openFrame({
		    name: 'sheng',
		    url: 'widget://html/shouye/sheng.html',
		    bounces: false,
		    reload:true,
		    pageParam:{h1:h1,w1:w1,province:province,city:city,district:district},
		    rect: {x: w1,y: h1,w: 256/3,h: '216px'}
		});
	}else{
		is_from=0;
		ssx_hidden();
	}
}
// 获取省
function set_province(name){
	province=name;
}
// 获取市
function set_city(name){
	city=name;
}
// 获取区
function set_district(name){
	district=name;
	$('.search_pos span').html(name);
	// var html_load = 'html_load("'+city+'","'+name+'","'+lat+'","'+lon+'");';
	// api.execScript({
	// 	name: 'main',
	//     frameName: 'index_down',
	//     script: html_load
	// });
}
// 打开各地区购房团
function open_qtgft(type){
	api.execScript({
		name: 'main',
	    script: 'open_qtgft("'+province+'","'+city+'","'+district+'","'+type+'")'
	});
}
// 向上向下滚动头部input显示隐藏
var h;
window.onscroll = function(){
	h= $(window).scrollTop();
	if(h>=180&&is_from==0){
		$(".search_box").show();
		tc_qm=1;
	}else{
		$(".search_box").hide();
		tc_qm=0;
		is_from=0;
		ssx_hidden();	
	}
}
</script>
</html><?php }} ?>