<?php
namespace TophatterMerchant\Exception;

class ServerErrorException extends \RuntimeException {
	
	const MESSAGE = "The server encountered an internal error. This is probably a bug, and you should contact support.";
	
	public function __construct() {
		parent::__construct(static::MESSAGE);
	}

}