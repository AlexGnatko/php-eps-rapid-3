<?php
/**
 * TripReason
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
 * TripReason Class Doc Comment
 *
 * @category Class
 * @description The reason category for this reviewer&#39;s trip.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TripReason
{
    /**
     * Possible values of this enum
     */
    public const BUSINESS = 'business';

    public const LEISURE = 'leisure';

    public const FRIENDS_AND_FAMILY = 'friends_and_family';

    public const BUSINESS_AND_LEISURE = 'business_and_leisure';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUSINESS,
            self::LEISURE,
            self::FRIENDS_AND_FAMILY,
            self::BUSINESS_AND_LEISURE
        ];
    }
}


