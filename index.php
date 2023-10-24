<?php
/**
 * The .htaccess file is set up to use this file
 * if it cannot reach any other files from the given URL.
 * That way, files in the folder "public" are still available.
 * Files in the "app" folder cannot be reached because there is
 * a separate .htaccess file in it that restricts all access.
 * This is bypassed via this file, which calls the app/init file
 * in the otherwise acces-restricted app folder.
 * 
 * It also maintains sessions and initializes the app by creating a new router.
 * 
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() == PHP_SESSION_NONE ) {
	session_start();
}

require_once 'app/init.php';

$router = new Router();