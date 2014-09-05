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
class Theextensionlab_Trustpilot_Model_Adminhtml_System_Config_Source_Heighttype
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'dynamic', 'label'=>Mage::helper('adminhtml')->__('Dynamic')),
            array('value' => 'fixed', 'label'=>Mage::helper('adminhtml')->__('Fixed')),
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
            'dynamic' => Mage::helper('adminhtml')->__('No'),
            'fixed' => Mage::helper('adminhtml')->__('Yes'),
        );
    }

}
