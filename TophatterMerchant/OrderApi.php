<?php
namespace TophatterMerchant;

use TophatterMerchant\Model\Order;
use TophatterMerchant\Model\Schema;

class OrderApi extends TophatterMerchantApi {
  public static function getSchema() {
    $response = parent::getResponse('GET', 'orders/schema');
    $schema = array();
    foreach ($response as $schema_item) {
      $schema[] = new Schema($schema_item);
    }
    return $schema;
  }

  public static function getAll($filter = null, $page = 1, $per_page = 50) {
    $params = array('filter' => $filter, 'page' => $page, 'per_page' => $per_page);
    $response = parent::getResponse('GET', 'orders', $params);
    $orders = array();
    foreach ($response as $order) {
      $orders[] = new Order($order);
    }
    return $orders;
  }

  public static function retrieve($id) {
    $params['order_id'] = $id;
    $response = parent::getResponse('GET', 'orders/retrieve', $params);
    return new Order($response);
  }

  public static function fulfill($id, $carrier, $tracking_number) {
    $params = array('order_id' => $id, 'carrier' => $carrier, 'tracking_number' => $tracking_number);
    $response = parent::getResponse('POST', 'orders/fulfill', $params);
    return new Order($response);
  }

  public static function unfulfill($id) {
    $url = 'orders/' . $id . '/fulfill';
    $response = parent::getResponse('POST', $url);
    return new Order($response);
  }

  public static function refund($id, $type, $reason, $explanation = null, $fees = array()) {
    $params = array('order_id' => $id, 'type' => $type, 'reason' => $reason, 'explanation' => $explanation, 'fees' => $fees);
    $response = parent::getResponse('POST', 'orders/refund', $params);
    return new Order($response);
  }
}
