<?php

require_once 'setup_tests_environment.php';

require_once 'DF/Scrum/Domain/Item.php';
require_once 'DF/Scrum/Domain/Product.php';
require_once 'DF/Scrum/Domain/Task.php';
require_once 'DF/Scrum/Domain/Title.php';
require_once 'DF/Scrum/Domain/UserStory.php';


class test_domain_product extends UnitTestCase {

    public function test_domain_product($name = 'Testing domain product') {
        $this->UnitTestCase($name);
    }

    function test_product() {
        $title = new DF_Scrum_Domain_Title("Madcow");
        $product = new DF_Scrum_Domain_Product($title);
        
        $struct = $product->asStruct();
    }
    
    
    function test_userstory() {
        $title = new DF_Scrum_Domain_Title(
            "User shall be able to HTTP POST data in a RESTful way, such as YAML and JSON"
        );
        
        $userstory = new DF_Scrum_Domain_UserStory($title);
    }
    
    
    function test_task() {
        $title = new DF_Scrum_Domain_Title(
            "Add content type detection for the REST controller"
        );
        
        $task = new DF_Scrum_Domain_Task($title);
        
        
    }

    
    function test_impediment() {
        $title = new DF_Scrum_Domain_Title(
            "Add content type detection for the REST controller"
        );
        $task = new DF_Scrum_Domain_Task($title);
        
        $title = new DF_Scrum_Domain_Title(
            "How shall be disassemble XML of type application/xml?"
        );
        $impediment = new DF_Scrum_Domain_Impediment($title);
        
        $task->add_impediment($impediment);
    }
}

if (!defined('TEST_RUNNING')) {
    define('TEST_RUNNING', true);
    $test = new test_domain_product();
    $test->run(new TextReporter());
}

