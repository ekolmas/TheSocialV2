<?php
 require_once "config.php";
 require_once "controllers/profileController.php";

//Getting the full url
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://";
} else {
    $url = "http://";
}

//Append the hostname to the url
$url .= $_SERVER['HTTP_HOST'];
//Append the requested resource location to the URL
$url .= $_SERVER['REQUEST_URI'];
$query = parse_url($url, PHP_URL_QUERY);
if (strpos($query, "&i=") !== false) {
    $query = mb_substr(parse_url($url, PHP_URL_QUERY), 0, -4);
} else {
    $query = parse_url($url, PHP_URL_QUERY);
}
//$query is the serial number at the back

redirectToProfile($query);

?>
