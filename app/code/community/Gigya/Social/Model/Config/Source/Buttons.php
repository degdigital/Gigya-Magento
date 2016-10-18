<?php
class Gigya_Social_Model_Config_Source_buttons
{
  /**
   * Options getter
   *
   * @return array
   */
  public function toOptionArray()
  {
    return array(
      array('value' => 'standart', 'label'=>Mage::helper('adminhtml')->__('Icons')),
      array('value' => 'fullLogo', 'label'=>Mage::helper('adminhtml')->__('Full logos')),
      array('value' => 'fullLogoColored', 'label'=>Mage::helper('adminhtml')->__('Full logos colored')),
    );
  }
}
