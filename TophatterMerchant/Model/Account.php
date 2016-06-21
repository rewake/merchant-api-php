<?php
namespace TophatterMerchant\Model;

class Account {
	private $account_hash;
	
	public function __construct($account_hash) {
		$this->account_hash = $account_hash;
	}
	
	public function getAccessToken() {
		return $this->account_hash->access_token;
	}
	
	public function getFirstName() {
		return $this->account_hash->first_name;
	}
	
	public function getLastName() {
		return $this->account_hash->last_name;
	}
	
	public function getStoreName() {
		return $this->account_hash->store_name;
	}
	
	public function getEmail() {
		return $this->account_hash->email;
	}
	
	public function getCountry() {
		return $this->account_hash->country;
	}
	
	public function getTimeZone() {
		return $this->account_hash->time_zone;
	}
	
	public function getId() {
		return $this->account_hash->email;
	}
}