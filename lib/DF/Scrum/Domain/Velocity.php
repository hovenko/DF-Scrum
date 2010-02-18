<?php


/**
 * Velocity is a valuable agile metric that allows teams
 * to gauge how much work they can accomplish in a single cadence.
 * 
 * Team velocity=actual work completed/days to complete.
 * 
 * @author Knut-Olav Hoven <knutolav@gmail.com>
 */
class DF_Scrum_Domain_Velocity {
    protected $work     = NULL;
    protected $days     = NULL;
    
    
    
    public function __construct($work, $days) {
        
        
    }
    
    
    public function getVelocityValue() {
        
        return $work / $days;
    }
}