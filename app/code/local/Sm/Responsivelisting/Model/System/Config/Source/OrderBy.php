<?php
/*------------------------------------------------------------------------
 # SM Responsive Listing - Version 1.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Responsivelisting_Model_System_Config_Source_OrderBy
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'position',	'label' => Mage::helper('responsivelisting')->__('Position')),
			array('value' => 'created_at', 	'label' => Mage::helper('responsivelisting')->__('Date Created')),
			array('value' => 'name', 		'label' => Mage::helper('responsivelisting')->__('Name')),
			array('value' => 'price', 		'label' => Mage::helper('responsivelisting')->__('Price')),
			array('value' => 'random', 		'label' => Mage::helper('responsivelisting')->__('Random')),
			array('value' => 'top_rating', 	'label' => Mage::helper('responsivelisting')->__('Top Rating')),
			array('value' => 'most_reviewed',	'label' => Mage::helper('responsivelisting')->__('Most Reviews')),
			array('value' => 'most_viewed',	'label' => Mage::helper('responsivelisting')->__('Most Visited')),
			array('value' => 'best_sales',	'label' => Mage::helper('responsivelisting')->__('Most Selling')),
		);
	}
}
