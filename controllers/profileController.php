<?php
//DIr is the current directoru that the file is on right now
require_once __DIR__."/../config.php";

//handle submissions and requests
if(isset($_GET["function"])){
    $function = $_GET["function"];
    switch($function){

    }
}

function redirectToProfile($serialNo){
    global $link;

    header("location:./views/profile.php?".$serialNo);
}
?>