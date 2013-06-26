<?php
$news = $_GET['news'];
$pict = $_GET['picto'];

$file_handle = fopen("news.txt", "w");
fwrite($file_handle, "****".PHP_EOL);
fwrite($file_handle, $news.PHP_EOL);
fwrite($file_handle, "****".PHP_EOL);
fwrite($file_handle, $pict.PHP_EOL);
fclose($file_handle);
print "file created and written to";
?>