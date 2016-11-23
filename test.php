#!/usr/bin/php

<?php
require('TophatterMerchant/TophatterMerchantApi.php');
require('TophatterMerchant/ProductApi.php');
require('TophatterMerchant/VariationApi.php');
require('TophatterMerchant/OrderApi.php');
require('TophatterMerchant/MetadataApi.php');

require('TophatterMerchant/Model/Schema.php');
require('TophatterMerchant/Model/Product.php');
require('TophatterMerchant/Model/Variation.php');
require('TophatterMerchant/Model/Order.php');
require('TophatterMerchant/Model/Metadata.php');

use TophatterMerchant\TophatterMerchantApi;
use TophatterMerchant\ProductApi;
use TophatterMerchant\VariationApi;
use TophatterMerchant\OrderApi;
use TophatterMerchant\MetadataApi;

TophatterMerchantApi::setAccessToken('YOUR_ACCESS_TOKEN');
print_r(ProductApi::getSchema());
print_r(ProductApi::getAll());
print_r(VariationApi::getSchema());
print_r(OrderApi::getAll());
print_r(MetadataApi::getSizes());
print_r(MetadataApi::getColors());
