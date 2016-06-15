<?php
namespace TophatterMerchant\Model;

class Account {
	private $object;
	
	public function __construct($object) {
		$this->object = $object;
	}
	
	public function getAccessToken() {
		return $this->object->access_token;
	}
	
	public function getFirstName() {
		return $this->object->first_name;
	}
	
	public function getLastName() {
		return $this->object->last_name;
	}
	
	public function getStoreName() {
		return $this->object->store_name;
	}
	
	public function getEmail() {
		return $this->object->email;
	}
	
	public function getCountry() {
		return $this->object->country;
	}
	
	public function getTimeZone() {
		return $this->object->time_zone;
	}
}