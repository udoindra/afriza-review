﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>the Afriza Review</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

<div id="branding">
<h1><img src="images/logoafrev.gif" width="211" height="216" alt="The Afriza Review" />
</h1>

<div id="navigatop">
<ul>
<li><a href="revue.php">The Review</a></li>
<li><a href="puisi.php">The Poems</a></li>
<li><a href="/forum/">The Forum</a></li>
<li><a href="about.html">Archives</a></li>
<li><a href="contact.html">Contact Us</a></li>
<li><a href="news.php">AR Blog</a></li>
</ul>
</div>

<p id="address">
To READ<br />
and SHARE<br />
the JOY...<br />
</p>
</div>

<div id="main-content">
<?php
$FP = fopen('intervue.txt','r');
echo "<h3>".fgets($FP)."</h3>";
while(!feof($FP)) 
{
echo "<p>".fgets($FP)."</p>"; 
}
fclose($FP);
?>

<object height="50" width="100" data="media/arikpin_remembrance.mp3"></object>
<p><i>If your browser support playing mp3 sound you will hear one of our favorite Ari KPiN poetry musicalization that is based from the Indonesian poetry lyrics "Kenang-Kenangan" that was written by Cecep Syamsul Hari. Translated in English by Harry Aveling & Dr. Dewi Candraningrum.</i>
</p> 
</div>

<ul id="navigation">
<li><a href="index.php">Home</a></li>
<li class="current">Interview</li>
</ul>

<div id="navigatwo">
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
$FP = fopen('interside.txt','r');
while(!feof($FP)) 
{
echo fgets($FP)."<br/>"; 
}
fclose($FP);
?>
</div> 

<div id="tagline">
<p>the <br/>
AFRIZA REVIEW</p>
</div>

<p id="copyright">© 2013: The Afriza Review</p>
</body>
</html>
