<?php


require_once 'DF/Structable.php';


/**
 * Story points are a value indicating how complicated a user story is
 * to implement.
 * 
 * Poker planning is a method often used to estimate user stories.
 * 
 * Story points are most important when selecting user stories to be
 * a part of the Sprint backlog.
 * 
 * More: http://en.wikipedia.org/wiki/Story_points
 * 
 * @author Knut-Olav Hoven <knutolav@gmail.com>
 */
class DF_Scrum_Domain_UserStory_StoryPoints
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