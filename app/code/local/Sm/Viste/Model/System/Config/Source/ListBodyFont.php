<?php
/*------------------------------------------------------------------------
 # SM viste - Version 1.1
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Viste_Model_System_Config_Source_ListBodyFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'segoe ui', 'label'=>Mage::helper('viste')->__('Segoe UI')),
			array('value'=>'Arial', 'label'=>Mage::helper('viste')->__('Arial')),
			array('value'=>'Arial Black', 'label'=>Mage::helper('viste')->__('Arial-black')),
			array('value'=>'Courier New', 'label'=>Mage::helper('viste')->__('Courier')),
			array('value'=>'Georgia', 'label'=>Mage::helper('viste')->__('Georgia')),
			array('value'=>'Impact', 'label'=>Mage::helper('viste')->__('Impact')),
			array('value'=>'Lucida Console', 'label'=>Mage::helper('viste')->__('Lucida-console')),
			array('value'=>'Lucida Grande', 'label'=>Mage::helper('viste')->__('Lucida-grande')),
			array('value'=>'Palatino', 'label'=>Mage::helper('viste')->__('Palatino')),
			array('value'=>'Tahoma', 'label'=>Mage::helper('viste')->__('Tahoma')),
			array('value'=>'Times New Roman', 'label'=>Mage::helper('viste')->__('Times')),	
			array('value'=>'Trebuchet', 'label'=>Mage::helper('viste')->__('Trebuchet')),	
			array('value'=>'Verdana', 'label'=>Mage::helper('viste')->__('Verdana'))		
		);
	}
}
