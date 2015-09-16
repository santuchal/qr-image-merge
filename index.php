<?php

	include('qrlib.php');
    include('config.php');
    $tempDir = 'temp/';
	$name = 'Basuki IT Solutions Pvt. Ltd.';
	$roll = '98';
	$url = 'http://www.basukiitsolutions.com';
	$address = 'Salt Lake Sector V, Kolkata';
    $codeContents = 'Name='.$name.PHP_EOL.' Roll='.$roll.PHP_EOL.'URL='.$url.PHP_EOL.'Address = '.$address;
    QRcode::png($codeContents, $tempDir.'008_6.png', QR_ECLEVEL_L, 2, 6);
    $dest = imagecreatefrompng('temp/a.png');
	$src = imagecreatefrompng('temp/008_6.png');
	imagealphablending($dest, false);
	imagesavealpha($dest, true);
	imagecopymerge($dest, $src, 115, 80, 0, 0, 105, 105, 100);
	header('Content-Type: image/png');
	imagepng($dest);
	imagepng($dest,"temp/ab.png");
	imagedestroy($dest);
	imagedestroy($src);
?>