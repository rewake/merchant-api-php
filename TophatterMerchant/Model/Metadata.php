<?php
namespace TophatterMerchant\Model;

class Metadata {
	private $metadata_hash;
	
	public function __construct($metadata_hash) {
		$this->metadata_hash = $metadata_hash;
	}
	
	public function getConditions() {
		return $this->metadata_hash->conditions;
	}
	
	public function getCategories() {
		return $this->metadata_hash->categories;
	}
	
	public function getSizes() {
		return $this->metadata_hash->sizes;
	}
	
	public function getColors() {
		return $this->metadata_hash->colors;
	}
	
	public function getCountries() {
		return $this->metadata_hash->countries;
	}
	
	public function getCountryCodes() {
		return $this->metadata_hash->country_codes;
	}
	
	public function getStates() {
		return $this->metadata_hash->states;
	}
	
	public function getProvinces() {
		return $this->metadata_hash->provinces;
	}
	
	public function getTerritories() {
		return $this->metadata_hash->territories;
	}
	
	public function getCarriers() {
		return $this->metadata_hash->carriers;
	}
	
	public function getBrands() {
		return $this->metadata_hash->brands;
	}
}