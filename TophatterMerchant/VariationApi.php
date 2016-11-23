<?php
namespace TophatterMerchant;

use TophatterMerchant\Model\Schema;
use TophatterMerchant\Model\Variation;

class VariationApi extends TophatterMerchantApi {
  public static function getSchema() {
    $response = parent::getResponse('GET', 'variations/schema');
    $schema = array();
    foreach ($response as $schema_item) {
      $schema[] = new Schema($schema_item);
    }
    return $schema;
  }

  public static function retrieve($id) {
    $params['identifier'] = $id;
    $response = parent::getResponse('GET', 'variations/retrieve', $params);
    return new Variation($response);
  }

  public static function create($variation) {
    $response = parent::getResponse('POST', 'variations', $variation);
    return new Variation($response);
  }

  public static function update($variation) {
    $response = parent::getResponse('POST', 'variations/update', $variation);
    return new Variation($response);
  }
}
