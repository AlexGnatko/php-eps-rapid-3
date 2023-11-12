<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @description Container for the property&#39;s address information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'line_1' => 'string',
        'line_2' => 'string',
        'city' => 'string',
        'state_province_code' => 'string',
        'state_province_name' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string',
        'obfuscation_required' => 'bool',
        'localized' => '\OpenAPI\Client\Model\Localized'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'line_1' => null,
        'line_2' => null,
        'city' => null,
        'state_province_code' => null,
        'state_province_name' => null,
        'postal_code' => null,
        'country_code' => null,
        'obfuscation_required' => null,
        'localized' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'line_1' => false,
		'line_2' => false,
		'city' => false,
		'state_province_code' => false,
		'state_province_name' => false,
		'postal_code' => false,
		'country_code' => false,
		'obfuscation_required' => false,
		'localized' => false
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
        'line_1' => 'line_1',
        'line_2' => 'line_2',
        'city' => 'city',
        'state_province_code' => 'state_province_code',
        'state_province_name' => 'state_province_name',
        'postal_code' => 'postal_code',
        'country_code' => 'country_code',
        'obfuscation_required' => 'obfuscation_required',
        'localized' => 'localized'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_1' => 'setLine1',
        'line_2' => 'setLine2',
        'city' => 'setCity',
        'state_province_code' => 'setStateProvinceCode',
        'state_province_name' => 'setStateProvinceName',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'obfuscation_required' => 'setObfuscationRequired',
        'localized' => 'setLocalized'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_1' => 'getLine1',
        'line_2' => 'getLine2',
        'city' => 'getCity',
        'state_province_code' => 'getStateProvinceCode',
        'state_province_name' => 'getStateProvinceName',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'obfuscation_required' => 'getObfuscationRequired',
        'localized' => 'getLocalized'
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
        $this->setIfExists('line_1', $data ?? [], null);
        $this->setIfExists('line_2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state_province_code', $data ?? [], null);
        $this->setIfExists('state_province_name', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('obfuscation_required', $data ?? [], null);
        $this->setIfExists('localized', $data ?? [], null);
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
     * Gets line_1
     *
     * @return string|null
     */
    public function getLine1()
    {
        return $this->container['line_1'];
    }

    /**
     * Sets line_1
     *
     * @param string|null $line_1 Address line 1.
     *
     * @return self
     */
    public function setLine1($line_1)
    {
        if (is_null($line_1)) {
            throw new \InvalidArgumentException('non-nullable line_1 cannot be null');
        }
        $this->container['line_1'] = $line_1;

        return $this;
    }

    /**
     * Gets line_2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line_2'];
    }

    /**
     * Sets line_2
     *
     * @param string|null $line_2 Address line 2.
     *
     * @return self
     */
    public function setLine2($line_2)
    {
        if (is_null($line_2)) {
            throw new \InvalidArgumentException('non-nullable line_2 cannot be null');
        }
        $this->container['line_2'] = $line_2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_province_code
     *
     * @return string|null
     */
    public function getStateProvinceCode()
    {
        return $this->container['state_province_code'];
    }

    /**
     * Sets state_province_code
     *
     * @param string|null $state_province_code 2-letter or 3-letter state/province code for Australia, Canada and the USA.
     *
     * @return self
     */
    public function setStateProvinceCode($state_province_code)
    {
        if (is_null($state_province_code)) {
            throw new \InvalidArgumentException('non-nullable state_province_code cannot be null');
        }
        $this->container['state_province_code'] = $state_province_code;

        return $this;
    }

    /**
     * Gets state_province_name
     *
     * @return string|null
     */
    public function getStateProvinceName()
    {
        return $this->container['state_province_name'];
    }

    /**
     * Sets state_province_name
     *
     * @param string|null $state_province_name Text name of the State/Province - more common for additional countries.
     *
     * @return self
     */
    public function setStateProvinceName($state_province_name)
    {
        if (is_null($state_province_name)) {
            throw new \InvalidArgumentException('non-nullable state_province_name cannot be null');
        }
        $this->container['state_province_name'] = $state_province_name;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Postal/zip code.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code 2-letter country code, in ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets obfuscation_required
     *
     * @return bool|null
     */
    public function getObfuscationRequired()
    {
        return $this->container['obfuscation_required'];
    }

    /**
     * Sets obfuscation_required
     *
     * @param bool|null $obfuscation_required Flag to indicate whether a property address requires obfuscation before the property has been booked. If true, only the city, province, and country of the address can be shown to the customer.
     *
     * @return self
     */
    public function setObfuscationRequired($obfuscation_required)
    {
        if (is_null($obfuscation_required)) {
            throw new \InvalidArgumentException('non-nullable obfuscation_required cannot be null');
        }
        $this->container['obfuscation_required'] = $obfuscation_required;

        return $this;
    }

    /**
     * Gets localized
     *
     * @return \OpenAPI\Client\Model\Localized|null
     */
    public function getLocalized()
    {
        return $this->container['localized'];
    }

    /**
     * Sets localized
     *
     * @param \OpenAPI\Client\Model\Localized|null $localized localized
     *
     * @return self
     */
    public function setLocalized($localized)
    {
        if (is_null($localized)) {
            throw new \InvalidArgumentException('non-nullable localized cannot be null');
        }
        $this->container['localized'] = $localized;

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

