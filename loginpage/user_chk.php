<?php
session_start();
require_once("includes/application.php");
require_once("includes/class.ExtLogin.php");
/*
* Getting MAC Address using PHP
* T. Chandra Sekhar
*/
ob_start(); // Turn on output buffering

if(!isset($_SESSION['_SESS_USERID']) || !isset($_SESSION['_SESS_USERNAME']) || !isset($_SESSION['_SESS_USERMAIL']) || !isset($_SESSION['_SESS_USERROLE'])) 
{
	header("Location: index.php?msg=sorry");
	exit();
}
?> 