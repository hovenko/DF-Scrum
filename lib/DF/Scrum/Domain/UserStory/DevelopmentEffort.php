<?php
// TODO NEEDED?

require_once 'DF/Structable.php';


/**
 * Development efforts is a value indicating how much effort it is to
 * implement the user story.
 * 
 * Poker planning is a method often used to find the effort value.
 * 
 * @author Knut-Olav Hoven <knutolav@gmail.com>
 */
class DF_Scrum_Domain_UserStory_DevelopmentEffort
    implements DF_Structable {
    
    protected $integer  = NULL;
    

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