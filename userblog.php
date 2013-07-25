<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>the Afriza Review</title>
<link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>

<body>
<div id="masthead"></div>
<div id="edition">
<a href="index.php">Home</a> | Readers' Blog</div>

<div id="contains">
<div>
<?php
$FP = fopen('userblog.txt','r');
echo "<h2>".fgets($FP)."</h2>";
while(!feof($FP)) 
{
echo "<p>".fgets($FP)."</p>"; 
}
fclose($FP);
?>
</div>

<div id="clicky">
<a href="http://www.indrafriza.p.ht">Back Home</a>
</div>
</div>

<p id="copyright">© 2013: The Afriza Review &nbsp;</p>

</body>
</html>
