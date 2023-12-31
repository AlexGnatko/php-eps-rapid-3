<?php
/**
 * Frequency
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
 * Frequency Class Doc Comment
 *
 * @category Class
 * @description The frequency of when this applies.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Frequency
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'unknown';

    public const PER_NIGHT = 'per_night';

    public const PER_DAY = 'per_day';

    public const PER_STAY = 'per_stay';

    public const PER_WEEK = 'per_week';

    public const ROUND_TRIP = 'round_trip';

    public const ONE_WAY = 'one_way';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PER_NIGHT,
            self::PER_DAY,
            self::PER_STAY,
            self::PER_WEEK,
            self::ROUND_TRIP,
            self::ONE_WAY
        ];
    }
}


