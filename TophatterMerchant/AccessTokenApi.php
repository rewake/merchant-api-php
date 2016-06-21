<?php
namespace TophatterMerchant;

use TophatterMerchant\Model\Schema;
use TophatterMerchant\Model\AccessToken;

class AccessTokenApi extends ResourceApi {
	public static function getSchema() {
		$response = parent::getResponse('GET', 'api_keys/schema');
		$schema = array();
		foreach ($response as $schema_item) {
			$schema[] = new Schema($schema_item);
		}
		return $schema;
	}
	
	public static function getAll() {
		$response = parent::getResponse('GET', 'api_keys');
		$api_keys = array();
		foreach ($response as $api_key) {
			$api_keys[] = new AccessToken($api_key);
		}
		return $api_keys;
	}
	
	public static function retrieve($id) {
		$url = 'api_keys/' . $id;
		$response = parent::getResponse('GET', $url);
		return new AccessToken($response);
	}
	
	public static function create() {
		$response = parent::getResponse('POST', 'api_keys');
		return new AccessToken($response);
	}
	
	public static function destroy($id) {
		$url = 'api_keys/' . $id;
		$response = parent::getResponse('DELETE', $url);
		$api_keys = array();
		foreach ($response as $api_key) {
			$api_keys[] = new AccessToken($api_key);
		}
		return $api_keys;
	}
}