<?php
/*------------------------------------------------------------------------
 # SM Responsive Listing - Version 1.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Responsivelisting_Model_System_Config_Source_ListTheme
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'1', 'label'=>Mage::helper('responsivelisting')->__('Grid')),
		array('value'=>'0', 'label'=>Mage::helper('responsivelisting')->__('List')),
		);
	}
}
