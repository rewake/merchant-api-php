<?php
namespace TophatterMerchant\Model;

class Variation {
	private $variation_hash;
	
	public function __construct($variation_hash) {
		$this->variation_hash = $variation_hash;
	}
	
	public function getIdentifier() {
		return $this->variation_hash->identifier;
	}
	
	public function getCreatedAt() {
		return $this->variation_hash->created_at;
	}
	
	public function getSize() {
		return $this->variation_hash->size;
	}
	
	public function getColor() {
		return $this->variation_hash->color;
	}
	
	public function getQuantity() {
		return $this->variation_hash->quantity;
	}
}