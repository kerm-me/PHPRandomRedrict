<?php
// https://qqvps.com/d/804
/* 必须修改links.txt才可使用，例如，按照默认links.txt，访问yourdomain?origin=virmach，会随机跳转virmach官网和google中一个。 */
$fs = fopen("links.txt","r");

$lastorigin = '';
$diction = array();

while(!feof($fs)){
    $line=trim(fgets($fs));
    if($line!=''){
      // https://www.php.cn/php-weizijiaocheng-327042.html
      if(substr($line,0,1)=='#'){
        $lastorigin = substr($line,1);
        $diction[$lastorigin]=[];
      }
      else{
        array_push($diction[$lastorigin], $line);
      }
    }
}

// https://www.w3school.com.cn/php/php_get.asp
$origin = $_GET['origin'];

$all = $diction[$origin];

// https://blog.csdn.net/haibo0668/article/details/91976123
$url=$all[array_rand($all,1)];

// 注意这里要用双引号
// header用于跳转：https://www.php.cn/php-weizijiaocheng-394656.html
header("Location:$url");


?>

