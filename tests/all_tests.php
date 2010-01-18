<?php
require_once 'setup_tests_environment.php';

define('SIMPLE_RUNNING', true);
$tests = new GroupTest("Running all tests");

$tests->addTestFile('test_domain_product.php');

$success = $tests->run(new TextReporter());

if (!$success) {
    exit(1);
}

exit;
