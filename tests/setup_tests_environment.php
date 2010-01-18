<?php

$DIR_SCRIPT = dirname(__FILE__);
$DIR_ROOT   = "$DIR_SCRIPT/..";
$DIR_LIB    = "$DIR_ROOT/lib";
set_include_path("$DIR_SCRIPT:".$DIR_LIB.':'.get_include_path());

require_once 'DF/Web/Logger.php';
DF_Web_Logger::setActiveLogger('log4php');

require_once 'simpletest/unit_tester.php';
require_once 'simpletest/reporter.php';

require_once 'DF/Web/Config.php';
require_once 'DF/Web/Environment.php';

$environment = DF_Web_Environment::singleton();
$environment->app_root = "$dir/..";

DF_Web_Config::$basename = "tests";
