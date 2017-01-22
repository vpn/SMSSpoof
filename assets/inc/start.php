<?php
/**
 * start.php
 *
 * Author: Patrick McGranaghan
 *
 * Starting HTML for web pages. Includes the following:
 * + DOCTYPE
 * + HTML [Start]
 * + HEAD
 *     + META Tags (Charset, viewport)
 *     + Title (Generated from Config)
 *     + Core CSS Files
 * + Body [Start]
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pnotify.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- FontAwesome icons are loaded in the Scripts.php file -->
        
        <title><?php echo $config['title'];?></title>
    </head>
    <body>
        <div class="page-container">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        
        <title><?php echo $config['title'];?></title>
    </head>
    <body>
