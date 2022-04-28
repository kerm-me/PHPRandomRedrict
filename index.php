<?php
$filename = "links.txt";
if(!file_exists($filename)){
    die('文件不存在');
}

$links = [];
$fs = fopen($filename, "r");
while(!feof($fs)){
    $line=trim(fgets($fs));
    if($line!=''){
        array_push($links, $line);
    }
}

//从数组随机获取链接
$link = $links[array_rand($links)];
die(header("Location: $link"));
?>
