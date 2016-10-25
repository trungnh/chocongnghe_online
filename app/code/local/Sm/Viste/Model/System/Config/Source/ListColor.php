<?php
/*------------------------------------------------------------------------
 # SM viste - Version 1.0
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Viste_Model_System_Config_Source_ListColor
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'cyan', 'label'=>Mage::helper('viste')->__('Cyan')),
		array('value'=>'green', 'label'=>Mage::helper('viste')->__('Green')),
		array('value'=>'blue', 'label'=>Mage::helper('viste')->__('Blue')),
		array('value'=>'pink', 'label'=>Mage::helper('viste')->__('Pink')),
		array('value'=>'purple', 'label'=>Mage::helper('viste')->__('Purple'))
		);
	}
}
