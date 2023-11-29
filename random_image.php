
<?php

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// 构建模拟图片路径的数据
$images = [];
for ($i = 0; $i <= 100; $i++) {
    $images[$i] = 'https://github.com/SHu0421/cdn-wallpaper/blob/master/' . ++$i . '.jpg?raw=true';
}

$randomImage = $images[array_rand($images)];


//返回指定格式
$type=$_GET['type'];
switch($type){
//JSON返回
case 'json':
    header('Content-type:text/json');
    die(json_encode(['pic'=>$pic]));
default:
    die(header("Location: $pic"));
}
?>
