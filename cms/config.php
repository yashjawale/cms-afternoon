<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Asia/Kolkata" );
define("DB_DSN", "mysql:host=localhost:3308;dbname=cms");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "sairam9423001766");
define("CLASS_PATH", "classes");
define("TEMPLATE_PATH", "templates");
define("HOMEPAGE_NUM_ARTICLES", 5);
define("ADMIN_USERNAME", "admin");
define("ADMIN_PASSWORD", "mypass");
require(CLASS_PATH . "/Article.php");

function handleException($exception) {
    echo "Sorry, a problem occurred. Please try later.";
    error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );

?>