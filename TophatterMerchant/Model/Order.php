<?php
namespace TophatterMerchant\Model;

class Order {
	private $order_hash;
	
	public function __construct($order_hash) {
		$this->order_hash = $order_hash;
	}
	
	public function getOrderId() {
		return $this->order_hash->order_id;
	}
	
	public function getProductName() {
		return $this->order_hash->product_name;
	}
	
	public function getProductIdentifier() {
		return $this->order_hash->product_identifier;
	}
	
	public function getVariationIdentifier() {
		return $this->order_hash->variation_identifier;
	}
	
	public function getCustomerName() {
		return $this->order_hash->customer_name;
	}
	
	public function getAddress1() {
		return $this->order_hash->address1;
	}
	
	public function getAddress2() {
		return $this->order_hash->address2;
	}
	
	public function getCity() {
		return $this->order_hash->city;
	}
	
	public function getState() {
		return $this->order_hash->state;
	}
	
	public function getPostalCode() {
		return $this->order_hash->postal_code;
	}
	
	public function getCountry() {
		return $this->order_hash->country;
	}
	
	public function getCarrier() {
		return $this->order_hash->carrier;
	}
	
	public function getTrackingNumber() {
		return $this->order_hash->tracking_number;
	}
	
	public function getRefundAmount() {
		return $this->order_hash->refund_amount;
	}
	
	public function getAvailableRefunds() {
		return $this->order_hash->available_refunds;
	}
}