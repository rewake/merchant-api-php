<?php
namespace TophatterMerchant;

use TophatterMerchant\Model\Account;
use TophatterMerchant\Model\Schema;

class AccountApi extends ResourceApi {
	public static function schema() {
		$response = parent::getResponse('GET', 'account/schema');
		$schema = array();
		foreach ($response as $schema_item) {
			$schema[] = new Schema($schema_item);
		}
		return $schema;
	}
	
	public static function authenticate($email, $password) {
		$params = array(
				'email' => $email,
				'password' => $password
		);
		$response = parent::getResponse('POST', 'account/authenticate', $params);
		return new Account($response);
	}
	
	public static function me() {
		$response = parent::getResponse('GET', 'account/me.json');
		return new Account($response);
	}
	
	public static function create($account) {
		$response = parent::getResponse('POST', 'account', $account);
		return new Account($response);
	}
	
	public static function update($account) {
		$response = parent::getResponse('POST', 'account/update', $account);
		return new Account($response);
	}
}