<?
session_name("session");
session_start();

header("Content-type: image/gif");
$image = imagecreate(88, 31);
$background_color = imagecolorallocate ($image, 255, 255, 255);

$col0 = ImageColorAllocate($image,0,0,0);
$col1 = ImageColorAllocate($image,200,200,200);
$col2 = ImageColorAllocate($image,150,150,150);
$col3 = ImageColorAllocate($image,220,220,220);
$col4 = ImageColorAllocate($image,255,255,255);

for ($i=1;$i<=7;$i++){
  ImageLine($image, rand(0, 88), rand(0, 31), rand(0, 88), rand(0, 31), $col0);
  ImageLine($image, rand(0, 88), rand(0, 31), rand(0, 88), rand(0, 31), $col1);
  ImageLine($image, rand(0, 88), rand(0, 31), rand(0, 88), rand(0, 31), $col2);
  ImageLine($image, rand(0, 88), rand(0, 31), rand(0, 88), rand(0, 31), $col3);
  ImageLine($image, rand(0, 88), rand(0, 31), rand(0, 88), rand(0, 31), $col4);
}
for ($i=1;$i<=50;$i++) ImageSetPixel($image, rand(0, 88), rand(0, 31), $col0);

$var_name = (!empty($_GET['vn'])) ?  $_GET['vn'] : 'number';
if (!isset($_SESSION['rnd'][$var_name])) $_SESSION['rnd'][$var_name] = rand(1000, 9999);

imageTtfText($image, 24, 0, rand(0, 24), rand(20, 24), $col0, "corbel.ttf", "".$_SESSION['rnd'][$var_name]."");
ImageGIF($image);
?>