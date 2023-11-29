
<?php

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// 构建模拟图片路径的数据
$images = [];
for ($i = 1; $i <= 124; $i++) {
    $images[$i] = 'https://github.com/SHu0421/cdn-wallpaper/blob/master/' . $i . '.jpg';
}


// $images = [
//     'image1.jpg',
//     'image2.png',
//     'image3.jpg',
//     // Add more image paths as needed
// ];

$randomImage = $images[array_rand($images)];

header('Content-Type: image/jpg'); // Adjust content type based on your image types
readfile($randomImage);
