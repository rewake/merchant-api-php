<?php
namespace TophatterMerchant\Model;

class Schema {
	private $schema_hash;
	
	public function __construct($schema_hash) {
		$this->schema_hash = $schema_hash;
	}
	
	public function getField() {
		return $this->schema_hash->field;
	}
	
	public function getRequired() {
		return $this->schema_hash->required;
	}
	
	public function getReadonly() {
		return $this->schema_hash->readonly;
	}
}