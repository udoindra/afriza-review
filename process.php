<?php
$news = $_POST["myTextarea"];

$file_handle = fopen("userblog.txt", "w");
fwrite($file_handle, $news);
fclose($file_handle);
print "file created and written to AfRev Server";
echo "<br/>You can see your blog <a href='userblog.php'>here</a>"
?>