<?php
error_reporting(0);
include('../config/config.php');
include('online_status.php');
include('minecraftquery.php');
$port = MQ_SERVER_PORT;
$server = MQ_SERVER_ADDR;

// Create the image---------------------------------------------------------------------------------
$x=250;
$y=20;
//$width = 615;
//$height = 100;
//$im = imagecreate($width, $height);
//$im = imagecreatetruecolor($width, $height);
$im = imagecreatefrompng("../images/header/background.png");
list($width, $height, $type, $attr) = getimagesize("../images/header/background.png");
$font_size = 15;
$angle=0;
$font_width = imagefontwidth($font_size);
$font_height = imagefontheight($font_size);
// Create some colors-------------------------------------------------------------------------------
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);

// Make the background transparent
//imagefilledrectangle($im, 0, 0, 615, 100, $transparent);
imagecolortransparent($im, $white);

$text = WS_OPTICAL_TITLE;


$font = '../css/minecraft.ttf';

//Text Width----------------------------------------------------------------------------------------
$text_width = $font_width * strlen($text);
$position_center = ceil(($width - $text_width) / 2);

//Text Height---------------------------------------------------------------------------------------
$text_height = $font_height;
$position_middle = ceil(($height - $text_height) / 2);

//$image_string = imagestring($im, $font_size, $position_center, $position_middle, $text, $black);

// Add the text-------------------------------------------------------------------------------------
//imagettftext($im, $font_size, $angle, $x, $y, $black, $font, $text);
imagettftext($im, $font_size, $angle, $position_center, $y, $black, $font, $text);
imagettftext($im, 11, 0, 540, 80, $black, $font, $pingtext);

$minecraftServer = pingMineServ($server, $port);
if($minecraftServer !==-1){
if (!extension_loaded('sockets')) {
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		dl('php_extention/php_sockets.dll');
	} else {
		dl('php_extention/php_sockets.so');
    }
  $notloaded='The sockets extension is not loaded.';
  $howtofix='uncomment ";extension=php_sockets.dll" in your .ini file';
  imagettftext($im, 11, 0, $position_center, $position_middle, $black, $font, $notloaded);
  imagettftext($im, 11, 0, 0, 80, $black, $font, $howtofix);
}
else{
	$minecraftQuery = QueryMinecraft($server, $port);
	$textmotd= $minecraftQuery[HostName];
	$textonline= 'Player(s) Online: '.$minecraftQuery[Players].'/'.$minecraftQuery[MaxPlayers];
	imagettftext($im, 11, 0, $position_center, $position_middle, $black, $font, $textmotd);
	imagettftext($im, 11, 0, 0, 80, $black, $font, $textonline);
}

if($ping==5){
$src=imagecreatefrompng("../images/serverstatus/bar5.png");
imagecolortransparent($src, $white);
imagealphablending($src, false);
imagesavealpha($src, true);
imagecopymerge($im, $src, 550, 50, 0, 0, 20, 14, 100);
}
elseif($ping==4){
$src=imagecreatefrompng("../images/serverstatus/bar4.png");
imagecolortransparent($src, $white);
imagealphablending($src, false);
imagesavealpha($src, true);
imagecopymerge($im, $src, 550, 50, 0, 0, 20, 14, 100);
}
elseif($ping==3){
$src=imagecreatefrompng("../images/serverstatus/bar3.png");
imagecolortransparent($src, $white);
imagealphablending($src, false);
imagesavealpha($src, true);
imagecopymerge($im, $src, 550, 50, 0, 0, 20, 14, 100);
}
elseif($ping==2){
$src=imagecreatefrompng("../images/serverstatus/bar2.png");
imagecolortransparent($src, $white);
imagealphablending($src, false);
imagesavealpha($src, true);
imagecopymerge($im, $src, 550, 50, 0, 0, 20, 14, 100);
}
elseif($ping==1){
$src=imagecreatefrompng("../images/serverstatus/bar1.png");
imagecolortransparent($src, $white);
imagealphablending($src, false);
imagesavealpha($src, true);
imagecopymerge($im, $src, 550, 50, 0, 0, 20, 14, 100);
}
else{
$src=imagecreatefrompng("../images/serverstatus/bar0.png");
imagecolortransparent($src, $white);
imagealphablending($src, false);
imagesavealpha($src, true);
imagecopymerge($im, $src, 550, 50, 0, 0, 20, 14, 100);
}
}
else{
$src=imagecreatefrompng("../images/serverstatus/bar0.png");
imagecolortransparent($src, $white);
imagealphablending($src, false);
imagesavealpha($src, true);
imagecopymerge($im, $src, 550, 50, 0, 0, 20, 14, 100);
}
header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);
imagedestroy($src);
?>