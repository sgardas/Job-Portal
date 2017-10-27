<?php
require_once("class.CommonFunc.php");
require_once("Functions.php");
error_reporting(15);
define("DB_DEBUG", false);
define("DEBUG", false);
$DB_DIE_ON_FAIL = true;

$db_conn_vars = array
 (
	"dbhost" => "localhost",
 	"dbuser" => "root",
 	"dbpass" => "",
 	"dbname" => "jobpoartal"
 );




/*$db_conn_vars = array
 (
	"dbhost" => "localhost",
 	"dbuser" => "sjsoluti_poartal",
 	"dbpass" => "poartal@123",
 	"dbname" => "sjsoluti_jobpoartal"
 );

*/
$db = new CommonFunc();

?>
