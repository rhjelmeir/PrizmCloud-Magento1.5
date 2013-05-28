<?php

/**
 * Used in creating options for flash/html config value selection
 *
 */
class Accusoft_Prizmclouddocsviewer_Adminhtml_Model_System_Config_Source_Ptype
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'flash', 'label'=>Mage::helper('adminhtml')->__('flash')),
            array('value' => 'html5', 'label'=>Mage::helper('adminhtml')->__('html5')),
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
            'flash' => Mage::helper('adminhtml')->__('flash'),
            'html5' => Mage::helper('adminhtml')->__('html5'),
        );
    }

}
