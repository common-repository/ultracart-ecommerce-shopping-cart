<?php
/**
 * CustomerLoyalty
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
 * CustomerLoyalty Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerLoyalty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerLoyalty';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_points' => 'int',
        'ledger_entries' => '\ultracart\v2\models\CustomerLoyaltyLedger[]',
        'redemptions' => '\ultracart\v2\models\CustomerLoyaltyRedemption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_points' => 'int32',
        'ledger_entries' => null,
        'redemptions' => null
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
        'current_points' => 'current_points',
        'ledger_entries' => 'ledger_entries',
        'redemptions' => 'redemptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_points' => 'setCurrentPoints',
        'ledger_entries' => 'setLedgerEntries',
        'redemptions' => 'setRedemptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_points' => 'getCurrentPoints',
        'ledger_entries' => 'getLedgerEntries',
        'redemptions' => 'getRedemptions'
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
        $this->container['current_points'] = isset($data['current_points']) ? $data['current_points'] : null;
        $this->container['ledger_entries'] = isset($data['ledger_entries']) ? $data['ledger_entries'] : null;
        $this->container['redemptions'] = isset($data['redemptions']) ? $data['redemptions'] : null;
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
     * Gets current_points
     *
     * @return int
     */
    public function getCurrentPoints()
    {
        return $this->container['current_points'];
    }

    /**
     * Sets current_points
     *
     * @param int $current_points Current Points
     *
     * @return $this
     */
    public function setCurrentPoints($current_points)
    {
        $this->container['current_points'] = $current_points;

        return $this;
    }

    /**
     * Gets ledger_entries
     *
     * @return \ultracart\v2\models\CustomerLoyaltyLedger[]
     */
    public function getLedgerEntries()
    {
        return $this->container['ledger_entries'];
    }

    /**
     * Sets ledger_entries
     *
     * @param \ultracart\v2\models\CustomerLoyaltyLedger[] $ledger_entries Ledger entries
     *
     * @return $this
     */
    public function setLedgerEntries($ledger_entries)
    {
        $this->container['ledger_entries'] = $ledger_entries;

        return $this;
    }

    /**
     * Gets redemptions
     *
     * @return \ultracart\v2\models\CustomerLoyaltyRedemption[]
     */
    public function getRedemptions()
    {
        return $this->container['redemptions'];
    }

    /**
     * Sets redemptions
     *
     * @param \ultracart\v2\models\CustomerLoyaltyRedemption[] $redemptions Redemptions
     *
     * @return $this
     */
    public function setRedemptions($redemptions)
    {
        $this->container['redemptions'] = $redemptions;

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

