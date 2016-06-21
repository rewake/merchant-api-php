<?php
namespace TophatterMerchant\Model;

class Image {
	private $image_hash;
	
	public function __construct($image_hash) {
		$this->image_hash = $image_hash;
	}
	
	public function getUrl() {
		return $this->image_hash->url;
	}
}