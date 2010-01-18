<?php


class DF_Scrum_Structable {
    
    
    /**
     * If the entity is a structable object,
     * we extract and return the data structure.
     * 
     * If the entity does not exist, NULL is returned.
     * 
     * @param DF_Structable $entity (supports also an array of structable objects)
     * @return array
     */
    public static function getEntityStruct($entity) {
        if ($entity instanceof DF_Structable) {
            return $entity->asStruct();
        }
        elseif (is_array($entity)) {
            $structList = array();
            foreach ($entity as $e) {
                $struct = self::getEntityStruct($e);
                if ($struct) {
                    // structs might be NULL
                    $structList[] = $struct;
                }
            }
            return $structList;
        }
        elseif (NULL == $entity) {
            return NULL;
        }
        else {
            throw new DF_Error_InvalidArgumentException("entity", $entity, "array|DF_Structable");
        }
    }
    
}