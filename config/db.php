<?php

/**
 * Configuration for: Database Connection
 *
 * For more information about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 *
 * DB_HOST: database host, usually it's "127.0.0.1" or "localhost", some servers also need port info
 * DB_NAME: name of the database. please note: database and database table are not the same thing
 * DB_USER: user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
 * DB_PASS: the password of the above user
 */
define("DB_HOST", "127.0.0.1");
define("DB_PORT", "3300");
define("DB_NAME", "bookmark");
define("DB_USER", "root");
define("DB_PASS", "dnwnxpr3557*");

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT) or die('db connect error');


if($connect->connect_errno){
	echo '[연결실패] : '.$connect->connect_error.''; 
} else {
	//echo '[연결성공]';
}

//2. 문자셋 지정
if(! $connect->set_charset($mysql_charset))// (php >= 5.0.5)
{
	echo '[문자열변경실패] : '.$connect->connect_error;
}

$query = "INSERT INTO user VALUES("
?>