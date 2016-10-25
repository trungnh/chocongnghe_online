<?php
/*------------------------------------------------------------------------
 # Sm Matrix Slider - Version 1.0.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Matrixslider_Block_List extends Mage_Catalog_Block_Product_Abstract
{
	protected $_config = null;
	protected $_storeId = null;
	protected $_productCollection = null;
	
	public function __construct($attributes = array()){
		parent::__construct();
		$this->_config = Mage::helper('matrixslider/data')->get($attributes);
	}
	
	public function getConfig($name=null, $value=null){
		if (is_null($this->_config)){
			$this->_config = Mage::helper('matrixslider/data')->get(null);
		}
		if (!is_null($name) && !empty($name)){
			$valueRet = isset($this->_config[$name]) ? $this->_config[$name] : $value;
			return $valueRet;
		}
		return $this->_config;
	}
	
	public function setConfig($name, $value=null){
		if (is_null($this->_config)) $this->getConfig();
		if (is_array($name)){
			$this->_config = array_merge($this->_config, $name);
			return;
		}
		if (!empty($name)){
			$this->_config[$name] = $value;
		}
		return true;
	}
	
	protected function _toHtml(){
		if(!$this->_config['isenabled']) return;
		$template_file = "sm/matrixslider/default.phtml";
		$this->setTemplate($template_file);
		return parent::_toHtml();
	}	
	
	public function getStoreId(){
		if (is_null($this->_storeId)){
			$this->_storeId = Mage::app()->getStore()->getId();
		}
		return $this->_storeId;
	}
	public function setStoreId($storeId=null){
		$this->_storeId = $storeId;
	}
	
	protected function getProductCollection(){
		$collection = Mage::getSingleton('catalog/product')->getCollection();
		$collection->addAttributeToSelect('*');
		$collection->addAttributeToFilter('status', Mage_Catalog_Model_Product_Status::STATUS_ENABLED);
		$visibility = array(
				Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH,
				Mage_Catalog_Model_Product_Visibility::VISIBILITY_IN_CATALOG
		);
		$collection->addAttributeToFilter('visibility', $visibility);
	
		// add price data
		$collection->addPriceData();
		$this->_addViewsCount($collection);
		$this->_addReviewsCount($collection);
		$this->_addOrderedCount($collection);
		return $collection;
	}
	public function setProductCollection($collection=null){
		$this->_productCollection = $collection;
	}
	
	private function _getProducts(){
		$collection = $this->getProductCollection();
		$category_ids = preg_split("/[,\s\D]+/", $this->_config['product_category']);
		if (is_array($category_ids)){
			foreach ($category_ids as $i => $id) {
				if (!is_numeric($id)){
					unset($category_ids[$i]);
				}
			}
		}
		if (isset($category_ids) && count($category_ids)>0) $this->_addCategoryFilter($collection, $category_ids);
	
		// Sort products in collection
		$dir = strtolower( $this->_config['product_order_dir'] );
		if (!in_array($dir, array('asc', 'desc'))){
			$dir = 'asc';
		}
		$attribute_to_sort = $this->_config['product_order_by'];
		switch ($attribute_to_sort){
			case 'name':
			case 'created_at':
			case 'price':
				$collection->addAttributeToSort($attribute_to_sort, $dir);
				break;
			case 'position':
				break;
			case 'random':
				$collection->getSelect()->order(new Zend_Db_Expr('RAND()'));
				break;
			case 'top_rating':
				$collection->getSelect()->order('sm_rating_summary desc');
				break;
			case 'most_reviewed':
				$collection->getSelect()->order('sm_reviews_count desc');
				break;
			case 'most_viewed':
				$collection->getSelect()->order('sm_views_count desc');
				break;
			case 'best_sales':
				$collection->getSelect()->order('sm_ordered_count desc');
				break;
		}
		//}
		$product_limitation = intval($this->_config['product_limitation']);
		if ($product_limitation>0){
			$collection->setPageSize($product_limitation);
		}
		return  $collection;
	}
	
	protected function _getItems(){
		$products = $this->_getProducts()->getItems();
		$collect_items = array();
		$this->addReviewSummaryTemplate('sm', 'sm/matrixslider/summary.phtml');
		$item = new stdClass();
		foreach( $products as $k => $_product ) {
			$item = $_product;
			$item->id = $_product->getId();
			$item->title = $_product->getName();
			$item->description =  $_product->getShortDescription();
			//$item->description =  Mage::helper('matrixslider/data')->_cleanText($_product->getShortDescription());
			//$item->description = Mage::helper('matrixslider/data')->truncate($item->description,$this->getConfig('product_description_maxlength'));
			$item->image = (string)Mage::helper('catalog/image')->init($_product, 'image')->resize($this->getConfig('product_image_width'), $this->getConfig('product_image_height'));
			$item->link = $_product->getProductUrl();
			// $item['id'] = $_product->getId();
			// $item['title'] =  Mage::helper('matrixslider/data')->truncate($_product->getName(), $this->_config['product_title_max_characters'], '...');
			// $item['image'] = (string)Mage::helper('catalog/image')->init($_product, 'image')->resize($this->getConfig('product_image_width'), $this->getConfig('product_image_height'));
			// $item['link'] = $_product->getProductUrl();
				
			// $item['description'] = $_product->getShortDescription();
			// if ( (int)$this->getConfig('item_description_striptags') == 1 ){
				// $keep_tags = $this->getConfig('item_description_keeptags', '');
				// $keep_tags = str_replace(array(' '), array(''), $keep_tags);
				// $tmp_desc = strip_tags($item['description'] ,$keep_tags );
				// $item['desc'] = $tmp_desc;
			// } else {
				// $item['desc'] = $item['description'];
			// }
			// if (($maxchars=$this->getConfig('product_description_max_characters',-1))>0){
				// $item['desc'] =  Mage::helper('matrixslider/data')->truncate($item['desc'], $maxchars, '...');
			// }
			$item->addtocart_url = "setLocation('".$this->getAddToCartUrl($_product)."')";
			$item->addtowishlist_url = "setLocation('".$this->helper('wishlist')->getAddUrl($_product)."')";
			$item->addtocompare_url = "setLocation('".$this->getAddToCompareUrl($_product)."')";	
			$item->review = $this->getReviewsSummaryHtml($_product, 'sm', true);
			$item->price = $this->getPriceHtml($_product, true);
			$collect_items[] = $item;
		}
		return $collect_items;
	}
	
	public function getProducts(){
		$products = $this->_getItems();
		//return $this->_getProducts();
		return $products;
	}
	
	public function getConfigObject(){
		return (object)$this->getConfig();
	}
	
	public function getScriptTags(){
		$import_str = "";
		$jsHelper = Mage::helper('core/js');
		if (null == Mage::registry('jsmart.jquery')){
			if (Mage::getStoreConfigFlag('matrixslider_cfg/advanced/include_jquery')){
				$import_str .= $jsHelper->includeSkinScript('sm/matrixslider/js/jquery-1.8.2.min.js');
				$import_str .= $jsHelper->includeSkinScript('sm/matrixslider/js/jquery-noconflict.js');
				Mage::register('jsmart.jquery', 1);
			}
		}
		if (null == Mage::registry('jsmart.matrixslider.js')){
			$import_str .= $jsHelper->includeSkinScript('sm/matrixslider/js/jslider.js');
			$import_str .= $jsHelper->includeSkinScript('sm/matrixslider/js/jquery.easing.js');
			$import_str .= $jsHelper->includeSkinScript('sm/matrixslider/js/jquery.cj-swipe.js');
			Mage::register('jsmart.matrixslider.js', 1);
		}
		//	var_dump($this->getLayout()->getBlock('head')); die;
		//return $this->getLayout()->getBlock('head')->addJs('http://localhost/magento/mgto/skin/frontend/default/default/sm/matrixslider/js/jquery.cj-swipe.js');
		return $import_str;
	}
	
	private function _addCategoryFilter(& $collection, $category_ids){
		$category_collection = Mage::getModel('catalog/category')->getCollection();
		$category_collection->addAttributeToSelect('*');
		$category_collection->addIsActiveFilter();
		if (count($category_ids)>0){
			$category_collection->addIdFilter($category_ids);
		}
		$category_collection->getSelect()->group('entity_id');
		$category_products = array();
		foreach ($category_collection as $category){
			$cid = $category->getId();
			if (!array_key_exists( $cid, $category_products)){
				$category_products[$cid] = $category->getProductCollection()->getAllIds();
				//Mage::log("ID: " . $cid );
				//Mage::log("collection->count(): " . count($category_products[$cid]) );
			}
		}
		$product_ids = array();
		if (count($category_products)){
			foreach ($category_products as $cp) {
				$product_ids = array_merge($product_ids, $cp);
			}
		}
		//Mage::log("merged_count: " . count($product_ids));
		$collection->addIdFilter($product_ids);
	}
	private function _addViewsCount(& $collection, $views_count_alias="sm_views_count"){
		// add views_count
		$reports_event_table		= Mage::getSingleton('core/resource')->getTableName('reports/event');
		$reports_event_types_table 	= Mage::getSingleton('core/resource')->getTableName('reports/event_type');
		$collection->getSelect()
		->joinLeft(
				array("re_table" => $reports_event_table),
				"e.entity_id = re_table.object_id",
				array(
						$views_count_alias => "COUNT(re_table.event_id)"
				)
		)->joinLeft(
				array("ret_table" => $reports_event_types_table),
				"re_table.event_type_id = ret_table.event_type_id AND ret_table.event_name = 'catalog_product_view'",
				array()
		)->group('e.entity_id');
	}
	private function _addReviewsCount(& $collection, $reviews_count_alias="sm_reviews_count", $rating_summary_alias="sm_rating_summary" ){
		// add reviews_count and rating_summary
		$review_summary_table = Mage::getSingleton('core/resource')->getTableName('review/review_aggregate');
		$collection->getSelect()->joinLeft(
				array("rs_table" => $review_summary_table),
				"e.entity_id = rs_table.entity_pk_value AND rs_table.store_id=" . $this->getStoreId(),
				array(
						$reviews_count_alias  => "rs_table.reviews_count",
						$rating_summary_alias => "rs_table.rating_summary"
				)
		);
	}
	private function _addOrderedCount(& $collection, $ordered_qty_alias="sm_ordered_count"){
		$order_table = Mage::getSingleton('core/resource')->getTableName('sales/order');
		$read = Mage::getSingleton('core/resource')->getConnection ('core_read');
		$orders_active_query = $read->select()->from(array("o_table"=>$order_table), 'o_table.entity_id')->where("o_table.state<>'" . Mage_Sales_Model_Order::STATE_CANCELED . "'");
	
		$order_item_table = Mage::getSingleton('core/resource')->getTableName('sales/order_item');
		$collection->getSelect()->joinLeft(
				array("oi_table" => $order_item_table),
				"e.entity_id=oi_table.item_id AND oi_table.order_id IN ($orders_active_query)",
				array(
						$ordered_qty_alias => "SUM(oi_table.qty_ordered)"
				)
		);
	}		
}
