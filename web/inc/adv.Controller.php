<?php
session_start();
$formurl = "advertise-fun-oldies-radio.php" ;
$errorurl = "advertise-fun-oldies-radio.php?status=error" ;
include_once('inc/cleaner.php');
//--------------------------------
// show initial page to get access
//--------------------------------
if ($_SESSION['access'] != 1){
	require_once('inc/recaptchalib.php');
	$publickey = "6Lc7H9sSAAAAAGzwzOx5dSzPZTBH2DeQioPcGIOJ";
	$displayCaptcha = recaptcha_get_html($publickey);
	$display_block = "
	<p class=\"centered\">To access our advertising information,<br/>please fill out this form.</p>
	<div style=\"width:60%;margin:0 auto;text-align:center;\">
	<form id=\"adinfo-form\" name=\"adinfo-form\" method=\"post\" action=\"$_SERVER[PHP_SELF]?show=mgr\">
		<table cellspacing=\"5\" style=\"margin:15px auto;line-height:1;color:#000;\" class=\"centered\" align=\"center\">
			<tr>
				<td align=\"right\" width=\"125\"><span style=\"font-weight:bold;\">Name:</span></td>
				<td align=\"left\" width=\"275\"><input type=\"text\" id=\"feedme\" name=\"feedme\" class=\"feedme\" size=\"35\" />
				<input type=\"text\" name=\"name\" id=\"name\" size=\"35\" /></td>
			</tr>
			<tr>
				<td align=\"right\" width=\"125\"><span style=\"font-weight:bold;\">Email:</span></td>
				<td align=\"left\" width=\"275\"><input type=\"text\" name=\"email\" id=\"email\" size=\"35\" /></td>
			</tr>
			<tr>
				<td align=\"right\" width=\"125\"><span style=\"font-weight:bold;\">Phone:</span></td>
				<td align=\"left\" width=\"275\"><input type=\"text\" name=\"phone\" id=\"phone\" size=\"35\" /></td>
			</tr>

			<tr>
				<td colspan=\"4\">
					<p style=\"font-weight:bold;margin:10px 0px;\">Comments:</p>
					<textarea name=\"comments\" id=\"comments\" cols=\"40\" rows=\"8\"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan=\"4\" align=\"center\">
				$displayCaptcha
				<input type=\"hidden\" name=\"op\" value=\"send\">
				<label><input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Submit\" /></label></td>
			</tr>
		  </table>
	</form></div>";
	$display_menu = "";
}
//------------------------------
// process form submission
//------------------------------
if($_GET['status'] == 'error'){
	// error in submission
	$display_block = "<p class=\"loud centered\">Sorry. There Is An Error In Your Submission.<br/><a href=\"javascript:history.go(-1)\" style=\"color:black;\">Please try again &raquo;</a></p>";	
} else if($_POST['op'] == "send"){
	// ------------- CONFIGURABLE SECTION ------------------------
	//$mailto = "jeff.basham@kaff.com, steve.hoshor@kaff.com, karen.kinney@kaff.com, clay.mccauslin@kaff.com, patrick@magic991.com, webmaster@funoldiesnow.com" ;
	$mailto = "webmaster@funoldiesnow.com";
	$subject = "FunOldiesNow.com Advertising Form" ;
	$email_is_required = 1;
	$name_is_required = 1;
	$comments_is_required = 0;
	$phone_is_required = 0;
	$uself = 0;
	$use_envsender = 0;
	$use_sendmailfrom = 0;
	$use_utf8 = 1;
	$my_recaptcha_private_key = '6Lc7H9sSAAAAADbDC8VMC2twIgwuzjs9mXfl0RYf' ;
	// -------------------- END OF CONFIGURABLE SECTION ---------------
	$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
	$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;
	if (!isset( $use_envsender )) { $use_envsender = 0 ; }
	if (isset( $use_sendmailfrom ) && $use_sendmailfrom) {
		ini_set( 'sendmail_from', $mailto );
	}
	$envsender = "-f$mailto" ;
	$name = $_POST['name'] ;
	$email = $_POST['email'] ;
	$comments = $_POST['comments'] ;
	$phone = $_POST['phone'] ;
	$http_referrer = getenv( "HTTP_REFERER" );
	
	if (strlen( $my_recaptcha_private_key )) {
		require_once( 'inc/recaptchalib.php' );
		$resp = recaptcha_check_answer ( $my_recaptcha_private_key, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field'] );
		if (!$resp->is_valid) {
			header( "Location: $errorurl" );
			exit ;
		}
	}
	
	$feedme = $_POST['feedme'];
	if ($feedme != ''){
		header("Location: $formurl" );
		exit;
	} else {
		if (($email_is_required && (empty($email) || !preg_match('/@/', $email))) || ($name_is_required && empty($name)) || ($comments_is_required && empty($comments)) || ($phone_is_required && empty($phone)) ) {
			header( "Location: $errorurl" );
			exit ;
		}		
		if (function_exists( 'get_magic_quotes_gpc' ) && get_magic_quotes_gpc()) {
			$comments = stripslashes( $comments );
		}	
		$messageproper =
			"ADVERTISING INFO FOR FUN OLDIES: \n\n" .
			"$http_referrer\n\n" .
			"--------------------------------------------\n\n" .
			"Name of Sender: $name\n\n" .
			"Email of Sender: $email\n\n" .
			"Phone: $phone\n\n" .
			"Comments: \n\n" .
			$comments;
		$headers =
			"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;
		if ($use_envsender) {
			mail($mailto, $subject, $messageproper, $headers, $envsender );
		} else {
			mail($mailto, $subject, $messageproper, $headers );
		}
		//start session
		$_SESSION['access'] = 1;
		header("Location: $formurl");
	}
}
// ---------------------------
// SHOW PAGE AFTER ACCESS ALLOWED
// ---------------------------
if($_SESSION['access'] == 1){
	$showVar = clean($_GET['show'], "string");
	switch($showVar){
		case "mgr" :
			$display_block = file_get_contents('inc/adv.managers.php');
			break;
		case "kaff" :
			$display_block = file_get_contents('inc/adv.kaff.php');
			break;
		case "kmgn" :
			$display_block = file_get_contents('inc/adv.kmgn.php');
			break;
		case "kfsz" :
			$display_block = file_get_contents('inc/adv.kfsz.php');
			break;
		case "kaffam" :
			$display_block = file_get_contents('inc/adv.kaffam.php');
			break;
		case "ktmg" :
			$display_block = file_get_contents('inc/adv.ktmg.php');
			break;
		case "knot" :
			$display_block = file_get_contents('inc/adv.knot.php');
			break;
		case "int" :
			$display_block = file_get_contents('inc/adv.internet-info.php');
			break;
		default : $display_block = file_get_contents('inc/adv.managers.php');
	}
	$display_menu = file_get_contents('inc/adv.menu.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Advertising Information for Fun Oldies Radio</title>
<meta name="description" content="Advertising Information for Fun Oldies Radio"/>
<meta name="keywords" content="advertising, radio, commercials, Prescott"/>
<meta charset="utf-8">
<link rel="shortcut icon" href="/favicon.ico">
<link type="text/css" rel="stylesheet" href="styles.css" />
<link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900|Marcellus' rel='stylesheet' type='text/css'>
<link href="SpryAssets/EmarketMenuBar.css" rel="stylesheet" type="text/css">
<style type="text/css">
	/* iframe bug with recaptcha */
	iframe[src="about:blank"]{display:none;}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient { filter: none; }
  </style>
<![endif]-->
<!--[if lt IE 9]>
	<script src="scripts/html5shiv.js"></script>
<![endif]-->
<?php include_once('inc/google-analytics.php');?>
</head>
<body class="centered " >
    <div id="hdrwrap" class="centered">
        <div id="hdr-left"></div>
        <div id="hdr-right">
            <a href="/"><img src="images/fun-oldies-logo.png" width="228" height="177" alt="Fun Oldies - Prescott Radio" style="margin-top:10px;"></a>
        </div>
    </div>
    <div id="menu" class="centered">
		<?php include_once('menu.php');?>
    </div>
    <div id="wrapper" class="centered innershadow">
    	<div id="content-left">
        	<p class="cinzel brown" style="font-size:24px;font-weight:700;margin-top:10px;">
            	Advertising Information
            </p>
            <br/>
        	<div style="float:left;width:92px;margin-left:2px;">
				<?php echo $display_menu;?>
            </div>
            <div style="float:right;width:560px;margin-right:20px;">
				<?php echo $display_block;?>
            </div>
            <br class="clear"/>
        </div>
        <div id="content-right">
        	<a href="javascript:void(window.open('http://www.funoldiesnow.com/stream-player.php', '', 'width=820,height=458'));" class="centered">
				<img src="images/listen-live.png" width="300" height="56" alt="Listen Live to Fun Oldies - Prescott Radio" style="margin-top:5px;" />
            </a>
            <?php include_once ('inc/music-center.php');?>
        </div>
        <br class="clear" />
    </div>
    <div id="footer" class="centered">
	    <?php include_once('footer.php');?>
    </div>
    <br class="clear"/>
<script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="scripts/common.js"></script>
</body>
</html>
