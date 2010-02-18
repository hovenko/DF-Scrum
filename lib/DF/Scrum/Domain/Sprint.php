<?php


require_once 'DF/Structable.php';


class DF_Scrum_Domain_Sprint
        implements DF_Structable {
    
    protected $backlog  = NULL;
    
    protected $title    = NULL;
    
    
    
    /**
     * Constructor.
     * 
     * @param DF_Scrum_Domain_Title $title
     * @return DF_Scrum_Domain_Sprint
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