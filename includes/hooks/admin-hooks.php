<?php 

if( !function_exists( 'saimon_smtp_setup' ) ){
	global $saimon;
	$username = $saimon['saimon-smtp-username'];
	$password = $saimon['saimon-smtp-password'];
	$hostText = $saimon['saimon-smtp-host'];
	$host = ($saimon['saimon-smtp-host-type'] == '1') ? 'smtp.gmail.com' : $hostText;
	$fromemail = ($saimon['saimon-smtp-from'] == '') ? 'admin@domain.com' : $saimon['saimon-smtp-from'];
	$fromname = ($saimon['saimon-smtp-from-name'] == '') ? 'Saimon Theme' : $saimon['saimon-smtp-from-name'];
	$auth = ($saimon['saimon-smtp-authorization'] == '1') ? true : false;
	$security = ($saimon['saimon-smtp-security'] == '1') ? 'ssl' : 'tls';
	$port = ($saimon['saimon-smtp-port'] == '') ? '587' : $saimon['saimon-smtp-port'];

	function saimon_smtp_setup( $phpmailer ) {
	    $phpmailer->isSMTP();                        
	    $phpmailer->Host 		= $host; 
	    $phpmailer->SMTPAuth   	= $auth;
	    $phpmailer->SMTPAutoTLS = false; 
	    $phpmailer->Username   	= $username;
	    $phpmailer->Password   	= $password;
	    $phpmailer->SMTPSecure 	= $security;
	    $phpmailer->Port       	= $port;
	    $phpmailer->setFrom( $fromemail, $fromname );
	}

	add_action( 'phpmailer_init', 'saimon_smtp_setup' );
}
