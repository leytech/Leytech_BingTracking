<?php
/**
 * @package    Leytech_BingTracking
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2019 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

class Leytech_BingTracking_Block_Header extends Mage_Core_Block_Template
{
    protected $_helper;

    public function __construct()
    {
        $this->_helper = Mage::helper('leytech_bingtracking');
        parent::__construct();
    }
}