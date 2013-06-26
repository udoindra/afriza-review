<?php
if ($_FILES[file] != "") {
@copy($_FILES[file] [tmp_name], $_FILES[file] [name]) or die("Upload failed!");
} else {
die("Theres no file to upload");
}
?>
