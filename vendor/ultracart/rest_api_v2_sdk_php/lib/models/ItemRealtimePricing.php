<?php
/**
 * ItemRealtimePricing
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * ItemRealtimePricing Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemRealtimePricing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemRealtimePricing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'realtime_pricing_parameter' => 'string',
        'realtime_pricing_provider' => 'string',
        'realtime_pricing_provider_oid' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'realtime_pricing_parameter' => null,
        'realtime_pricing_provider' => null,
        'realtime_pricing_provider_oid' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'realtime_pricing_parameter' => 'realtime_pricing_parameter',
        'realtime_pricing_provider' => 'realtime_pricing_provider',
        'realtime_pricing_provider_oid' => 'realtime_pricing_provider_oid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'realtime_pricing_parameter' => 'setRealtimePricingParameter',
        'realtime_pricing_provider' => 'setRealtimePricingProvider',
        'realtime_pricing_provider_oid' => 'setRealtimePricingProviderOid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'realtime_pricing_parameter' => 'getRealtimePricingParameter',
        'realtime_pricing_provider' => 'getRealtimePricingProvider',
        'realtime_pricing_provider_oid' => 'getRealtimePricingProviderOid'
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
        return self::$swaggerModelName;
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
        $this->container['realtime_pricing_parameter'] = isset($data['realtime_pricing_parameter']) ? $data['realtime_pricing_parameter'] : null;
        $this->container['realtime_pricing_provider'] = isset($data['realtime_pricing_provider']) ? $data['realtime_pricing_provider'] : null;
        $this->container['realtime_pricing_provider_oid'] = isset($data['realtime_pricing_provider_oid']) ? $data['realtime_pricing_provider_oid'] : null;
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

        return true;
    }


    /**
     * Gets realtime_pricing_parameter
     *
     * @return string
     */
    public function getRealtimePricingParameter()
    {
        return $this->container['realtime_pricing_parameter'];
    }

    /**
     * Sets realtime_pricing_parameter
     *
     * @param string $realtime_pricing_parameter Real-time pricing provider parameters
     *
     * @return $this
     */
    public function setRealtimePricingParameter($realtime_pricing_parameter)
    {
        $this->container['realtime_pricing_parameter'] = $realtime_pricing_parameter;

        return $this;
    }

    /**
     * Gets realtime_pricing_provider
     *
     * @return string
     */
    public function getRealtimePricingProvider()
    {
        return $this->container['realtime_pricing_provider'];
    }

    /**
     * Sets realtime_pricing_provider
     *
     * @param string $realtime_pricing_provider Real-time pricing provider name
     *
     * @return $this
     */
    public function setRealtimePricingProvider($realtime_pricing_provider)
    {
        $this->container['realtime_pricing_provider'] = $realtime_pricing_provider;

        return $this;
    }

    /**
     * Gets realtime_pricing_provider_oid
     *
     * @return int
     */
    public function getRealtimePricingProviderOid()
    {
        return $this->container['realtime_pricing_provider_oid'];
    }

    /**
     * Sets realtime_pricing_provider_oid
     *
     * @param int $realtime_pricing_provider_oid Real-time pricing provide object identifier
     *
     * @return $this
     */
    public function setRealtimePricingProviderOid($realtime_pricing_provider_oid)
    {
        $this->container['realtime_pricing_provider_oid'] = $realtime_pricing_provider_oid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

