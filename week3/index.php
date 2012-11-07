<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<<<<<<< HEAD
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title>Maya Online Books</title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1038.36">
  <style type="text/css">
    body {background-color: #eeeeee}
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px Arial}
    p.p2 {margin: 0.0px 0.0px 0.0px 48.0px; font: 15.0px Arial}
    p.p3 {margin: 0.0px 0.0px 0.0px 0.0px; font: 16.0px Times; min-height: 19.0px}
    p.p4 {margin: 0.0px 0.0px 0.0px 0.0px; font: 16.0px Times}
    p.p5 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica; min-height: 14.0px}
    span.Apple-tab-span {white-space:pre}
  </style>
</head>
<body>
<p class="p1">&lt;?php</p>
<p class="p2">include("config.php");</p>
<p class="p2">$query = "select * from CS147Books";</p>
<p class="p3"><br></p>
<p class="p2">// Don’t be intimidated by the following lines. You can pretty much</p>
<p class="p2">// always copy and paste these because they’re sort of like</p>
<p class="p2">// functional bits that never change.</p>
<p class="p2">$result = mysql_query($query);</p>
<p class="p2">while ($row = mysql_fetch_assoc($result)) {</p>
<p class="p4"><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span>echo "&lt;p&gt;".$row["title"]."&lt;/p&gt;;</p>
<p class="p2">}</p>
<p class="p1">?&gt;</p>
<p class="p5"><br></p>
</body>
</html>
=======
	<head>
		<title>Maya Online Books</title>
		<link rel="apple-touch-icon" href="appicon.png" />
		<link rel="apple-touch-startup-image" href="startup.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	
		<div class="banner"></div>
		
		<table>
		<?php
		include("config.php");
		$query = "";
		
		// Don’t be intimidated by the following lines. You can pretty much
		// always copy and paste these because they’re sort of like
		// functional bits that never change.
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
			echo "<p>".$row["title"]."</p>";
		}
		?>
		</table>
		
		<script type="text/javascript">
		$("a").click(function (event) {
		    event.preventDefault();
		    window.location = $(this).attr("href");
		});
		</script>
	</body>
</html>
>>>>>>> 2f422484d7577b6a4a4f9cbd0e0d550176ccef8e
