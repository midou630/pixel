<?php
// track.php

// الحصول على معرف المستلم من الرابط
$id = isset($_GET['id']) ? $_GET['id'] : 'unknown';

// سجل البيانات في ملف logs.txt
$log = date("Y-m-d H:i:s") . " - Opened by ID: " . $id . " | IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
file_put_contents("logs.txt", $log, FILE_APPEND);

// إرسال صورة بكسل شفافة 1x1
header("Content-Type: image/png");
$im = imagecreatetruecolor(1, 1);
imagesavealpha($im, true);
$trans = imagecolorallocatealpha($im, 0, 0, 0, 127);
imagefill($im, 0, 0, $trans);
imagepng($im);
imagedestroy($im);
