<?php
session_start();


$userPath = realpath('folder'.DIRECTORY_SEPARATOR. $_SESSION['isLogged']);

	
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $pageTitle;?></title>

        <meta charset="UTF-8">       
    </head>
    <body>