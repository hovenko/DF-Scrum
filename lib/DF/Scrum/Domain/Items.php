<?php


require_once 'DF/Scrum/Domain/Item.php';


class DF_Scrum_Domain_Items {


    protected $list = array();


    public function __construct() {
        
    }

    
    public function get_list() {
        return $this->list;
    }
    
    
    public function add($item) {
        if (!$item instanceof DF_Scrum_Domain_Item) {
            throw new DF_Error_InvalidArgumentException("item", $item, "DF_Scrum_Domain_Item");
        }
        
        $this->list[$item->get_id()] = $item;
    }
    
    
    public function remove($item) {
        if (!$item instanceof DF_Scrum_Domain_Item) {
            throw new DF_Error_InvalidArgumentException("item", $item, "DF_Scrum_Domain_Item");
        }
        
        unset($this->list[$item->get_id()]);
    }
    
    
    
}
