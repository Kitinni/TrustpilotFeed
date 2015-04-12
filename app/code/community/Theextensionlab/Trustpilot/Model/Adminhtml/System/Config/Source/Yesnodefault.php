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

class Theextensionlab_Trustpilot_Model_Adminhtml_System_Config_Source_Yesnodefault
{

    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'default',
                'label'=>Mage::helper('adminhtml')->__('Use Config Default')
            ),
            array('value' => 'yes',
                  'label'=>Mage::helper('adminhtml')->__('Yes')
            ),
            array('value' => 'no',
                  'label'=>Mage::helper('adminhtml')->__('No')
            ),
        );
    }

    public function toArray()
    {
        return array(
            'default' => Mage::helper('adminhtml')->__('Use Config Setting'),
            'no'=> Mage::helper('adminhtml')->__('No'),
            'yes' => Mage::helper('adminhtml')->__('Yes'),
        );
    }

}
