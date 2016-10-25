<?php
/*------------------------------------------------------------------------
 # SM viste - Version 1.1
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Viste_Model_System_Config_Source_ListGoogleFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'', 'label'=>Mage::helper('viste')->__('No select')),
			array('value'=>'Questrial', 'label'=>Mage::helper('viste')->__('Questrial')),
			array('value'=>'Kameron', 'label'=>Mage::helper('viste')->__('Kameron')),
			array('value'=>'Oswald', 'label'=>Mage::helper('viste')->__('Oswald')),
			array('value'=>'Open Sans', 'label'=>Mage::helper('viste')->__('Open Sans')),
			array('value'=>'BenchNine', 'label'=>Mage::helper('viste')->__('BenchNine')),
			array('value'=>'Droid Sans', 'label'=>Mage::helper('viste')->__('Droid Sans')),
			array('value'=>'Droid Serif', 'label'=>Mage::helper('viste')->__('Droid Serif')),
			array('value'=>'PT Sans', 'label'=>Mage::helper('viste')->__('PT Sans')),
			array('value'=>'Vollkorn', 'label'=>Mage::helper('viste')->__('Vollkorn')),
			array('value'=>'Ubuntu', 'label'=>Mage::helper('viste')->__('Ubuntu')),
			array('value'=>'Neucha', 'label'=>Mage::helper('viste')->__('Neucha')),
			array('value'=>'Cuprum', 'label'=>Mage::helper('viste')->__('Cuprum'))	
		);
	}
}
