<?php
/**
 * CustomerQuotesSummary
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
 * CustomerQuotesSummary Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerQuotesSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerQuotesSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_quote_dts' => 'string',
        'last_quote_dts' => 'string',
        'quote_count' => 'int',
        'total' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_quote_dts' => 'dateTime',
        'last_quote_dts' => 'dateTime',
        'quote_count' => 'int32',
        'total' => null
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
        'first_quote_dts' => 'first_quote_dts',
        'last_quote_dts' => 'last_quote_dts',
        'quote_count' => 'quote_count',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_quote_dts' => 'setFirstQuoteDts',
        'last_quote_dts' => 'setLastQuoteDts',
        'quote_count' => 'setQuoteCount',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_quote_dts' => 'getFirstQuoteDts',
        'last_quote_dts' => 'getLastQuoteDts',
        'quote_count' => 'getQuoteCount',
        'total' => 'getTotal'
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
        $this->container['first_quote_dts'] = isset($data['first_quote_dts']) ? $data['first_quote_dts'] : null;
        $this->container['last_quote_dts'] = isset($data['last_quote_dts']) ? $data['last_quote_dts'] : null;
        $this->container['quote_count'] = isset($data['quote_count']) ? $data['quote_count'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
     * Gets first_quote_dts
     *
     * @return string
     */
    public function getFirstQuoteDts()
    {
        return $this->container['first_quote_dts'];
    }

    /**
     * Sets first_quote_dts
     *
     * @param string $first_quote_dts First quote date
     *
     * @return $this
     */
    public function setFirstQuoteDts($first_quote_dts)
    {
        $this->container['first_quote_dts'] = $first_quote_dts;

        return $this;
    }

    /**
     * Gets last_quote_dts
     *
     * @return string
     */
    public function getLastQuoteDts()
    {
        return $this->container['last_quote_dts'];
    }

    /**
     * Sets last_quote_dts
     *
     * @param string $last_quote_dts Last quote date
     *
     * @return $this
     */
    public function setLastQuoteDts($last_quote_dts)
    {
        $this->container['last_quote_dts'] = $last_quote_dts;

        return $this;
    }

    /**
     * Gets quote_count
     *
     * @return int
     */
    public function getQuoteCount()
    {
        return $this->container['quote_count'];
    }

    /**
     * Sets quote_count
     *
     * @param int $quote_count Total number of quote
     *
     * @return $this
     */
    public function setQuoteCount($quote_count)
    {
        $this->container['quote_count'] = $quote_count;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total Total amount associated with the quotes
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


