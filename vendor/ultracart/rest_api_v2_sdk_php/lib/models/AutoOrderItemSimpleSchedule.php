<?php
/**
 * AutoOrderItemSimpleSchedule
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
 * AutoOrderItemSimpleSchedule Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutoOrderItemSimpleSchedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutoOrderItemSimpleSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'frequency' => 'string',
        'item_id' => 'string',
        'repeat_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'frequency' => null,
        'item_id' => null,
        'repeat_count' => 'int32'
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
        'frequency' => 'frequency',
        'item_id' => 'item_id',
        'repeat_count' => 'repeat_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'frequency' => 'setFrequency',
        'item_id' => 'setItemId',
        'repeat_count' => 'setRepeatCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'frequency' => 'getFrequency',
        'item_id' => 'getItemId',
        'repeat_count' => 'getRepeatCount'
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

    const FREQUENCY_WEEKLY = 'Weekly';
    const FREQUENCY_BIWEEKLY = 'Biweekly';
    const FREQUENCY_EVERY = 'Every...';
    const FREQUENCY_EVERY_10_DAYS = 'Every 10 Days';
    const FREQUENCY_EVERY_24_DAYS = 'Every 24 Days';
    const FREQUENCY_EVERY_28_DAYS = 'Every 28 Days';
    const FREQUENCY_MONTHLY = 'Monthly';
    const FREQUENCY_EVERY_45_DAYS = 'Every 45 Days';
    const FREQUENCY_EVERY_2_MONTHS = 'Every 2 Months';
    const FREQUENCY_EVERY_3_MONTHS = 'Every 3 Months';
    const FREQUENCY_EVERY_4_MONTHS = 'Every 4 Months';
    const FREQUENCY_EVERY_6_MONTHS = 'Every 6 Months';
    const FREQUENCY_YEARLY = 'Yearly';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_BIWEEKLY,
            self::FREQUENCY_EVERY,
            self::FREQUENCY_EVERY_10_DAYS,
            self::FREQUENCY_EVERY_24_DAYS,
            self::FREQUENCY_EVERY_28_DAYS,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_EVERY_45_DAYS,
            self::FREQUENCY_EVERY_2_MONTHS,
            self::FREQUENCY_EVERY_3_MONTHS,
            self::FREQUENCY_EVERY_4_MONTHS,
            self::FREQUENCY_EVERY_6_MONTHS,
            self::FREQUENCY_YEARLY,
        ];
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
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['repeat_count'] = isset($data['repeat_count']) ? $data['repeat_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($this->container['frequency'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($this->container['frequency'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency Frequency of the rebill if not a fixed schedule
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($frequency) && !in_array($frequency, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id Item ID that should rebill
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets repeat_count
     *
     * @return int
     */
    public function getRepeatCount()
    {
        return $this->container['repeat_count'];
    }

    /**
     * Sets repeat_count
     *
     * @param int $repeat_count The number of times this simple schedule is configured for
     *
     * @return $this
     */
    public function setRepeatCount($repeat_count)
    {
        $this->container['repeat_count'] = $repeat_count;

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

