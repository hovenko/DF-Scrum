<?php


require_once 'DF/Structable.php';


/**
 * Business value is used to messure how important a requirement (user story)
 * is for the product owner.
 * 
 * It is normally a value between 1 and 100 or 1 and 1000.
 * 
 * @author Knut-Olav Hoven <knutolav@gmail.com>
 */
class DF_Scrum_Domain_UserStory_BusinessValue
    implements DF_Structable {
    
    
    protected $integer = NULL;
    
    
    public function __construct($integer) {
        if (!is_int($integer)) {
            throw new DF_Error_InvalidArgumentException("integer", $integer, "int");
        }
        
        $this->integer = $integer;
    }
    
    
    public function asStruct() {
        return $this->as_integer();
    }
    
    
    public function as_integer() {
        return $this->integer;
    }
} 