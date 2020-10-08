<?php
// HTTP
define('HTTP_SERVER', 'http://b2alty.com/');

// HTTPS
define('HTTPS_SERVER', 'http://b2alty.com/');

// DIR
define('DIR_APPLICATION', '/home/www/b2alty.com/catalog/');
define('DIR_SYSTEM', '/home/www/b2alty.com/system/');
define('DIR_IMAGE', '/home/www/b2alty.com/image/');
define('DIR_STORAGE', '/home/www/b2alty.com/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'pcasa_grocery');
define('DB_PASSWORD', '123*/456');
define('DB_DATABASE', 'pcasa_grocery');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');