<?php

class VictorShipping_Shipping_Helper_Data extends
    Mage_Core_Helper_Abstract
{
    const XML_PRICE_VALUE = 'carriers/victorshipping_shipping/price_value';

    /**
     * Get price value
     *
     * @return mixed
     */
    public function getPriceValue()
    {
        return Mage::getStoreConfig(self::XML_PRICE_VALUE);
    }
}