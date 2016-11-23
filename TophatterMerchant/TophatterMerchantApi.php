<?php
namespace TophatterMerchant;

use TophatterMerchant\Exception\BadContentTypeException;
use TophatterMerchant\Exception\BadRequestException;
use TophatterMerchant\Exception\NotFoundException;
use TophatterMerchant\Exception\ServerErrorException;
use TophatterMerchant\Exception\UnauthorizedException;
use TophatterMerchant\Exception\ConnectionException;

class TophatterMerchantApi {
  const BASE_URL = "https://tophatter.com/merchant_api/v1/";

  private static $access_token;

  public static function setAccessToken($access_token) {
    self::$access_token = $access_token;
  }

  protected static function getResponse($method, $path, $params = array()) {
    if (self::$access_token) {
      $params['access_token'] = self::$access_token;
    }
    $url = static::BASE_URL . $path;
    $curl = curl_init();
    $options = array(
      CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_HEADER => true
    );
    if ($method === "GET") {
      $url = $url . "?" . http_build_query($params);
    } else if ($params['file'] || $params['data']) {
      $options[CURLOPT_POSTFIELDS] = $params;
    } else {
      $options[CURLOPT_POSTFIELDS] = http_build_query($params);
    }
    if ($method === "DELETE") {
      $options[CURLOPT_CUSTOMREQUEST] = 'DELETE';
    }
    $options[CURLOPT_URL] = $url;
    curl_setopt_array($curl, $options);
    $result = curl_exec($curl);
    $error = curl_errno($curl);
    $error_message = curl_error($curl);
    if ($error) {
      throw new ConnectionException($error_message);
    }
    $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    $contentType = curl_getinfo($curl, CURLINFO_CONTENT_TYPE);
    curl_close($curl);
    if ($contentType == "text/html; charset=utf-8") {
      throw new BadContentTypeException();
    }
    $body = substr($result, $headerSize);
    $decoded_result = json_decode($body);
    if ($httpStatus == 401) {
      throw new UnauthorizedException($decoded_result->message);
    }
    if ($httpStatus == 400) {
      throw new BadRequestException($decoded_result->message);
    }
    if ($httpStatus == 404) {
      throw new NotFoundException();
    }
    if ($httpStatus == 500) {
      throw new ServerErrorException();
    }
    return $decoded_result;
  }
}
