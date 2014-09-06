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
class Theextensionlab_Trustpilot_Model_Adminhtml_System_Config_Source_Yesnodefault
{

    /**
     * Note: Ideally I would have had the yes / no values as 1 and 0 respectivly but this seems to make No the defualt which I didn't want.
     * If anybody knows how to properly set the default please do let me know! <jamesanelay@theextensionlab.com>
     */


    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'default', 'label'=>Mage::helper('adminhtml')->__('Use Config Default')),
            array('value' => 'yes', 'label'=>Mage::helper('adminhtml')->__('Yes')),
            array('value' => 'no', 'label'=>Mage::helper('adminhtml')->__('No')),
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
            'default' => Mage::helper('adminhtml')->__('Use Config Setting'),
            'no'=> Mage::helper('adminhtml')->__('No'),
            'yes' => Mage::helper('adminhtml')->__('Yes'),
        );
    }

}
