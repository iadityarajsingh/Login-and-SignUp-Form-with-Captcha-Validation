<?php
session_start();

// Generate a random 6-character string
$captcha_text = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
$_SESSION['captcha'] = $captcha_text;

// Create the captcha image
header('Content-type: image/png');
$image = imagecreatetruecolor(120, 40);
$background_color = imagecolorallocate($image, 255, 255, 255); // White background
$text_color = imagecolorallocate($image, 0, 0, 0); // Black text
$font = dirname(__FILE__) . '/font.ttf'; // Path to your TTF font file

imagefilledrectangle($image, 0, 0, 120, 40, $background_color);

// Add the text to the image
imagettftext($image, 20, 0, 10, 30, $text_color, $font, $captcha_text);

// Output the image as PNG
imagepng($image);
imagedestroy($image);
?>
