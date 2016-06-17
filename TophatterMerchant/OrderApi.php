<?php
namespace TophatterMerchant;

use TophatterMerchant\Model\Order;
use TophatterMerchant\Model\Schema;

class OrderApi extends ResourceApi {
	public static function getSchema() {
		$response = parent::getResponse('GET', 'orders/schema');
		$schema = array();
		foreach ($response as $schema_item) {
			$schema[] = new Schema($schema_item);
		}
		return $schema;
	}
	
	public static function getAll($filter = null, $page = 1, $per_page = 50) {
		$params = array(
				'page' => 1,
				'per_page' => 50
		);
		if ($filter) {
			$params['filter'] = $filter;
		}
		$response = parent::getResponse('GET', 'orders', $params);
		$orders = array();
		foreach ($response as $order) {
			$orders[] = new Order($order);
		}
		return $orders;
	}
	
	public static function retrieve($id) {
		$url = 'orders/' . $id . '/retrieve';
		$response = parent::getResponse('GET', $url);
		return new Order($response);
	}
	
	public static function fulfill($id, $carrier, $tracking_number) {
		$url = 'orders/' . $id . '/fulfill';
		$params = array(
				'carrier' => $carrier,
				'tracking_number' => $tracking_number
		);
		$response = parent::getResponse('POST', $url, $params);
		return new Order($response);
	}
	
	public static function unfulfill($id) {
		$url = 'orders/' . $id . '/fulfill';
		$response = parent::getResponse('POST', $url);
		return new Order($response);
	}
}