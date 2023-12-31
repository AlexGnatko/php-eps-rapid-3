<?php
/**
 * SaleScenario
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
 * SaleScenario Class Doc Comment
 *
 * @category Class
 * @description Provides the special scenarios that need to be taken into account when using this rate.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SaleScenario implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SaleScenario';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package' => 'bool',
        'member' => 'bool',
        'corporate' => 'bool',
        'distribution' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package' => null,
        'member' => null,
        'corporate' => null,
        'distribution' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'package' => false,
		'member' => false,
		'corporate' => false,
		'distribution' => false
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
        'package' => 'package',
        'member' => 'member',
        'corporate' => 'corporate',
        'distribution' => 'distribution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package' => 'setPackage',
        'member' => 'setMember',
        'corporate' => 'setCorporate',
        'distribution' => 'setDistribution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package' => 'getPackage',
        'member' => 'getMember',
        'corporate' => 'getCorporate',
        'distribution' => 'getDistribution'
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
        $this->setIfExists('package', $data ?? [], null);
        $this->setIfExists('member', $data ?? [], null);
        $this->setIfExists('corporate', $data ?? [], null);
        $this->setIfExists('distribution', $data ?? [], null);
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
     * Gets package
     *
     * @return bool|null
     */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
     * Sets package
     *
     * @param bool|null $package If true, this rate has been provided to be bundled with car, air, etc. and displayed as a total package price.  If shopping in a cross-sell scenario and using the cross-sell rate option, this indicates that the rate is a package rate available to be sold as an add-on to an existing itinerary.
     *
     * @return self
     */
    public function setPackage($package)
    {
        if (is_null($package)) {
            throw new \InvalidArgumentException('non-nullable package cannot be null');
        }
        $this->container['package'] = $package;

        return $this;
    }

    /**
     * Gets member
     *
     * @return bool|null
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     *
     * @param bool|null $member If true, this rate has a \"Member Only Deal\" discount applied to the rate.  Partners must be enabled to receive \"Member Only Deals\". If interested, partners should speak to their account representatives.  This parameter can be used to merchandise if a \"Member Only Deal\" has been applied, which will help drive loyalty. In addition, it can be used by OTA's to create an opaque, but public shopping experience.  This value will always be false for requests where the sales_environment is equal to \"hotel_package\".
     *
     * @return self
     */
    public function setMember($member)
    {
        if (is_null($member)) {
            throw new \InvalidArgumentException('non-nullable member cannot be null');
        }
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets corporate
     *
     * @return bool|null
     */
    public function getCorporate()
    {
        return $this->container['corporate'];
    }

    /**
     * Sets corporate
     *
     * @param bool|null $corporate If true, this rate is a corporate negotiated rate.  These rates provide additional value adds (e.g. free breakfast, free wifi, discount) and same-day cancellation.
     *
     * @return self
     */
    public function setCorporate($corporate)
    {
        if (is_null($corporate)) {
            throw new \InvalidArgumentException('non-nullable corporate cannot be null');
        }
        $this->container['corporate'] = $corporate;

        return $this;
    }

    /**
     * Gets distribution
     *
     * @return bool|null
     */
    public function getDistribution()
    {
        return $this->container['distribution'];
    }

    /**
     * Sets distribution
     *
     * @param bool|null $distribution If true, this rate is an EPS Optimized Distribution rate. These rates are procured exclusively for EPS distribution and may contain benefits such as larger marketing fee, less restrictive cancellation policies, additional value adds, or unique availability.
     *
     * @return self
     */
    public function setDistribution($distribution)
    {
        if (is_null($distribution)) {
            throw new \InvalidArgumentException('non-nullable distribution cannot be null');
        }
        $this->container['distribution'] = $distribution;

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


