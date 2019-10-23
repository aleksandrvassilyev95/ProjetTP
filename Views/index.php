<?php

$url = '';
if(isset($_GET['url'])) {
    $url = $_GET['url'];
    
}

if($url == 'bug/liste') {
    require 'list.php';
    
} elseif($url == 'bug/add') {
    require 'add.php';
    
} elseif (preg_match('#bug/show/([0-9]+)#', $url, $params)) {
    $id = $params[1];
    require 'show.php';
    
}  else {
    require '404.php';
}
