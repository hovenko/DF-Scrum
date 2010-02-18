<?php


require_once 'DF/Structable.php';

require_once 'DF/Scrum/Domain/Title.php';
require_once 'DF/Scrum/Structable.php';


/**
 * A user story is a system requirement formulated as
 * one or more sentences in the everyday or business language of the user.
 * 
 * @author Knut-Olav Hoven <knutolav@gmail.com>
 */
class DF_Scrum_Domain_UserStory
        implements DF_Structable {
    
    protected $items = NULL;
    
    protected $business_value   = NULL;
    
    protected $story_points     = NULL;
    
    protected $title = NULL;
    
    
    
    /**
     * Constructor.
     * 
     * @param DF_Scrum_Domain_Title $title
     * @return DF_Scrum_Domain_UserStory
     */
    public function __construct($title) {
        if (!$title instanceof DF_Scrum_Domain_Title) {
            throw new DF_Error_InvalidArgumentException("title", $title, "DF_Scrum_Domain_Title");
        }
        
        $this->title = $title;
    }
    
    
    public function asStruct() {
        $struct = array(
            'title'     => DF_Scrum_Structable::getEntityStruct($this->title),
        );
        
        return $struct;
    }
    
    
}