<?php


class DF_Scrum_Domain_Product_Backlog {
    

    protected $product  = NULL;


    protected $items    = NULL;


    public function __construct($product, $items) {
        if (!$product instanceof DF_Scrum_Domain_Product) {
            throw new DF_Error_InvalidArgumentException("product", $product, "DF_Scrum_Domain_Product");
        }

        if (!$items instanceof DF_Scrum_Domain_Items) {
            throw new DF_Error_InvalidArgumentException("items", $items, "DF_Scrum_Domain_Items");
        }

        $this->product  = $product;
        $this->items    = $items;
    }


}
