<?php
$img_array = glob("图片/*.{gif,jpg,png}",GLOB_BRACE);
$img = array_rand($img_array);
$dz = $img_array[$img];
header("Location:".$dz);
?>