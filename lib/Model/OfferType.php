<?php
/**
 * OfferType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rapid
 *
 * EPS Rapid V3
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OfferType Class Doc Comment
 *
 * @category Class
 * @description The type of offer this value add promotion is.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferType
{
    /**
     * Possible values of this enum
     */
    public const BUY_ONE_GET_ONE_FREE = 'buy_one_get_one_free';

    public const CREDIT = 'credit';

    public const DISCOUNT = 'discount';

    public const FREE = 'free';

    public const VOUCHER = 'voucher';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUY_ONE_GET_ONE_FREE,
            self::CREDIT,
            self::DISCOUNT,
            self::FREE,
            self::VOUCHER
        ];
    }
}


