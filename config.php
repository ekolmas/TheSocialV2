<?php

//Database credentials

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME','thesocial');

$link= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if ($link->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

date_default_timezone_set('Asia/Singapore');

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>