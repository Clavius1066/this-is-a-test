<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<!--
 _________________________________________________________
|                                                         |
|    DESIGN + http://fullahead.org                        |
|      DATE + 2005.05.12                                  |
| COPYRIGHT + free use if this notice is kept in place    |
|_________________________________________________________|

-->

<head>

  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="author" content="Andy Schlei"/>
  <meta name="keywords" content="private" />
  <meta name="verify-v1" content="S+lOz0Igaiocr8Kehp+U7u78sudkVtu0lbNPGahmhxU=" />
  <title>Observatorio de la Ballona</title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
</head>

<body>

<p>
<?php
//	$dir_root = "/home/oballona/mail";
	$dir_root = "/../mail";
	$dir_domain = "obsballona.net";
	$dir_user = "andy.schlei";
	$dir_suffix = "new";
	$maildir = $dir_root . "/". $dir_domain . "/ ". $dir_user . "/". $dir_suffix;
	
	$new_mail = scandir($maildir);
	$new_messages = count($new_mail);
	
	print strval($new_messages);
	$output = $dir_domain . " " . $dir_user . " ," . strval($new_messages) ;
	Print $output;
	

//	$filename = 	"/home/oballona/public_html/index.php";
//	$update_timestamp = filemtime($filename);
 // modify the timestamp to date format
// $update_time = date("j-M-Y g:i:s a T", $update_timestamp);
// print "Page updated: $update_time";
?>
</p>
      

  </body>

</html>
