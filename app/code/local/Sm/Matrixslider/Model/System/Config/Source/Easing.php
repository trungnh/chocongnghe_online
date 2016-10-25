<?php
/*------------------------------------------------------------------------
 # Sm Matrix Slider - Version 1.0.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Matrixslider_Model_System_Config_Source_Easing
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'swing',				'label' => Mage::helper('matrixslider')->__('swing')),
			array('value' => 'easeInQuad', 			'label' => Mage::helper('matrixslider')->__('easeInQuad')),
			array('value' => 'easeOutQuad',			'label' => Mage::helper('matrixslider')->__('easeOutQuad')),
			array('value' => 'easeInOutQuad', 		'label' => Mage::helper('matrixslider')->__('easeInOutQuad')),
			array('value' => 'easeInCubic',			'label' => Mage::helper('matrixslider')->__('easeInCubic')),
			array('value' => 'easeOutCubic', 		'label' => Mage::helper('matrixslider')->__('easeOutCubic')),
			array('value' => 'easeInOutCubic',		'label' => Mage::helper('matrixslider')->__('easeInOutCubic')),
			array('value' => 'easeInQuart', 		'label' => Mage::helper('matrixslider')->__('easeInQuart')),
			array('value' => 'easeOutQuart',		'label' => Mage::helper('matrixslider')->__('easeOutQuart')),
			array('value' => 'easeInOutQuart', 		'label' => Mage::helper('matrixslider')->__('easeInOutQuart')),
			array('value' => 'easeInQuint',			'label' => Mage::helper('matrixslider')->__('easeInQuint')),
			array('value' => 'easeOutQuint', 		'label' => Mage::helper('matrixslider')->__('easeOutQuint')),
			array('value' => 'easeInOutQuint',		'label' => Mage::helper('matrixslider')->__('easeInOutQuint')),
			array('value' => 'easeInSine', 			'label' => Mage::helper('matrixslider')->__('easeInSine')),
			array('value' => 'easeOutSine',			'label' => Mage::helper('matrixslider')->__('easeOutSine')),
			array('value' => 'easeInOutSine', 		'label' => Mage::helper('matrixslider')->__('easeInOutSine')),
			array('value' => 'easeInExpo',			'label' => Mage::helper('matrixslider')->__('easeInExpo')),
			array('value' => 'easeOutExpo', 		'label' => Mage::helper('matrixslider')->__('easeOutExpo')),
			array('value' => 'easeInOutExpo',		'label' => Mage::helper('matrixslider')->__('easeInOutExpo')),
			array('value' => 'easeInCirc', 			'label' => Mage::helper('matrixslider')->__('easeInCirc')),
			array('value' => 'easeOutCirc',			'label' => Mage::helper('matrixslider')->__('easeOutCirc')),
			array('value' => 'easeInOutCirc', 		'label' => Mage::helper('matrixslider')->__('easeInOutCirc')),
			array('value' => 'easeInElastic',		'label' => Mage::helper('matrixslider')->__('easeInElastic')),
			array('value' => 'easeOutElastic', 		'label' => Mage::helper('matrixslider')->__('easeOutElastic')),
			array('value' => 'easeInOutElastic',	'label' => Mage::helper('matrixslider')->__('easeInOutElastic')),
			array('value' => 'easeInBack', 			'label' => Mage::helper('matrixslider')->__('easeInBack')),
			array('value' => 'easeOutBack',			'label' => Mage::helper('matrixslider')->__('easeOutBack')),
			array('value' => 'easeInOutBack', 		'label' => Mage::helper('matrixslider')->__('easeInOutBack')),
			array('value' => 'easeInBounce',		'label' => Mage::helper('matrixslider')->__('easeInBounce')),
			array('value' => 'easeOutBounce', 		'label' => Mage::helper('matrixslider')->__('easeOutBounce')),
			array('value' => 'easeInOutBounce',		'label' => Mage::helper('matrixslider')->__('easeInOutBounce'))
		);
	}
}
