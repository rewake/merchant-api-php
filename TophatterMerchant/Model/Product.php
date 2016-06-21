<?php
namespace TophatterMerchant\Model;

class Product {
	private $product_hash;
	
	public function __construct($product_hash) {
		$this->product_hash = $product_hash;
	}
	
	public function getIdentifier() {
		return $this->product_hash->identifier;
	}
	
	public function getCatetory() {
		return $this->product_hash->category;
	}
	
	public function getTitle() {
		return $this->product_hash->title;
	}
	
	public function getDescription() {
		return $this->product_hash->description;
	}
	
	public function getProductCondition() {
		return $this->product_hash->product_condition;
	}
	
	public function getProductBrand() {
		return $this->product_hash->product_brand;
	}
	
	public function getProductMaterial() {
		return $this->product_hash->product_material;
	}
	
	public function getProductVariations() {
		$variations = array();
		foreach ($this->product_hash->product_variations as $variation) {
			$variations[] = new Variation($variation);
		}
		return $variations;
	}
	
	public function getMinimumBidAmount() {
		return $this->product_hash->minimum_bid_amount;
	}
	
	public function getBuyNowPrice() {
		return $this->product_hash->buy_now_price;
	}
	
	public function getRetailPrice() {
		return $this->product_hash->retail_price;
	}
	
	public function getCostBasis() {
		return $this->product_hash->cost_basis;
	}
	
	public function getShipsFrom() {
		return $this->product_hash->ships_from;
	}
	
	public function getShippingPrice() {
		return $this->product_hash->shipping_price;
	}
	
	public function getExpeditedShippingPrice() {
		return $this->product_hash->expedited_shipping_price;
	}
	
	public function getEstimatedDaysToShip() {
		return $this->product_hash->estimated_days_to_ship;
	}
	
	public function getEstimatedDaysToDeliver() {
		return $this->product_hash->estimated_days_to_deliver;
	}
	
	public function getExpeditedDaysToDeliver() {
		return $this->product_hash->expedited_days_to_deliver;
	}
	
	public function getWeight() {
		return $this->product_hash->weight;
	}
	
	public function getPrimaryImage() {
		return $this->product_hash->primary_image;
	}
	
	public function getExtraImages() {
		return $this->product_hash->extra_images;
	}
	
	public function getAllImages() {
		return $this->product_hash->all_images;
	}
	
	public function getCreatedAt() {
		return $this->product_hash->created_at;
	}
	
	public function getUpdatedAt() {
		return $this->product_hash->updated_at;
	}
	
	public function getDisabledAt() {
		return $this->product_hash->disabled_at;
	}
	
	public function getDeletedAt() {
		return $this->product_hash->deleted_at;
	}
	
	public function getSlug() {
		return $this->product_hash->slug;
	}
}