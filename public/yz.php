<?php
$str = '1234567890123456789012345678901234567890d';
$str = str_shuffle($str);
$str = substr($str, 0, 4);
$img = imagecreatetruecolor(60, 28);
for($i = 0; $i < 3; $i++){
	imagesetpixel($img, rand(0, 60), rand(0, 24), imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)));
}
for($i = 0; $i < 2; $i++){
	imageline($img, rand(0, 60), rand(0, 24), rand(0, 60), rand(0, 24), imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)));
}
$white = imagecolorallocate($img, 250,250, 250);
imagefill($img, 0, 0, $white);
imagettftext($img, 12, 0, rand(0,5), rand(12,20), imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)), 'msyh.ttf', $yz[0]);
imagettftext($img, 12, 0, rand(17,22), rand(12,20), imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)), 'msyh.ttf', $yz[1]);
imagettftext($img, 12, 0, rand(34,39), rand(12,20), imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)), 'msyh.ttf', $yz[2]);
imagettftext($img, 12, 0, 50, rand(12,20), imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)), 'msyh.ttf', $yz[3]);
header('content-type: image/jpeg');
imagejpeg($img);
imagedestroy($img);