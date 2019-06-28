<?php
/**
 * @package    Leytech_BingTracking
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2019 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

class Leytech_BingTracking_Block_Success extends Mage_Checkout_Block_Onepage_Success
{
    protected $_helper;

    public function __construct()
    {
        $this->_helper = Mage::helper('leytech_bingtracking');
        parent::__construct();
    }

    /**
     * Initialize data and prepare it for output
     */
    protected function _beforeToHtml()
    {
        $this->_prepareBingTrackingConversionData();
        return parent::_beforeToHtml();
    }

    /**
     * Get last order ID from session, fetch it and get the order amount and currency code
     */
    protected function _prepareBingTrackingConversionData()
    {
        $orderId = Mage::getSingleton('checkout/session')->getLastOrderId();
        if ($orderId) {
            $order = Mage::getModel('sales/order')->load($orderId);
            if ($order->getId()) {
                $this->addData(array(
                    'bing_tracking_amount' => number_format($order->getBaseGrandTotal(), 2, '.', ''),
                    'bing_currency_code' => $order->getOrderCurrencyCode(),
                ));
            }
        }
    }
}