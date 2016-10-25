<?php
/*------------------------------------------------------------------------
 # Sm Matrix Slider - Version 1.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Matrixslider_Model_System_Config_Source_OrderBy
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'position',	'label' => Mage::helper('matrixslider')->__('Position')),
			array('value' => 'created_at', 	'label' => Mage::helper('matrixslider')->__('Date Created')),
			array('value' => 'name', 		'label' => Mage::helper('matrixslider')->__('Name')),
			array('value' => 'price', 		'label' => Mage::helper('matrixslider')->__('Price')),
			array('value' => 'random', 		'label' => Mage::helper('matrixslider')->__('Random')),
			array('value' => 'top_rating', 	'label' => Mage::helper('matrixslider')->__('Top Rating')),
			array('value' => 'most_reviewed',	'label' => Mage::helper('matrixslider')->__('Most Reviews')),
			array('value' => 'most_viewed',	'label' => Mage::helper('matrixslider')->__('Most Visited')),
			array('value' => 'best_sales',	'label' => Mage::helper('matrixslider')->__('Most Selling'))
		);
	}
}
