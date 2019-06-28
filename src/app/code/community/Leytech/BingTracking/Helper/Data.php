<?php
/**
 * @package    Leytech_BingTracking
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2019 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

class Leytech_BingTracking_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_IS_ENABLED = 'leytech_bingtracking/settings/enabled';
    const XML_PATH_UET_TAG = 'leytech_bingtracking/settings/uet_tag';

    public function isEnabled() {
        return (bool) Mage::getStoreConfig(self::XML_PATH_IS_ENABLED);
    }

    public function getUetTag() {
        return Mage::getStoreConfig(self::XML_PATH_UET_TAG);
    }
}