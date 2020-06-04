<?php
    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    switch($uriSegments[1]) {
        case '':
            require('html/index.php');
            break;
            
        case 'doubts':
            require('html/doubts.php');
            break;

        default:
            require('html/index.php');
            break;

    }
?>