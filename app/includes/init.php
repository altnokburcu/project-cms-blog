<?php

/**
 * Initialisations
 *
 * Register an autoloader, start or resume the session etc.
 */

spl_autoload_register(function ($class) {
    require dirname(__DIR__) . "/classes/{$class}.php";
});

session_start();

require dirname(__DIR__) . '/config.php';

function errorHandler($level, $message, $file, $line){
    throw new ErrorException($message,0, $file, $line);
}

function exceptionHandler($exception){
    echo "<h1>An error occured</h1>";
    echo "<p> Uncaught exception:'" . get_class($exception) . "' </p>";
    echo "<p>" .$exception->getMessage() . "'</p";
    echo "<p>Stack trace: <pre>" . $exception->getTraceAsString() . "'</pre></p>";
}

set_error_handler('errorHandler');
set_exception_handler('exceptionHandler');