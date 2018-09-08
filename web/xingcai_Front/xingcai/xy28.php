<?php
$lastNo=$this->getGameLastNo(80);

$zddata = $this->getGameZdData(80,$lastNo['actionNo']);//获取指定的号码
$opencode =$zddata?$zddata:randKeys();
header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode.'" opentime="'.$lastNo['actionTime'].'"/></xml>';

/* 生成随机数 */
function randKeys($len=3){
	$rand='';
	for($x=0;$x<$len;$x++){
		srand((double)microtime()*1000000);
		$rand.=($rand!=''?',':'').mt_rand(0,9);
	}
	return $rand;
}
?>