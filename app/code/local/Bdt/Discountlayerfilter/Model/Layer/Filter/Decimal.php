<?php
class Bdt_Discountlayerfilter_Model_Layer_Filter_Decimal extends Mage_Catalog_Model_Layer_Filter_Decimal
{
    protected $_discountLabel = 'Discount';
    protected $_percentageSymbol = '%';

    protected function _renderItemLabel($range, $value)
    {
        $from   = ($value - 1) * $range ;
        $to     = $value * $range;
        if($this->getName() == $this->_discountLabel):
            return Mage::helper('catalog')->__('%s - %s', $from.$this->_percentageSymbol, $to.$this->_percentageSymbol);
        else:
            return Mage::helper('catalog')->__('%s - %s', $from, $to);
        endif;
    }

}
