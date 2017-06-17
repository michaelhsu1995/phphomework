<?php

$datetime = new Datetime("now",new DateTimeZone('Asia/Taipei')); 

$s_date="now";
$e_date="2017-12-31 24:0:0";

echo "台灣時間:"."</br>";

echo $datetime->format("H:i:s")."</br>";
echo $datetime->format("T")."</br>";

echo "幾年幾月幾日:"."</br>";

echo $datetime->format('Y-m-d')."</br>";



$month=$_POST["month"];

if($month=="Jauary"){
	echo "Jauary";
	echo "<br/>";
	echo "<img src=https://www.moedict.tw/%E4%B8%80%E6%9C%88.png>";
}
if($month=="February"){
	echo "February";
	echo "<br/>";
	echo "<img src=http://z9x9.com/wp-content/uploads/2016/12/21/96e5c23b2857449eb64502c0713db785.jpg>";
}
if($month=="March"){
	echo "March";
	echo "<br/>";
	echo "<img src=https://i.ytimg.com/vi/xXKVAkoXWDE/maxresdefault.jpg>";
}
if($month=="April"){
	echo "April";
	echo "<br/>";
	echo "<img src=http://img.mp.itc.cn/upload/20170331/737c6a8f4d93401b8a18df45afd8e901_th.jpeg>";
}
if($month=="May"){
	echo "May";
	echo "<br/>";
	echo "<img src=https://en.pimg.jp/013/632/308/1/13632308.jpg>";
}
if($month=="June"){
	echo "June";
	echo "<br/>";
	echo "<img src=http://cc.tvbs.com.tw/img/talk/coverpeople/images/2015-09/2015090411.jpg>";
}
if($month=="July"){
	echo "July";
	echo "<br/>";
	echo "<img src=http://8.blog.xuite.net/8/0/6/3/15556560/blog_3358658/txt/86946561/5.jpg>";
}
if($month=="August"){
	echo "August";
	echo "<br/>";
	echo "<img src=http://www.qqjpg.com/uploads/allimg/160314/1030003121-3.jpg>";
}
if($month=="September"){
	echo "September";
	echo "<br/>";
	echo "<img src=http://pic.pimg.tw/quai147/1342543915-4116647627.jpg>";
}
if($month=="October"){
	echo "October";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/10_1.jpg>";
}
if($month=="November"){
	echo "November";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/11_1.jpg>";
}
if($month=="December"){
	echo "December";
	echo "<br/>";
	echo "<img src=http://flower.boncity.com/s/img/links/12_1.jpg>";
}


echo "<br/>";

echo "<font color='blue' size='80'>";
echo "世界將在2020年1月1日毀滅，剩下:";
$now=time();

$nowdate=getdate($now);
$end=mktime(0,0,0,1,1,2020);

$enddate=getdate($end);

$dingdong=$enddate["0"]-$nowdate["0"];

$second=($dingdong%60);
$minute=(($dingdong-$second)/60);
$hour=(($minute-$minute%60)/60);
$day=(($hour-$hour%24)/24);
echo $day."日".($hour%24)."時".($minute%60)."分".$second."秒";



































?>
