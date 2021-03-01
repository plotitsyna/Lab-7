<?php
	session_start();
	$width = 90;
	$height = 40;
	$count = 5;
	$size = 16;
	$font = "C:\Users\Dmitry\Desktop\OpenServer\domains\project\sh.ttf";

	$img = imagecreatetruecolor($width, $height);
	imagefill($img, 0, 0, 0);

	for($i = 0; $i < $count; $i++){
		$color = imagecolorallocatealpha($img, 255,255,255,0);
		$letter = rand(0,9);
		$x = ($i + 1) * 13;
		$y = 28;
		$capcha[] = $letter;
		imagettftext($img, $size, rand(-10, 15), $x, $y , $color, $font, $letter);
	}

	$capcha = implode("",$capcha);

	header("Content-type: image/gif");
	$_SESSION["captcha"] = $capcha;
	imagegif($img);
?>