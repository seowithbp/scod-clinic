<?php
/**
 * router.php
 * Router script for the PHP built-in development server.
 * Enables clean URLs (e.g. /blog/does-bariatric-surgery-cure-type-2-diabetes) and 301 redirects locally.
 */

$requestUri = $_SERVER['REQUEST_URI'];
$uriPath = parse_url($requestUri, PHP_URL_PATH);

// 301 Redirections Map (Supports both with and without trailing slashes)
$redirects = [
    '/blog/rabochie-zerkala-kazino-vavada-dlia-dostupa-k-igram/' => '/blog/',
    '/blog/aplikacja-vavada-dla-graczy-mobilnych-w-2026-roku/' => '/blog/',
    '/blog/is-laparoscopic-hernia-surgery-painful__trashed/' => '/blog/is-laparoscopic-hernia-surgery-painful/',
    '/blog/is-laparoscopic-hernia-surgery-painful/' => '/blog/is-laparoscopic-surgery-safe',
    '/blog/mobilas-spelu-platformas-nakotnes-visaptverosa-analize-un-drosibas-prasibas/' => '/blog/',
    '/category/obesity-and-its-effects/page/4/' => '/blog/',
    '/wp-login.php' => '/',
    '/obesity-and-reflux-disease-heart-burn-2-2/' => '/blog/',
    '/blog/lucky31-casino-retour-sur-les-meilleurs-jackpots-remportes-en-2026/' => '/blog/',
    '/best-bariatric-surgeon/' => '/services/bariatric-surgery',
    '/tag/male-fertility/' => '/blog/',
    '/weight-loss-register/' => '/services/bariatric-surgery',
    '/product/most-advance-surgery-course-i-for-international-students/' => '/international-patients',
    '/unraveling-the-impact-of-sleep-deprivation-on-metabolism/' => '/blog/',
    '/product/basic-general-surgery-course/' => '/surgery-overview',
    '/obesity-and-infertility/' => '/services/bariatric-surgery',
    '/blog/tag/what-is-the-minimum-weight-for-bariatric-surgery/' => '/blog/what-is-the-minimum-weight-for-bariatric-surgery/',
    '/blog/does-bariatric-surgery-lower-blood-pressure/feed/' => '/blog/does-bariatric-surgery-lower-blood-pressure/',
];

// Normalize path: check exact path, path with trailing slash, and path without trailing slash
$pathWithSlash = (substr($uriPath, -1) === '/') ? $uriPath : $uriPath . '/';
$pathWithoutSlash = rtrim($uriPath, '/');

if (isset($_GET['s']) && ($pathWithoutSlash === '/blog' || $uriPath === '/blog/index.php')) {
    header("Location: /blog/", true, 301);
    exit;
}

if (substr($pathWithoutSlash, -5) === '/feed') {
    $targetPath = substr($pathWithoutSlash, 0, -5) . '/';
    header("Location: " . $targetPath, true, 301);
    exit;
}

if (isset($redirects[$uriPath])) {
    header("Location: " . $redirects[$uriPath], true, 301);
    exit;
} elseif (isset($redirects[$pathWithSlash])) {
    header("Location: " . $redirects[$pathWithSlash], true, 301);
    exit;
} elseif ($pathWithoutSlash !== '' && isset($redirects[$pathWithoutSlash])) {
    header("Location: " . $redirects[$pathWithoutSlash], true, 301);
    exit;
}

// Redirect /index or /index.php to root
if ($uriPath === '/index' || $uriPath === '/index.php') {
    header("Location: /", true, 301);
    exit;
}

// If the requested URI is a directory, check for index.php inside it
if (is_dir(__DIR__ . $uriPath) && file_exists(__DIR__ . rtrim($uriPath, '/') . '/index.php')) {
    include __DIR__ . rtrim($uriPath, '/') . '/index.php';
    return true;
}

// If the file exists as a static file (image, css, js, etc.), let PHP dev server serve it
if ($uriPath !== '/' && file_exists(__DIR__ . $uriPath) && !is_dir(__DIR__ . $uriPath)) {
    return false;
}

// Clean URL resolution: check if $uriPath or $pathWithoutSlash points to a .php file
if (file_exists(__DIR__ . $uriPath . '.php')) {
    include __DIR__ . $uriPath . '.php';
    return true;
} elseif ($pathWithoutSlash !== '' && file_exists(__DIR__ . $pathWithoutSlash . '.php')) {
    include __DIR__ . $pathWithoutSlash . '.php';
    return true;
}

// Fallback to letting the server handle it
return false;
