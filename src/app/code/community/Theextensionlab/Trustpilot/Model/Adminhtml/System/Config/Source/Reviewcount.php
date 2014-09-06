<?php
/**
 * The Extension Lab
 *
 * @category    Theextensionlab
 * @package     Theextensionlab_Trustpilot
 * @copyright   Copyright (c) 2014 The Extension Lab (http://www.theextensionlab.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author      James Anelay <jamesanelay@theextensionlab.com>
 */

/**
 * Used in creating options for Yes|No config value selection
 *
 */
class Theextensionlab_Trustpilot_Model_Adminhtml_System_Config_Source_Reviewcount
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('1')),
            array('value' => 2, 'label'=>Mage::helper('adminhtml')->__('2')),
            array('value' => 3, 'label'=>Mage::helper('adminhtml')->__('3')),
            array('value' => 4, 'label'=>Mage::helper('adminhtml')->__('4')),
            array('value' => 5, 'label'=>Mage::helper('adminhtml')->__('5')),
            array('value' => 6, 'label'=>Mage::helper('adminhtml')->__('6')),
            array('value' => 7, 'label'=>Mage::helper('adminhtml')->__('7')),
            array('value' => 8, 'label'=>Mage::helper('adminhtml')->__('8')),
            array('value' => 9, 'label'=>Mage::helper('adminhtml')->__('9')),
            array('value' => 10, 'label'=>Mage::helper('adminhtml')->__('10'))
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            1 => Mage::helper('adminhtml')->__('1'),
            2 => Mage::helper('adminhtml')->__('2'),
            3 => Mage::helper('adminhtml')->__('3'),
            4 => Mage::helper('adminhtml')->__('4'),
            5 => Mage::helper('adminhtml')->__('5'),
            6 => Mage::helper('adminhtml')->__('6'),
            7 => Mage::helper('adminhtml')->__('7'),
            8 => Mage::helper('adminhtml')->__('8'),
            9 => Mage::helper('adminhtml')->__('9'),
            10 => Mage::helper('adminhtml')->__('10')
        );
    }

}
