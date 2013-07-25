<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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
<li><a href="intervue.php">The Interview</a></li>
<li><a href="puisi.php">The Poems</a></li>
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

<div id="main-content" align="justify">
<table style="background: #ffffff url('images/blocknote.gif') repeat-y;">
<td width="20%">
&nbsp;
</td>
<td width="80%">
<?php
$FP = fopen('prelude.txt','r');
echo "<h3>".fgets($FP)."</h3>";
while(!feof($FP)) 
{
echo "<p>".fgets($FP)."</p>"; 
}
fclose($FP);
?>
</td>
</table>
<hr/>
<div style="border:1px #000000 solid;padding:3px;background-color:#FFFFFF;width:350px">
	<a href="http://www.thefreedictionary.com/_/WoD/png-click.aspx?t=quote" target="_top">
	<img border="0" src="http://www.thefreedictionary.com/_/!quote!350!1.png" width="350" /></a>
</div>
<br/>

<!-------Do not change below this line------->
<div align="right">
<table>
<td>
<h2>...imagine the possibilities of what your words can reach. So, reach out...</h2>
</td>
<td>
<iframe align="center" src="http://www.calendarlabs.com/calendars/web-content/calendar.php?cid=1002&uid=571667053&c=22&l=en&cbg=FFFFFF&cfg=009900&hfg=009900&hfg1=009900&ct=60&cb=0&cbc=009900&cf=verdana&cp=bottom&sw=1&hp=t&ib=1&ibc=5C0201&i=images/green-apple.jpg" width="183" height="373" marginwidth=0 marginheight=0 frameborder=no scrolling=no allowtransparency='true'>Loading...</iframe>
</td>
</table>
</div>
<!-------Do not change above this line-------> 

<p>&nbsp;</p>
 <div align='center'><a href='http://www.hit-counts.com'><img src='http://www.hit-counts.com/counter.php?t=MTI1NTM1MQ==' border='0' alt='Visitor Counter'></a><BR><a href='http://www.hit-counts.com'>Visitor Counter</a></div> 
 
</div>

<ul id="navigation">
<li class="current">Home </li>
<li><a href="/forum/">The Forum</a></li>
</ul>

<div id="navigatwo">
<p>&nbsp;</p>
<h3><u>UPDATES</u></h3>
<script type="text/javascript" src="http://app.feed.informer.com/digest3/N2HBQEWUAK.js"></script>
<noscript><a href="http://app.feed.informer.com/digest3/N2HBQEWUAK.html">Click for &quot;the AfRev Digest&quot;.</a>
Powered by <a href="http://feed.informer.com/">RSS Feed Informer</a></noscript>

</div>

<div id="tagline">
<p>the <br/>
AFRIZA REVIEW</p>
</div>

<p id="copyright">© 2013: The Afriza Review</p>
</body>
</html>
