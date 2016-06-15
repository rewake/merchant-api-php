<?php
namespace TophatterMerchant;

use TophatterMerchant\Model\Account;

class AccountApi extends ResourceApi {
	public static function me() {
		$response = parent::getResponse('GET', 'account/me.json');
		return new Account($response);
	}
}