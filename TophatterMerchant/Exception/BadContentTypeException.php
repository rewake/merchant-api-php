<?php
namespace TophatterMerchant\Exception;

class BadContentTypeException extends \RuntimeException {
	
	const MESSAGE = "The server didn't return JSON. You probably made a bad request.";
	
	public function __construct() {
		parent::__construct(static::MESSAGE);
	}

}