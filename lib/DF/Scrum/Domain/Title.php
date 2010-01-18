<?php


require_once 'DF/Structable.php';



/**
 * Holds the title (or name) of the Scrum objects.
 * 
 * Validates that the title must be a string.
 * 
 * Immutable.
 * 
 * @author n21759
 */
class DF_Scrum_Domain_Title
        implements DF_Structable {
    
    /**
     * @var string
     */
    protected $title = NULL;
    
    
    
    /**
     * Constructor.
     * 
     * @param string $title
     * @return DF_Scrum_Domain_Title
     */
    public function __construct($title) {
        if (!is_string($title)) {
            throw new DF_Error_InvalidArgumentException("title", $title, "string");
        }
        
        $this->title = $title;
    }
    
    
    /**
     * Returns the stringified title.
     *
     * @return string
     */
    public function asStruct() {
        return $this->as_string();
    }
    
    
    /**
     * Returns the stringified title.
     *
     * @return string
     */
    public function as_string() {
        return $this->string;
    }
    
}
