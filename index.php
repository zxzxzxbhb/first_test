<?php

// $start=1451577600;//��ʼ
// $end=1452182400;//����
// $days=($end-$start)/86400;//����
// var_dump($start);
// var_dump($end);
// var_dump($days);
// for($i=0;$i<$days;$i++){
// $table_name[]=($start+($i*86400));
// }
// var_dump($table_name);

// $start=strtotime("2015-12-27");
// $end=strtotime("2015-12-29");
// $days=($end-$start)/86400;//����
// for($i=0;$i<$days;$i++){
// $table_name[]='client_detail|'.($start+($i*86400));
// }
// var_dump( $table_name);

// $d=date("Y-m-01");
// $lmonth=strtotime("$d -1 month");
// $stopss=strtotime($d);;
// var_dump($lmonth);
// var_dump($stopss);
// $client_d = new ClientDetail ();
// $redisPage = new RedisPages ( $this );
// // ��������
// $order_dir = ($_POST ['order'] [0] ['dir'] == 'asc') ? SORT_ASC : SORT_DESC;
// $redisPage->setOrderBy ( $_POST ['order'] [0] ['column'], $order_dir );
// $gwid=I('post.gwid');
// $start=I('post.start');
// $stop=I('post.stop');
// date_default_timezone_set ( 'PRC' );
// $All [] = $client_d->getDataByGwid ( $gwid, $start, $stop );
// for($i = 0; $i < count ( $All [0] ); $i ++) {
// 	$resu = json_decode ( json_decode ( $All [0] [$i], true ), true );
// 	$data ['date'] = ($start + ($i * (86400)));
// 	$data ['all_count'] = $resu ['api_result'] ['clients_base'] ['result_client_all_count'];
// 	$data ['phone'] =empty($resu ['api_result'] ['clients_authlist'] ['result_authtype_countlist'] ['phone']));
// 	$data ['weixinwifi'] = $resu ['api_result'] ['clients_authlist'] ['result_authtype_countlist'] ['weixinwifi'];
// 	$Alldata [] = $data;
// }

// // ���ó�ʼ���
// $redisPage->setData ( $Alldata );
// // ����ҳ���С
// $redisPage->setPagesize ( I ( 'post.length' ) );
// // ���������ʼλ��
// $redisPage->setStart ( I ( 'post.start' ) );
// // ��ȡ��ҳ���
// $page_data = $redisPage->getPageData ();
// // ���json
//  $page_data ['darw'] = I ( 'post.darw' );
// echo json_encode ( $page_data );

// $tome = strtotime ( date ( "Y-m-d ", '1453198617' ) );var_dump( date ( "Y-m-d ", '1453198617' ));
// echo(date("M-d-Y",mktime(0,0,0,1,1,2039)));
// var_dump( date ( 'Y' ));
// $beginToday = mktime ( 0, 0, 0, date ( 'm' ), date ( 'd' ), date ( 'Y' ) );
// var_dump(date ( "Y-m-d ",$beginToday));
// 
// $data['all_count']=$resu['api_result']['clients_base']['result_client_all_count'];
// $data['true_count']=$resu['api_result']['clients_base']['result_true_count'];



// public function getTotalAuthNum($gwid,$start,$stop){
// 	$data=$this->getDataByGwid($gwid, $start, $stop);
// 	foreach($data as $k=>$v){
// 		$v=json_decode($v,true);
// 		$all_count=json_decode($v,true)['api_result']['clients_base']['result_client_all_count'];
// 		$true_count=json_decode($v,true)['api_result']['clients_base']['result_true_count'];
// 		$totals['all_totals']+=$all_count;
// 		$totals['all_true']+=$true_count;
// 	}
// 	return $totals;
// }
// var_dump(time());
// var_dump(date ( "Y-m-d H:i:s", time () ));


//  ��ȡ�ļ��ĵ�ǰ·�� + �ļ���
//  echo __FILE__;
//  echo '<BR>';
//  // ��ȡ�ļ��ĵ�ǰ·��
//  echo dirname(__FILE__);
//  echo '<BR>';
//  // ��ȡ�ļ�����һ��Ŀ¼·��
//  echo dirname(dirname(__FILE__)); echo '<BR>';
//  echo dirname(dirname(dirname(__FILE__))); echo '<BR>';
//  echo dirname(dirname(dirname(dirname(__FILE__)))); 
 
// for($i=0;$i<50;$i++){
// echo (floor (microtime(true)*10000).rand('1000','9999'))."</br>";
// }

// $cip = gethostbyname($_ENV["COMPUTERNAME"]);
// var_dump($cip);
// $a=gethostbyname($_ENV['COMPUTERNAME']);
// var_dump(gethostbyname($_ENV['COMPUTERNAME']));
// var_dump($_SERVER['SERVER_NAME']);
// var_dump(floor (microtime(true)*10000).rand('1000','9999'));
// var_dump(microtime(true)*10000);
// var_dump(microtime(true));
// var_dump( (microtime(true)*10000).rand('10','99'));


// if ($_SERVER['SERVER_NAME']=="localhost") {//没配置域名改为获取ip地址
// 	$address='http://'.gethostbyname($_ENV['COMPUTERNAME']).'/';
// }else {//获取域名
// 	$address='http://'.$_SERVER['SERVER_NAME'].'/';
// }
// var_dump(gethostbyname($_ENV["COMPUTERNAME"]));
// var_dump($_SERVER['SERVER_NAME']);
// var_dump($address);
// if (isset($_ENV["HOSTNAME"])) 
//      $MachineName = $_ENV["HOSTNAME"]; 
//  else if  (isset($_ENV["COMPUTERNAME"])) 
//      $MachineName = $_ENV["COMPUTERNAME"]; 
//  else $MachineName = ""; 
// echo gethostbyname($MachineName);
// var_dump($_ENV['COMPUTERNAME']);
// echo  floor (microtime(true)*10000).rand('1000','9999');
//  echo strtotime(date("Y-m-d ",time()));
//  echo strtotime (date ( "Y-m-d H:i:s", time () ));
//  echo md5('111111');
//  if (1=="1"){
//  	echo 1;
//  };
//   if(1=='1') {
//  	echo 2;
//  }
?>
