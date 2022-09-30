<?php
/**
 * RemainingCollectedType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowAccount Open API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * RemainingCollectedType Class Doc Comment
 *
 * @category Class
 * @description 1 &#x3D; CashShortOrOver 3 &#x3D; CashDiscount 5 &#x3D; ExchangeRateDiff 51 &#x3D; SalesCashShortOrOver 53 &#x3D; SalesDiscount 55 &#x3D; SalesBankFee 57 &#x3D; SalesExchangeRateDiff
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RemainingCollectedType
{
    /**
     * Possible values of this enum
     */
    const NUMBER_1 = 1;

    const NUMBER_3 = 3;

    const NUMBER_5 = 5;

    const NUMBER_51 = 51;

    const NUMBER_53 = 53;

    const NUMBER_55 = 55;

    const NUMBER_57 = 57;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_1,
            self::NUMBER_3,
            self::NUMBER_5,
            self::NUMBER_51,
            self::NUMBER_53,
            self::NUMBER_55,
            self::NUMBER_57
        ];
    }
}


