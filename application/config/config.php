<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Configuration for: Project URL
 * Put your URL here, for local development "127.0.0.1" or "localhost" (plus sub-folder) is fine
 */
define('URL', 'http://dev.agencynerd.com/');

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define("DB_NAME", "agencynerd");
define("DB_USER", "agencynerd-app");
define("DB_PASS", "ag3ncyN3rd");

//define('DB_NAME', 'php-mvc');
//define('DB_USER', 'php-mvc');
//define('DB_PASS', 'mvctest');

/*
 * This constant will be used in the login, setup and the registration classes.
 */
define("HASH_COST_FACTOR", "10");

/**
 * LIVE Configuration for: Email server credentials
*/
define("EMAIL_USE_SMTP", true);
define("EMAIL_SMTP_HOST", "ssl://smtp.zoho.com");
define("EMAIL_SMTP_AUTH", true);
define("EMAIL_SMTP_USERNAME", "support@agencynerd.com");
define("EMAIL_SMTP_PASSWORD", "Agencynerd1");
define("EMAIL_SMTP_PORT", 465);
define("EMAIL_SMTP_ENCRYPTION", "ssl");

/**
 * Configuration for: verification email data
 * Set the absolute URL to register.php, necessary for email verification links
 */
define("EMAIL_VERIFICATION_URL", "http://dev.agencynerd.com/login/?register=invite");
define("EMAIL_VERIFICATION_FROM", "support@agencynerd.com");
define("EMAIL_VERIFICATION_FROM_NAME", "Agency Nerd");
define("EMAIL_VERIFICATION_SUBJECT", "Account activation for Agency Nerd");
define("EMAIL_VERIFICATION_CONTENT", "Please click on this link to activate your account:");

/**
 * FILES Configuration for: Control D Upload
*/
define("FILE_UPLOAD_PATH", "/var/www/html/dev.agencynerd.com/files/");

