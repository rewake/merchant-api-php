<?php
namespace TophatterMerchant\Model;

class AccessToken {
	private $access_token_hash;
	
	public function __construct($access_token_hash) {
		$this->access_token_hash = $access_token_hash;
	}
	
	public function getAccessToken() {
		return $this->access_token_hash->access_token;
	}
}