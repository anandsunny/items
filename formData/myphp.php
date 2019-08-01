<?php

if ( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ) {
	
	$n = $_POST['n'];
	$e = $_POST['e'];
	$m = nl2br($_POST['m']);
	$to = "you@domain.com";
	$from = $e;

	$subject = 'contact Form Message';
	$message = '<b>Name:</b> '.$n.' <br /><b>E-Mail:</b> '.$e.' <p>'.$m.'</p>';
	$header = "From: $from\n";
	$header .= "MIME-Vsersion: 1.0\n";
	$header .= "Content-type: text/html; charset=iso-8859-1\n";
	if ( mail( $to, $subject, $message, $header ) ) {
		echo "success";
	}
	else {
		echo "the server failed to send the message. please try again later.";
	}

}