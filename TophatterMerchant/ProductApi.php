<?php
namespace TophatterMerchant;

use TophatterMerchant\Model\Product;
use TophatterMerchant\Model\PaginatedProducts;
use TophatterMerchant\Model\Schema;

class ProductApi extends ResourceApi {
	public static function getSchema() {
		$response = parent::getResponse('GET', 'products/schema');
		$schema = array();
		foreach ($response as $schema_item) {
			$schema[] = new Schema($schema_item);
		}
		return $schema;
	}
	
	public static function getAll($status = null, $category = null, $page = 1, $per_page = 50, $pagination = null, $sort = null) {
		$params = array(
				'status' => $status,
				'category' => $category,
				'page' => $page,
				'per_page' => $per_page,
				'pagination' => $pagination,
				'sort' => $sort
		);
		$response = parent::getResponse('GET', 'products', $params);
		if ($pagination) {
			return new PaginatedProducts($response);
		} else {
			$products = array();
			foreach ($response as $product) {
				$products[] = new Product($product);
			}
			return $products;
		}
	}
	
	public static function retrieve($id) {
		$params['identifier'] = $id;
		$response = parent::getResponse('GET', 'products/retrieve', $params);
		return new Product($response);
	}
	
	public static function create($product) {
		$response = parent::getResponse('POST', 'products', $product);
		return new Product($response);
	}
	
	public static function update($product) {
		$response = parent::getResponse('POST', 'products/update', $product);
		return new Product($response);
	}
	
	public static function delete($id) {
		$params['identifier'] = $id;
		$response = parent::getResponse('POST', 'products/delete', $params);
		return new Product($response);
	}
	
	public static function disable($id) {
		$params['identifier'] = $id;
		$response = parent::getResponse('POST', 'products/disable', $params);
		return new Product($response);
	}
	
	public static function enable($id) {
		$params['identifier'] = $id;
		$response = parent::getResponse('POST', 'products/enable', $params);
		return new Product($response);
	}
	
	public static function upload($file, $template) {
		$params = array(
				'file' => new \CURLFile($file, 'text/csv'),
				'template' => $template
		);
		$response = parent::getResponse('POST', 'products/upload', $params);
	}
}