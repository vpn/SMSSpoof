<?php
/**
 * init.php
 *
 * Author: Patrick McGranaghan
 *
 * PHP initialization file
 * Inludes:
 * - Loading of:
 *     + Functions
 *     + Librarys/Classes
 * Also sets some key variables for app usage
 *
 */

session_start();

$enableErrors = true;

if ($enableErrors){
    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);
}

date_default_timezone_set('Europe/Dublin');

require 'functions/general.php';
require 'assets/Services/Twilio.php';


?>
