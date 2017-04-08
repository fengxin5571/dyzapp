<?php
 	//	查询搜索条数 ( 参数 搜索关键字, 地区ID, 页码, 分词字符串, C团数量, C团品牌 )
	function  cha_tuan_total( $sousuo, $areaid, $page, $fenci, $t_total, $pinpai,$pagesize){
		global $db;
		$lv = 1;			//	搜索级别
		$tt = 0 ;			//	结果集条数
		
		if($page <= 3){
			$total = 5*$pagesize;
		}else{
			$total = ($page-2)*$pagesize+4*$pagezize;
		}
		//	1,搜索本地B端购房团
		$sql = 'select count(*) from `fth_b_tuan` where name=? and areaid=? and status=2';
		$db->p_e($sql,array($sousuo,$areaid));
		
		$tt = $db->fetch_count();
		if($t_total > 0){
			//	2,搜索本地C端购房团 
			if($tt <= $total){
				$lv = 2;
				$sql = 'select count(*) from `fth_c_tuan` where tuan=? and areaid=? and status=3';
				$db->p_e($sql,array($sousuo,$areaid));
				$tt = $tt+$db->fetch_count();
			}	
			
			//	3,启用搜索本地显示同品牌购房团。
			if($tt <= $total){
				$lv = 3;
				$sql = 'select count(*) from `fth_c_tuan` where tuan=? and pinpai=? and areaid=? and status=3';
				$db->p_e($sql,array($sousuo,$pinpai,$areaid));
				$tt = $tt+$db->fetch_count();
			}		
		}	
		//	4,本地购房团分词匹配显示购房团
		if($tt <= $total){
			$lv = 4;
			$sql = 'select count(*) from `fth_c_tuan` where tuan!=? and areaid=? and status=3 and tuan regexp(?)';
			$db->p_e($sql,array($sousuo,$areaid,$fenci));
			$tt = $tt+$db->fetch_count();
		}	
		
/*
		//	5,精确匹配主题标题
		if($tt <= $total){
			$lv = 5;
			$sql = 'select count(*) from `fth_c_zhuti` where biaoti=? and status!=0';
			$db->p_e($sql,array($sousuo));
			$tt = $tt+$db->fetch_count();
		}
*/
		//	6,启用搜索本地所有购房团
		if($tt <= $total){
			$lv = 6;
			$sql = 'select count(*) from `fth_c_tuan` where tuan!=? and areaid=? and status=3';
			$db->p_e($sql,array($sousuo,$areaid));
			$tt = $tt+$db->fetch_count();
		}
		
		//	7,精确搜索异地同名称B端购房团
		if($tt <= $total){
			$lv = 7;
			$sql = 'select count(*) from `fth_b_tuan` where name=? and areaid!=? and status=2';
			$db->p_e($sql,array($sousuo,$areaid));
			$tt = $tt+$db->fetch_count();
		}
		
		//	8,异地同名称C端购房团
		if($tt <= $total){
			$lv = 8;
			$sql = 'select count(*) from `fth_c_tuan` where tuan=? and areaid!=? and status=3';
			$db->p_e($sql,array($sousuo,$areaid));
			$tt = $tt+$db->fetch_count();
		}
		
		//	9,分词搜索异地同名称购房团
		if($tt <= $total){
			$lv = 9;
			$sql = 'select count(*) from `fth_c_tuan` where tuan=? and areaid!=? and status=3 and tuan regexp(?)';
			$db->p_e($sql,array($sousuo,$areaid,$fenci));
			$tt = $tt+$db->fetch_count();
		}
		
/*
		//	10,分词搜索主题标题
		if($tt <= $total){
			$lv = 10;
			$sql = 'select count(*) from `fth_c_zhuti` where status!=0 and biaoti regexp(?)';
			$db->p_e($sql,array($fenci));
			$tt = $tt+$db->fetch_count();
		}
		//	11,分词搜索主题内容
		if($tt <= $total){
			$lv = 11;
			$sql = 'select count(*) from `fth_c_zhuti` where status!=0 and neirong regexp(?)';
			$db->p_e($sql,array($fenci));
			$tt = $tt+$db->fetch_count();
		}
*/
		return array('sousuo'=>$sousuo,'lv'=>$lv,'total'=>$tt);
	}

	//	返回搜索结果  ( 参数 搜索关键字, 地区ID, 总条数, 页码, 分词字符串, C团数量, C团品牌 )
	function chaxun_tuan_data( $lv,$sousuo, $areaid, $total, $page, $fenci, $t_total, $pinpai,$pagesize){
		global $db;
		$search_lv	  = $lv;
		$search_data  = array();		//	返回数据数组
		$search_param = array(); 		//	搜索参数数组
		
		//	1,搜索本地B端购房团
		if($search_lv >= 1){
			$sql = '(select id,1 as type from `fth_b_tuan` where name=? and areaid=? and status=2)';
			$search_param[] = $sousuo;
			$search_param[] = $areaid;
		}
		if($t_total>0){
			//	2,搜索本地C端购房团
			if($search_lv >= 2){
				$sql .= ' union '.'(select id,2 as type from `fth_c_tuan` where tuan=? and areaid=? and status=3 )';
				$search_param[] = $sousuo;
				$search_param[] = $areaid;
			}
			
			//	3,启用搜索本地显示同品牌购房团。
			if($search_lv >=3){
				$sql .= ' union '.'(select id,3 as type from `fth_c_tuan` where tuan!=? and areaid=? and pinpai=? and status=3 )';
				$search_param[] = $sousuo;
				$search_param[] = $areaid;
				$search_param[] = $pinpai;
			}
		}
		//	4,本地购房团分词匹配显示购房团
		if($search_lv >= 4){
			$sql .= ' union '.'(select id,4 as type  from `fth_c_tuan` where tuan!=? and areaid=? and status=3 and tuan regexp(?))';	
			$search_param[] = $sousuo;
			$search_param[] = $areaid;
			$search_param[] = $fenci;
		}
	/*	
		//	5,精确匹配主题标题
		if($search_lv >= 5){
			$sql .=  ' union '.'(select id,5 as type from `fth_zhuti` where status!=0 and biaoti=?)';
			$search_param[] = $sousuo;
		}
	*/
		//	6,启用搜索本地所有购房团
		if($search_lv >= 6){
			$sql .=  ' union '.'(select id,6 as type from `fth_c_tuan` where tuan!=? and areaid=? and status=3)';
			$search_param[] = $sousuo;
			$search_param[] = $areaid;
		}
		
		//	7,精确搜索异地同名称B端购房团
		if($search_lv >= 7){
			$sql .= ' union '.'(select id,7 as type from `fth_b_tuan` where name=? and areaid!=? and status=2)';
			$search_param[] = $sousuo;
			$search_param[] = $areaid;
		}
		
		//	8,异地同名称C端购房团
		if($search_lv >= 8){
			$sql .=  ' union '.'(select id,8 as type from `fth_c_tuan` where tuan=? and areaid!=? and status=3)';
			$search_param[] = $sousuo;
			$search_param[] = $areaid;
		}
		
		//	9,分词搜索异地同名称购房团
		if($search_lv >= 9){
			$sql .=  ' union '.'(select id,9 as type from `fth_c_tuan` where tuan!=? and status=3 and areaid!=? and tuan regexp(?))';
			$search_param[] = $sousuo;
			$search_param[] = $areaid;
			$search_param[] = $fenci;
		}
	/*
		//	10,分词搜索主题标题
		if($search_lv >= 10){
			$sql .= ' union '.'(select id,10 as type from `fth_zhuti` where status!=0 and biaoti regexp(?))';
			$search_param[] = $fenci;
		}			
		//	11,分词搜索主题内容
		if($search_lv >= 11){
			$sql .=  ' union '.'(select id,11 as type from `fth_zhuti` where status!=0 and neirong regexp(?))';
			$search_param[] = $fenci;
		}
	*/
		$sql = $sql.' limit '.(($page-1)*$pagesize).','.$pagesize;
		$db->p_e($sql,$search_param);
		//echo $db->p_e($sql,$search_param,1);
		$idarr = $db->fetchAll();
		
		if(!empty($idarr)){
			foreach($idarr as $v){
				$type = $v['type'];
				
				if($type == 1 || $type == 7){
					$search_res = cha_btuan($v['id']);
				}else{
					$search_res = cha_ctuan($v['id']);
				}
				$search_res['ss_type'] = $type;	
				$search_data[] = $search_res;	
			}
		}
		return $search_data;
	} 


	//	分页方法
	function page($total,$page){
		$total   	= $total;						//	总条数
		$start 		= 1;							//	起始页码
		$show_page  = 5;							//	显示几条
		$pagesize   = 10;							//	每页几条 
		$total_page = ceil($total/$pagesize);		//	总页数
		$end        = $total_page;					//	总条数
		$pageoffset	= ($show_page-1)/2;				//	显示页面偏移量	
		$url        = 'url';						//	跳转的url
		$html     	= '';							//	页码html
		
		if($total>$pagesize){
			if($page >= 1){
				$page1 = $page-1;
				$html .= '<a class="one_back_list" onclick="tzpage('.$page1.')">上一页</a>';
			}
			if($total_page > $show_page){
				if($page > $pageoffset){
					$start = $page-$pageoffset;
					$end = $total_page > $page+$pageoffset?$page+$pageoffset:$total_page;
				}else{
					$start = 1;
					$end = $total_page>$show_page?$show_page:$total_page;
				}	
			}
			for($i=$start;$i<=$end;$i++){
				if($page == $i){
					$html .= '<a onclick="tzpage('.$i.')" class="list_num_page_wyl cur">'.$i.'</a>';
				}else{
					$html .= '<a onclick="tzpage('.$i.')" class="list_num_page_wyl">'.$i.'</a>';
				}
			}
			if($page < $total_page){
				$page2 = $page+1;		
				$html .= '<a class="one_back_list" onclick="tzpage('.$page2.')">下一页</a>';
			}
		}	
		return $html;
	}
		

	//	返回分词字符串
	function fc($sousuo){
		global $db;
		//include(); //载入词库数组
		$sql = "select ciku from `a_ciku` where ciku!=''";
		$db->p_e($sql,array());
		$ciku = $db->fetchAll();
		$arr = array_map('array_shift',$ciku); 	
		$bb='';
		foreach($arr as $v){
			if(strstr($sousuo,$v)){
				$bb.= $v.'|';
			}
		}
		if($bb!=''){
			return trim($bb,'|');
		}else{
			return 'null';
		}
	}	

	
	function cha_ctuan($id){
		global $db;
		$ctuan = array();
		$sql = 'select id,tuan,jiage_max,junjia,dizhi,dianhua,tupian from `fth_c_tuan` where id=?';
		$db->p_e($sql,array($id));
		$tuan = $db->fetchRow();

		$sql = 'select count(*) from `fth_c_tuanyuan` where tid=? and status=1';
		$db->p_e($sql,array($id));
		$ctuan['tuanyuan'] = $db->fetch_count();			//	C团参团人数
		$ctuan['tid'] = $tuan['id'];						//	C团ID
		$ctuan['tuan'] = $tuan['tuan'];						//	C团团名
		$ctuan['sign'] = 1;
		$ctuan['junjia'] = intval($tuan['junjia']);					//	C团均价
		$ctuan['dizhi'] = $tuan['dizhi'];					//	C团地址
		$ctuan['dianhua'] = $tuan['dianhua'];				//	C团电话
		$ctuan['youhui'] = intval($tuan['jiage_max']);

		if($tuan['tupian'] == ''){
			$ctuan['tupian'] = 'http://img.51fth.com/themes/images/img/gft.jpg';
		}else{
			$tupian = explode(',',$tuan['tupian']);
			$ctuan['tupian'] = $tupian[0]; 
		}
		return $ctuan;
	}


	function cha_btuan($id){
		global $db;
		$btuan = array();
		$sql = 'select a.id,a.uid,a.name,b.slbjj,b.pjyhj,b.dizhi,b.sldh from `fth_b_tuan` as a left join `fth_b_loupan` as b on a.uid=b.id where a.id=?';
		$db->p_e($sql,array($id));
		$tuan = $db->fetchRow();
		
		$sql = 'select uid from `fth_b_buy` WHERE loupanid = ? GROUP BY uid';
		$db->p_e($sql,array($tuan['uid']));
		$btuan['tuanyuan'] = count($db->fetchAll());
		
		$sql = 'select img from fth_b_img where uid=? and type=0';
		$db->p_e($sql,array($tuan['uid']));
		$tupian = $db->fetch_count();
		
		$btuan['tid'] = $tuan['id'];					//	B团ID
		$btuan['junjia'] = intval($tuan['pjyhj']);				//	B团均价
		$btuan['dizhi'] = $tuan['dizhi'];				//	B团地址
		$btuan['dianhua'] = $tuan['sldh'];				//	B团电话
		$btuan['tuan'] = $tuan['name'];					//	B团团名
		$btuan['sign'] = 2;
		$btuan['youhui'] = intval($tuan['slbjj']);
		$youhui = intval($tuan['slbjj']);

		if($tupian == ''){
			$btuan['tupian'] = 'http://img.51fth.com/themes/images/img/gft.jpg';
		}else{
			$btuan['tupian'] = $tupian; 
		}
		return $btuan;
	}