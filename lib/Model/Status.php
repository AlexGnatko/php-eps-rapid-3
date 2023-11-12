<?php
/**
 * Status
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
 * Status Class Doc Comment
 *
 * @category Class
 * @description Indicates the status of the rate. If the rate is still available then available will be returned. If the rate is no longer available at that price then price_changed will be returned. If the rate is no longer available at all then sold_out will be returned.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Status
{
    /**
     * Possible values of this enum
     */
    public const AVAILABLE = 'available';

    public const PRICE_CHANGED = 'price_changed';

    public const SOLD_OUT = 'sold_out';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AVAILABLE,
            self::PRICE_CHANGED,
            self::SOLD_OUT
        ];
    }
}


