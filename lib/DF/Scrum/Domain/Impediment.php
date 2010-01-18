<?php


require_once 'DF/Error/InvalidArgumentException.php';


class DF_Scrum_Domain_Impediment
        extends DF_Scrum_Domain_Item
        implements DF_Structable {
    
    
    public function asStruct() {
        $struct = parent::asStruct();
        
        return $struct;
    }
    
    
}