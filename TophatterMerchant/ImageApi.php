<?php
namespace TophatterMerchant;

use TophatterMerchant\Model\Image;

class ImageApi extends TophatterMerchantApi {
	public static function create($file) {
		$params['data'] = new \CURLFile($file, 'image/png');
		$response = parent::getResponse('POST', 'images', $params);
		return new Image($response);
	}
}