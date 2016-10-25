<?php
/*------------------------------------------------------------------------
 # SM Responsive Listing - Version 1.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Responsivelisting_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
	  $this->loadLayout();
      $this->renderLayout();
    }
	
	public function ajaxAction() {
		//Zend_Debug::dump(Mage::app()->getRequest()->getParams());die;
		//echo"test";die;
		$layout = Mage::getSingleton('core/layout');
		$block = $layout->createBlock('responsivelisting/list');
		
		header('content-type: text/javascript');
		echo '{"items_markup":' . json_encode($block->toHtml()) .'}';
		//die();			
		$this->renderLayout();
    }
	
	
}