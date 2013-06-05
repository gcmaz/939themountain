<?php
// redirect
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: http://player.tritondigital.com/8061");
   header("Connection: close");
   exit();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>The New 93.9 The Mountain - Live Radio Stream - Northern Arizona Rock</title>
<link rel="apple-touch-icon" href="/images/favicon.png">
<link rel="icon" href="/images/favicon.png">
<!--[if IE]><link rel="shortcut icon" href="images/favicon.ico"><![endif]-->
<!-- or, set /favicon.ico for IE10 win -->
<meta name="msapplication-TileColor" content="#151515">
<meta name="msapplication-TileImage" content="images/favicon.ico">
<style type="text/css">
body {
background-color: FFFFFF;
margin: 0;
}
#flashPlayer
{
position:absolute;
left:0px;
top:0px;
width:742px;
height:388px;
display:block;
z-index: 1;
overflow:hidden;
}
#adExternal_bigbox
{
position:absolute;
/*left:435px;
 top:135px;*/
left:437px;
top:111px;
width:300px;
height:250px;
background-color:#000000;
display:block;
z-index: 1000;
overflow:hidden;
}
#adExternal_leaderboard
{
position:absolute;
left:7px;
top:20px;
width:728px;
height:90px;
background-color:#000000;
display:block;
z-index: 1000;
overflow:hidden;
}
</style>
</head>
<body>
<script src="http://player.streamtheworld.com/_core/adexternal.php?type=bigbox" type="text/javascript" language="javascript"></script>
<script src="http://player.streamtheworld.com/_core/adexternal.php?type=leaderboard" type="text/javascript" language="javascript"></script>
<div id="flashPlayer">
<script src="http://player.streamtheworld.com/liveplayer.php?template=js&callsign=KMGNFM&bgcolor=FFFFFF&wmode=transparent" type="text/javascript" language="javascript"></script>
</div>
<!-- ?php include_once('google-analytics.php');?-->
</body>
</html>
