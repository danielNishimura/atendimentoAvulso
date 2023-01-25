<?php

$image = imagecreatefromjpeg("ASO.jpeg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "empresa Teste", $titleColor);
imagestring($image, 5, 440, 350, "Daniel Nishimura", $titleColor);
imagestring($image, 5, 440, 370, "cargo de teste", $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);
imagedestroy($image);



    //$new_width = 768;
    //$new_height = 768;
    
    //list($old_width, $old_height) = getimagesize($file);
    
    //$new_image = imagecreatetruecolor($new_width, $new_height);
    //$old_image = imagecreatefromjpeg($file);
    
    //imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
    
    //imagejpeg($new_image);
    //imagedestroy($old_image);
    //imagedestroy($new_image);
    
?>        