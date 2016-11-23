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

  public function getCondition() {
    return $this->product_hash->condition;
  }

  public function getBrand() {
    return $this->product_hash->brand;
  }

  public function getMaterial() {
    return $this->product_hash->material;
  }

  public function getVariations() {
    $variations = array();
    foreach ($this->product_hash->variations as $variation) {
      $variations[] = new Variation($variation);
    }
    return $variations;
  }

  public function getStartingBid() {
    return $this->product_hash->starting_bid;
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

  public function getShippingOrigin() {
    return $this->product_hash->shipping_origin;
  }

  public function getShippingPrice() {
    return $this->product_hash->shipping_price;
  }

  public function getExpeditedShippingPrice() {
    return $this->product_hash->expedited_shipping_price;
  }

  public function getDaysToFulfill() {
    return $this->product_hash->days_to_fulfill;
  }

  public function getDaysToDeliver() {
    return $this->product_hash->days_to_deliver;
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

  public function getId() {
    return $this->getCreatedAt() ? $this->getIdentifier() : null;
  }

  public function getImages($size = 'square') {
    $images = array();
    if ($this->getId()) {
      foreach ($this->getAllImages() as $image) {
        $images[] = $image->$size;
      }
    } else {
      $images[] = $this->getPrimaryImage();
      $extra_images = explode('|', $this->getExtraImages());
      foreach ($extra_images as $image) {
        $images[] = $image;
      }
    }
    return $images;
  }

  public function copy() {
    $product_hash_copy = $this->product_hash;
    unset($product_hash_copy->identifier);
    unset($product_hash_copy->primary_image);
    unset($product_hash_copy->extra_images);
    unset($product_hash_copy->all_images);
    unset($product_hash_copy->created_at);
    unset($product_hash_copy->updated_at);
    unset($product_hash_copy->disabled_at);
    unset($product_hash_copy->deleted_at);
    foreach ($product_hash_copy->variations as $product_variation) {
      unset($product_variation->identifier);
      unset($product_variation->created_at);
    }
    return new Product($product_hash_copy);
  }

  public function toParam() {
    return $this->getSlug() ? $this->getSlug() : $this->getIdentifier();
  }
}
