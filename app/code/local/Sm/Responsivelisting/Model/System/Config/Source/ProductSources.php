<?php
/*------------------------------------------------------------------------
 # SM Responsive Listing - Version 1.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Responsivelisting_Model_System_Config_Source_ProductSources
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'catalog',	'label'=>Mage::helper('responsivelisting')->__('Catalog')),
        	array('value'=>'product',	'label'=>Mage::helper('responsivelisting')->__('Product'))
		);
	}
}
