<?php


class DF_Scrum_Domain_Backlog
        implements DF_Structable {
    

    /**
     * @var DF_Scrum_Domain_Product
     */
    protected $product  = NULL;

    
    /**
     * @var DF_Scrum_Domain_Items
     */
    protected $tasks        = NULL;
    
    
    /**
     * @var DF_Scrum_Domain_Items
     */
    protected $userstories  = NULL;


    
    /**
     * Constructor.
     * 
     * @param DF_Scrum_Domain_Product $product
     * @return DF_Scrum_Domain_Backlog
     */
    public function __construct($product) {
        if (!$product instanceof DF_Scrum_Domain_Product) {
            throw new DF_Error_InvalidArgumentException("product", $product, "DF_Scrum_Domain_Product");
        }
        
        $this->product      = $product;
        
        $this->tasks        = new DF_Scrum_Domain_Items();
        $this->userstories  = new DF_Scrum_Domain_Items();
    }
    

    public function asStruct() {
        $struct = array(
            'product'   => DF_Scrum_Structable::getEntityStruct($this->product),
            'tasks'     => DF_Scrum_Structable::getEntityStruct($this->tasks),
            'userstories'   => DF_Scrum_Structable::getEntityStruct($this->userstories),
        );
        
        return $struct;
    }

    
    /**
     * @return DF_Scrum_Domain_Product
     */
    public function get_product() {
        return $this->product;
    }
    
    
    public function add_task($task) {
        if (!$task instanceof DF_Scrum_Domain_Task) {
            throw new DF_Error_InvalidArgumentException("task", $task, "DF_Scrum_Domain_Task");
        }
        
        $this->tasks->add($task);
    }

    
    public function add_userstory($userstory) {
        if (!$userstory instanceof DF_Scrum_Domain_UserStory) {
            throw new DF_Error_InvalidArgumentException("userstory", $userstory, "DF_Scrum_Domain_UserStory");
        }
        
        $this->userstories->add($userstory);
    }
    
    
    /**
     * @return DF_Scrum_Domain_Items
     */
    public function get_tasks() {
        return $this->tasks;
    }
    
    
    /**
     * @return DF_Scrum_Domain_Items
     */
    public function get_userstories() {
        return $this->userstories;
    }
}
