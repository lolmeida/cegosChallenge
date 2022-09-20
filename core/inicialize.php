<?php
defined('DS') ? null : define('DS',DIRECTORY_SEPARATOR);

//define APP variable
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'Applications'.DS.'MAMP'.DS.'htdocs'.DS.'cegos');
defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'includes');
defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core');

//Load the config file first
require_once(INC_PATH.DS.'config.php');
//require_once(INC_PATH.DS.'tools.php');

//Load the core file
require_once(CORE_PATH.DS.'trackinginfo.php');

