<?php
namespace TophatterMerchant;

use TophatterMerchant\Model\Metadata;

class MetadataApi extends TophatterMerchantApi {
  public static function getAll() {
    $response = parent::getResponse('GET', 'metadata');
    return new Metadata($response);
  }

  public static function getCategories() {
    $response = parent::getResponse('GET', 'metadata/categories');
    return $response;
  }

  public static function getConditions() {
    $response = parent::getResponse('GET', 'metadata/conditions');
    return $response;
  }

  public static function getBrands() {
    $response = parent::getResponse('GET', 'metadata/brands');
    return $response;
  }

  public static function getSizes() {
    $response = parent::getResponse('GET', 'metadata/sizes');
    return $response;
  }

  public static function getColors() {
    $response = parent::getResponse('GET', 'metadata/colors');
    return $response;
  }

  public static function getCountries() {
    $response = parent::getResponse('GET', 'metadata/countries');
    return $response;
  }

  public static function getCountryCodes() {
    $response = parent::getResponse('GET', 'metadata/country_codes');
    return $response;
  }

  public static function getStates() {
    $response = parent::getResponse('GET', 'metadata/states');
    return $response;
  }

  public static function getProvinces() {
    $response = parent::getResponse('GET', 'metadata/provinces');
    return $response;
  }

  public static function getTerritories() {
    $response = parent::getResponse('GET', 'metadata/territories');
    return $response;
  }

  public static function getCarriers() {
    $response = parent::getResponse('GET', 'metadata/carriers');
    return $response;
  }
}
