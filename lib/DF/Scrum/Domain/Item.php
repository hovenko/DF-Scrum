<?php


require_once 'DF/Error/InvalidArgumentException.php';
require_once 'DF/Structable.php';

require_once 'DF/Scrum/Domain/Title.php';


class DF_Scrum_Domain_Item
        implements DF_Structable {
    
    protected $title = NULL;
    
    
    /**
     * Constructor.
     * 
     * @param DF_Scrum_Domain_Title $title
     * @return DF_Scrum_Domain_Item
     */
    public function __construct($title) {
        if (!$title instanceof DF_Scrum_Domain_Title) {
            throw new DF_Error_InvalidArgumentException("title", $title, "DF_Scrum_Domain_Title");
        }
        
        $this->title = $title;
        
        $this->init_locals();
    }
    
    
    /**
     * Initializes local variables.
     * 
     * Override in subclasses to init other local values.
     * Remember to call on parent init_locals()
     */
    protected function init_locals() {
        // nothing
    }
    
    
    public function asStruct() {
        $struct = array(
            'title' => DF_Scrum_Structable::getEntityStruct($this->title),
        );
        
        return $struct;
    }
    
    
    public function as_string() {
        return $this->string;
    }
}
