<?php
session_start();
require_once('config.php');

$code = "";

for ($i = 0; $i < $characters_lenght; $i++) {
    $code .= chr(rand(97, 122));
}

$_SESSION["captcha"] = $code;

$image =  imagecreatetruecolor($image_width, $image_height);
$font = dirname(__FILE__) . $font_path;

// HEX TO RGB
list($background_r, $background_g, $background_b) = sscanf($background_color, "#%02x%02x%02x");
list($text_r, $text_g, $text_b) = sscanf($text_color, "#%02x%02x%02x");
list($distortion_r, $distortion_g, $distortion_b) = sscanf($distortion_color, "#%02x%02x%02x");

$background = imagecolorallocate($image, $background_r, $background_g, $background_b);
$text = imagecolorallocate($image, $text_r, $text_g, $text_b);
$distortion = imagecolorallocate($image, $distortion_r, $distortion_g, $distortion_b);

imagefilledrectangle($image, 0, 0, $image_width, $image_height, $background);

for ($i = 0; $i < $distortion_lines; $i++) {
    imageline($image, 0, rand() % $image_height, $image_width, rand() % $image_height, $distortion);
}

for ($i = 1; $i < $distortion_dots; $i++) {
    imagesetpixel($image, rand() % $image_width, rand() % $image_height, $distortion);
}

imagettftext($image, $font_size, $rotate, 12, $image_height - 12, $text, $font, $code);

header("Content-type:image/png");
imagepng($image);
imagedestroy($image);
