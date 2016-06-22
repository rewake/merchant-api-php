<?php
namespace TophatterMerchant\Model;

class Image {
	private $image_hash;
	
	public function __construct($image_hash) {
		$this->image_hash = $image_hash;
	}
	
	public function getId() {
		return $this->image_hash->id;
	}
	
	public function getFingerprint() {
		return $this->image_hash->fingerprint;
	}
	
	public function getUrl() {
		return $this->image_hash->url;
	}
}