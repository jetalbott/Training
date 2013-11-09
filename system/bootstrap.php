<?php
/**
 * Bootstrap file for defining directory constants and including other required files.
 *
 * @package Divine
 */

define('DS', DIRECTORY_SEPARATOR);
define('DIR_ROOT', dirname(__DIR__));
define('DIR_CLASSES', DIR_ROOT . DS . 'classes');
define('DIR_INTERFACES', DIR_ROOT . DS . 'interfaces');
define('DIR_TESTS', DIR_ROOT . DS . 'tests');
define('NS', '\\'); // Namespace Separator

include 'autoload.php';
include 'config.php';