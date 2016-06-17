<?php
namespace TophatterMerchant\Exception;

class NotFoundException extends \RuntimeException {
	
	const MESSAGE = "The API path you requested does not exist.";
	
	public function __construct() {
		parent::__construct(static::MESSAGE);
	}

}