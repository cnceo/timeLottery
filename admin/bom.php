<?php
header('content-Type: text/html; charset=utf-8');
$auto=1;/*����Ϊ1��ʾ���BOM��ȥ��������Ϊ0��ʾֻ����BOM��⣬��ȥ��*/
$basedir='.';
$loop=true;//www.111cn.net echo '��ǰ���ҵ�Ŀ¼Ϊ��'.$basedir.'��ǰ�������ǣ�';
echo '��1��',$loop?'��鵱ǰĿ¼�Լ���ǰĿ¼����Ŀ¼':'ֻ��Ե�ǰĿ¼���м��';
echo '��2��',$auto?'����ļ�BOMͬʱȥ����⵽BOM�ļ���BOM<br />':'ֻ����ļ�BOM��ִ��ȥ��BOM����<br />';

checkdir($basedir,$loop);
function checkdir($basedir='',$loop=true){
 $basedir=empty($basedir)?'.':$basedir;
 if($dh=opendir($basedir)){
  while (($file=readdir($dh))!==false){
   if($file!='.'&&$file!='..'){
    if(!is_dir($basedir.'/'.$file)){
     echo '�ļ�: '.$basedir.'/'.$file .checkBOM($basedir.'/'.$file).' <br>';
    }else{
     if(!$loop) continue;
     $dirname=$basedir.'/'.$file;
     checkdir($dirname);
    }
   }
  }
  closedir($dh);
 }
}
function checkBOM($filename){
 global $auto;
 $contents=file_get_contents($filename);
 $charset[1]=substr($contents,0,1);
 $charset[2]=substr($contents,1,1);
 $charset[3]=substr($contents,2,1);
 if(ord($charset[1])==239&&ord($charset[2])==187&&ord($charset[3])==191){
  if($auto==1){
   $rest=substr($contents,3);
   rewrite($filename,$rest);
   return (' <font color=red>�ҵ�BOM�����Զ�ȥ��</font>');
  }else{
   return (' <font color=red>�ҵ�BOM</font>');
  }
 }else{
  return (' û���ҵ�BOM');
 }
}
function rewrite($filename,$data){
 $filenum=fopen($filename,'w');
 flock($filenum,LOCK_EX);
 fwrite($filenum,$data);
 fclose($filenum);
}