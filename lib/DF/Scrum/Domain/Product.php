<?php


require_once 'DF/Structable.php';

require_once 'DF/Scrum/Domain/Title.php';
require_once 'DF/Scrum/Structable.php';


/**
 * Represents the product that the team is developing.
 * 
 * Validates that the product has a title.
 * 
 * The product has a backlog of requirements, user stories and tasks.
 * 
 * @author Knut-Olav Hoven <knutolav@gmail.com>
 */
class DF_Scrum_Domain_Product
        implements DF_Structable {
    
    
    protected $title    = NULL;
    
    /**
     * @var DF_Scrum_Domain_Product_Backlog
     */
    protected $backlog  = NULL;
    
    
    public function __construct($title) {
        if (!$title instanceof DF_Scrum_Domain_Title) {
            throw new DF_Error_InvalidArgumentException("title", $title, "DF_Scrum_Domain_Title");
        }
        
        $this->title = $title;
    }
    
    
    public function asStruct() {
        $struct = array(
            'title'     => DF_Scrum_Structable::getEntityStruct($this->title),
            'backlog'   => DF_Scrum_Structable::getEntityStruct($this->backlog),
        );
        
        return $struct;
    }
    
    
    public function get_title() {
        return $this->title;
    }
    
    
    /**
     * @param DF_Scrum_Domain_Product_Backlog $backlog
     */
    public function set_backlog($backlog) {
        $this->backlog = $backlog;
    }
    
    
    /**
     * @return DF_Scrum_Domain_Product_Backlog
     */
    public function get_backlog() {
        return $this->backlog;
    }
    
}
