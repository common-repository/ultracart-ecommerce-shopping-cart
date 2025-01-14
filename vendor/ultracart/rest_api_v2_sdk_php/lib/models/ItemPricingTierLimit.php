<?php
/**
 * ItemPricingTierLimit
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
 * ItemPricingTierLimit Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemPricingTierLimit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemPricingTierLimit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cumulative_order_limit' => 'int',
        'individual_order_limit' => 'int',
        'multiple_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cumulative_order_limit' => 'int32',
        'individual_order_limit' => 'int32',
        'multiple_quantity' => 'int32'
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
        'cumulative_order_limit' => 'cumulative_order_limit',
        'individual_order_limit' => 'individual_order_limit',
        'multiple_quantity' => 'multiple_quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cumulative_order_limit' => 'setCumulativeOrderLimit',
        'individual_order_limit' => 'setIndividualOrderLimit',
        'multiple_quantity' => 'setMultipleQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cumulative_order_limit' => 'getCumulativeOrderLimit',
        'individual_order_limit' => 'getIndividualOrderLimit',
        'multiple_quantity' => 'getMultipleQuantity'
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
        $this->container['cumulative_order_limit'] = isset($data['cumulative_order_limit']) ? $data['cumulative_order_limit'] : null;
        $this->container['individual_order_limit'] = isset($data['individual_order_limit']) ? $data['individual_order_limit'] : null;
        $this->container['multiple_quantity'] = isset($data['multiple_quantity']) ? $data['multiple_quantity'] : null;
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
     * Gets cumulative_order_limit
     *
     * @return int
     */
    public function getCumulativeOrderLimit()
    {
        return $this->container['cumulative_order_limit'];
    }

    /**
     * Sets cumulative_order_limit
     *
     * @param int $cumulative_order_limit Cumulative order limit
     *
     * @return $this
     */
    public function setCumulativeOrderLimit($cumulative_order_limit)
    {
        $this->container['cumulative_order_limit'] = $cumulative_order_limit;

        return $this;
    }

    /**
     * Gets individual_order_limit
     *
     * @return int
     */
    public function getIndividualOrderLimit()
    {
        return $this->container['individual_order_limit'];
    }

    /**
     * Sets individual_order_limit
     *
     * @param int $individual_order_limit Individual order limit
     *
     * @return $this
     */
    public function setIndividualOrderLimit($individual_order_limit)
    {
        $this->container['individual_order_limit'] = $individual_order_limit;

        return $this;
    }

    /**
     * Gets multiple_quantity
     *
     * @return int
     */
    public function getMultipleQuantity()
    {
        return $this->container['multiple_quantity'];
    }

    /**
     * Sets multiple_quantity
     *
     * @param int $multiple_quantity Multiple quantity
     *
     * @return $this
     */
    public function setMultipleQuantity($multiple_quantity)
    {
        $this->container['multiple_quantity'] = $multiple_quantity;

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


