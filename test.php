<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
	<?php 
		$string="jiushijiushi";
		var_dump($string);
		$string=12345;
		echo '<br>';
		var_dump($string);
			$data_int1=123;
	 ?>
     <?php 
	 
	 	echo $data_int1;
echo "<br />";
$data_int2=-123;
echo $data_int2;
echo "<br />";
$data_int3=0123;
echo $data_int3;
echo "<br />";
$data_int4=0x123;
echo $data_int4;
echo "<br />";
	 
	 
	 
	 ?>
     
     
     
<?php 


		$num_float1=1.234;
echo $num_float1;
echo "<br />";
$num_float2=1.2e3;
echo $num_float2;
echo "<br />";
$num_float3=7.0E-3;
echo $num_float3;
echo "<br />";

?>

<?php 
$str_string1='甲问："你在哪里学的PHP?"';
$str_string2="乙毫不犹豫地回答：'当然是慕课网咯！'";
$str_string3='甲问：\'能告诉我地址吗？\'';
$str_string4="乙答道：\"www.imooc.com\"";
echo $str_string1;
echo "<br />";
echo $str_string2;
echo "<br />";
echo $str_string3;
echo "<br />";
echo $str_string4;
echo "<br />";
?>



<?php 
$love = "I love you!"; 
$string1="慕课网,$love";
$string2='慕课网,$love';
echo $string1;
echo "<br />";
echo $string2;
?>

<?php 
$string1=<<<GOD
我有一只小毛驴，我从来也不骑。
有一天我心血来潮，骑着去赶集。
我手里拿着小皮鞭，我心里正得意。
不知怎么哗啦啦啦啦，我摔了一身泥.
GOD;

echo $string1;

?>
<!--<?php 
//首先采用“fopen”函数打开文件，得到返回值的就是资源类型。
$file_handle=
fopen("/data/webroot/resource/php/f.txt","r");
if ($file_handle){
    //接着采用while循环（后面语言结构语句中的循环结构会详细介绍）一行行地读取文件，然后输出每行的文字
    while (!feof($file_handle)) { //判断是否到最后一行
        $line = fgets($file_handle); //读取一行文本
        echo $line; //输出一行文本
        echo "<br />"; //换行
    }
}
fclose($file_handle);//关闭文件
?>-->


<?php 
 error_reporting(0); //禁止显示PHP警告提示
 $var;
 var_dump($var);
 $var1=null;
 var_dump($var1);
 $var2=NULL;
 var_dump( $var2);
 $var3 = "节日快乐！";
 unset($var3);
 var_dump($var3);
?>


<?php
$p = "PII";
define("PI",3.14);
define($p,3.14);
echo PI;
echo "<br />";
echo PII;
?>


<?php
define("PI",3.14);
$r=3;
echo "面积为:".(PI*$r*$r)."<br />";
echo "周长为:".(2*PI*$r)."<br />";
?>


<?php
echo __FILE__;
echo "<br />";
echo __LINE__;
echo "<br />";
echo PHP_VERSION;
echo "<br />";
echo PHP_OS;
echo "<br />";
?>


<?php 
$p="";
//定义圆周率的两种取值
define("PI1",3.14);
define("PI2",3.142);
//定义值的精度
$height = "中";
//根据精度返回常量名，将常量变成了一个可变的常量
if($height == "中"){
    $p = "PI1";
}else if($height == "低"){
	$p = "PI2";
}
$r=1;
$area=constant($p)*$r*$r;
echo $area;
?>


<?php 
define("PI1",3.14);
$p = "PI1";
$is1=defined($p);
$is2=defined("PI2");
var_dump($is1);
var_dump($is2);
?>


<?php 
$english = 110; //英语成绩
$math= 118; //数学成绩
$biological = 80; //生物成绩
$physical = 90; //物理成绩
$sum=$english+$math+$biological+$physical; 
$avg=($english+$math+$biological+$physical)/4;
$x=$math-$english;
$x2=$english*$english;

echo "<br />";
echo "总分:".$sum."<br />";
echo "平均分:".$avg."<br />";
echo "数学比英语高的分数:".$x."<br />";
echo "英语成绩的平方:".$x2."<br />";
?>


<?php 
    $a = "我在慕课网学习PHP！";
	$b=$a;
	
	$a = "我天天在慕课网学习PHP！";
	$c=&$a;
	echo $b."<br />";
	echo $c."<br />";
?>


<?php  
    $a = 1;
	$b = "1";
	var_dump($a==$b);
	echo "<br />";
	var_dump($a===$b);
	echo "<br />";
	var_dump($a!=$b);
	echo "<br />";
	var_dump($a<>$b);

	echo "<br />";
		var_dump($a!==$b);
	echo "<br />";
	var_dump($a<$b);
	echo "<br />";
    
	$c = 5;
	
	echo "<br />";
	var_dump($a<$c);
	echo "<br />";
	var_dump($a>$c);
	echo "<br />";
	var_dump($a<=$c);
	echo "<br />";
	var_dump($a>=$c);
	echo "<br />";
?>



<?php 
    $a = 78;//成绩
	$b=$a>=60?"及格":"不及格";
	echo $b;
?>


<?php 
     echo "<br />";
    $a = TRUE; //A同意
	$b = TRUE; //B同意
	$c = FALSE; //C反对
	$d = FALSE; //D反对
	//咱顺便复习下三元运算符
	echo "<br />";
	echo ($a and $b)?"通过":"不通过";
	echo "<br />";
	echo ($a or $c)?"通过":"不通过";
	echo "<br />";
	echo ($a xor $c xor $d)?"通过":"不通过";
	echo "<br />";
	echo !$c?"通过":"不通过";
	echo "<br />";
	echo $a&&$d?"通过":"不通过";
	echo "<br />";
	echo $b||$c||$d?"通过":"不通过";
?>


<?php 
	echo "<br />";
	echo "<br />";
    $a = "张先生";
	$tip=$a."欢迎您在慕课网学习PHP!";
	
    $b = "东边日出西边雨";	
    $b.=",道是无晴却有晴";
    
	$c = "东边日出西边雨";	
    $c=$c.",道是无晴却有晴";
    
	echo  $tip."<br />";
	echo  $b."<br />";
	echo  $c."<br />";
?>

<?php  
echo "<br/>";
 $conn=@mysql_connect("localhost","username","password");
 echo "出错了，错误原因是：".$php_errormsg;
?>

<?php 
     $maxLine = 4; //每排人数
	 $no = 17;//学生编号
    $line=ceil($no/$maxLine);
	$row=$no%$maxLine?$no%$maxLine:$maxLine;
	echo "<br/>";
	echo "<br/>";
	 echo "编号<b>".$no."</b>的座位在第<b>".$line."</b>排第<b>".$row."</b>个位置";
?>


<?php

echo "<br/>";
	echo "<br/>";
    $shoesPrice = 49; //鞋子单价
    $shoesNum = 1; //鞋子数量
    $shoesMoney=$shoesPrice*$shoesNum;

	$shirtPrice = 99; //衬衣单价
	$shirtNum = 2; //衬衣数量
	$orderMoney = $shoesMoney +  $shirtMoney;

	

	echo $orderMoney ;
?>
</body>
</html>