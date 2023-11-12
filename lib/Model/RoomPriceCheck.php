<?php
/**
 * RoomPriceCheck
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * RoomPriceCheck Class Doc Comment
 *
 * @category Class
 * @description The price check response.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RoomPriceCheck implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RoomPriceCheck';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\OpenAPI\Client\Model\StatusPriceCheck',
        'occupancy_pricing' => 'array<string,\OpenAPI\Client\Model\PricingInformation>',
        'links' => '\OpenAPI\Client\Model\RoomPriceCheckLinks',
        'card_on_file_limit' => '\OpenAPI\Client\Model\Amount',
        'refundable_damage_deposit' => '\OpenAPI\Client\Model\Amount',
        'deposits' => '\OpenAPI\Client\Model\Deposit[]',
        'refund' => '\OpenAPI\Client\Model\Charge',
        'amount_owed' => '\OpenAPI\Client\Model\Charge',
        'penalty' => '\OpenAPI\Client\Model\Charge',
        'trader_information' => '\OpenAPI\Client\Model\TraderInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'occupancy_pricing' => null,
        'links' => null,
        'card_on_file_limit' => null,
        'refundable_damage_deposit' => null,
        'deposits' => null,
        'refund' => null,
        'amount_owed' => null,
        'penalty' => null,
        'trader_information' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
		'occupancy_pricing' => false,
		'links' => false,
		'card_on_file_limit' => false,
		'refundable_damage_deposit' => false,
		'deposits' => false,
		'refund' => false,
		'amount_owed' => false,
		'penalty' => false,
		'trader_information' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'occupancy_pricing' => 'occupancy_pricing',
        'links' => 'links',
        'card_on_file_limit' => 'card_on_file_limit',
        'refundable_damage_deposit' => 'refundable_damage_deposit',
        'deposits' => 'deposits',
        'refund' => 'refund',
        'amount_owed' => 'amount_owed',
        'penalty' => 'penalty',
        'trader_information' => 'trader_information'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'occupancy_pricing' => 'setOccupancyPricing',
        'links' => 'setLinks',
        'card_on_file_limit' => 'setCardOnFileLimit',
        'refundable_damage_deposit' => 'setRefundableDamageDeposit',
        'deposits' => 'setDeposits',
        'refund' => 'setRefund',
        'amount_owed' => 'setAmountOwed',
        'penalty' => 'setPenalty',
        'trader_information' => 'setTraderInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'occupancy_pricing' => 'getOccupancyPricing',
        'links' => 'getLinks',
        'card_on_file_limit' => 'getCardOnFileLimit',
        'refundable_damage_deposit' => 'getRefundableDamageDeposit',
        'deposits' => 'getDeposits',
        'refund' => 'getRefund',
        'amount_owed' => 'getAmountOwed',
        'penalty' => 'getPenalty',
        'trader_information' => 'getTraderInformation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('occupancy_pricing', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
        $this->setIfExists('card_on_file_limit', $data ?? [], null);
        $this->setIfExists('refundable_damage_deposit', $data ?? [], null);
        $this->setIfExists('deposits', $data ?? [], null);
        $this->setIfExists('refund', $data ?? [], null);
        $this->setIfExists('amount_owed', $data ?? [], null);
        $this->setIfExists('penalty', $data ?? [], null);
        $this->setIfExists('trader_information', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\StatusPriceCheck|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\StatusPriceCheck|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets occupancy_pricing
     *
     * @return array<string,\OpenAPI\Client\Model\PricingInformation>|null
     */
    public function getOccupancyPricing()
    {
        return $this->container['occupancy_pricing'];
    }

    /**
     * Sets occupancy_pricing
     *
     * @param array<string,\OpenAPI\Client\Model\PricingInformation>|null $occupancy_pricing A map of room information by occupancy.
     *
     * @return self
     */
    public function setOccupancyPricing($occupancy_pricing)
    {
        if (is_null($occupancy_pricing)) {
            throw new \InvalidArgumentException('non-nullable occupancy_pricing cannot be null');
        }
        $this->container['occupancy_pricing'] = $occupancy_pricing;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \OpenAPI\Client\Model\RoomPriceCheckLinks|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \OpenAPI\Client\Model\RoomPriceCheckLinks|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets card_on_file_limit
     *
     * @return \OpenAPI\Client\Model\Amount|null
     */
    public function getCardOnFileLimit()
    {
        return $this->container['card_on_file_limit'];
    }

    /**
     * Sets card_on_file_limit
     *
     * @param \OpenAPI\Client\Model\Amount|null $card_on_file_limit card_on_file_limit
     *
     * @return self
     */
    public function setCardOnFileLimit($card_on_file_limit)
    {
        if (is_null($card_on_file_limit)) {
            throw new \InvalidArgumentException('non-nullable card_on_file_limit cannot be null');
        }
        $this->container['card_on_file_limit'] = $card_on_file_limit;

        return $this;
    }

    /**
     * Gets refundable_damage_deposit
     *
     * @return \OpenAPI\Client\Model\Amount|null
     */
    public function getRefundableDamageDeposit()
    {
        return $this->container['refundable_damage_deposit'];
    }

    /**
     * Sets refundable_damage_deposit
     *
     * @param \OpenAPI\Client\Model\Amount|null $refundable_damage_deposit refundable_damage_deposit
     *
     * @return self
     */
    public function setRefundableDamageDeposit($refundable_damage_deposit)
    {
        if (is_null($refundable_damage_deposit)) {
            throw new \InvalidArgumentException('non-nullable refundable_damage_deposit cannot be null');
        }
        $this->container['refundable_damage_deposit'] = $refundable_damage_deposit;

        return $this;
    }

    /**
     * Gets deposits
     *
     * @return \OpenAPI\Client\Model\Deposit[]|null
     */
    public function getDeposits()
    {
        return $this->container['deposits'];
    }

    /**
     * Sets deposits
     *
     * @param \OpenAPI\Client\Model\Deposit[]|null $deposits Array of deposits.
     *
     * @return self
     */
    public function setDeposits($deposits)
    {
        if (is_null($deposits)) {
            throw new \InvalidArgumentException('non-nullable deposits cannot be null');
        }
        $this->container['deposits'] = $deposits;

        return $this;
    }

    /**
     * Gets refund
     *
     * @return \OpenAPI\Client\Model\Charge|null
     */
    public function getRefund()
    {
        return $this->container['refund'];
    }

    /**
     * Sets refund
     *
     * @param \OpenAPI\Client\Model\Charge|null $refund refund
     *
     * @return self
     */
    public function setRefund($refund)
    {
        if (is_null($refund)) {
            throw new \InvalidArgumentException('non-nullable refund cannot be null');
        }
        $this->container['refund'] = $refund;

        return $this;
    }

    /**
     * Gets amount_owed
     *
     * @return \OpenAPI\Client\Model\Charge|null
     */
    public function getAmountOwed()
    {
        return $this->container['amount_owed'];
    }

    /**
     * Sets amount_owed
     *
     * @param \OpenAPI\Client\Model\Charge|null $amount_owed amount_owed
     *
     * @return self
     */
    public function setAmountOwed($amount_owed)
    {
        if (is_null($amount_owed)) {
            throw new \InvalidArgumentException('non-nullable amount_owed cannot be null');
        }
        $this->container['amount_owed'] = $amount_owed;

        return $this;
    }

    /**
     * Gets penalty
     *
     * @return \OpenAPI\Client\Model\Charge|null
     */
    public function getPenalty()
    {
        return $this->container['penalty'];
    }

    /**
     * Sets penalty
     *
     * @param \OpenAPI\Client\Model\Charge|null $penalty penalty
     *
     * @return self
     */
    public function setPenalty($penalty)
    {
        if (is_null($penalty)) {
            throw new \InvalidArgumentException('non-nullable penalty cannot be null');
        }
        $this->container['penalty'] = $penalty;

        return $this;
    }

    /**
     * Gets trader_information
     *
     * @return \OpenAPI\Client\Model\TraderInformation|null
     */
    public function getTraderInformation()
    {
        return $this->container['trader_information'];
    }

    /**
     * Sets trader_information
     *
     * @param \OpenAPI\Client\Model\TraderInformation|null $trader_information trader_information
     *
     * @return self
     */
    public function setTraderInformation($trader_information)
    {
        if (is_null($trader_information)) {
            throw new \InvalidArgumentException('non-nullable trader_information cannot be null');
        }
        $this->container['trader_information'] = $trader_information;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


