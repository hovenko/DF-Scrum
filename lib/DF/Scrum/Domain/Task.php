<?php


require_once 'DF/Error/InvalidArgumentException.php';

require_once 'DF/Scrum/Domain/Impediment.php';
require_once 'DF/Scrum/Domain/Item.php';
require_once 'DF/Scrum/Domain/Items.php';


class DF_Scrum_Domain_Task
        extends DF_Scrum_Domain_Item {
            
    protected $impediments = NULL;
    
    
    protected function init_locals() {
        parent::init_locals();
        
        $this->impediments = new DF_Scrum_Domain_Items();
    }
    
    
    public function asStruct() {
        $struct = parent::asStruct();

        $struct['impediments'] = DF_Scrum_Structable::getEntityStruct($this->impediments);
        
        return $struct;
    }
    
    
    public function add_impediment($impediment) {
        if (!$impediment instanceof DF_Scrum_Domain_Impediment) {
            throw new DF_Error_InvalidArgumentException("impediment", $impediment, "DF_Scrum_Domain_Impediment");
        }
        
        $this->impediments->add($impediment);
    }
    
    
    /**
     * @return DF_Scrum_Domain_Items
     */
    public function get_impediments() {
        return $this->impediments;
    }
}