<?php
/**
 * router.php
 * Router script for the PHP built-in development server.
 * Enables clean URLs (e.g. /blog/does-bariatric-surgery-cure-type-2-diabetes) to work locally.
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Redirect /index or /index.php to root
if ($uri === '/index' || $uri === '/index.php') {
    header("Location: /", true, 301);
    exit;
}

// If the file or directory exists as-is, let the server handle it
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// If it is a clean URL pointing to a PHP file, serve it
if (file_exists(__DIR__ . $uri . '.php')) {
    include __DIR__ . $uri . '.php';
    return true;
}

// Fallback to letting the server handle it (usually 404 or index)
return false;
