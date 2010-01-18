<?php


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